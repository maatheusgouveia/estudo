<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>POO</title>
  </head>
  <body>
    <?php
      require_once "classes.php";

      $c1 = new caneta;
      $c1->cor = "Azul";
      $c1->ponta = 0.5;
      $c1->tampada = true;
      $c1->destampar();
      $c1->rabiscar();

      $c2 = new caneta;
      $c2->cor = "Verde";
      $c2->carga = 50;
      $c2->tampada = false;
      $c2->tampar();
      $c2->rabiscar();
      print_r($c1);
      echo "<br>";
      print_r($c2);
     ?>
  </body>
</html>
