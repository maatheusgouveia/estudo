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
        	<h1>Apostilas</h1>
        </div>

  	</div>



<?php
include(conexao);

if(!isset($_GET['apostila']) && !is_numeric(base64_decode($_GET['apostila']))){

header("location:index.php");

}


$apostila = base64_decode($_GET['apostila']);

// seleciona todos os registros onde o id do usuário for igual ao id do usuario logado
$sql="select *,date_format(data,'%d/%m/%Y') as data_postagem,time(data) as hora from arquivo inner join categoria on arquivo_idcategoria=idcategoria inner join pessoa on arquivo_idusuario=idpessoa where idarquivo=$apostila";

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
$dados_arquivo=$executa_sql->fetch_assoc();

?>


<div class="col-sm-4">

<h1 class=''><?php echo $dados_arquivo['titulo']; ?> <small><?php echo $dados_arquivo['nome_categoria']; ?></small></h1>
<h3>Postado por: <?php echo $dados_arquivo['nome'];?></h3>
<p><strong>Data da postagem:</strong> <?php echo $dados_arquivo['data_postagem']; ?> as <?php echo substr($dados_arquivo['hora'],0,5); ?>h</p>
<p><strong>Descrição:</strong> <br>
  <?php echo nl2br($dados_arquivo['descricao']);?></p>

<div class="row">
  <div class="col-sm-6 text-left">
<a href="?apostila=<?php echo base64_encode($dados_arquivo['idarquivo']); ?>" data-toggle="tooltip" data-placement="top" title="Baixar"> 
<i class="fa fa-download" aria-hidden="true"></i>  Baixar arquivo
</a>
</div>

<div class="col-sm-6 text-right">
<a href="gerenciaLista.php?apostila=<?php echo base64_encode($dados_arquivo['idarquivo']); ?>&acao=adicionar" data-toggle="tooltip" data-placement="top" title="Adicionar a minha lista"> 
<i class="fa fa-external-link-square" aria-hidden="true"></i> Adicionar na lista
</a>
</div>
</div>
</div>



 <?php 

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