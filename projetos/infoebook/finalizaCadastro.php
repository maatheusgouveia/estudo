<?php include("includes/config.php");
include (funcoes);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Cadastro Conta</title>

<?php include(headers); ?>
  </head>
  <body>
<?php include(topo);?>
  
  <div class="container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            
  <?php 
$email = @$_POST['email'];
$senha = @$_POST['senha'];
$confirma_senha = @$_POST['confirma_senha'];

//$validacao = array();
$validacao = "";
if(empty($email)){
	$validacao.='O campo e-mail é obrigatório';
	}

if(strlen($senha)<6){
	$validacao.='<br>A senha deve ter no mínimo 6 caracteres';
	}
	
if(($senha)<>$confirma_senha){
	$validacao.='As senhas não conferem';
	}		
	
if(!empty($validacao)){
echo "<p class='alert alert-danger'><strong>Dados inválidos!</strong><br>$validacao</p>";
	}else{
		
include (conexao);
$senha=md5($senha);
$sql = "Insert into usuario (email,senha) values ('$email','$senha')";

$executa = $mysqli->query($sql);

$erro=$mysqli->errno;
if($erro==1062){
  exit("<p class='alert alert-danger'>Este e-mail já está sendo usado, <a href='cadastroConta.php'>escolha outro</a>!</p>");
}elseif($erro>0){
	echo $mysqli->error;
  exit("<p class='alert alert-danger'>Estamos com problemas para criar a sua conta, por favor tente novamente mais tarde!</p>");
  }


$id=$mysqli->insert_id;		
$codigoAtivacao=md5('$id.$email');  

$gera_id=$mysqli->query("Update usuario set cod_ativacao='$codigoAtivacao' where idusuario=$id");

if(enviaEmail($email,'InfoWeb - Ativação da conta',msgAtivaConta($codigoAtivacao))==1){
?>          
            
            <h1><i class="fa fa-check text-success" aria-hidden="true"></i> Conta criada com sucesso</h1>
            <p class="col-sm-4 col-sm-offset-4 alert alert-success">Acesse o e-mail <strong><?php echo $email; ?></strong> e clique no link para ativar a sua conta.</p>
           </div>
        </div>
    </div>
  </div>
<?php }else{ // condição para testes em localhost
  echo "
  <h1>Conta criada com sucesso!</h1>
  <div class='alert alert-success'>
  Clique <a href='ativaConta.php?ativacao=$$codigoAtivacao'><srong>aqui</strong></a> para ativar sua conta
  </div>";
}

  }?>  
  <div class="container">
  	 
  </div>
  
  
<div class="container-fluid footer">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-12 sobre">Desenvolvido por 3EL</div>
        </div>
    </div>
</div>  
   

</body>
</html>