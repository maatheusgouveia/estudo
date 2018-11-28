import React from 'react';
import {Text, AppRegistry} from 'react-native';

const Estilos = {
  estiloTexto: {
    fontSize: 20
  }
};

const App = () => {
  return (
    <Text style={ Estilos.estiloTexto }>Frases do dia</Text>
    );
};

AppRegistry.registerComponent('app244', () => App);