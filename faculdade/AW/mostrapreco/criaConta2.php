<?php include "includes/config.php";

// Tab Pessoas
$nomeRazaoSocial = addslashes(strip_tags($_POST['nomeRazaoSocial']));

// Tab emails
$email = addslashes(strip_tags($_POST['email']));

// Tab pessoa física ou pessoa jurídica
$tipoUsuario = addslashes(strip_tags($_POST['tipoUsuario']));
$cpfcnpj = addslashes(strip_tags($_POST['cpfcnpj']));

if (empty($nomeRazaoSocial) or empty($email) or empty($tipoUsuario) or empty($cpfcnpj)) {
  header("location:criaConta.php?msg=<div class='alert alert-warning'>Por favor, preencha todos os campos</div>");
}

?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="libs/bootstrap/js/bootstrap.min.js"></script> -->
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
  <title>Finalizar Cadastro - Mostra Preço</title>
</head>

<body>

<?php include topo; ?>

<!-- <div class="container-fluid back hidden-xs hidden-sm" style="background-position: center;height: 300px;margin: 0;padding: 0">

<?php //include("background.php"); ?>

</div> -->

<section class="container-fluid recentes" style="background-color: #fff ; text-align:center">

    <div class="container" style="background-color:#fff;margin-top:20px; margin-bottom: 20px;">

    <div class="col-12">

    <div class="col-sm-8 col-sm-offset-2" style="box-shadow: 2px 2px 3px 3px lightgray;">

    <hr>

    <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 70px;border-bottom: 10px solid #60338E;margin-bottom: 10px;">
    <h1 class="text-center" style="margin-bottom: 20px;font-size: 2em;margin-top: 5px;font-weight:bold;">Finalizar Cadastro</h1>

    </div>

    <form method="post" action="acoes/finalizaCadastro.php" id="form_cadastro2">

<!-- Reenviando os dados do primeiro formulário para salvar no banco -->
      <input type="hidden" name="nomeRazaoSocial" value="<?php echo $nomeRazaoSocial; ?>">
      <input type="hidden" name="tipoUsuario" value="<?php echo $_POST['tipoUsuario']; ?>">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="cpfcnpj" value="<?php echo $cpfcnpj; ?>">

    <div class="form-group">

      <label for="nomeUsuario">Como devemos te chamar?</label>

      <input type="text" class="form-control" id="NomeExibicao" name="NomeExibicao" placeholder="Este é o nome que aparecerá para outros usuários">

    </div>

    <div class="form-group">

    <label for="SenhaLogin">Digite uma senha</label>

    <input type="password" class="form-control" id="SenhaLogin" onkeyup="TestaSenha(); return false;" name="SenhaLogin" placeholder="Senha" minlength="6"><div id="seguranca"></div>

    <small class="small">Mínimo de 6 caracteres, use letras maiúsculas e minúsculas, números e caracteres especiais</small>

    <span onclick="mostraSenha(this.id, 'SenhaLogin')" id="retornoSenha"><i class="fas fa-eye"></i></i></span>

    </div>

<label for="RepeteSenha">Repita sua senha</label>

    <div class="form-group">

    <input type="password" class="form-control" id="RepeteSenha" name="RepeteSenha" placeholder="Confirmar senha" minlength="6">

    <small class="small">Os dois campos de senha devem ser iguais.</small>

    <span onclick="mostraSenha(this.id, 'RepeteSenha')" id="retornoRepeteSenha"><i class="fas fa-eye"></i></i></span>

    </div>

    <!-- other form fields -->

	<!-- <script src="https://authedmine.com/lib/captcha.min.js" async></script>
	<div class="coinhive-captcha" data-hashes="256" data-key="Q1hXCrgKVVDjvp6zJi0JI6oZWsuHTd1A" data-whitelabel="true" data-disable-elements="input[type=submit]" >
		<em>Carregando...<br>
		Por favor, desative o adblock!</em>
	</div> -->
<br>

    <div class="form-group">

      <input type="submit" value="Criar conta" class=" form-control" style="background-color: #8a2be2;border: #8a2be2;font-size: 16px;color: #fff;">

      <button type="button" class=" form-control" style="background-color: #8a2be2;border: #8a2be2;font-size: 16px; color:white; margin-top: 10px;color: #fff;"><a href="javascript:history.back(-2)" style="color:white;">Voltar</a></button>

    </div>

  </form> <br>

    <p style="font-weight: bold;">Clicando em cadastrar você estará concordando com os<a href="termos-de-uso.php" style="color: #8a2be2;"> Termos e condições de uso </a> </p>

      <br>


      <a href="login.php" style="color: #8a2be2;"><i class="fa fa-reply" aria-hidden="true" style="color: #8a2be2;"></i> Voltar ao Login</a>

<hr>

    <br><br>

    <br>

    </div>

  </div>

</div>
<?php include btnMensagem;?>

</section>

<?php include rodape ;

?>

<!-- <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<script src="jquery-3.2.1.min.js"></script> -->

<script src="libs/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>

<script src="js/funcoes.js"></script>

<script>

  $(document).ready(function(e) {

    $("#form_cadastro2").validate({

      rules:{

          SenhaLogin:{

            required:true,

            minlength:'6'

          },

          RepeteSenha:{

            required:true,

            equalTo:"#SenhaLogin"

          }

      },// campos validados

      messages:{

          SenhaLogin:{

            required:'O campo senha é obrigatório!',

            minlength:'A senha deve ter no mínimo 6 caracteres!'

          },

          RepeteSenha:{

            required:'O campo confirmar senha é obrigatório!',

            equalTo:'As senhas devem ser iguais!'

          }

      }// mensagens

    }); // fim validação formulario

  });

</script>

<script type="text/javascript">
function TestaSenha()
{
    var valor = document.getElementById('SenhaLogin').value;
        var d = document.getElementById('seguranca');
    ERaz = /[a-z]/;
    ERAZ = /[A-Z]/;
    ER09 = /[0-9]/;
    ERxx = /[@!#$%&*+=?|-]/;

    if(valor.length == ''){
        d.innerHTML = '<h4>Seguranca da senha: !</h4>';
    } else {
        if(valor.length < 5){
            d.innerHTML = '<h4>Seguranca da senha: <font color=\'red\'> BAIXA</font></h4>';
        } else {
            if(valor.length > 7 && valor.search(ERaz) != -1 && valor.search(ERAZ) != -1 && valor.search(ER09) != -1 || valor.length > 7 && valor.search(ERaz) != -1 && valor.search(ERAZ) != -1 && valor.search(ERxx) || valor.length > 7 && valor.search(ERaz) != -1 && valor.search(ERxx) != -1 && valor.search(ER09) || valor.length > 7  && valor.search(ERxx) != -1 && valor.search(ERAZ) != -1 && valor.search(ER09)){
                d.innerHTML = '<h4>Seguranca da senha: <font color=\'green\'> ALTA</font></h4>';
            } else {
                if(valor.search(ERaz) != -1 && valor.search(ERAZ) != -1 || valor.search(ERaz) != -1 && valor.search(ER09) != -1 || valor.search(ERaz) != -1 && valor.search(ERxx) != -1 ||valor.search(ERAZ) != -1 && valor.search(ER09) != -1 ||valor.search(ERAZ) != -1 && valor.search(ERxx) != -1 ||valor.search(ER09) != -1 && valor.search(ERxx) != -1){
                    d.innerHTML = '<h4>Seguranca da senha: <font color=\'orange\'> MEDIA</font></h4>';
                } else {
                    d.innerHTML = '<h4>Seguranca da senha: <font color=\'red\'> BAIXA</font></h4>';
                }
            }
        }
    }
}

</script>

</body>

</html>

<!-- $var=file_get_contents('');

echo $var; -->
