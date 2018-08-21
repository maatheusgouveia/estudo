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
        	<h1>InfoEbook</h1>
        </div>

  	</div>



<?php
include(conexao);

// seleciona todos os registros onde o id do usuário for igual ao id do usuario logado
$sql="select * from arquivo inner join categoria on arquivo_idcategoria=idcategoria order by idarquivo desc";

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

  while($dados_arquivo=$executa_sql->fetch_assoc()){
?>


<div class="col-sm-3 text-center">
<a href="detalhes.php?apostila=<?php echo base64_encode($dados_arquivo['idarquivo']); ?>">  
<h3 class='text-center'><?php echo $dados_arquivo['titulo']; ?></h3>
<p class="lead"><i class="fa fa-file-o" aria-hidden="true"></i></p>
<div><?php echo $dados_arquivo['nome_categoria']; ?></div>
</a>
</div>



 <?php }// fim do while

}else{

    echo "<div class='alert alert-warning'>Você ainda não cadastrou nenhuma apostila, clique em Adicionar Apostila para cadastrar</div>";
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

<script>
  $(document).ready(function(){


$('form').validate({
	rules:{
			email:{
			required:true,
			email:true},
			
			senha:{
			required:true,
			minlength:'6'
			},
			
		confirma_senha:{
			required:true,
			equalTo:"#senha"
			}
		
     },
	messages:{
		email:{
			required:'O campo e-mail é obrigatório',
			email:'Informe um e-mail válido'},
			
			senha:{
			required:'A senha é obrigatória',
			minlength:'A senha deve te no mínimo 6 caracteces'
			},
			
		confirma_senha:{
			required:'Campo obrigatório',
			equalTo:"O campo senha deve ser igual a senha"
			}
		}
		
	});



});

</script>    
  </body>
</html>