<?php
require_once "includes/config.php";

require_once conexao;

$valor = $_POST['valor'];

$sql_subcategoria = "SELECT * FROM subcategorias WHERE subcategorias.idCategoria ='$valor' ORDER BY subcategorias.NomeSubCategoria  ASC";
        $exe_subcategoria = $mysqli->query($sql_subcategoria);

        while( $subcategoria = $exe_subcategoria->fetch_assoc()){?>

        <option value="<?php echo $subcategoria['idSubCategoria'];?>"> <?php echo @$subcategoria['NomeSubCategoria'];?> </option>

        <?php  }?>
