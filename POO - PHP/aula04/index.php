<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aula 04 - Getters, Setters e Construct</title>
  </head>
  <body>
    <pre>
    <?php
      require_once "Caneta.php";

      $c1 = new Caneta("BIC", "Azul", 0.5);
      $c2 = new Caneta("KKK", "Verde", 1.0);
      print_r($c1);
      print_r($c2);

      //print("Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}");
      ?>
      </pre>
  </body>
</html>
