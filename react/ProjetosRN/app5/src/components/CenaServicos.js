import React, { Component } from 'react';
import {
    View,
    StatusBar,
    Image,
    StyleSheet,
    Text
} from 'react-native';
import BarraNavegacao from './BarraNavegacao'

const detalheServicos = require('../imgs/detalhe_servico.png');

export default class CenaServicos extends Component {
    render() {
        return (
            <View style={styles.principal}>
                <StatusBar backgroundColor='#19D1C8' />
                <BarraNavegacao voltar navigator={this.props.navigator} corDeFundo={ '#19D1C8' } />

                <View style={styles.cabecalho}>
                    <Image source={detalheServicos} />
                    <Text style={styles.txtTitulo}> Nossos serviços </Text>
                </View>

                <View style={styles.detalheServicos}>
                    <Text style={styles.txtServico}> Consultoria </Text>
                    <Text style={styles.txtServico}> Processos </Text>
                    <Text style={styles.txtServico}> Acompanhamento de projetos </Text>
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
        color: '#19D1C8',
        marginLeft: 10,
        marginTop: 25
    },

    detalheServicos: {
        marginTop: 20,
        padding: 20
    },

    txtServico: {
        fontSize: 18
    }
});

