<?php include("includes/config.php");?>
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

 <div class="container-fluid topo">
   <div class="container">
    <div class="row">
      <div class="col-sm-12"><h1 id="logo">InfoWeb</h1></div>
    </div>
 </div>
</div>
  
  
  <div class="container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            
  <?php 
$ativacao = @$_GET['ativacao'];
		
include(conexao);

$sql = "Select * from usuario where cod_ativacao='$ativacao'";

$executa = $mysqli->query($sql);

$total = $executa->num_rows;

if($total==1){
$dados = $executa->fetch_assoc();
$idlogin=$dados['idusuario'];

$atualiza = "Update usuario set cod_ativacao='',data_ativacao=now() where idusuario=$idlogin";

$executaAtualiza = $mysqli->query($atualiza);

//echo "Codigo de ativacao".md5($id.$email);		
?>          
            
            <h1><i class="fa fa-check text-success" aria-hidden="true"></i> Conta ativada com sucesso</h1>
            <p class="col-sm-4 col-sm-offset-4 alert alert-success">Acesse o painel de controle para continuar utilizando o site!</p>
           </div>
        </div>
    </div>
  </div>
<?php }else{
echo '<h1><i class="fa fa-check text-success" aria-hidden="true"></i> Conta não ativada!</h1>
            <p class="col-sm-4 col-sm-offset-4 alert alert-success">O código de ativação é inválido ou a conta já foi ativada!</p>';
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
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
  </body>
</html>