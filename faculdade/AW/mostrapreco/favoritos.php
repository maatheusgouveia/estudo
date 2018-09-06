<?php
require_once "includes/config.php";

@session_start();

$NomeExibicao = $_SESSION['NomeExibicao'];

$idUsuario = $_SESSION['idUsuario'];

$_SESSION['pagina'] = "favoritos.php";

$pagina = $_SESSION['pagina'];

?>

<div class="col-md-10" style="border: 2px solid lightgray;border-radius: 4px;margin-top: 5px;">



<div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;margin-top: 20px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px">Favoritos</h1>

 </div>

    <h1 class="text-center" style="margin-top: 10px;font-weight:bold;font-size:1.5em;">Locais Favoritos</h1>
<hr>

    <?php

include conexao;


$idPessoa = $_SESSION['idPessoa'];

//num_rows obtem o nº de linhas retornado pela consulta
$query ="SELECT * FROM `favoritos`
INNER JOIN lojas ON favoritos.idLoja = lojas.idLoja
INNER JOIN pessoas ON lojas.idPessoa = pessoas.idPessoa
WHERE favoritos.idPessoa=$idPessoa";

$executaQuery = $mysqli->query($query);

    $linhas = $executaQuery->num_rows;

        if($linhas>0){
                ?>

         <div class="well-sm" style="border:2px solid #eee;margin-bottom:20px;background-color:#eee;">

                <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
             while($dados= $executaQuery->fetch_assoc())
            {//inicio do while?>

        <p style="font-weight:bold;">Loja: <?php echo $dados['NomeLoja']; ?> <a href="perfilEmpresa.php?idLoja=<?php echo base64_encode($dados['idLoja']); ?>" name="lojaNome" id="lojaNome"> Ver Perfil </a></p>
        <br>

        <br>




            <?php }     //fim do while


            }//fim do if


            ?>
         </div>
         </div>
         <br>








</div>
</div>
