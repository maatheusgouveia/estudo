<?php include("../../includes/config.php");

$nome=addslashes($_POST['nome']);
$sexo=addslashes($_POST['sexo']);
$cidade=addslashes($_POST['cidade']);
$endereco=addslashes($_POST['endereco']);
$numero=addslashes($_POST['numero']);
$bairro=addslashes($_POST['bairro']);
$telefone=addslashes($_POST['telefone']);

include(conexao);

if($_SESSION['pessoa']==0){
$queryGrava="Insert into pessoa (nome,sexo,pessoa_idcidade,endereco,numero,bairro,telefone,pessoa_idusuario)
   values('$nome','$sexo','$cidade','$endereco','$numero','$bairro','$telefone',".$_SESSION['idusuario'].")";

$executaGrava=$mysqli->query($queryGrava);
$idpessoa = $mysqli->insert_id; //pega o último id gerado pelo insert
$_SESSION['pessoa']=$idpessoa;

header("location:cadastroPessoa.php?msg=Dados atualizados com sucesso!");

}else{

$queryGrava="Update pessoa set nome='$nome',sexo='$sexo',pessoa_idcidade='$cidade',endereco='$endereco',numero='$numero',bairro='$bairro',telefone='$telefone' where idpessoa=".$_SESSION['pessoa'];

$executaGrava=$mysqli->query($queryGrava);
header("location:cadastroPessoa.php?msg=Dados atualizados com sucesso!");

}
  
?>