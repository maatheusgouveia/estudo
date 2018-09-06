 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!DOCTYPE html>
<html>
<head>
  <?php
  include "includes/config.php";
  include headers; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Redefinição de Senha - Mostra Preço</title>
</head>

<body>

<?php include topo; ?>

<section class="container-fluid recentes" style="background-color: #fff ; text-align:center">

    <div class="container" style="background-color:#fff;margin-top:20px; margin-bottom: 20px;">

  <div class="col-12">

<div class="col-sm-8 col-sm-offset-2" style="box-shadow: 2px 2px 3px 3px lightgray;">

<hr>

<div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 70px;border-bottom: 10px solid #60338E;">
     <h1 class="text-center text-capitalize"  style="font-size: 2em;margin-top: 5px;font-weight:bold;">Redefinir Senha</h1>
</div>

<?php
$CodSeguranca = $_GET['CodSeguranca'];

@$msg = $_GET['msg'];

    if (!empty($msg)) {
      echo $msg;

    } ?>

    <form method="POST" action="acoes/executaRedefinirSenha.php" id="form_cadastro">

      <div class="form-group">

        <?php $Email = strip_tags(addslashes($_GET['Email'])); ?>

        <input type="hidden" name="Email" value="<?php echo $Email; ?>">

    <label for="CodigoSegurança">Código de segurança</label>

    <input type="text" class="form-control" id="CodigoSegurança" name="CodigoSegurança" placeholder="Cole aqui o código enviado para o seu email" value="<?php echo $CodSeguranca; ?>" minlength="6" >

    </div>

    <div class="form-group">

    <label for="novaSenha">Nova senha</label>

    <input type="password" class="form-control" id="novaSenha" name="novaSenha" placeholder="Nova Senha" minlength="6">

    <small>Mínimo de 6 caracteres.</small>
<span onclick="mostraSenha(this.id, 'novaSenha')" id="retornoNovaSenha"><i class="fas fa-eye"></i></i></span>
    </div>

<label for="repetesenha">Repita sua senha</label>

    <div class="form-group">

    <input type="password" class="form-control" id="repetesenha" name="repetesenha" placeholder="Confirmar senha" minlength="6">

    <small>Os dois campos de senha devem ser iguais.</small>
<span onclick="mostraSenha(this.id, 'repetesenha')" id="retornoRepeteSenha"><i class="fas fa-eye"></i></i></span>
    </div>

    <div class="form-group">

      <input type="submit" value="Confirmar" class="btn form-control" style="background-color: #8a2be2;border: #8a2be2;font-size: 16px;color:#fff;">

    </div>

  </form> <br>

    <a href="login.php" style="color: #8a2be2;"><i class="fa fa-reply" aria-hidden="true" style="color: #8a2be2;"></i> Voltar ao Login</a>

<hr>

    <br><br><br>

    </div>

  </div>

</div>

</section>

<?php include rodape ;

?>

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script src="jquery-3.2.1.min.js"></script>
<script src="jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>

<script src="funcoes.js"></script>
<script>
  $(document).ready(function(e) {
    $("#form_cadastro").validate({
      rules:{
          email:{
            required:true,
            email:true
          },
          novaSenha:{
            required:true,
            minlength:'6'
          },
          repetesenha:{
            required:true,
            equalTo:"#novaSenha"
          }
      },// campos validados
      messages:{
          email:{
            required:'O campo email é obrigatório!',
            email:'Informe um email válido!'
          },
          novaSenha:{
            required:'O campo senha é obrigatório!',
            minlength:'A senha deve ter no mínimo 6 caracteres!'
          },
          repetesenha:{
            required:'O campo confirmar senha é obrigatório!',
            equalTo:'As senhas devem ser iguais!'
          }
      }// mensagens
    }); // fim validação formulario
  });

</script>

<script src="<?php echo funcoesJs; ?>"></script>

</body>

</html>
