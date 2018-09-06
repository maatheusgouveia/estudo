<?php include "includes/config.php";
require_once funcoesPhp; ?>

<?php

include conexao;

@session_start();

@$idPessoa = $_SESSION['idPessoa'];

@$idUsuario = $_SESSION['idUsuario'];

date_default_timezone_set('America/Sao_Paulo');

   $dataAtual = date("Y-m-d");

   $idLoja = addslashes(strip_tags(base64_decode($_GET['idLoja'])));

   $diaSemana = converteSemana(date("N"));

   $query = "SELECT * FROM lojas
INNER JOIN horariofuncionamento ON lojas.idLoja = horariofuncionamento.idLoja
WHERE lojas.idLoja = $idLoja AND DiaSemana = '$diaSemana'";

   $executa=$mysqli->query($query);

   $queryRedes = "SELECT * FROM redessociais WHERE idLoja = $idLoja";

   $executaRedes = $mysqli->query($queryRedes);

   $dadosRedes = $executaRedes->fetch_assoc();

   $dados= $executa->fetch_assoc();

   $visualizacao = "INSERT INTO visualizacoesperfil (DataVisualizacao, idUsuario, idLoja) VALUES (CURRENT_TIMESTAMP, $idUsuario, $idLoja)";

   $executaVisualizacao = $mysqli->query($visualizacao);

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

<link rel="stylesheet" href="css/estiloSlider.css">

	<title><?php echo $dados['NomeLoja']; ?> - Mostra Preço</title>

  <?php $NomeLoja = $dados['NomeLoja']; ?>

  <style>
    a:focus, a:hover {
     /* color:#ece411; */
    text-decoration: none;
}

html{
  font-family: arial;
}

h1{
  font-size: 2em;
  margin-bottom: 10px;
}

./* btn.focus, .btn:focus, .btn:hover {
    color:#fff;
    text-decoration: none;
     border-color: #60338E;
    background-color: #60338E;

  } */
  </style>
</head>
<body>

<?php include topo; ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12" style="background-color:#fff;color: #666; min-height: 600px;" >

      <div class="col-sm-3" style="min-height:500px; border-radius: 5px; margin-top: 20px;margin-bottom: 20px;background-color: #fff;border: 1px solid #eee;">

     <!--  <div class="well" style="margin-top: 10px;"> -->

        <img alt="foto-perfil" class="img-circle center-block" style="width:230px;height: 230px;margin: 0 auto;border: 1px solid #eee;" src="imagens/imgEmpresas/<?php echo $dados['ImagemLoja']; ?>" >

<!--       </div> -->

<?php

       @$idPessoa = $_SESSION['idPessoa'];

       @$query = "SELECT * FROM favoritos WHERE idPessoa = $idPessoa AND idLoja = $idLoja";

       @$executa = $mysqli->query($query);

       @$linhasF = $executa->num_rows;

       ?>

    <h1 class="text-center" style="font-weight: bold;color:#333;margin-top:10px;"><?php echo $dados['NomeLoja']; ?></h1>

    <form action="acoes/executaFavoritos.php" method="POST" id="FormFavoritos">

      <input type="hidden" value="<?php echo $dados['idLoja']; ?>" name="idLoja" >

      <div id="retornoFavoritos">

      <?php

      if ($linhasF==0) { ?>

      <input type="submit" id="favoritos" class="btn btn-sm col-md-12 col-xs-12" value="Adicionar aos favoritos" style="background-color: #60338E;color: #fff;border-radius: 5px;border: #60338E;font-size: 0.9em;" >

      <input type="hidden" name="favoritos" value="Adicionar" id="favoritos">
      <input type="hidden" name="NomeLoja" value="<?php echo $dados['NomeLoja']; ?>" id="favoritos">

      <?php
       }else{?>
         <input type="submit"  id="favoritos" class="btn btn-sm col-md-12 col-xs-12" value="Remover dos favoritos" style="background-color: #60338E;color: #fff;border-radius: 5px;border: #60338E;font-size: 0.9em;" >

        <input type="hidden" name="favoritos" value="Remover">
        <input type="hidden" name="NomeLoja" value="<?php echo $dados['NomeLoja']; ?>" id="favoritos">
        <?php
       }

      ?>

       <?php

        if ($linhasF == 0 ){ ?>

           <p style="text-align: center;margin-top: 50px;"><label for="favoritos"><i class="fa fa-heart-o fa-3x" aria-hidden="true" ></i></label> </p>

        <?php

        }else{ ?>

          <p style="text-align: center;margin-top: 50px;"><label for="favoritos"><i class="fa fa-heart fa-3x" aria-hidden="true" style="color:red;" ></i></label> </p>

          <?php

        }

        ?>

      </div>
      </form>

      </div>

      <div class="col-sm-7 col-xs-12" style="margin-top: 20px;margin-bottom: 20px;word-wrap:break-word;text-align:left;">

      <div class="well-lg" style="min-height: 500px;background-color: #fff;border: 1px solid #eee;">

        <p style="font-size: 2.5em;margin-bottom: 20px;text-align: center;font-weight: bold;color:#333;"><?php echo $dados['NomeLoja']; ?></p>

        <hr>

        <p style="font-size: 1.4em;margin-bottom: 10px;text-align: left;font-weight: bold;"><i class="fas fa-home fa-1x"></i> Endereço : <?php echo $dados['Logradouro'].", Nº ".$dados['Numero']."."; ?></p>

        <p style="font-size: 1.4em;margin-bottom: 10px;text-align: left;font-weight: bold;"><i class="fas fa-home fa-1x"></i> Bairro : <?php echo $dados['Bairro'].",".$dados['Cidade']."-".$dados['UF']."."; ?></p>

        <p style="font-size: 1.4em;text-align: left;margin-bottom: 10px;font-weight: bold;"><i class="fas fa-map-marker-alt" style="margin-left: 5px;margin-right: 2px;color: red;"></i>   CEP : <?php echo $dados['CEP']."."; ?></p>

<?php $queryTelefones = "SELECT * FROM telefones WHERE idLoja = $idLoja";
      $executaTelefones = $mysqli->query($queryTelefones);
      $dadosTelefones = $executaTelefones->fetch_assoc();
      ?>

<?php if(!empty($dadosTelefones['Fixo'])) { ?>

        <p style="font-size: 1.4em;text-align: left;margin-bottom: 10px;font-weight: bold;"><i class="fas fa-phone-square" style="margin-left: 3px;color: darkblue;"></i> Telefone : <?php echo $dadosTelefones['Fixo']; ?></p>

<?php } ?>

<?php if(!empty($dadosTelefones['Celular'])) { ?>

        <p style="font-size: 1.4em;text-align: left;margin-bottom: 10px;font-weight: bold;"><i class="fas fa-mobile-alt" style="margin-left: 6px;margin-right: 3px;color: grey"></i> Celular : <?php echo $dadosTelefones['Celular']; ?></p>

<?php } ?>

<?php if(!empty($dadosTelefones['Whatsapp'])) { ?>

        <p style="font-size: 1.4em;text-align: left;margin-bottom: 10px;font-weight: bold;"><i class="fab fa-whatsapp" style="margin-left: 3px;color: green;"></i> Whatsapp : <?php echo $dadosTelefones['Whatsapp']; ?></p>

<?php } ?>

<?php if(!empty($dadosTelefones['Ramal'])) { ?>

        <p style="font-size: 1.4em;text-align: left;margin-bottom: 10px;font-weight: bold;"><i class="fas fa-phone-square" style="margin-left: 3px;color: darkblue;"></i> Ramal: <?php echo $dadosTelefones['Ramal']; ?></p>

<?php } ?>

<?php if(!empty($dadosRedes['EmailContato'])) { ?>

        <p style="font-size: 1.4em;text-align: left;margin-bottom: 10px;font-weight: bold;"><i class="far fa-envelope"></i> Email para contato   : <?php echo $dadosRedes['EmailContato']; ?></p>

<?php } ?>

<!-- inicio redes sociais -->
<!-- Se achar necessário só copiar este bloco para um lugar que achar melhor, seu viadão -->
<p style="font-size: 30px;text-align: left;margin-bottom: 10px;font-weight: bold;padding:1px;">

<?php if(!empty($dadosRedes['Facebook'])) { ?>

        <a href="<?php echo $dadosRedes['Facebook']; ?>" target="_blank"><i class="fab fa-facebook" style="padding:1px;color:#3b5998;"></i></a>

<?php } ?>

<?php if(!empty($dadosRedes['Twitter'])) { ?>

        <a href="<?php echo $dadosRedes['Twitter']; ?>" target="_blank"><i class="fab fa-twitter-square" style="padding:1px;color:#00acee;"></i></a>

<?php } ?>

<?php if(!empty($dadosRedes['Instagram'])) { ?>

        <a href="<?php echo $dadosRedes['Instagram']; ?>" target="_blank"><i class="fab fa-instagram" style="padding:1px;color:#517fa4;"></i></a>

<?php } ?>

<?php if(!empty($dadosRedes['Linkedin'])) { ?>

        <a href="<?php echo $dadosRedes['Linkedin']; ?>" target="_blank"><i class="fab fa-linkedin" style="padding:1px;color:#007bb6;"></i></a>

<?php } ?>

<?php if(!empty($dadosRedes['Youtube'])) { ?>

        <a href="<?php echo $dadosRedes['Youtube']; ?>" target="_blank"><i class="fab fa-youtube" style="padding:1px;color: #bb0000;"></i></a>

<?php } ?>

</p>

<!-- fim redes sociais -->


<?php if (!empty($dados['HoraAbertura']) and !empty($dados['HoraFechamento'])){

  date_default_timezone_set('America/Sao_Paulo');

  $horaAtual = date("H:i");

  ?>

        <p style="font-size: 1.4em;text-align: left;margin-bottom: 10px;font-weight: bold;"><i class="far fa-clock"></i> Horário de funcionamento : <?php echo "Das ".formataHora($dados['HoraAbertura'])." Até  ".formataHora($dados['HoraFechamento'])." ";
        if ($horaAtual > $dados['HoraAbertura'] and $horaAtual < $dados['HoraFechamento']) {
          echo "<br><br><p class='col-md-6 col-md-offset-3 col-xs-12 btn btn-success' style='font-size:1.4em;text-align: center;font-weight: bold;border-radius:10px;cursor: context-menu;background:#fff;border:2px solid green;color:green;margin-top:-10px;'>Aberto agora</p>";
        }
        else{
          echo "<br><br><p class='col-md-6 col-md-offset-3 col-xs-12 btn btn-danger' style='font-size:1.4em;text-align: center;font-weight: bold;border-radius:10px;cursor: context-menu;background:#fff;border:2px solid red;color:red;margin-top:-10px;'>Fechado agora</p>";
        }?></p>

<?php } //fim if ?>

      </div>


      </div>





   <!--  <div class="col-sm-2" style="margin-top: 20px;margin-bottom: 20px;">
      <div class="thumbnail" style="min-height: 500px;background-color: #fff;border: 2px solid #ffffff;"></div>
    </div>
 -->
    <div class="col-md-12">

          <h1 class="text-center" style="font-weight: bold;color:#333;">Produtos deste vendedor</h1>

          <?php

          @$query ="SELECT * FROM `anuncios`
          INNER JOIN lojas ON anuncios.idLoja = lojas.idLoja
          INNER JOIN produtos ON anuncios.idProduto = produtos.idProduto
          INNER JOIN marcas ON produtos.idMarca = marcas.idMarca
          INNER JOIN subcategorias ON produtos.idSubCategoria = subcategorias.idSubCategoria
          INNER JOIN categorias ON subcategorias.idCategoria = categorias.idCategoria
          INNER JOIN imagensprodutos ON produtos.idProduto = imagensprodutos.idProduto
          WHERE ValidoDe<='$dataAtual' AND ValidoAte>='$dataAtual' AND anuncios.idLoja = $idLoja AND imagensprodutos.idPessoa = lojas.idPessoa
          ORDER BY RAND() LIMIT 4";

$erro = $mysqli->error;

//echo $erro;

$executaQueryProdutos = $mysqli->query($query);

    $linhasP = $executaQueryProdutos->num_rows;

        if($linhasP>0){
                ?>

                <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
             while($dados= $executaQueryProdutos->fetch_assoc())
            {//inicio do while
    $precoFinal = $dados['Preco'] - $dados['Desconto'];

       if (!empty($dados['Caminho'])) {
    $fotoProduto = $dados['Caminho'];
  }
else{
  $fotoProduto = "padraoProdutos.jpeg";
}
?>

<div class="col-sm-3" style="margin-bottom:30px;text-align:center;">
                <div class="col-item">
                    <div class="photo">
                        <a href="verProdutos.php?idAnuncio=<?php echo base64_encode($dados['idAnuncio']); ?>" > <img src="imagens/imgProdutos/<?php echo $fotoProduto; ?>" class="img-responsive" style="height:200px;width:300px;" alt="<?php echo $dados['NomeProduto']; ?>" /></a>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12 col-xs-12" >
                                <h5 style="margin-bottom: 5px;font-weight: bold;font-size: 1.2em;"><?php echo $dados['NomeProduto']; ?></h5>
                                <h5 style="margin-bottom:2px;font-weight:bold;font-size:1.2em;"><?php echo $dados['NomeMarca']?></h5>
                                <h5 class="price-text-color" style="margin-bottom: 5px;font-size: 1.4em;font-weight: bold;">
                                    R$<?php echo number_format($precoFinal,2) ; ?></h5>
                            </div>
                           <!--  <div class="rating hidden-sm col-md-6">
                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                </i><i class="fa fa-star"></i>
                            </div> -->
                            <p style="font-size: 1em;margin-bottom: 5px;font-weight: bold;">Vendido por:<a href="perfilEmpresa.php?idLoja=<?php echo base64_encode($dados['idLoja']); ?>"><?php echo $dados['NomeLoja']; ?></a>
                            </p>
                        </div>
                        <div class="separator clear-left">
                            <p class="btn-add">
                                <a href="adicionaLista.php?idAnuncio=<?php echo base64_encode($dados['idAnuncio']); ?>" class="hidden-sm linkPopover" id="linkPopover">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </p>
                            <p class="btn-details" style="font-size: 0.8em;">
                            <i class="fa fa-list"></i><a href="verProdutos.php?idAnuncio=<?php echo base64_encode($dados['idAnuncio']); ?>" class="hidden-sm">Ver mais</a>
                            </p>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
            </div>


            <?php }

            } ?>

        </div>

      </div>

<div class="col-md-12">

<button class="btn-lg btn center-block btn" style="margin-top:20px;background-color:#fff;color:#60338E;"><i class="fas fa-plus fa-2x"></i></button>

</div>
      <div class="col-sm-8 col-sm-offset-2" style="margin-top: 20px;margin-bottom: 20px;">

        <h1 style="font-weight: bold;color:#333;">Comentários sobre esta empresa</h1>

      <div class="well-lg" style="min-height: 100px;background-color: #fff;box-shadow:2px 2px 3px 3px lightgray;">

        <div class="row">
            <div class="col-md-12 form-group">

            <div class="col-md-2" style="border-left: 5px solid #8A2BE2;"><img src="imagens/imgUsuarios/<?php if (empty($_SESSION['FotoPerfil'])){
              echo 'padraoUsuarios.png';
            }
            else{
              echo $_SESSION['FotoPerfil'];
            } ?>" alt="" width="100" height="100" style="margin-bottom: 10px;" class="img-circle"></div>
<?php $retorno=0; ?>
            <div class="col-md-9" style="margin-bottom: 10px;">
          <form  id="formComentario">

            <div class="row form-group">
              <textarea name="ConteudoComentario" id="ConteudoComentario"   rows="5" placeholder="Faça Login e conte aos outros o que você pensa sobre esta empresa!" class="form-control" required></textarea>
            </div>

              <input type="hidden" name="retorno" value="<?php echo $retorno;?>">
              <input type="hidden" value="<?php echo $idLoja; ?>" name="idLoja" >
              <input type="hidden" value="<?php echo $NomeLoja; ?>" name="NomeLoja" >

            <div class="form-group">
              <div class="col-sm-9"></div>
              <div class="col-sm-3">
            <input class="btn-sm col-xs-offset-0 btn-block" type="submit" value="Comentar" style="margin: 10px;border-radius: 5px;font-size: 1em; background-color: #8A2BE2;color: #fff;border: #8A2BE2;margin-top: -8px;">

              </div>
          </div>

          </form>

            </div>

            </div>
            <!-- <hr style="border: 1px dashed #eee;width: 90%;"> -->
        </div>

        <?php if (!empty($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        } ?>

<!-- comentários aparecem aqui, até que a página seja atualizada -->

        <div id="retorno">

        </div>

        <?php

if (!empty($idPessoa)) {

@$queryUsuario ="SELECT * FROM `usuarios` WHERE idUsuario=$idUsuario";

@$executaQueryUsuario = $mysqli->query($queryUsuario);

@$dadosUsuario= $executaQueryUsuario->fetch_assoc();

} //fim if idPessoa

//num_rows obtem o nº de linhas retornado pela consulta
@$query ="SELECT * FROM `comentarios`
INNER JOIN usuarios ON comentarios.idPessoa = usuarios.idPessoa
WHERE idLoja = $idLoja
ORDER BY DataComentario DESC LIMIT 20";

@$executaQuery = $mysqli->query($query);

@$linhas = $executaQuery->num_rows;

    if($linhas>0){

        // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
       while($dados= $executaQuery->fetch_assoc())
      {//inicio do while?>

          <div class="row">
            <div class="col-md-12">

            <div class="col-md-2" style="border-left: 5px solid #8A2BE2;"><img src="imagens/imgUsuarios/<?php echo $dados['FotoPerfil']; ?>" alt="" width="100" height="100" class="img-circle" style="margin-bottom: 10px;"></div>

            <div class="col-md-10">
            <div class="row">
              <span style="font-weight: bold;"><?php echo $dados['NomeExibicao'];  ?></span>


              <span class="small" style="color: gray;"> <?php

                $DataComentario = $dados['DataComentario'];

               echo formataData($DataComentario); ?> às <?php

                $data = $dados['DataComentario'];

               echo mostraHora($DataComentario); ?>   </span> <?php if (@$_SESSION['idPessoa'] == @$dados['idPessoa']) {


                ?> <a href="acoes/excluiComentario.php?idComentario=<?php echo base64_encode($dados['idComentario']);?>&NomeLoja=<?php echo base64_encode($NomeLoja);?>"><i class="fa fa-times text-right" aria-hidden="true"></i></a> <?php } ?>

                <span id="retornoDenuncia">
                <a href="acoes/denunciaComentario.php?idComentario=<?php echo base64_encode($dados['idComentario']);?>&NomeLoja=<?php echo base64_encode($NomeLoja);?>" id="linkDenuncia">

<?php
if (!empty($_SESSION['idUsuario'])) {

$queryDenunciado="SELECT idComentario FROM comentariosdenunciados WHERE idComentario = ".$dados['idComentario']." AND idUsuario = ".$_SESSION['idUsuario']."";
      $executaQueryDenunciado = $mysqli->query($queryDenunciado);
      @$linhasDenunciado = $executaQueryDenunciado->num_rows;

    }
      if (!empty($linhasDenunciado) && $linhasDenunciado > 0) { ?>
        <i class="fas fa-flag" style="color:red;"></i>
        <?php
      }
      else { ?>
        <i class="far fa-flag"></i>
        <?php
      }
         ?>

</a></div></span>
            <div class="row">

            <p style="margin:10px;"><?php echo $dados['ConteudoComentario']; ?></p>

            </div> <!-- fim row -->

          </div> <!-- fim col md 10 -->

        </div> <!-- fim col md 12 -->

         <hr style="border: 1px dashed #eee;width: 90%;">

       </div> <!-- fim row -->

<?php
} //fim if

} //fim while

?>

<!-- comentarios -->

</div>  <!-- fim well -->

      </div>

    </div>
  </div>
</div>

<?php include rodape ;?>

</body>
</html>

<script>
  $(document).ready(function(e){
     $("#formComentario").submit(function(){
         $.ajax({
          //caminho/nome do arquivo que irá receber o form
            url:'acoes/executaComentario.php',
            type:'POST',
            data:$(this).serialize(),
            beforeSend:function(){
              $('#retorno').html("<img src='imagens/mostrapreco/carregando.gif' height='100' width='100'>");
            }, //o que acontece ao enviar dados
            success:function(data){
              $("#retorno").html(data);
            } ,// dados de retorno do arquivo que recebe o form
         }); //fim ajax
         return false;
     }); //fim form
     $("#formComentario").submit(function(){
       $("#ConteudoComentario").val("");
     })
  }) // fim jquery
</script>

<script>
  $(document).ready(function(e){
     $("#FormFavoritos").submit(function(){
         $.ajax({
          //caminho/nome do arquivo que irá receber o form
            url:'acoes/executaFavoritos.php',
            type:'POST',
            data:$(this).serialize(),
            beforeSend:function(){
              $('#retornoFavoritos').html("<img src='load.gif'>");
            }, //o que acontece ao enviar dados
            success:function(data){
              $("#retornoFavoritos").html(data);
              } // dados de retorno do arquivo que recebe o form
         }); //fim ajax
         return false;
     }); //fim form exemplo
  }) // fim jquery
</script>
