<?php 
$servidor_bd='localhost';
$usuario_bd='root';
$senha_bd='';
$banco='bdusuario';

@$mysqli = new mysqli($servidor_bd,$usuario_bd,$senha_bd,$banco);


// verificando erros na conexão
if ($mysqli->connect_errno) {
    echo "FALHA AO CONECTAR: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
// função para reconhecimento de caracteres especiais
mysqli_set_charset($mysqli, "utf8");	
}


?>




