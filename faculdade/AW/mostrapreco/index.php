<?php include 'includes/config.php'; ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="libs/bootstrap/js/bootstrap.min.js"></script> -->
<?php
include conexao;

@session_start();
@$NomeExibicao = $_SESSION['NomeExibicao'];
@$TipoUsuario = $_SESSION['TipoUsuario'];
@$FotoPerfil = $_SESSION['FotoPerfil'];

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

  <title>Bem vindo! - Mostra Preço</title>

</head>

<body>

<?php include topo; ?>
<!-- <div class="container-fluid back hidden-xs hidden-sm" style="background-position: center;height: 350px;margin: 0 auto;padding: 0">
<?php //include background; ?>
</div> -->

<section class="container-fluid recentes" style="background-color: #fff ; min-height: 400px; text-align:center">


<div class="col-md-12"  >

<h1 style="text-align: center;font-size: 2.5em;margin-bottom: 20px;margin-top: 10px;font-weight: bold;margin-bottom: 10px;" >Promoções</h1>
<!-- <div class="col-xs-5-offset col-sm-5-offset col-md-5-offset col-xl-5-offset" > -->

<?php include slider; ?>
</div>

<div>

<h1 class=" text-center" style="text-align: center;font-size: 2.5em;margin: 20px;font-weight: bold; " >Produtos em alta</h1>

</div>

<?php
$ranking=1;
include thumbnail;

 ?>

<div class="col-md-12">

<br>

</div>

<?php
$ranking=2;
include thumbnail;

 ?>

<br>

<?php
$ranking=3;
include thumbnail;

 ?>

</section>

<?php include rodape;
?>

</body>
</html>

<!-- $var=file_get_contents('');
echo $var; -->
