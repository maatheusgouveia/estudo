<?php
// conexao com o mysql usando a biblioteca myslqi
//$mysqli=new mysqli('endereco_servidor','usuario','senha','base_dados');
// $mysqli = new mysqli('mysql.hostinger.com.br','u320816679_mp','MVtech2017','u320816679_mp');
// $servidor = "mysql.hostinger.com.br";
//$usuario = "u320816679_mp";
//$senha = "MVtech2017";
//$dbname = "u320816679_mp";

$mysqli = new mysqli('localhost','root','root','u135429050_mp');

//Criar a conexao

//$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

mysqli_set_charset($mysqli,'utf8');
?>
