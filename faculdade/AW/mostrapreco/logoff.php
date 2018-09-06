<?php
include "includes/config.php";
include verificaLogado ;
include funcoesPhp ;
logs('Saiu');
session_destroy();
header("location:login.php")
?>
