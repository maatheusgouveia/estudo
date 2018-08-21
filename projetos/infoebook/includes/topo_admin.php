<div class="container-fluid topo">
<div class="container topo">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only white">Toggle navigation</span>
					<span class="icon-bar white"></span>
					<span class="icon-bar white"></span>
					<span class="icon-bar white"></span>
				</button>

				<a class="navbar-brand" href="#" style="color:#FFF">
					<strong><i class="fa fa-cogs" aria-hidden="true"></i> InfoEbook</strong>
				</a>
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					                <li class="active"><a href="#">Home</a></li>
                <li><a href="<?php echo url."/admin/apostilas/listaApostilas.php"; ?>">Apostilas</a></li>

                <?php if (isset($_SESSION['tipo_usuario'])   && $_SESSION['tipo_usuario']==1) {  ?>
                    
                <li><a href="<?php echo url."/admin/categoria/cadastroCategoria.php"; ?>">Categorias</a></li>
                
               <?php } ?>

                
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><?php echo $_SESSION['email']; ?> <span class="caret"></span></a>
                
                
                
                <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
    						<hr style="margin-top:15px; margin-bottom:15px;">
    						<li role="presentation">
    							<a role="menuitem" tabindex="-1" href="<?php echo url."/admin/perfil/cadastroPessoa.php"; ?>"><i class="fa fa-list-alt" aria-hidden="true"></i> Editar meus dados</a>
    						</li>
                            <li><a href="<?php echo url."/admin/meus_logs.php"; ?>">Meus logs</a></li>
    						<li role="presentation">
    							<a role="menuitem" tabindex="-1" href="#"><i class="fa fa-key" aria-hidden="true"></i> Redefinir Senha</a>
    						</li>

    						<li role="presentation" class="well" style="margin-top:15px; margin-bottom:-5px; padding:10px; background-color:#f5f5f5;">
    								<a href="<?php echo url;?>/admin/logoff.php" class="btn btn-sm btn-primary" style="width:45%;">Sair</a>

    								<!-- <button class="btn btn-sm btn-default">Trocar Conta</button> -->
    						</li>
    					</ul>
                </li>
				</ul>
			</div><!--/.nav-collapse -->
</div>
</div>