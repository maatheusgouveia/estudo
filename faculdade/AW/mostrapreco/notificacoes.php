<?php include 'includes/config.php';
      require_once conexao;
      include verificaLogado;
 ?>

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
<?php

@session_start();

@$NomeExibicao = $_SESSION['NomeExibicao'];

@$TipoUsuario = $_SESSION['TipoUsuario'];

 ?>
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
  width: 100%;
}

h1{
  font-size: 2em;
  margin-bottom: 10px;
}

/* btn.focus, .btn:focus, .btn:hover {
    color:#fff;
    text-decoration: none;
     border-color: #60338E;
    background-color: #60338E;

  } */

  </style>

  <title>Notificações - Mostra Preço</title>

</head>

<body>

<?php include topo; ?>
<!-- <div class="container-fluid back hidden-xs hidden-sm" style="background-position: center;height: 350px;margin: 0 auto;padding: 0">
<?php //include background; ?>
</div> -->

<section class="container-fluid recentes" style="background-color: #fff ; min-height: 400px; text-align:center">
  <div class="well-sm">
 <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px">Notificações</h1>

 </div>
<?php
while ($dadosNotificacoes = $executaQueryNotificacao->fetch_assoc()) {
  ?>

  

  <div class="col-md-4">
  <div class="row">
  <div class="well-sm" style="border: 1px solid #eee;margin:20px">
  <p style="font-weight: bold;"><?php echo $dadosNotificacoes['TituloNotificacao']; ?></p>
  <p><?php echo $dadosNotificacoes['ConteudoNotificacao']; ?></p>
  <hr>
  </div>
  </div>
  </div>
  
<?php
}
?>

</div>
</section>

<?php include rodape;
?>




</body>
</html>


<!-- $var=file_get_contents('');
echo $var; -->
