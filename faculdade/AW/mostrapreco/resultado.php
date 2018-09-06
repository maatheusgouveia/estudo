<?php include "includes/config.php";?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php
require_once conexao;

@session_start();

@$idUsuario = $_SESSION['idUsuario'];
@$idPessoa = $_SESSION['idPessoa'];

// identifica o número de itens que irá mostrar em uma página
$visualizar = "10";
// verifica se existe o parâmetro pagina ( via GET )
// no estado incial vale 01 - primeira página
// em um segundo momento identifica a página a ser aberta ( limite do SELECT )
  if (!isset($_GET['pagina'])) {
$pagina = "0";
  } else {
$pagina = $_GET['pagina'];
  }

@$NomeUsuario = $_SESSION['NomeUsuario'];

@$TipoUsuario = $_SESSION['TipoUsuario'];

@$Localizacao = strip_tags(addslashes($_GET['Localizacao']));

if(!empty($Localizacao)){
  $_SESSION['Localizacao'] = $Localizacao;
}

if(empty($Localizacao) and !empty($_SESSION['Localizacao'])){
  $Localizacao = $_SESSION['Localizacao'];
}

@$Bairro = strip_tags(addslashes($_GET['Bairro']));

if(!empty($Bairro)){
  $_SESSION['Bairro'] = $Bairro;
}

if(empty($Bairro) and !empty($_SESSION['Bairro'])){
  $Bairro = $_SESSION['Bairro'];
}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php //include 'headers.php' ?>

<link rel="stylesheet" href="css/estiloSlider.css">

<?php include headers; ?>

	<title>Resultado da Busca - Mostra Preço</title>

  <style>
html{
  font-family: arial;
}

h1{
  font-size: 2em;
  margin-bottom: 10px;
}

a:focus, a:hover {
     /* color:#fff; */
    text-decoration: none;
}

  </style>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <!-- identificar cidade do usuário -->

  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript">
  navigator.geolocation.getCurrentPosition(successCallback,errorCallback,{maximumAge:600000, timeout:0});

    var geocoder;

    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
  }
  //Get the latitude and the longitude;
  function successFunction(position) {
      var lat = position.coords.latitude;
      var lng = position.coords.longitude;
      codeLatLng(lat, lng)
  }

  function errorFunction(){
      alert("Geocoder failed");
  }

  function initialize() {
      geocoder = new google.maps.Geocoder();
  }

  function codeLatLng(lat, lng) {
    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({'latLng': latlng}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        console.log(results)
        if (results[1]) {
          //formatted address
          alert(results[0].formatted_address)
          //find country name
          for (var i=0; i<results[0].address_components.length; i++) {
              for (var b=0; b<results[0].address_components[i].types.length;b++) {
                //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                  if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
                      //this is the object you are looking for
                      city= results[0].address_components[i];
                      break;
                  }
              }
          }

          } else {
            alert("No results found");
          }
        } else {
          alert("Geocoder failed due to: " + status);
        }
      });
    }
  </script>



  <!-- fim cidade usuario -->
</head>
<body onload="javascript:initialize()">



<?php include topo; ?>
<!-- <div class="container-fluid back hidden-xs hidden-sm" style="background-position: center;height: 300px;margin: 0;padding: 0">
<?php //include background; ?>
</div> -->

<?php

date_default_timezone_set('America/Sao_Paulo');

$dataAtual = date("Y-m-d");

include conexao;

@$Busca = addslashes(strip_tags($_GET['Busca']));

$consultaLocal = "SELECT * FROM `lojas`
WHERE NomeLoja LIKE '%$Busca%' OR NomeLoja = '$Busca'
ORDER BY NomeLoja ASC
LIMIT $pagina, $visualizar";

$executaConsultaLocal = $mysqli->query($consultaLocal);

$erro = $mysqli->error;

//echo $erro;

    $linhasL = $executaConsultaLocal->num_rows;

$consultaProduto = "SELECT * FROM `anuncios`
INNER JOIN lojas ON anuncios.idLoja = lojas.idLoja
INNER JOIN produtos ON anuncios.idProduto = produtos.idProduto
INNER JOIN marcas ON produtos.idMarca = marcas.idMarca
INNER JOIN subcategorias ON produtos.idSubCategoria = subcategorias.idSubCategoria
INNER JOIN categorias ON subcategorias.idCategoria = categorias.idCategoria
#INNER JOIN imagensprodutos ON produtos.idProduto = imagensprodutos.idProduto
WHERE ValidoDe<='$dataAtual' AND ValidoAte>='$dataAtual' AND NomeProduto LIKE '%$Busca%' OR NomeProduto = '$Busca' AND ValidoDe<='$dataAtual' AND ValidoAte>='$dataAtual' OR NomeMarca = '$Busca' AND ValidoDe<='$dataAtual' AND ValidoAte>='$dataAtual' OR NomeMarca LIKE '%$Busca%' AND ValidoDe<='$dataAtual' AND ValidoAte>='$dataAtual'
ORDER BY Preco ASC
LIMIT $pagina, $visualizar";

$executaConsultaProduto = $mysqli->query($consultaProduto);

$erro = $mysqli->error;

//echo $erro;

    $linhasP = $executaConsultaProduto->num_rows; ?>




<div class="container-fluid" style="margin-top: 20px;margin-bottom: 20px;min-height: 300px;">

  <div class="row">

    <div class="col-md-3">
      <div class="well-lg" style="background-color: #fff;border: 2px solid #eee;">
      <?php include "filtro.php"; ?>
    </div>
    </div>

     <div class="col-md-9" id="retorno">
       <h1 class="" style="font-weight: bold;">Resultados da Pesquisa</h1>

<?php

$consultaTotalLocal = "SELECT * FROM `lojas`
WHERE NomeLoja LIKE '%$Busca%' OR NomeLoja = '$Busca'
ORDER BY NomeLoja ASC";

$executaConsultaTotalLocal = $mysqli->query($consultaTotalLocal);

$erro = $mysqli->error;

//echo $erro;

$totalLocais = $executaConsultaLocal->num_rows;

$consultaTotalProduto = "SELECT * FROM `anuncios`
INNER JOIN lojas ON anuncios.idLoja = lojas.idLoja
INNER JOIN produtos ON anuncios.idProduto = produtos.idProduto
INNER JOIN marcas ON produtos.idMarca = marcas.idMarca
INNER JOIN subcategorias ON produtos.idSubCategoria = subcategorias.idSubCategoria
INNER JOIN categorias ON subcategorias.idCategoria = categorias.idCategoria
#INNER JOIN imagensprodutos ON produtos.idProduto = imagensprodutos.idProduto
WHERE ValidoDe<='$dataAtual' AND ValidoAte>='$dataAtual' AND NomeProduto LIKE '%$Busca%' OR NomeProduto = '$Busca' AND ValidoDe<='$dataAtual' AND ValidoAte>='$dataAtual' OR NomeMarca = '$Busca' AND ValidoDe<='$dataAtual' AND ValidoAte>='$dataAtual' OR NomeMarca LIKE '%$Busca%' AND ValidoDe<='$dataAtual' AND ValidoAte>='$dataAtual'
ORDER BY Preco ASC";

$executaConsultaTotalProduto = $mysqli->query($consultaTotalProduto);

$totalProdutos = $executaConsultaTotalProduto->num_rows;

        $totalLinhas = $totalProdutos+$totalLocais;
        if ($totalLinhas > 0) {
         echo  "<div class='row'><p class='badge' style='margin-left:25px;background-color:#60338E;'>".$totalLinhas." resultados encontrados</p></div>


         <div class='row'>";

         // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
             while(@$dadosP= $executaConsultaProduto->fetch_assoc())
            {//inicio do while

              $idImagemProduto = $dadosP['idProduto'];
              $idImagemPessoa = $dadosP['idPessoa'];
              $queryImagemProduto = "SELECT * FROM imagensprodutos WHERE idProduto = '$idImagemProduto' AND idPessoa = '$idImagemPessoa'";
              $executaQueryImagemProduto =$mysqli->query($queryImagemProduto);
              $dadosImagens= $executaQueryImagemProduto->fetch_assoc();

               if (!empty($dadosImagens['Caminho'])) {
                  $fotoProduto = $dadosImagens['Caminho'];
                }
               else{
                  $fotoProduto = "padraoProdutos.jpeg";
                }

?>



            <div class="col-sm-3 text-center" style="margin-bottom: 10px;margin-top: 10px;">
                            <div class="col-item">
                                <div class="photo">
                                  <a href="verProdutos.php?idAnuncio=<?php echo base64_encode($dadosP['idAnuncio']); ?>" >
                                    <img src="imagens/imgProdutos/<?php echo $fotoProduto; ?>" class="img-responsive" style="height:200px;width:300px;" alt="<?php echo $dadosP['NomeProduto']; ?>" /></a>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12 col-xs-12">
                                            <h5 style="margin-bottom: 5px;font-weight: bold;font-size: 1.2em;"><?php echo $dadosP['NomeProduto']; ?></h5>
                                            <h5 style="margin-bottom:2px;font-weight:bold;font-size:1.2em;"><?php echo $dadosP['NomeMarca']?></h5>
                                            <h5 class="price-text-color" style="margin-bottom: 5px;font-size: 1.4em;font-weight: bold;">
                                                R$<?php echo number_format($dadosP['Preco'],2) ; ?></h5>
                                        </div>


                                       <!--  <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div> -->
                                        <p style="font-size:1em;margin-bottom: 5px;font-weight: bold;">Vendido por:<a href="perfilEmpresa.php?idLoja=<?php echo base64_encode($dadosP['idLoja']); ?>" name="lojaNome" id="lojaNome"> <?php echo $dadosP['NomeLoja']; ?> </a></p>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <a href="adicionaLista.php?idAnuncio=<?php echo base64_encode($dadosP['idAnuncio']); ?>" class="hidden-sm linkPopover" id="linkPopover"><i class="fa fa-plus" aria-hidden="true"></i></a></p>
                                        <p class="btn-details" style="font-size: 0.8em;">
                                            <i class="fa fa-list"></i><a href="verProdutos.php?idAnuncio=<?php echo base64_encode($dadosP['idAnuncio']); ?>" class="hidden-sm">Ver mais</a></p>
                                      </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>



 <?php

}

//descomentar as próximas linhas vai separar de novo os resultados das buscas de produtos e de locais

//echo "</div>

  //<div class='row'>

//";

//descomentar as linhas acima vai separar de novo os resultados das buscas de produtos e de locais



 // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
             while(@$dadosL= $executaConsultaLocal->fetch_assoc())
            {//inicio do while

               if (!empty($dadosL['imagemProduto'])) {
    $fotoProduto = $dadosL['imagemProduto'];
  }
else{
  $fotoProduto = "padraoLojas.png";
  $erro = $mysqli->error;

echo $erro;
}
?>


                     <div class="col-sm-3 text-center" style="margin-bottom: 10px;margin-top: 10px;">
                            <div class="col-item">
                                <div class="photo">
                                  <a href="perfilEmpresa.php?idLoja=<?php echo base64_encode($dadosL['idLoja']); ?>" name="lojaNome" id="lojaNome">
                                    <img src="imagens/imgEmpresas/<?php echo $dadosL['ImagemLoja']; ?>" class="img-responsive" style="height:200px;width:300px;" alt="a">
                                  </a>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12 col-xs-12">
                                            <h5  style="margin-bottom: 5px;font-weight: bold;font-size: 1.2em;"><?php echo $dadosL['NomeLoja']; ?></h5>

                                        </div>

                                       <!--  <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div> -->
                                        <p style="margin-bottom:77px;"></p>

                                    </div>
                                    <div class="separator clear-left">
                                    <p class="btn-details " style="font-size: 1em;margin-top:20px;top:0;">
                                            <i class="fa fa-list"></i>
                                            <a href="perfilEmpresa.php?idLoja=<?php echo base64_encode($dadosL['idLoja']); ?>" name="lojaNome" id="lojaNome"> Ver mais
                                            </a>
                                        </p>
                                        <br>
                                        <p class="btn-add col-md-4" style="margin-top:-20px;" >
                                          <?php

                                    @$idPessoa = $_SESSION['idPessoa'];

                                    if (!empty($idPessoa)) {

                                    @$query = "SELECT * FROM favoritos WHERE idPessoa = $idPessoa AND idLoja = ".$dadosL['idLoja'];

                                    @$executa = $mysqli->query($query);
                                    }
                                    @$linhasF = $executa->num_rows;

                                                 ?>
      <div class="row">
                                              <form action="acoes/executaFavoritosBusca.php" method="POST" id="FormFavoritos<?php echo $dadosL['idLoja'];  ?>">

                                                <input type="hidden" value="<?php echo $dadosL['idLoja']; ?>" name="idLoja" >

                                                <div id="retornoFavoritos<?php echo $dadosL['idLoja'];  ?>">

                                                <?php

                                                if ($linhasF==0) { ?>

                                                <input type="submit" id="favoritos<?php echo $dadosL['idLoja'];  ?>" value="Adicionar aos favoritos" style="display:none" >

                                                <input type="hidden" name="favoritos" value="Adicionar" id="favoritos<?php echo $dadosL['idLoja'];  ?>">
                                                <input type="hidden" name="NomeLoja" value="<?php echo $dadosL['NomeLoja']; ?>" id="favoritos<?php echo $dadosL['idLoja'];  ?>">

                                                <?php
                                                 }else{?>
                                                   <input type="submit"  id="favoritos<?php echo $dadosL['idLoja'];  ?>" class="btn btn-sm col-md-12 col-xs-12" value="Remover dos favoritos" style="display:none" >

                                                  <input type="hidden" name="favoritos" value="Remover">
                                                  <input type="hidden" name="NomeLoja" value="<?php echo $dadosL['NomeLoja']; ?>" id="favoritos<?php echo $dadosL['idLoja'];  ?>">
                                                  <?php
                                                 }

                                                ?>

                                                 <?php

                                                  if ($linhasF == 0 ){ ?>

                                                     <p style="font-size:25px;"><label for="favoritos<?php echo $dadosL['idLoja'];  ?>"><i class="fa fa-heart-o " aria-hidden="true" style="margin-top:-10px;" ></i></label> </p>

                                                  <?php

                                                  }else{ ?>

                                                    <p style="font-size:25px;"><label for="favoritos<?php echo $dadosL['idLoja'];  ?>"><i class="fa fa-heart " aria-hidden="true" style="color:red;margin-top:-10px;" ></i></label> </p>

                                                    <?php

                                                  }

                                                  ?>

                                                </div>
                                                </form>
                                                <script>
                                                  $(document).ready(function(e){
                                                     $("#FormFavoritos<?php echo $dadosL['idLoja'];  ?>").submit(function(){
                                                         $.ajax({
                                                          //caminho/nome do arquivo que irá receber o form
                                                            url:'acoes/executaFavoritosBusca.php',
                                                            type:'POST',
                                                            data:$(this).serialize(),
                                                            beforeSend:function(){
                                                              $('#retornoFavoritos<?php echo $dadosL['idLoja'];  ?>').html("<img src='load.gif'>");
                                                            }, //o que aconteceao enviar dados
                                                            success:function(data){
                                                              $("#retornoFavoritos<?php echo $dadosL['idLoja'];  ?>").html(data);
                                                              } // dados de retorno do arquivo que recebe o form
                                                         }); //fim ajax
                                                         return false;
                                                     }); //fim form exemplo
                                                  }) // fim jquery
                                                </script>
                                        </p>

    </div>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php }

                        echo "</div>";

       }

        //LINKS PARA PAGINAÇÃO
        // verifica a quantidade de registros
        //$todos =  $mysqli->query("select * from anuncios");

        $total_registros = $totalProdutos+$totalLocais;

        //verifica a quantidade de páginas
        //$visualizar = "15";
        $total_paginas = ceil($total_registros / $visualizar);

        ?>
        <ul class="pagination justify-content-center">
        <li class="page-item <?php if($pagina == 0){echo 'disabled';} ?>">
            <a class="page-link" href="?Localizacao=<?php echo $Localizacao ?>&Bairro=<?php echo $Bairro ?>&Busca=<?php echo $Busca; ?>&pagina=<?php echo $pagina=$pagina - 1; ?>" >Anterior</a>
          </li>

        <?php
        // criando números das páginas
        //echo "<br>";
        for($num = 0; $num < $total_paginas; $num++){
          ?>
        	<li class='page-item'>
            <a href='?Localizacao=<?php echo $Localizacao; ?>&Bairro=<?php echo $Bairro;?>&Busca=<?php echo $Busca;?>&pagina=<?php echo $num; ?>' class='page-link'><?php echo $num+1;?></a>
          </li>
        <?php
        }
        ?>
        <li class="page-item <?php if($pagina >= $num){echo 'disabled';}?>">
          <a class="page-link" href="?Localizacao=<?php echo $Localizacao; ?>&Bairro=<?php echo $Bairro;?>&Busca=<?php echo $Busca; ?>&pagina=<?php echo $pagina=$pagina+2; ?>">Proximo
          </a>
        </li>
      </ul> <!-- lista paginação -->

     </div> <!-- fim col retorno -->

  </div> <!-- fim row -->

</div> <!-- fim container-fluid -->

<?php include rodape ;
?>

</body>
</html>

<script>

  $(document).ready(function(e){
     $("#filtroCidades").submit(function(){
         $.ajax({
          //caminho/nome do arquivo que irá receber o form
            url:'resultadoFiltro.php',
            type:'POST',
            data:$(this).serialize(),
            beforeSend:function(){
            $('#retorno').html("<img         src='https://www.demilked.com/magazine/wp-content/uploads/2016/06/gif-animations-replace-loading-screen-14.gif'>");
            }, //o que acontece ao enviar dados
            success:function(data){
              $("#retorno").html(data);
            } ,// dados de retorno do arquivo que recebe o form
         }); //fim ajax
         return false;
     }); //fim form exemplo
  }) // fim jquery

</script>

<!-- $var=file_get_contents('');
echo $var; -->
