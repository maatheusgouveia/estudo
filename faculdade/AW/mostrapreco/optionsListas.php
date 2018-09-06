<?php

@session_start();

$idPessoa = $_SESSION['idPessoa'];

$query ="SELECT * FROM `listascompra` WHERE `idPessoa`= $idPessoa";

$erro = $mysqli->error;

echo $erro;

$executa = $mysqli->query($query);

    $linhas = $executa->num_rows;

        if($linhas>0){
                ?>



                <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
             while($dados= $executa->fetch_assoc())
            {//inicio do while?>


        <option value="<?php echo $dados['idListaCompra']; ?>"><?php echo $dados['NomeLista']; ?></option>


        <?php }
        } ?>
