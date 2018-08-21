<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Cadastro Conta</title>
   <?php include(headers); ?>
  </head>
  <body>
    
<?php include(topo);?>
  
  <div class="container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h1>Crie uma conta gratuita</h1>
            <p class="col-sm-4 col-sm-offset-4">Com a sua conta você terá acesso ao painel de controle do site para gerenciar todo o conteúdo.</p>
           </div>
        </div>
    </div>
  </div>
  
  <div class="container">
  	<div class="row">
  		<div class="col-sm-4 col-sm-offset-4">
        	<div class="box-cinza">
            
            <form method="post" action="finalizaCadastro.php" id="formCadastro">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email" id="email" onChange="javascript:enviaDados(this.value,'valida_email','error_email','Validando e-mail...')">
              <span id="error_email" class="error"></span>
            </div>

            <div class="form-group"> 
              <input type="password" name="senha" placeholder="Senha" class="form-control" id="senha" >
              <small>Mínimo 6 caracteres</small>
             

            </div>

            <div class="form-group">

              <input type="password" name="confirma_senha" placeholder="Repetir senha" class="form-control" id="confirma_senha">
                           
            </div>

            <div class="form-group"> 
              <button type="submit" class="form-control btn btn-primary">Criar conta</button>
            </div>
              
            </form>

            </div>

        </div>

  	</div>
 
  </div>
  
  
<div class="container-fluid footer">
	<div class="container">
    	<div class="row">
        	<div class="col-sm-12 sobre">Desenvolvido por 3EL</div>
        </div>
    </div>
</div>  


<script src="jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>

<script>
  $(document).ready(function(){


$('#formCadastro').validate({
	rules:{
			email:{
			required:true,
			email:true},
			
			senha:{
			required:true,
			minlength:'6'
			},
			
		confirma_senha:{
			required:true,
			equalTo:"#senha"
			}
		
     },
	messages:{
		email:{
			required:'O campo e-mail é obrigatório',
			email:'Informe um e-mail válido'},
			
			senha:{
			required:'A senha é obrigatória',
			minlength:'A senha deve te no mínimo 6 caracteces'
			},
			
		confirma_senha:{
			required:'Campo obrigatório',
			equalTo:"O campo senha deve ser igual a senha"
			}
		}
		
	});



});

</script>    
  </body>
</html>