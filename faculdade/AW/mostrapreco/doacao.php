<?php
@session_start();
require_once "includes/config.php";
$_SESSION['pagina'] = "doacao.php";
$idPessoa = $_SESSION['idPessoa'];
include verificaPermissao;
 ?>

<div class="col-md-10" style="background-color:#FFF;">

  <div class="well-lg" style="background-color: #fff;margin-top: 20px;min-height:;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;">
     <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

    <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;word-wrap:break-word;">Faça uma doação</h1>

    </div>

		<h1 style="font-weight: bold; font-size:2em;">Bitcoin <i class="fab fa-bitcoin" style="font-size:0.5em;"></i></h1>
		<p>
      <input type="text" style="word-wrap:break-word;margin-top:5px;" class="form-control" id="Bitcoin" value="134RA6gibc3dTQs935jrMJBcR1wkqVms36" readonly>
      <a href="#" onclick="copiarTexto('Bitcoin')"> <i class="fas fa-clipboard"></i> Copiar</a>
    </p>

		<br>
		<h1 style="font-weight: bold; font-size:2em;">Nano</h1>
		<p>
      <input type="text" style="word-wrap:break-word;margin-top:5px;" class="form-control" id="Nano" value="xrb_3h638zpefxz3syxzzpymdziu9onrm59hxz7dunhfa6wqtmmbchftb3hteaon" readonly>
      <a href="#" onclick="copiarTexto('Nano')"><i class="fas fa-clipboard"></i> Copiar</a>
    </p>
		<br>
		<h1 style="font-weight: bold; font-size:2em;">Monero <i class="fab fa-monero" style="font-size:0.5em;"></i></h1>
		<p>
      <input type="text" style="word-wrap:break-word;margin-top:5px;" class="form-control" id="Monero" value="41xeep61Z8WfEbS3vHvkK5ACn47sC2vkWAJtXd3nJHgKTTZTs7tK7kSdbEMMx6mZtgLEudumf6aMFadhXihCtkB8RxB723f" readonly>
      <a href="#" onclick="copiarTexto('Monero')"><i class="fas fa-clipboard"></i> Copiar</a>
    </p>

  </div>

</div>

<script src="js/funcoes.js" charset="utf-8"></script>
