import firebase from 'firebase';
import React, { Component } from 'react';
import {
  AppRegistry,
  Button,
  Text,
  View
} from 'react-native';

export default class firebaseteste extends Component {

  componentWillMount() {
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyDb_ar6fM5usyAdH8mLdh8UVWZD_p03fmI",
      authDomain: "configuracaofirebasereac-7da16.firebaseapp.com",
      databaseURL: "https://configuracaofirebasereac-7da16.firebaseio.com",
      projectId: "configuracaofirebasereac-7da16",
      storageBucket: "configuracaofirebasereac-7da16.appspot.com",
      messagingSenderId: "1029350424010"
    };
    firebase.initializeApp(config);
  }

  cadastrarUsuario() {
    var email = "matheus_guitarplayer@hotmail.com";
    var senha = "123456";

    const usuario = firebase.auth();

    usuario.createUserWithEmailAndPassword(
      email,
      senha
    ).catch(
      (erro) => {
        var mensagemErro = "";
        if(erro.code == "auth/weak-password") {
          mensagemErro = "A senha deve ter no mínimo 6 caracteres";
        }
        alert(mensagemErro);
      }
    );

  }

  veridicarUsuarioLogado() {
    const usuario = firebase.auth();

    usuario.onAuthStateChanged(
      (usuarioAtual) => {

        if (usuarioAtual) {
          alert("Usuário logado");
        }
        else {
          alert("Usuário não está logado");
        }
      }
    );

  }

  deslogarUsuario() {
    const usuario = firebase.auth();
    usuario.signOut();

  }

  logarUsuario() {
    var email = "matheus_guitarplayer@hotmail.com";
    var senha = "123456";

    const usuario = firebase.auth();

    usuario.signInWithEmailAndPassword(
      email,
      senha
    ).catch(
      (erro) => {
        alert( erro.message );
      }
    );
  }

  render() {
    return (
      <View>
        <Button 
          onPress={ () => { this.cadastrarUsuario(); } }
          title="Cadastrar usuário"
          color="#841584"
          accessibilityLabel="Cadastrar usuário"
        />

        <Button
          onPress={() => { this.veridicarUsuarioLogado(); }}
          title="Verificar usuário logado"
          color="#841584"
          accessibilityLabel="Verificar usuário logado"
        />

        <Button
          onPress={() => { this.deslogarUsuario(); }}
          title="Deslogar usuário"
          color="#841584"
          accessibilityLabel="Deslogar usuário"
        />

        <Button
          onPress={() => { this.logarUsuario(); }}
          title="Logar usuário"
          color="#841584"
          accessibilityLabel="Logar usuário"
        />
      
      </View>
    );
  }
}

AppRegistry.registerComponent('firebaseteste', () => firebaseteste);
