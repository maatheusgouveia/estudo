<?php
@session_start();
require_once "includes/config.php";
$_SESSION['pagina'] = "configuracoes.php";
$idPessoa = $_SESSION['idPessoa'];
include verificaPermissao;
 ?>
 <style>
 .switch {
   position: relative;
   display: inline-block;
   width: 60px;
   height: 34px;
 }

 .switch input {display:none;}

 .slider {
   position: absolute;
   cursor: pointer;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   background-color: #ccc;
   -webkit-transition: .4s;
   transition: .4s;
 }

 .slider:before {
   position: absolute;
   content: "";
   height: 26px;
   width: 26px;
   left: 4px;
   bottom: 4px;
   background-color: white;
   -webkit-transition: .4s;
   transition: .4s;
 }

 input:checked + .slider {
   background-color: #2196F3;
 }

 input:focus + .slider {
   box-shadow: 0 0 1px #2196F3;
 }

 input:checked + .slider:before {
   -webkit-transform: translateX(26px);
   -ms-transform: translateX(26px);
   transform: translateX(26px);
 }

 /* Rounded sliders */
 .slider.round {
   border-radius: 34px;
 }

 .slider.round:before {
   border-radius: 50%;
 }
 </style>
<div class="col-md-10" style="background-color:#FFF;">

  <div class="well-lg" style="background-color: #fff;margin-top: 20px;min-height:;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;">
     <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

    <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Configurações</h1>

    </div>

    <form action="acoes/executaConfiguracoes.php" method="POST">
      <?php if ($_SESSION['TipoUsuario'] == "Adm" or $_SESSION['TipoUsuario'] == "Cliente") { ?>
      <div class="form-group">
      <label style="font-weight: bold;" for="promocoes">Receber notificações de promoções por email:</label>
      <label class="switch">
        <input type="checkbox" checked>
        <span class="slider round"></span>
      </label>
      </div>
      <?php  } ?>

      <?php if ($_SESSION['TipoUsuario'] == "Adm" or $_SESSION['TipoUsuario'] == "Organização") { ?>
      <div class="form-group">
      <label style="font-weight: bold;" for="relatorios">Receber relatórios por email:</label>
      <label class="switch">
        <input type="checkbox" checked>
        <span class="slider round"></span>
      </label>
      </div>
      <?php  } ?>

      <?php if ($_SESSION['TipoUsuario'] == "Adm" or $_SESSION['TipoUsuario'] == "Cliente") { ?>
      <div class="form-group">
      <label style="font-weight: bold;" for="newsletter">Receber emails da NewsLetter:</label>
      <label class="switch">
        <input type="checkbox" checked>
        <span class="slider round"></span>
      </label>
      </div>
      <?php  } ?>

     <div class="submit">
         <input type="submit" value="Salvar" class="btn btn-lg  " style=" background-color: #8A2BE2; border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;color: #fff;">
     </div>
    </form>

  </div>

</div>

<h2>Toggle Switch</h2>

<label class="switch">
  <input type="checkbox">
  <span class="slider"></span>
</label>

<label class="switch">
  <input type="checkbox" checked>
  <span class="slider"></span>
</label><br><br>

<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>

<label class="switch">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
