  <?php include("includes/config.php");

$email = @$_POST['valor'];

include (conexao);

$sql = "select email from usuario where email='$email'";

$executa = $mysqli->query($sql);

 $total = $executa->num_rows;

if($total<1){

  exit("");
}else{
  exit("<span class='alert alert-danger'>Este e-mail já está em uso. Tente outro.</span>");
}

?>          
            
           