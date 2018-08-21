<?php 

if(!isset($_SESSION['idusuario'])){

header("location:".url."/login.php?msg=Faça o login para acessar o sistema!");
}

?>