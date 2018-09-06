<?php @session_start();
@$FotoPerfil = $_SESSION['FotoPerfil']; ?>

<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5V8F27F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->

<style type="text/css">
  body{
    font-family: arial;
    text-decoration: none;
  }

</style>

<div class="container-fluid" id="topo" style="background-color: #60338E;min-height: 75px;">
	<div class="row">

		<div class="col-lg-1 col-md-1 col-xs-3" style="z-index:99999;">

    <span style="font-size:30px;cursor:pointer;color: #ece411;top: 50px;margin-left: 10%;" onclick="openNav()"><i class="fa fa-bars fa-1.5x" aria-hidden="true" style="margin-top: 20px;"></i></span>

    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-bars" aria-hidden="true" style="margin-top: 20px;"></i></a>
  <?php
  //require_once "../../includes/config.php";
  require_once conexao;
  $queryMenuCategorias = "SELECT NomeCategoria, idCategoria FROM categorias";
  $executaQueryMenuCategorias = $mysqli->query($queryMenuCategorias);

  while($dadosMenuCategorias=$executaQueryMenuCategorias->fetch_assoc()){
   ?>
  <button class="botao-dropdown" style="color: #ffffff;"> <i class="fa fa-caret-down"></i><?php echo $dadosMenuCategorias['NomeCategoria']; ?>
  </button>
  <div class="conteudo-dropdown">
    <?php
    $queryMenuSubCategorias="SELECT NomeSubCategoria, idSubCategoria FROM subcategorias WHERE subcategorias.idCategoria = ".$dadosMenuCategorias['idCategoria']."";
    $executaQueryMenuSubCategorias = $mysqli->query($queryMenuSubCategorias);

    while($dadosMenuSubCategorias=$executaQueryMenuSubCategorias->fetch_assoc()){ ?>
    <a href="resultado.php?idSubCategoria=<?php echo base64_encode($dadosMenuSubCategorias['idSubCategoria']); ?>"><?php echo $dadosMenuSubCategorias['NomeSubCategoria']; ?></a>

  <?php } ?>
  </div>

<?php } ?>

  <button class="botao-dropdown" style="color: #ffffff;"> <i class="fa fa-caret-down"></i>Empresas
  </button>
  <div class="conteudo-dropdown">
    <?php
    $queryMenuEmpresas="SELECT idTipoLoja, TipoLoja FROM tiposloja";
    $executaQueryMenuEmpresas = $mysqli->query($queryMenuEmpresas);

    while($dadosMenuEmpresas=$executaQueryMenuEmpresas->fetch_assoc()){ ?>
    <a href="resultado.php?idTipoLoja=<?php echo base64_encode($dadosMenuEmpresas['idTipoLoja']); ?>"><?php echo $dadosMenuEmpresas['TipoLoja']; ?></a>

  <?php } ?>
  </div>

  <button class="btn-sm todasCategorias" style="color: #fff;font-size: 20px;position: fixed;left:0;bottom: 0;margin-left: 40px;background-color: #60338E;border: 2px solid #fff;border-radius:10px;margin-bottom:20px;">Todas as Categorias</button>

    <style>
    @media screen and (max-width: 1024px) {
    .todasCategorias {margin-left: 70px;}
  }
    </style>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.display = "block";
}

function closeNav() {
    document.getElementById("mySidenav").style.display = "none";
}

/* Script do botao dropdown */
var dropdown = document.getElementsByClassName("botao-dropdown");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var Conteudodropdown = this.nextElementSibling;
    if (Conteudodropdown.style.display === "block") {
      Conteudodropdown.style.display = "none";
    } else {
      Conteudodropdown.style.display = "block";
    }
  });
}
</script>
</div> <!--  aqui  col-sm-2  -->

		<div class="col-lg-2 col-md-2 col-xs-9 logo-top" style="margin-top:5px;margin-left: -3%;">
			<a href="index.php"><img src="imagens/mostrapreco/Logo_Mostra_Preco_Branco.png" height="50px" width="190" class="logo-top" style="margin-top:5px;" ></a>
		</div>

		<div class="col-lg-6 col-md-6 col-xs-12 busca" style="z-index: 0;margin-left: 1%;" >
			<div class="div" style="margin-top: 10px;">
<form action="resultado.php" method="GET" id="FormBusca">
  <input type="hidden" name="Localizacao" id="Localizacao" value="">
  <input type="hidden" name="Bairro" id="Bairro" id="Localizacao" value="">
            <div id="custom-search-input">
                <div class="input-group">
                    <input type="text" class="form-control input-lg" name="Busca" id="Busca" placeholder="Buscar Produtos ou Estabelecimentos" required/>
                    <span class="input-group-btn" >
                        <button class="btn btn-lg" id="speakBtn" style="background-color: #fff; border:1px solid #fff;border-radius: 2px;padding: 13px;height: 46px;margin-left:0.1px;margin-right:0.1px;border:0; ">
                            <i class="fas fa-microphone" style="color: #E9E339;"></i>
                        </button>
                    </span>
                    <span class="input-group-btn" >
                        <button type="submit" class="btn btn-lg" style="background-color: #8A2BE2; border:1px solid #8A2BE2;border-top-right-radius: 3px;border-bottom-right-radius: 3px;padding: 13px;height: 46px; ">
                            <i class="glyphicon glyphicon-search" style="background-color: #8A2BE2;color: #E9E339;"></i>
                        </button>
                    </span>
                </div>
            </div>
</form>
<!-- script reconhecimento de voz -->
<script>
    window.addEventListener('DOMContentLoaded', function() {
        var speakBtn = document.querySelector('#speakBtn');
        // testa se o navegador suporta o reconhecimento de voz
        if (window.SpeechRecognition || window.webkitSpeechRecognition) {
            // captura a voz
            var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
            var recognition = new SpeechRecognition();
            // inicia reconhecimento
            speakBtn.addEventListener('click', function(e) {
                recognition.start();
            }, false);
            // resultado do reconhecimento
            recognition.addEventListener('result', function(e) {
                console.log(e);
                var result = e.results[0][0].transcript;
                console.log(result);
                document.getElementById("Busca").value = result;
                function enviaForm(){
                  document.getElementById("FormBusca").submit();
                }
                enviaForm();

            }, false);
        } else {
            //alert('Infelizmente este navegador ainda não suporta reconhecimento de voz :/');
        }
    }, false);

</script>
<!-- script reconhecimento de voz -->
<!-- localização do usuario -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript">
            navigator.geolocation.getCurrentPosition(function(posicao) {
                var url = "https://nominatim.openstreetmap.org/reverse?lat="+posicao.coords.latitude+"&lon="+posicao.coords.longitude+"&format=json&json_callback=preencherDados";

            var script = document.createElement('script');
            script.src = url;
            document.body.appendChild(script);

            preencherDados();

            });

            function preencherDados(dados) {
              document.querySelector('#Localizacao').value = dados.address.city_district;
              document.querySelector('#Bairro').value = dados.address.suburb;
              var Localizacao = dados.address.city_district;
              var Bairro = dados.address.suburb;
              sessionStorage.setItem("Cidade", Localizacao);
              sessionStorage.setItem("Bairro", Bairro);
              //var cidadeLocal = sessionStorage.getItem("Cidade");
              //var bairroLocal = sessionStorage.getItem("Bairro");
            }

            </script>
<!-- localização do usuario -->

<?php
//echo $LocalizacaoSession;
//echo $BairroSession;
if (!empty($LocalizacaoSession) and empty($_SESSION['Localizacao'])) {
    $_SESSION['Localizacao'] = $LocalizacaoSession;
}
if (!empty($BairroSession) and empty($_SESSION['Bairro'])) {
    $_SESSION['Bairro'] = $BairroSession;
}
 ?>
</div>
		</div>

		<div class=" col-md-2 col-lg-2  login" style="margin-bottom: 10px;margin-left: 1.5%;">

      <?php @$NomeExibicao= @$_SESSION['NomeExibicao'];

            @$TipoUsuario = @$_SESSION['TipoUsuario']; ?>

              <div class="dropdown" style="margin-top:10px;">
            <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-lg" size="9" data-target="#" href="#" style="background-color: #60338E; border: 2px solid #8A2BE2;color: #FFF;font-size: 0.97em;width:300px;margin-bottom:5px;">

              <?php if(empty($_SESSION['NomeExibicao'])){echo "Fazer Login";}else{echo @$NomeExibicao;}
  ?> <span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="login.php">Fazer login ou Cadastrar-se</a></li>
              <li><a href="painelAdministrativo.php">Painel de controle</a></li>
              <li><a href="notificacoes.php">Notificações <span class="badge"><?php
              require_once conexao;
              @$idUsuario = $_SESSION['idUsuario'];
              @$queryNotificacao = "SELECT * FROM notificacoes WHERE idUsuario = '$idUsuario' OR idUsuario IS NULL";
              @$executaQueryNotificacao = $mysqli->query($queryNotificacao);
              @$linhasNotificacao = $executaQueryNotificacao->num_rows;
              $erro = $mysqli->error;
              echo $linhasNotificacao;
              ?></span></a></li>
              <li class="divider"></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="logoff.php">Sair</a>

              </li>
            </ul>
            </div>

		</div>

	</div>
  </div>
