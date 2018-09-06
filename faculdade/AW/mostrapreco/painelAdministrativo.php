<!DOCTYPE html>
<html>
  <head>
    <?php
    session_start();
    require_once "includes/config.php";
    require_once conexao;
    include verificaLogado;
    include headers;
    $TipoUsuario = $_SESSION['TipoUsuario'] ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel Administrativo</title>


  </head>
  <body>

    <?php include topo; ?>

    <section style="min-height:500px;background-color: #fff;">

      <div class="container-fluid" style="background-color: #fff;">

        <div class="row">
          <div class="col-md-12" id="load">
          </div>

          <div class="col-md-2 col-xs-2">

        <style>
.vertical-menu {
    width: 200px;
}

.vertical-menu a {
    background-color: #fff;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover{
  background-color: #8A2BE2;
  color:#fff;
  border-radius:4px;

}
.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}

.input-group-btn{
  height: 46.5px;
}
</style>

<button type="button" class="btn btn-md" onclick="Mudarestado('MenuQueSome')" style="color: #fff;margin-top:5px;background-color: #8a2be2;"><i class="fa fa-bars"></i></button>

<div class="vertical-menu" id="MenuQueSome" style="margin-top:10px;border-radius: 5px;background-color: #fff;border:2px solid lightgray;margin-bottom:20px; ">

<a href="perfil.php">Meu Perfil</a>

<?php
$queryMenu = "SELECT * FROM `permissoes`
INNER JOIN paineladministrativo ON permissoes.idPagina = paineladministrativo.idPagina
WHERE UsuarioPermissao  = '$TipoUsuario'
AND NomePagina NOT IN ('perfil.php') ORDER BY NomeExibicaoMenu ASC";

$executaQueryMenu = $mysqli->query($queryMenu);

 while($dadosMenu = $executaQueryMenu->fetch_assoc()){

?>
  <a href="<?php echo $dadosMenu['NomePagina'] ?>"><?php  echo $dadosMenu['NomeExibicaoMenu'] ?></a>
<?php  } ?>
</div>


    <script type="text/javascript">
function Mudarestado(el) {
       var display = document.getElementById(el).style.display;
       if(display == "none")
           document.getElementById(el).style.display = 'block';
       else
           document.getElementById(el).style.display = 'none';
   }
</script>


          </div>

          <div class="col-md-10 col-xs-12" id="retorno">
            <?php
            @$pagina = $_SESSION['pagina'];

            if(empty($pagina)){
              include "perfil.php";
            }
            else{
             include "$pagina";
           }

             ?>

          </div>
        </div>

      </div><!--/container -->

    </section>

    </div>

    <?php include rodape; ?>

  </body>
</html>

<script type="text/javascript">

$(document).ready(function(){

  $(".vertical-menu a").click(function(){

    var url=$(this).attr("href");

    $.ajax({

      url:url,
      type:'POST',
      beforeSend:function(){

        $("#load").html('<div class="text-center"> <img src="imagens/mostrapreco/carregando.gif" height="100" width="100" > <br> <h1>Carregando...</h1></div>');
      },

      success:function(data){
        $('#retorno').html(data);
        $("#load").html('');
      }

    });

    return false;

  });

});

</script>
