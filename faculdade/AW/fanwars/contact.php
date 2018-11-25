<?php  require_once "includes/config.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Fan Wars - Fale conosco</title>
		<meta charset="utf-8">
    <meta name="description" content="Fan Wars - Fale Conosco">
    <meta name="keywords" content="Contate-nos,FanWars">
    <meta name="author" content="Danilo Dos Santos Carreiro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL; ?>/bibliotecas/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/contatenos.css">
	</head>
	<body>

  
    <?php include TOPO; ?> 
      <div class="container-fluid" id="container">
        <div class="row justify-content-center">
            <div class="col-sm-4  mb-5">
               <h2 class="text-center  text-white">Fale Conosco</h2>
            </div>
        </div>
        <form id="sendEmail"  class="form-group w-100">
        <div class="row  justify-content-center">
            <div class="col-sm-4 col-sm-md-4">
            <div id="resposta"></div>
            <div class="form-group">
              <span class="font-weight-bold nome clean text-white"></span>
              <input type="text"  name="nome" id="nome"  class="form-control  input-lg borderRadius-0 fieldHeight fontSize transparent " placeholder="Nome*">
            </div>
            <div class="form-group">
              <span class=" font-weight-bold assunto clean text-white"></span>
              <input type="text"  name="assunto" id="assunto"  class="form-control  input-lg borderRadius-0 fieldHeight fontSize transparent" placeholder="Assunto*">
            </div>
            <div class="form-group">
              <span class=" font-weight-bold email clean text-white"></span>
              <input type="text"  name="email" id="email"  class="form-control  input-lg borderRadius-0 fieldHeight fontSize transparent" placeholder="Email*">
            </div>
           
           </div>
          <div  class="col-sm-4">
            <div class="form-group">
              <span class=" font-weight-bold mensagem clean text-white"></span>
              <textarea name="mensagem" id="mensagem" cols="30" rows="8" class="form-control   borderRadius-0  fontSize  transparent" placeholder="Mensagem*"></textarea>
            </div>
          </div>
        </div> 
        <div class="row justify-content-center">
           <div class="col-sm-3">
             <div class="form-group">
              <input type="submit" id="send"  value="Enviar"   class=" btn btn-lg btn-block borderRadius-0 btn-dark text-white  font-weight-bold">
            </div>
             <div class="text-center" id="load"></div>
           </div>
        </div>
      </form>
      </div>
	</body>
<script src="<?php echo URL; ?>/bibliotecas/jquery-3.3.1.min.js"></script>
<script src="<?php echo URL ?>/js/contatenos.js"></script>
</html>