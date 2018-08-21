<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>InfoEbook</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php echo js;?>
  </head>
  <body>
<?php include(topo);?>
  
  <div class="container">
  	<div class="row">
  		<div class="col-sm-12">
        	<h1>Minha Lista</h1>
        </div>

  	</div>



<?php
//se a mensagem estiver setada via get vamos exibir
if (isset($_GET['msg'])) {
  echo "<div class='alert alert-success'>".$_GET['msg']."</div>";
}


// se a sessao lista nao existir vamos exibir uma mensagem para o usuario
if(!isset($_SESSION['lista'])){

echo "<div clas='alert alert-info'>A sua lista está vazia <br> <a href='index.php'>escolha</a> alguns itens para adicionar a lista.</div>";
exit();
}

include(conexao);

// juntamos os itens do array lista separando-os por vírgula, esses itens serão usados na consulta sql
$itens = implode(",", $_SESSION['lista']);


// seleciona todos os registros onde o id do usuário for igual ao id do usuario logado
$sql="select * from arquivo inner join categoria on arquivo_idcategoria=idcategoria  where idarquivo in ($itens)";

//executa o sql
$executa_sql = $mysqli->query($sql);

// armazena o código do erro
$erro_cod = $mysqli->errno;

//se $erro_cod for maior que zero, significa que ocorreu algum erro, caso contrário vamos exibir os dados da consulta
if($erro_cod>0){

  echo "<div class='alert alert-warning'>No momento não foi possível carregar os seus arquivos, estamos trabalhando nisso, tente novamente mais tarde!</div>";
}else{


//vamos obter o número de linhas da consulta
$linhas_consulta = $executa_sql->num_rows;  

// se linhas for maior que zero, significa que a consulta retornou dados, neste caso vamos exibi-los  
if($linhas_consulta>0){

echo "<table class='table'>
      <tr class='info'>
        <td><strong>Apostila</strong></td> <td><strong>Categoria</strong></td> <td></td> <td>
        <tr>";

while($dados_arquivo=$executa_sql->fetch_assoc()){

?>

<tr>
  <td> <?php echo $dados_arquivo['titulo']; ?> </td>
  
  <td> <?php echo $dados_arquivo['nome_categoria']; ?> </td>
  
  <td>
    <a href="#" data-toggle="tooltip" data-placement="top" title="Baixar"> 
    <i class="fa fa-download" aria-hidden="true"></i>  
   </a>
</td>

<td>
<a href="gerenciaLista.php?apostila=<?php echo base64_encode($dados_arquivo['idarquivo']); ?>&acao=remover" data-toggle="tooltip" data-placement="top" title="Remover da minha lista"> 
<i class="fa fa-trash-o" aria-hidden="true"></i> Remover da lista
</a>
</td>

</tr>



 <?php 
  } // fim do while
echo "</table>";

}else{

    echo "<div class='alert alert-warning'>Arquivo não econtrado!</div>";
}


}// fim else


?>

 
  </div><!--fim container conteudo-->
  
  
<div class="container-fluid footer">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-12 sobre">Desenvolvido por 3EL</div>
        </div>
    </div>
</div>  

<script src="jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $(function () {

$('[data-toggle="tooltip"]').tooltip()});

  });
</script>   

   
  </body>
</html>