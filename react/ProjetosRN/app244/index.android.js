import React from 'react';
import {Text, AppRegistry, View, Button, TouchableOpacity, Image, Alert} from 'react-native';

const Estilos = {
	principal: {
		flex: 1,
		justifyContent: 'center',
		alignItems: 'center'
	},

	botao: {
		backgroundColor: '#538530',
		paddingVertical: 10,
		paddingHorizontal: 40,
		marginTop: 20
	},

	textoBotao: {
		color: '#fff',
		fontSize: 16,
		fontWeight: 'bold'
	}
};

const gerarNovaFrase = () => {
	var numeroAleatorio = Math.random();
	numeroAleatorio = Math.floor(numeroAleatorio * 5);

	var frases = Array();
	frases[0] = 'Ideias e somente ideias podem iluminar a escuridão.';
	frases[1] = 'Não há nenhuma maneira de medir a qualidade e o sucesso de um produto pelo qual os consumidores são forçados a pagar.';
	frases[2] = 'Há toda a diferença do mundo entre tratar as pessoas de forma igual e tentar torná-los iguais.';
	frases[3] = 'A ânsia de salvar a humanidade é quase sempre uma desculpa para a ânsia de governá-la.';
	frases[4] = 'Imposto é roubo.';

	var fraseEscolhida = frases[numeroAleatorio];

	Alert.alert(fraseEscolhida);
}

const App = () => {
	const { principal, botao, textoBotao } = Estilos;
  return (

  	<View style={ principal }>
  		<Image source={ require('./imgs/logo.png') }></Image>

  		<TouchableOpacity style={ botao } onPress={gerarNovaFrase}>
			<Text style={ textoBotao }>Frase do dia</Text>
  		</TouchableOpacity>
  	</View>

    );
};

AppRegistry.registerComponent('app244', () => App);