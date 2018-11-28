import React, { Component } from 'react';
import {
    View,
    StatusBar,
    Image,
    StyleSheet,
    Text
} from 'react-native';
import BarraNavegacao from './BarraNavegacao'

const detalheContatos = require('../imgs/detalhe_contato.png');

export default class CenaContatos extends Component {
    render() {
        return (
            <View style={ styles.principal }>
                <StatusBar backgroundColor='#61BD8C' />
                <BarraNavegacao voltar navigator={this.props.navigator} corDeFundo={'#61BD8C'} />

                <View style={styles.cabecalho}>
                    <Image source={detalheContatos} />
                    <Text style={styles.txtTitulo}> Nossos clientes </Text>
                </View>

                <View style={styles.detalheContatos}>
                    <Text style={ styles.txtContatos }>Tel: (14) 3733-6906</Text>
                    <Text style={ styles.txtContatos }>Cel: (14) 99721-2128</Text>
                    <Text style={ styles.txtContatos }>Email: matheus.gouveia01@fatec.sp.gob.br</Text>
                </View>

            </View>
        );
    }
}

const styles = StyleSheet.create({
    principal: {
        backgroundColor: '#FFF',
        flex: 1
    },
    cabecalho: {
        flexDirection: 'row',
        marginTop: 20
    },

    txtTitulo: {
        fontSize: 30,
        color: '#61BD8C',
        marginLeft: 10,
        marginTop: 25
    },

    detalheContatos: {
        marginTop: 20,
        padding: 20
    },

    txtContatos: {
        fontSize: 18
    }
});

