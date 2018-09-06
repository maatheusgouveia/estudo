
<?php
 $imagem_temporaria=@$_FILES['imagem']['tmp_name'];
 $altura=$_POST['altura'];
 $largura=$_POST['largura'];
 $nome=$_POST['nome'];
 $caminho=$_POST['caminho'];
  $extensao=$_POST['extensao'];


// Inside:

// Redimensiona a imagem para caber na largura e altura especificada, não distorcendo a imagem.
// Outside:

// Redimensiona a imagem para preencher a largura e altura especificada, não distorcendo a imagem.
// Fill:

// A imagem será redimensionada por completo, distorcendo a imagem.







require('lib/WideImage.inc.php'); // Chama o arquivo com a classe WideImage
$image = wiImage::load($imagem_temporaria); // Carrega a imagem a ser manipulada
$image = $image->resize(100,100,'fill'); // Redimensiona a imagem
$image->saveToFile($caminho.$nome.'.'.$extensao); 
       $msg="<h3  class='alert-success'>Concluido com sucesso?</h3> ";                                  
       header("location:http://localhost/site_tcc2/recortar/index.php?$msg"); 




?>