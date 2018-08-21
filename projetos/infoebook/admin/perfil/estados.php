<?php 

include(conexao);

$sql_estados = "Select * from estados order by nome asc";

$executa_sql_estados = $mysqli->query($sql_estados);

while($estado=$executa_sql_estados->fetch_assoc()){

if(isset($_SESSION['idestado']) && $_SESSION['idestado']==$estado['idestado']){
	$selected="selected";
}else{
	$selected="";
}

echo"<option value='".$estado['idestado']."' $selected>".$estado['nome']."</option>";

}

?>