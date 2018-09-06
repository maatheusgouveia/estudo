 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- <script src="js/bootstrap.min.js"></script> -->

<script type="text/javascript">

$('#exampleModal').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button that triggered the modal

  var recipient = button.data('whatever') // Extract info from data-* attributes

  var recipientnome = button.data('whatevernome')

  var recipientdetalhes = button.data('whateverdetalhes')

  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).

  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

  var modal = $(this)

  modal.find('.modal-title').text('ID ' + recipient)

  modal.find('#id-curso').val(recipient)

  modal.find('#recipient-name').val(recipientnome)

  modal.find('#detalhes').val(recipientdetalhes)

})

</script>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Recuperar conta - Mostra Preço</title>

<?php include "includes/config.php";
include headers; ?>
</head>

<body>

<?php include topo; ?>



<section class="container-fluid recentes" style="background-color: #fff ; text-align:center">

    <div class="container" style="background-color:#fff;margin-top:20px; margin-bottom: 20px;">

  <div class="col-12">

<div class="col-sm-8 col-sm-offset-2" style="box-shadow: 2px 2px 3px 3px lightgray;">

<hr>

<div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 70px;border-bottom: 10px solid #60338E;">
     <h1 class="text-center text-capitalize"  style="font-size: 2em;margin-top: 5px;font-weight:bold;">Recuperar uma conta</h1>
    </div>


<?php @$msg = $_GET['msg'];

    if (!empty($msg)) {
      echo $msg;

    }

    ?>

<script src="<?php echo funcoesJs; ?>"></script>

    <form method="POST" action="acoes/verificaRecuperarSenha.php" id="form_recuperaSenha">

    <div class="form-group">

      <label for="Email" style="margin-top:10px; margin-bottom:10px;font-weight:bold;">Digite um email válido</label>

    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" onchange="javascript:enviaDados(this.value,'acoes/verificaRecuperarSenha','acoes/retornoEmail')" >

    <span id="retornoEmail"></span>

    </div>

    <div class="form-group">

      <input type="submit" value="Enviar" class="btn form-control" style="background-color: #8a2be2;border: #8a2be2;font-size: 16px;color:#fff;">

    </div>

  </form> <br>

    <a href="login.php" style="color: #8a2be2;"><i class="fa fa-reply" aria-hidden="true" style="color: #8a2be2;"></i> Voltar ao Login</a> 

<hr>

    <br><br>

    <br>

    </div>

  </div>

</div>

</section>



<?php include rodape ;

?>

<script src="libs/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>

<script>

  $(document).ready(function(e) {

    $("#form_recuperaSenha").validate({
      rules:{
          Email:{
            required:true,
            Email:true
          },

      },// campos validados
      messages:{
          Email:{
            required:'O campo email é obrigatório!',
            Email:'Informe um email válido!'
          },

      }// mensagens
    }); // fim validação formulario
  });
</script>

</body>

</html>
