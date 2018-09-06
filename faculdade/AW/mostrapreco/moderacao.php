<?php
@session_start();
require_once "includes/config.php";
$_SESSION['pagina'] = "moderacao.php";
$idPessoa = $_SESSION['idPessoa'];
require_once conexao;
include verificaPermissao;
 ?>

<?php

$query = "SELECT * FROM comentariosofensivos";

$executa = $mysqli->query($query);

 ?>

 <div class="well-sm col-md-10" style="background-color:#FFF;border:2px solid lightgray;border-radius:4px;margin-top:5px;">

 <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;margin-top:20px;">

<h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Palavras Banidas</h1>

</div>

 <table class="table table-striped table-responsive center-block" style="border:2px solid lightgray;width:205px;border-radius:4px;width:300px;">
   <thead>
     <tr>
       <th style="width:300px;text-align:center;font-weight:bold;font-size:1.4em;">Palavras</th>
     </tr>
   </thead>
   <tbody>
       <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
while($dados= $executa->fetch_assoc())
{//inicio do while?>
   <tr>
<td style="width:300px;"><?php echo $dados['ConteudoOfensivo']; ?></td>
</tr>
<?php }   //fim do while

?>

   </tbody>

 </table>

 <hr>
<br>

<div class="col-md-9 col-md-offset-2">
<form class="" action="acoes/executaModeracao.php" method="post">
<div class="row form-group">
<textarea rows="5" class="form-control center-block" name="Comentario" value="" placeholder="Banir Palavras"></textarea>
</div>

<div class="form-group">
  <div class="col-sm-9"></div>
  <div class="col-sm-3">
<input type="submit" class="btn btn-md btn-block " style="color:#fff; background-color:#8a2be2;">

</div>
</div>
</form>

</div>
<br>

</div>
