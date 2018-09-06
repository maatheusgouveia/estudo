<?php
@session_start();

if ($_SESSION['TipoUsuario'] == "Adm") {
  include '../includes/config.php';
  include conexao;
  include funcoesPhp;
    $NomeProduto = $_POST['NomeProduto'];
    $idSubCategoria = $_POST['idSubCategoria'];
    $DescricaoProduto = $_POST['DescricaoProduto'];
    $QuantidadeProduto = $_POST['QuantidadeProduto'];
    $idUnidadeMedida = $_POST['idUnidadeMedida'];
    $idMarca = $_POST['idMarca'];
    @$CodBarras = $_POST['CodBarras'];

    echo $query = "INSERT INTO produtos (idSubCategoria, idMarca, NomeProduto, DescricaoProduto, QuantidadeProduto, idUnidadeMedida) VALUES ('$idSubCategoria', '$idMarca', '$NomeProduto', '$DescricaoProduto', '$QuantidadeProduto', '$idUnidadeMedida')";

    $executa = $mysqli->query($query);

    echo $erro = $mysqli->error;

    if (empty($erro)) {
      logs('Cadastrou um produto');
      header("location:../painelAdministrativo.php?msg=<div class='alert alert-success'>Produto cadastrado!</div>");
    }


}

 ?>
