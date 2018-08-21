<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Relacionamento entre classes</title>
  </head>
  <body>
    <pre>
    <?php
      require_once "Lutador.php";
      require_once "Luta.php";
      $l = array();
      $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
      $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
      $l[2] = new Lutador("Snapshadow", "Estados Unidos", 35, 1.65, 80.9, 12, 2, 1);
      $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
      $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
      $l[5] = new Lutador("Nerdaart", "Estados Unidos", 30, 1.81, 105.7, 12, 2, 4);

      $UEC01 = new Luta();
      $UEC01->marcarLuta($l[1], $l[5]);
      $UEC01->lutar();
      $l[0]->status();
      $l[1]->status();

      //echo $l[1]->getCategoria();
      //echo $l[5]->getCategoria();
     ?>
   </pre>
  </body>
</html>
