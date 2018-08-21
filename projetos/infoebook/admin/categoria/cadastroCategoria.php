
<?php 

include("../../includes/config.php");

include "../verificaAdmin.php";
include "../verifica_logado.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Cadastro Categoria</title>

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
  
  <div class="container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-2">
            <h1>Categorias</h1>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCategoria">Nova Categoria</a> 

            <div class="col-sm-12" id="listaCategoria">
              
              <?php include "listaCategoria.php"; ?>

            </div>

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




<!-- Modal Login-->
<div class="modal fade" id="modalCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastro de Categoria</h4>
      </div>
      <div class="modal-body">
        
          
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">

        
            
            <div class="form-group">
              <input type="text" name="categoria" class="form-control" placeholder="categoria" id="categoria" required>
            </div>

            <div class="form-group"> 
              <button onclick="javascript:enviaDados($('#categoria').val()+'|'+'gravar','acoesCategoria','retornoForm','Enviando...');" class="form-control btn btn-primary">Gravar</button>
            </div>
              
            <div id="retornoForm"></div>

         
             </div>
           </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:enviaDados('','listaCategoria','listaCategoria','Atualizando Lista...')" value="">Fechar</button>
       </div>
    </div>
  </div>
</div>
    





<script type="text/javascript">
  
$(document).ready(function(){

$('#modalCategoria').on('shown.bs.modal', function (e) {
   $('#categoria').val('');
   $("#categoria").focus();
})


// modal exclui
$('#modalExclui').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data('whatever'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  //var modal = $(this);
  $('.btn-exclui').val(recipient);
})



$(".btn-exclui").click(function(){

$('#modalExclui').modal('hide')

});


});

</script>    
  </body>
</html>

