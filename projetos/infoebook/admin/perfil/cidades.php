<?php include("../../includes/config.php");

include(conexao);

$valor = $_POST['valor'];
if(empty($valor)){
$valor=@$_SESSION['idestado'];}

echo $sql_cidades = "Select * from cidade where estado_cod=$valor order by nome asc";

$executa_sql_cidades = $mysqli->query($sql_cidades);

while($cidade=$executa_sql_cidades->fetch_assoc()){

if(isset($_SESSION['idcidade']) && $_SESSION['idcidade']==$cidade['idcidade']){
	$selected="selected";
}else{
	$selected="";
}

echo"<option value='".$cidade['idcidade']."' $selected>".$cidade['nome']."</option>";

}

?>