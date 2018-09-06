<!DOCTYPE html>
<html>
 <head>
   <title></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- links do bootstrap online -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Anton" rel="stylesheet">

   <style>
   	h1{
   		font-size:3em;
   		color:white;
   /* 		font-family: 'Anton', sans-serif; */
   		/* font-family: 'Anton', sans-serif; */
font-family: 'Abril Fatface', cursive;
   	}

    h3{
        font-size:1em;
      

    }


   </style>
 </head>
 <body>
 <div class="container-fluid" style="background-color:#5371F3">
 <div class="row">
 <div class=" col-xs-12 col-sm-12  text-center">
  <h1>Redimensionar Imagens</h1>
 </div>
</div>
</div>

<div class="container">

<div class="row">
<div class="col-sm-4 col-sm-offset-4">
    <?php echo  $msg = @$_GET['msg'];
    ?>
  </div>
</div>



   <div class="row">
          <br>

        


          <br>
        <div class="col-xs-4 col-xs-offset-4   col-sm-4   col-sm-offset-4 ">
              <h3>Escolha a Imagem:</h3>
              <form action="acoes.php" method="post" enctype="multipart/form-data">


               <div class="form-group">
               <input type="file" name="imagem" class="btn-success btn-file" required>
               </div>


               <div class="form-group">
               <h3>Altura:</h3>
                <input type="number" name="altura" class="form-control" placeholder="altura"required>
               </div>

                <div class="form-group">
               <h3>Largura:</h3>
                <input type="number" name="largura" class="form-control" placeholder="largura"required>
               </div>



              <div class="form-group">
               <h3>Nome:</h3>
                <input type="text" name="nome" class="form-control" placeholder="nome da imagem" required>
               </div>

               <div class="form-group">
               <h3>Extensao:</h3>
                 <select  name="extensao" class="form-control">
                  <option value="jpg">jpg</option>
                   <option value="gif">gif</option>
                   <option value="png">png</option>
                  </select>
               </div>

             

            <div class="form-group">

               <h3>Onde salvar:</h3>
                <input type="text" name="caminho" class="form-control" placeholder="Cole a url da pasta de destino" required>
                 </div>

                 <div class="form-group">
                 <input type="submit"   value="Salvar" class="form-control btn-primary">
               </div>
               </div>

           
               </form>
         
           </div>
   </div>
 </div>














 </body>
</html>



      