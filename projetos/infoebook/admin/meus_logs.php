<?php include("../includes/config.php");
include(funcoes);
include(conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Cadastro Apostila</title>

  <?php include(headers); ?>
  </head>
  <body>

<?php include(topo_admin); ?>
  
  <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
            <h1>Meus logs</h1>
             <table class="table table-bordered">
    <thead>
      <tr>
        <th>Usuario</th>
        <th>Ação</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Tipo</th>
      </tr>
    </thead>
    <tbody>
      <?php 
    
     $sql="SELECT * from log inner join usuario on idusuario=usuario_idusuario  where usuario_idusuario=".$_SESSION['idusuario'];
     $sql=$mysqli->query($sql);


        while ($dados=$sql->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $dados['idusuario']; ?> <?php echo $dados['email']; ?></td>
        <td><?php echo $dados['acao']; ?></td>
        <td><?php echo $dados['data']; ?></td>
         <td><?php echo $dados['hora']; ?></td>
             <td><?php echo $dados['tipo']; ?></td>
      </tr>

      <?php } ?>
     
    </tbody>
  </table>
            </div>
       </div>
     </div>



  </body>
</html>

