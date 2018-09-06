<?php

session_start();

include "../includes/config.php";

include conexao;

$idLoja = $_POST['idLoja'];

@$idPessoa = $_SESSION['idPessoa'];

$operacao = $_POST['favoritos'];

$NomeLoja = $_POST['NomeLoja'];

if (empty($_SESSION['idPessoa'])) {
	 ?>

	 <input type="submit" id="favoritos" class="btn btn-sm col-md-12 col-xs-12" value="Adicionar aos favoritos" style="background-color: #60338E;color: #fff;border-radius: 5px;border: #60338E;font-size: 0.9em;" >

      <input type="hidden" name="favoritos" value="Adicionar" id="favoritos">
	 <p style='text-align: center;margin-top: 50px;'>
		  <label for="favoritos"><i class='fa fa-heart-o fa-3x' aria-hidden='true'  ></i></label>
	 </p>

	 <?php
	 exit("<div class='alert alert-warning small text-center'>Faça <a href='login.php'>login</a> para continuar!</div>");
}



if ($operacao=="Adicionar") {

	@$query = "INSERT INTO `favoritos` (`idPessoa`, `idLoja`, `DataFavorito`) VALUES ('$idPessoa', '$idLoja', CURRENT_TIMESTAMP)";


	 ?>


	<input type="submit"  id="favoritos" class="btn btn-sm col-md-12 col-xs-12" value="Remover dos favoritos" style="background-color: #60338E;color: #fff;border-radius: 5px;border: #60338E;font-size: 0.9em;" >

        <input type="hidden" name="favoritos" value="Remover">
				<input type="hidden" name="NomeLoja" value="<?php echo $NomeLoja; ?>" id="favoritos">
	 <p style='text-align: center;margin-top: 50px;'>
		 <label for="favoritos"><i class='fa fa-heart fa-3x' aria-hidden='true' style='color:red;' ></i></label>
	 </p>

	<?php


}else{

	@$query= "DELETE FROM `favoritos` WHERE idPessoa= $idPessoa AND idLoja = $idLoja ";

	 ?>
	 <input type="submit" id="favoritos" class="btn btn-sm col-md-12 col-xs-12" value="Adicionar aos favoritos" style="background-color: #60338E;color: #fff;border-radius: 5px;border: #60338E;font-size: 0.9em;" >

      <input type="hidden" name="favoritos" value="Adicionar" id="favoritos">
			<input type="hidden" name="NomeLoja" value="<?php echo $NomeLoja; ?>" id="favoritos">
	 <p style='text-align: center;margin-top: 50px;'>
		 <label for="favoritos"><i class='fa fa-heart-o fa-3x' aria-hidden='true'  ></i></label>
	 </p>

	 <?php
}

@$executaQuery=$mysqli->query($query);
require_once funcoesPhp;
if ($operacao =="Remover") {
 logs("Removeu ".$NomeLoja." dos favoritos");
}
else{
 logs("Adicionou ".$NomeLoja." aos favoritos");
}

 ?>
