<?php include "includes/config.php"; ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="libs/bootstrap/js/bootstrap.min.js"></script> -->
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
<?php include headers; ?>

<style>
    a:focus, a:hover {
     /* color:#fff; */
    text-decoration: none;
}

html{
  font-family: arial;
}

h1{
  font-size: 2em;
  margin-bottom: 10px;
}

</style>
  <title>Criar conta - Mostra Preço</title>
</head>

<body>

<?php include topo; ?>

<!-- <div class="container-fluid back hidden-xs hidden-sm" style="background-position: center;height: 300px;margin: 0;padding: 0">

<?php //include("background.php"); ?>

</div> -->

<section class="container-fluid recentes" style="background-color: #fff ; text-align:center">

    <div class="container" style="background-color:#fff;margin-top:20px; margin-bottom: 20px;">

    <div class="col-12">

    <div class="col-sm-8 col-sm-offset-2" style="box-shadow: 2px 2px 3px 3px lightgray;">

    <hr>
    <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 70px;border-bottom: 10px solid #60338E;margin-bottom: 10px;">
    <h1 class="text-center" style="margin-bottom: 20px;font-size: 2em;margin-top: 5px;font-weight:bold;">Criar uma conta</h1>
  
    </div>
    <?php
    @$msg = $_GET['msg'];
    echo @$msg; ?>

    <form method="post" action="criaConta2.php" id="form_cadastro">

    <div class="form-group">

      <label for="nomeUsuario"  style="font-weight: bold;float: left;margin-bottom: 5px;">Nome ou razão social</label>

      <input type="text" class="form-control" id="nomeRazaoSocial" name="nomeRazaoSocial" placeholder="Seu nome ou nome da sua empresa" >

    </div>

    <div class="form-group">

      <label  style="font-weight: bold;float: left;margin-bottom: 5px;">Tipo de Usuário:<span class="asterisco" style="color:	#9400D3;">*</span> </label>

      <select name="tipoUsuario" id="tipoUsuario" class="form-control" required class="btn btn-lg" >

        <option value="" >Escolha um tipo:</option>

        <option value="pf" >Usuário</option>

        <option value="pj">Empresa</option>

      </select> 

    </div>

      <div class="form-group">

      <label  style="font-weight: bold;float: left;margin-bottom: 5px;">CPF ou CNPJ:<span class="asterisco" style="color:	#9400D3;">*</span></label>

      <input type="text" name="cpfcnpj" id="cpfcnpj" class="form-control" required class="btn btn-lg" placeholder="Digite seu CPF ou CNPJ"  />

      </div>

    <div class="form-group">

      <label for="email"  style="font-weight: bold;float: left;margin-bottom: 5px;">Digite um email válido</label>

    <input type="email" class="form-control" id="email" name="email" placeholder="Email" onchange="javascript:enviaDados(this.value,'valida_email','retornoEmail')" >

    <span id="retornoEmail"></span>

    </div>

    <div class="form-group">

      <input type="submit" value="Próximo" class="form-control" style="background-color: #8a2be2;border: #8a2be2;font-size: 16px;color: #fff;">

    </div>

  </form> <br>

    <p style="font-weight: bold;">Clicando em cadastrar você estará concordando com os<a href="termos-de-uso.php" style="color: #8a2be2;"> Termos e condições de uso </a> </p>
      
      <br>


      <a href="login.php" style="color: #8a2be2;"><i class="fa fa-reply" aria-hidden="true" style="color: #8a2be2;"></i> Voltar ao Login</a> 
    

<hr>

    <br><br>

    <br>

    </div>

  </div>

</div>
<?php include btnMensagem;?>

</section>

<?php include rodape ;

?>

<!-- <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<script src="jquery-3.2.1.min.js"></script> -->

<script src="libs/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>

<script src="js/funcoes.js"></script>

<script>

  $(document).ready(function(e) {

    $("#form_cadastro").validate({

      rules:{

          email:{

            required:true,

            email:true

          },

      },// campos validados

      messages:{

          email:{

            required:'O campo email é obrigatório!',

            email:'Informe um email válido!'

          },

      }// mensagens

    }); // fim validação formulario

  });

</script>

<script src="libs/maskedinput/src/jquery.maskedinput.js"></script>

<script>

  $(document).ready(function() {

  $("#tipoUsuario").change(function(){

  tipoUsuario = $("#tipoUsuario").val();

  if(tipoUsuario=='pf'){

  $("#cpfcnpj").mask("999.999.999-99");

  } else if(tipoUsuario=='pj'){

  $("#cpfcnpj").mask("99.999.999/9999-99");
  }
  });
  });

</script>
</body>

</html>

<!-- $var=file_get_contents('');

echo $var; -->
