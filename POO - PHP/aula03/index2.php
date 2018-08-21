<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre>
        <?php
            require_once "classes.php";
            $c1 = new caneta;
            $c1->modelo = "BIC Cristal";
            $c1->cor = "Azul";
            //$c1->ponta = 0.5;
            // $c1->carga = 99;
            // $c1->tampada = true;
            print_r($c1);
            $c1->rabiscar();
            $c1->tampar();
         ?>
    </pre>
  </body>
</html>
