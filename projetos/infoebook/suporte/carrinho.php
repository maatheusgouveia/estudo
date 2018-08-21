<?php session_start();

if(!isset($_SESSION['lista'])){

	$_SESSION['lista']=array();
}


if (isset($_SESSION['lista'])) {


$_SESSION['lista'][]=0;
	
}


print_r($_SESSION['lista']);
?>