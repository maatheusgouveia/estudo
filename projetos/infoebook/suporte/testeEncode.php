<?php 

$nome = base64_encode("joao");

echo $nome;

$nome_original = base64_decode("$nome");

echo "<br> $nome_original";
 ?>