<?php include("../../includes/config.php");
include(funcoes);?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Cadastro Apostila</title>

  <?php include(headers); ?>
  </head>
  <body>

<?php include(topo_admin); ?>
  
  <div class="container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
            <h1 class="h1-line">Apostilas
              <a href="formApostila.php?operacao=gravar" class="btn btn-primary">Adicionar Apostila</a>
            </h1>
            
            </div>
         </div>


            <div class="col-sm-12" id="listaApostilas">
              <h2>Lista de apostilas</h2>
<?php 

if(isset($_GET['msg'])){
  echo "<div class='alert alert-success'>".$_GET['msg']."</div>";
}


include(conexao);

// seleciona todos os registros onde o id do usuário for igual ao id do usuario logado
$sql="select * from arquivo inner join categoria on arquivo_idcategoria=idcategoria where arquivo_idusuario=".$_SESSION['pessoa'];

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


<div class="col-sm-3">
  
<h3 class='text-center'><?php echo $dados_arquivo['titulo']; ?></h3>
<p><?php echo $dados_arquivo['nome_categoria']; ?></p>
<div><?php echo limita_string($dados_arquivo['descricao'],100); ?></div>

<div class="acoes" style="padding-top: 10px;">
  
<a href="formApostila.php?operacao=editar&arquivo=<?php echo base64_encode($dados_arquivo['idarquivo']); ?>" data-toggle="tooltip" data-placement="top" title="Editar">
  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a>
&nbsp;
<a href="acoesApostila.php?arquivo=<?php echo base64_encode($dados_arquivo['idarquivo']); ?>&nome_arquivo=<?php echo $dados_arquivo['arquivo']; ?>" data-toggle="tooltip" data-placement="top" title="Excluir">
  <i class="fa fa-trash-o" aria-hidden="true"></i>
</a>
&nbsp;
<a href="<?php echo url."/arquivos/".$dados_arquivo['arquivo']; ?>" target="new" data-toggle="tooltip" data-placement="top" title="Baixar">
  <i class="fa fa-download" aria-hidden="true"></i>
</a>

</div>

</div>



 <?php }// fim do while

}else{

    echo "<div class='alert alert-warning'>Você ainda não cadastrou nenhuma apostila, clique em Adicionar Apostila para cadastrar</div>";
}


}// fim else


?>
              

            </div>

           
      
    </div>
  </div>  
  
<div class="container-fluid footer">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-12 sobre">Desenvolvido por 3EL</div>
        </div>
    </div>
</div>  
    

<script type="text/javascript">
  $(document).ready(function(){
    $(function () {

$('[data-toggle="tooltip"]').tooltip()});

  });
</script>    
  </body>
</html>

