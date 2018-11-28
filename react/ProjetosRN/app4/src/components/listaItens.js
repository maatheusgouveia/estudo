import React, { Component } from 'react';
import {
    ScrollView
} from 'react-native';
import axios from 'axios';
import Itens from './itens';

export default class ListaItens extends Component {

    constructor(props) {
        super(props);

        this.state = { listaItens: [] };
    }

    componentWillMount() {
        axios.get('http://faus.com.br/recursos/c/dmairr/api/itens.html')
            .then(response => { this.setState({ listaItens: response.data }) } )
            .catch(() => { alert('Erro aorecuperar os dados') } );
    }

    //fazendo alguma coisa depois de renderizado
    render() {
        return (
            <ScrollView style={ { backgroundColor: '#DDD' } }>
                { this.state.listaItens.map(item => ( <Itens key={ item.titulo } item={ item }/>) ) }
            </ScrollView>
        );
    }
}



