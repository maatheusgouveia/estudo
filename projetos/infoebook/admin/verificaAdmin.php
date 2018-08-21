 <?php 




if($_SESSION['tipo_usuario'] != 1){

echo "Você não tem permição para acessar esta pagina<br>Redirecionando"; ?>


<script>
	
 setTimeout(function(){ location.href='<?php echo url; ?>/admin/index.php'  }, 3000);
 

</script>

<?php
exit();
}

?>