import React from 'react';
import {Text, View, Button, AppRegistry} from 'react-native';

const geraNumeroAleatorio = () =>{
  var numeroAleatorio = Math.random();
  numeroAleatorio = Math.floor(numeroAleatorio * 10);
  alert(numeroAleatorio);
}

const App = () => {

  return (
    <View>
    <Text>Meu primeiro App!</Text>
    <Button title="Gerar número randômico" onPress={geraNumeroAleatorio}/>
    </View>
    );
};

AppRegistry.registerComponent('app1', () => App);