<?php

@session_start();

$NomeExibicao = $_SESSION['NomeExibicao'];

$_SESSION['pagina'] = "perfil.php";

$pagina = $_SESSION['pagina'];

$idPessoa = $_SESSION['idPessoa'];

require_once "includes/config.php";

require_once conexao;

$query="SELECT * FROM `emails`
INNER JOIN usuarios ON emails.idPessoa=usuarios.idPessoa
INNER JOIN pessoas ON emails.idPessoa=pessoas.idPessoa
WHERE emails.idPessoa = $idPessoa";

$executa = $mysqli->query($query);

$dados = $executa->fetch_assoc();

if ($dados['TipoUsuario'] == 'Cliente' or $dados['TipoUsuario'] == 'Adm') {

  $sqlTipo = "SELECT * FROM `pessoafisica`
  WHERE idPessoa = ".$dados['idPessoa']."";

  $executaTipo = $mysqli->query($sqlTipo);
  $dadosTipo = $executaTipo->fetch_assoc();

}

elseif ($dados['TipoUsuario'] == 'Organização') {

  $sqlTipo = "SELECT * FROM `pessoajuridica`
  WHERE idPessoa = ".$dados['idPessoa']."";

  $executaTipo = $mysqli->query($sqlTipo);
  $dadosTipo = $executaTipo->fetch_assoc();

}
?>

<div class="col-md-10" style="margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;margin-top: 5px;">
<div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;margin-top: 20px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px">Meu Perfil </h1>

 </div>

<div class="well-sm col-md-10 col-md-offset-1 col-xs-12" style="border:4px solid lightgray;border-radius:10px;min-height:150px;">
<div class="row">
  <div class="col-md-5 ">
  <img src="imagens/imgUsuarios/<?php echo $dados['FotoPerfil']; ?>" class="img-rounded center-block" alt="" height="200" width="200">
  </div>

  <div class="col-md-7 col-xs-12" style="margin-top:30px;word-wrap:break-word;">
  <p style="margin-top:5px;"><span style="font-weight:bold;">Nome para exibição:</span> <?php echo $dados['NomeExibicao']; ?></p>
  <p style="margin-top:5px;"><span style="font-weight:bold;">Nome ou razão social:</span> <?php echo $dados['NomeRazaoSocial']; ?></p>
  <p style="margin-top:5px;"><span style="font-weight:bold;">Email:</span> <?php echo $dados['Email']; ?></p>
  <p style="margin-top:5px;"><span style="font-weight:bold;"><?php echo $dados['TipoPessoa'] ?>:</span> <?php if (!empty($dadosTipo['CPF'])) {
    echo @$dadosTipo['CPF'];
  }
  else {
    echo @$dadosTipo['CNPJ'];
  }; ?></p>

  <p style="margin-top:5px;"><span style="font-weight:bold;">Conectar ao Facebook: </span>Em breve</p>

  <p style="margin-top:5px;"><span style="font-weight:bold;">Conectar ao Google: </span>Em breve</p>


  </div>

</div>


<div class="col-md-12" style="text-align:center;">
<!-- <div class="row" style="display:inline;">
<p style="display:inline;font-size:34px;padding:5px;"><i class="fab fa-facebook-square"></i></p>
<p style="display:inline;font-size:34px;padding:5px;"><i class="fab fa-twitter-square"></i></p>
<p style="display:inline;font-size:34px;padding:5px;"><i class="fab fa-youtube"></i></p>
<p style="display:inline;font-size:34px;padding:5px;"><i class="fab fa-instagram"></i></p>
<p style="display:inline;font-size:34px;padding:5px;"><i class="fab fa-linkedin"></i></p>
</div> -->
  <hr>
  <?php include "modalEditaDadosPessoais.php"; ?>
  </div>

</div>


<div class="col-md-12">
<h1 class="text-center" style="margin-top: 10px;font-weight:bold;font-size:1.5em;margin-bottom:15px;">Localização atual</h1>


    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height:500px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height:500px;
        margin: 0;
        padding: 0;
      }
    </style>

    <div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Localização encontrada.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
        //alert(google.maps.address);
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCckdL4kTGhnJoLjj9M3BSSbSfn8YQutgE&callback=initMap">
    </script>
<hr>

</div>
</div>


<div class="col-sm-4 col-sm-offset-4">

	<br>
</div>
</div>




</div>


</div>

</div>
