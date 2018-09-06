<?php
@session_start();
require_once "includes/config.php";
$_SESSION['pagina'] = "paginaLinks.php";
$idPessoa = $_SESSION['idPessoa'];
include verificaPermissao;
 ?>

 <div class="col-md-10" style="background-color:#FFF;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;margin-top: 5px;">
   <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;margin-top: 20px;">
    <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Página de Links</h1>
    </div>

<div class="row">
  <div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="http://localhost/phpmyadmin/" target="blank">LocalHost</a></p>
  </div>
  <div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="https://secure.php.net/manual/pt_BR/index.php" target="blank">Php.net</a></p>
  </div>
  <div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="https://www.hostinger.com.br/cpanel-login" target="blank">Cpanel Hostinger</a></p>
  </div>

  <div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="http://erikasarti.com/html/tabela-cores/" target="blank">Hexadecimal Cor</a></p>
 
  </div>

  <div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="http://getbootstrap.com.br/docs/4.1/getting-started/introduction/" target="blank">Bootstrap</a></p>
  </div>
  
  
</div>


<div class="row">

<div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="https://tinyjpg.com/" target="blank">Otimizar Jpg</a></p>
</div>


<div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="https://tinypng.com/" target="blank">Otimizar Png</a></p>
</div>


<div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="https://br.freepik.com/" target="blank">Freepik</a></p>
</div>


<div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="https://www.pexels.com/" target="blank">Pexels</a></p>
</div>


<div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="https://www.minifier.org/" target="blank">Minificar Css/Js</a></p>
</div>

</div>


<div class="row">

<div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="https://jquery.com/" target="blank">Jquery</a></p>
</div>

<div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="https://www.w3schools.com/howto/default.asp" target="blank">W3Schools</a></p>
</div>

<div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="http://beta.mostrapreco.com.br" target="blank">MostraPreço Test</a></p>
</div>

<div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="" target="blank"></a></p>
</div>

<div class="col-md-2 well-sm" style="border:2px solid #eee;margin-left:25px;margin-bottom:20px;">
  <p style="text-align:center;"><a href="" target="blank"></a></p>  
</div>

</div>


</div>