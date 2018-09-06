<?php
@session_start();
require_once "includes/config.php";
$_SESSION['pagina'] = "cadastraFuncionario.php";
$idPessoa = $_SESSION['idPessoa'];
include verificaPermissao;
 ?>
<div class="col-md-10" style="background-color:#FFF;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;margin-top: 5px;">
   <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;margin-top: 20px;">

    <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Cadastrar funcionário</h1>

    </div>
  <form>

    <div class="form-group">
    <label id="for" style="font-weight: bold;">Loja:</label>
                   <select  name="idLoja" class="form-control" style=" border: 1px solid #eee;height: 40px;">
                     <option value="">Selecione uma loja</option>

                  <?php

                   echo $sql_Loja = "SELECT * FROM  Lojas WHERE idPessoa = $idPessoa ORDER BY  NomeLoja  ASC";
                   $exe_Loja = $mysqli->query($sql_Loja);
                    while( $Loja = $exe_Loja->fetch_assoc()){?>

                     <option value="<?php echo $Loja['idLoja'];?>" > <?php echo @$Loja['NomeLoja'];?> </option>
                     <?php  }?>
                  </select>
    </div>

    <div class="form-group">
    <label for="emailFuncionario" style="font-weight: bold;">Email do funcionário</label>
    <input type="text" name="emailFuncionario" class="form-control" placeholder="Deve ser o email de uma conta existente" style="height: 40px;">

    </div>

    <div class="form-group">
    <label for="emailFuncionario" style="font-weight: bold;">Função</label>
    <select name="" class="form-control">
      <option value="Administrador">Administrador</option>
      <option value="">Editor</option>
      <option value="">Moderador</option>
    </select>

    </div>

  </form>

  <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

    <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Funcionários cadastrados</h1>

    </div>



</div>
