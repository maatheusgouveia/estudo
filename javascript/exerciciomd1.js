var nome = window.prompt("Qual o seu nome?");

var saudacao = document.getElementById("saudacao");

saudacao.innerHTML += ", "+nome;

var num1 = parseInt(window.prompt("Primeiro número"));

var num2 = parseInt(window.prompt("Segundo número"));

var span1 = document.getElementById("num1");

var span2 = document.getElementById("num2");

span1.innerHTML = num1;

span2.innerHTML = num2;

var adicao = num1 + num2;

var subtracao = num1 - num2;

var multiplicacao = num1 * num2;

var divisao = num1 / num2;

var resto = num1 % num2;

document.getElementById("adicao").innerHTML = "A soma de "+num1+" + "+num2+" é "+ adicao;

document.getElementById("subtracao").innerHTML = "A subtração de "+num1+" - "+num2+" é "+ subtracao;

document.getElementById("multiplicacao").innerHTML = "A multiplicação de "+num1+" X "+num2+" é "+ multiplicacao;

document.getElementById("divisao").innerHTML = "A divisão de "+num1+" / "+num2+" é "+ divisao;

document.getElementById("resto").innerHTML = "o resto da divisão de "+num1+" / "+num2+" é "+ resto;
