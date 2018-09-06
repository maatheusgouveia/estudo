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

	 <input type="submit" id="favoritos" class="btn btn-sm" value="Adicionar aos favoritos" style="display:none;" >

      <input type="hidden" name="favoritos" value="Adicionar" id="favoritos">
	 <p style='font-size:25px;'>
		 <label for="favoritos"><i class='fa fa-heart-o' aria-hidden='true' style='margin-top:-10px;'  ></i></label>
	 </p>

	 <?php
	 exit("<div class='alert alert-warning small text-center'>Faça <a href='login.php'>login</a> para continuar!</div>");
}



if ($operacao=="Adicionar") {

	@$query = "INSERT INTO `favoritos` (`idPessoa`, `idLoja`, `DataFavorito`) VALUES ('$idPessoa', '$idLoja', CURRENT_TIMESTAMP)";


	 ?>


	<input type="submit"  id="favoritos" class="btn btn-sm " value="Remover dos favoritos" style="display:none;" >

        <input type="hidden" name="favoritos" value="Remover">
				<input type="hidden" name="NomeLoja" value="<?php echo $NomeLoja; ?>" id="favoritos">
	 <p style='font-size:25px;'>
		 <label for="favoritos"><i class='fa fa-heart' aria-hidden='true' style='color:red;margin-top:-10px;' ></i></label>
	 </p>

	<?php


}else{

	@$query= "DELETE FROM `favoritos` WHERE idPessoa= $idPessoa AND idLoja = $idLoja ";

	 ?>
	 <input type="submit" id="favoritos" class="btn btn-sm" value="Adicionar aos favoritos" style="display:none;" >

      <input type="hidden" name="favoritos" value="Adicionar" id="favoritos">
			<input type="hidden" name="NomeLoja" value="<?php echo $NomeLoja; ?>" id="favoritos">
	 <p style='font-size:25px;'> <label for="favoritos"><i class='fa fa-heart-o' aria-hidden='true' style='margin-top:-10px;'  ></i></label> </p>

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
