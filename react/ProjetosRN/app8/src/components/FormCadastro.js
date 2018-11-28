import React from 'react';
import { View, TextInput, Button } from 'react-native';
import { connect } from 'react-redux';
import { modificaEmail, modificaSenha } from '../actions/AutenticacaoActions';

const formCadastro = props => (
    <View style={{ flex: 1, padding: 10 }}>
        <View style={{ flex: 4, justifyContent: 'center' }}>
            <TextInput placeholder="Nome" style={{ fontSize: 20, height: 45 }} />
            <TextInput placeholder="E-mail" style={{ fontSize: 20, height: 45 }} onChangeText={ texto => props.modificaEmail(texto) } />
            <TextInput placeholder="Senha" style={{ fontSize: 20, height: 45 }} onChangeText={ texto => props.modificaSenha(texto) } />
        </View>
        <View style={{ flex: 1 }}>
            <Button title="Cadastrar" color="#115E54" onPress={() => false} />
        </View>
    </View>
);

const mapStateToProps = state => {

    return (
        {
            nome: state.AutenticacaoReducer.nome,
            email: state.AutenticacaoReducer.email,
            senha: state.AutenticacaoReducer.senha
        }
    );
}

export default connect( mapStateToProps, { modificaEmail, modificaSenha })(formCadastro);