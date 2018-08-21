<div class="container-fluid topo">
<div class="container topo">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only white">Toggle navigation</span>
					<span class="icon-bar white"></span>
					<span class="icon-bar white"></span>
					<span class="icon-bar white"></span>
				</button>

				<a class="navbar-brand" href="<?php echo url; ?>" style="color:#FFF">
					<strong>InfoEbook</strong>
				</a>
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="<?php echo url; ?>">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="cadastroConta.php">Cadastro</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="#" data-toggle="modal" data-target="#modalLogin" id="btnLogin">Login Modal</a></li>
                 <li><a href="lista.php" class="lead" style="color:yellow;">
                 	
                 	<i class="fa fa-file-text-o" aria-hidden="true"></i> 
                 Minha Lista
                 <?php
                 	
                 	if (isset($_SESSION['lista'])) {
                 		// pegar a quantidade de itens do array, para isso vamos verificar o tamanho do array
                 		$quantidadeItens = sizeof($_SESSION['lista']);
                 		echo "<span class='badge'> $quantidadeItens </span>";
                 	}
                 	?>
                 </a></li>
				</ul>
			</div><!--/.nav-collapse -->
</div>
</div>


<!-- Modal Login-->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Título do modal</h4>
      </div>
      <div class="modal-body">
        
      		
      			<div class="row">
      				<div class="col-sm-8 col-sm-offset-2">

      	            <form method="post" action="autenticaLogin2.php" id="formLogin">
            <div class="form-group">
<input type="email" name="email" class="form-control" placeholder="Email" id="email" required>

<span id="retornoEmail"></span>

            </div>

            <div class="form-group"> 
              <input type="password" name="senha" placeholder="Senha" class="form-control"  required>
 

            </div>

            <div class="form-group"><span id="error-confirma_senha" class="error"></span>

            </div>

            <div class="form-group"> 
              <button type="submit" class="form-control btn btn-primary">Entrar</button>
            </div>
              
            <div id="retornoForm"></div>  
            </form>
             </div>
           </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
       </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	
	$(document).ready(function(){

		$("#btnLogin").click(function(){
			$("#email").focus();
		});


		$("#formLogin").submit(function(){
				url = $(this).attr("action");

				$.ajax({
				url:url,
				type:"POST",
				data:$(this).serialize(),
				beforeSend: carregando("retornoForm","Autenticando..."),
				success: function(dados){
					if(dados!=1){
					$("#retornoForm").html(dados);
				     }else{
				     	location.href="admin/index.php";
				     }
					}
				
				
				});	

			return false;		    	


		});

$('#modalLogin').on('shown.bs.modal', function (e) {
   $('#email').val('');
   $("#email").focus();
})

	});

</script>