<?php
require_once 'includes/config.php';
 ?>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include headers; ?>
<style>
    a:focus, a:hover {
     /* color:#fff; */
    text-decoration: none;
}
html{
  font-family: arial;
}
h1{
  font-size: 2em;
  margin-bottom: 10px;
}
</style>

  <title>Fazer login - Mostra Preço</title>
  <script src="<?php echo funcoesJs; ?>"></script>
</head>

<body>

<?php include topo; ?>

<section class="container-fluid recentes" style="background-color: #fff ; text-align:center">

    <div class="container" style="background-color:#fff; margin-top:20px; margin-bottom: 20px;">

    <div class="col-12">

    <div class="col-sm-8 col-sm-offset-2" style="box-shadow: 2px 2px 3px 3px lightgray;">

     <hr>

     <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 70px;border-bottom: 10px solid #60338E;">
     <h1 class="text-center text-capitalize"  style="font-size: 2em;margin-top: 5px;font-weight:bold;">Fazer login</h1>
    </div>
   <?php @$msg = $_GET['msg'];

    if (!empty($msg)) {
      echo $msg;
    }

    if ($msg=="<div class='alert alert-warning'>Ative sua conta para continuar!</div>") {

      ?>
       <a href="acoes/reenviaAtivacao.php">
         <button class='btn btn-sm' style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color:#fff;">Reenviar email de confirmação</button>
       </a>

   <?php } ?>

    <form method="POST" action="acoes/validaLogin.php">
     <br>
    <label style="font-weight: bold;float: left;margin-bottom: 5px;">Email: </label>

         <div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="Email" > <br>
        </div>

    <label style="font-weight: bold;float: left;margin-bottom: 5px;">Senha:  </label>

         <div class="form-group" >
         <input type="password" id="senhaLogin" name="senhaLogin" class="form-control" placeholder="Senha" > <br>
         </div>
           <br>

      <div class="form-group">
      <input type="submit" value="Fazer login" class="form-control" style="background-color: #8a2be2;border: #8a2be2;font-size: 16px;color: #fff;">
      </div>

      <?php
    // require_once raiz.'/acoes/acoesFB/fb.php';
    // $helper=$fb->getRedirectLoginHelper();
    //
    // $permissions=array('email');
    //
    // $loginUrl=$helper->getLoginUrl(raiz.'/acoes/acoesFB/callback.php', $permissions);
    ?>

<a href="<?php echo htmlspecialchars($loginUrl); ?>">Fazer Login Com Facebook</a>

    <br><br>

    <a href="criaConta.php" style="margin-right: 20px;color: #8a2be2; ">Não tem uma conta? Cadastre-se!</a>

    <a href="recuperarSenha.php" style="color: #8a2be2;">Esqueci minha senha</a>

<hr>
    <br>
</form>

    </div>
  </div>
</div>

</section>

<?php include rodape;?>

</body>
</html>
