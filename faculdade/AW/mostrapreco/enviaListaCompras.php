<!DOCTYPE html>
<html>
<head>
    <?php
    include "includes/config.php";
     include headers; ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="">

</head>
<body>

<?php
@session_start();
include conexao;
include 'listaComprasEmail.php';

 ?><script>
  $(document).ready(function() {
    $cont=$('#ConteudoLista').html();
    $('.html').val($cont);
  });
</script>

<div id="dddd">

</div>

</body>
</html>
