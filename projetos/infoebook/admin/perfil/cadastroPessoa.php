<?php include("../../includes/config.php");?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Meu Cadastro</title>

    <?php include(headers); ?>
  
  </head>
  <body>

<?php include(topo_admin); 

if($_SESSION['pessoa']>0){

include(conexao);


$buscaDados="select *,pessoa.nome as nome_pessoa from pessoa inner join cidade on pessoa_idcidade=idcidade inner join estados on cidade.estado_cod=idestado where idpessoa=".$_SESSION['pessoa'];
$executaBusca=$mysqli->query($buscaDados);
$dadosPessoa=$executaBusca->fetch_assoc();

$_SESSION['idcidade']=$dadosPessoa['pessoa_idcidade'];
$_SESSION['idestado']=$dadosPessoa['estado_cod'];


if($dadosPessoa['sexo']=='m'){
  $sexom="checked";
  $sexof='';
}else{
    $sexom='';
  $sexof="checked";
}


}


?>
  
  <div class="container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-2">
            <h1>Meu Cadastro</h1>
            
           </div>
        </div>
    </div>
  </div>
  
  <div class="container">
  	<div class="row">
  		<div class="col-sm-6 col-sm-offset-2">
        	<div class="box-cinza">
            
            <form method="post" action="grava_pessoa.php">

<div class="row  form-group">            
      <div class="col-sm-3 text-right">Nome Completo</div>
      <div class="col-sm-9">
       <input type="text" name="nome" class="form-control" placeholder="" id="nome" value="<?php echo @$dadosPessoa['nome_pessoa'];?>">
       </div>        
</div>            

<div class="row form-group">            
      <div class="col-sm-3 text-right">Sexo</div>
      <div class="col-sm-9">
              <input type="radio" name="sexo" value="m" <?php echo @$sexom;?>> Masculino &nbsp;&nbsp;
               <input type="radio" name="sexo" value="f" <?php echo @$sexof;?>> Feminino
              
      </div>        
</div>            

<div class="row form-group">            
      <div class="col-sm-3 text-right">Estado</div>
      <div class="col-sm-7">
          <select class="form-control" name="estado" 
          onchange="javascript:enviaDados(this.value,'cidades','cidade');">
             <option>Selecione o estado</option>
             <?php include("estados.php"); ?>   
          </select>     
        </div>        
</div>

<div class="row form-group">
      <div class="col-sm-3 text-right">Cidade</div>
      <div class="col-sm-7" >
              <select class="form-control" name="cidade" id="cidade">
              <?php if(isset($_SESSION['idcidade'])){
                include("cidades.php");}else{
                  echo "<option>Selecione a cidade</option>";
                }?>
              
              </select>     
        </div>        
</div>

<div class="row form-group">
      <div class="col-sm-3 text-right">Endereço</div>
      <div class="col-sm-9">
             <input type="text" name="endereco" class="form-control" placeholder="" id="endereco" value="<?php echo @$dadosPessoa['endereco'];?>">   
        </div>        
</div>

<div class="row form-group">
      <div class="col-sm-3 text-right">Número</div>
      <div class="col-sm-2">
             <input type="text" name="numero" class="form-control" placeholder="" id="numero" value="<?php echo @$dadosPessoa['numero'];?>">   
        </div>        

      <div class="col-sm-2 text-right">Bairro</div>
      <div class="col-sm-5">
             <input type="text" name="bairro" class="form-control" placeholder="" id="bairro" value="<?php echo @$dadosPessoa['bairro'];?>">   
        </div>        

</div>


<div class="row form-group">
      <div class="col-sm-3 text-right">Telefone</div>
      <div class="col-sm-6">
             <input type="text" name="telefone" class="form-control" placeholder="" id="telefone" value="<?php echo @$dadosPessoa['telefone'];?>">
             
        </div>        
</div>

<div class="row form-group">
      <div class="col-sm-3 text-right">
            <div class="form-group"> 
              <button type="submit" class="form-control btn btn-primary">Salvar</button>
            </div>
      </div>
</div>

<input type="hidden" name="editaPerfil" value="1">
              
            </form>

            </div>

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

  </body>
</html>

