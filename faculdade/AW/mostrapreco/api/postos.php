<?php
include "../includes/config.php";
include conexao;

header("Content-Type: application/json; charset=UTF-8");

$query = $mysqli->query("SELECT * FROM lojas");
$saida = array();
$saida = $query->fetch_all(MYSQLI_ASSOC);

echo json_encode($saida);
 ?>
