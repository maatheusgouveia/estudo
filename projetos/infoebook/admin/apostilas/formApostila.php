<?php include("../../includes/config.php");
include("../verifica_logado.php");?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Cadastro Apostila</title>

    <!-- Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/estilos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php echo js; ?>
  </head>
  <body>

<?php include(topo_admin); ?>
  

<?php 
include(conexao);

$operacao = $_GET['operacao'];

// se a operaçao for vazia redireciona para a lista de apostilas
if(empty($operacao)){header("location:listaApostilas.php");}

// se a operação for igual a editar o campo arquivo não é obrigatório
$required="";
if($operacao=="editar"){
  $requiredArquivo="required";
} 


// muda o texto do cabeçalho do form
$tipo = "Cadastro";
if ($operacao=='editar') {
  $tipo = "Edição de";
}



//se operacao for igual a editar vamos selecionar os dados da apostila
if ($operacao=="editar") {

// decodificamos o código do arquivo que esta vindo via GET
$idarquivo=base64_decode($_GET['arquivo']);  

// seleciona todos os registros onde o id do usuário for igual ao id do usuario logado
$sql="select * from arquivo inner join categoria on arquivo_idcategoria=idcategoria where idarquivo=$idarquivo";

//executa o sql
$executa_sql = $mysqli->query($sql);

// armazena o código do erro
$erro_cod = $mysqli->errno;

//se $erro_cod for maior que zero, significa que ocorreu algum erro, caso contrário vamos exibis os dados da consulta
if($erro_cod>0){
  echo "<div class='alert alert-warning'>Não foi possível selecionar o arquivo solicitado!</div>";
}else{
  $dados_arquivo=$executa_sql->fetch_assoc();
}

}// fim if editar

 ?>

  <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-4 text-center" >
            <h1><?php echo $tipo; ?> Apostilas  </h1>
            <small>Campos obrigatórios *</small>
          </div>
         </div>

          
            <div class="row">
              <div class="col-sm-6 col-sm-offset-4">

                     
            <form method="post" action="acoesApostila.php" enctype="multipart/form-data">

            <div class="form-group">
              <label>Categoria *</label>
              <select name="categoria" class="form-control" required="">
                <option></option>
              <?php 

               
               $sqlCategoria = "Select * from categoria order by nome_categoria";
               $executaCategoria=$mysqli->query($sqlCategoria);
               $error=$mysqli->error;

            if(empty($error)){
            while ($dadosCategoria=$executaCategoria->fetch_assoc()){
              

              // selecionar a categoria quando a operacao for editar e o id da categoria for igual a que esta sendo exibido no laço de repetição
              if($operacao=="editar" && $dadosCategoria['idcategoria']==$dados_arquivo['idcategoria']){
                $selected = "selected";
              }else{
                $selected="";
              }

              echo "<option value='".$dadosCategoria['idcategoria']."' $selected>".$dadosCategoria['nome_categoria']."</option>";
            }
          }
       ?>
        
              </select>
            </div>  

            <div class="form-group">
              <label>Título *</label>
              <input type="text" name="titulo" class="form-control" placeholder="Título da apostila" id="titulo" value="<?php echo @$dados_arquivo['titulo']; ?>" required>
            </div>

            <div class="form-group">

              <?php 
              if ($operacao=="editar" && $dados_arquivo['arquivo']!='') {
                echo '<h1><i class="fa fa-file-o" aria-hidden="true"></i> '.@$dados_arquivo['titulo'].'</h1>';

              }
               ?>

              <label>Arquivo (.pdf / .doc / .docx) *</label>
              <input type="file" name="arquivo" class="form-control"  <?php echo $required; ?>>
            </div>

            <div class="form-group">
               <label>Descrição *</label>
              <textarea name="descricao" class="form-control" placeholder="Insira uma descrição da apostila" required=""><?php echo @$dados_arquivo['descricao']; ?></textarea>
            </div>

            <div class="form-group"> 
              <button type="submit" class="btn btn-primary form-control">Gravar</button>
            </div>
            
            <input type="hidden" name="idarquivo" value="<?php echo @$dados_arquivo['idarquivo']; ?>">
            <input type="hidden" name="nome_arquivo" value="<?php echo @$dados_arquivo['arquivo']; ?>">
            <input type="hidden" name="operacao" value="<?php echo $operacao; ?>">
            </form> 

            <div id="retornoForm">
              <?php 
              if (isset($_GET['msg'])) {
                echo "<div class='alert alert-danger'>".$_GET['msg']."</div>";
              }
               ?>
            </div>

         
             </div>
           </div>

            <div class="col-sm-12" id="listaCategoria">
              
              <?php //include "listaCategoria.php"; ?>

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
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->



</script>    
  </body>
</html>

