<script src="<?php echo funcoesJs; ?>"></script>

 <style>
 	.label-info {
    background-color: #60338E;
    color: #fff;
}
 </style>
 <h1 style="font-weight:bold;">Filtrar:</h1>
	<ul class="form-group filtro" >

		<?php if (!empty($dadosU['Cidade'])) {
			$CidadeUsuario = $dadosU['Cidade'];
		} ?>



		<form action="resultadoFiltro.php" method="POST" id="filtroCidades">

      <input type="hidden" name="Localizacao" value="<?php echo $Localizacao; ?>">
      <input type="hidden" name="Bairro" value="<?php echo $Bairro; ?>">

      <!-- colocar campo apenas lojas, apenas produtos e ambos -->

			<!-- <input type="hidden" name="montaSql"> -->

			<div class="input-group form-group">
<input type="text" style="border-radius: 4px;height:40px;" class="form-control input-md btn-md" value="<?php echo @$Busca; ?>" name="BuscaFiltro" placeholder="Buscar Produtos ou Estabelecimentos"/>
      </div>
    &nbsp; &nbsp;  <p style="margin:20px;font-weight: bold;font-size: 1.5em;">Buscar: </p>
      <p><input type="radio" name="BuscarPor" id="BuscarTodos" value="BuscarTodos" checked> <label for="BuscarTodos">Tudo</label>
      <input type="radio" name="BuscarPor" id="BuscarProdutos" value="BuscarProdutos"> <label for="BuscarProdutos">Produtos</label>
      <input type="radio" name="BuscarPor" id="BuscarLocais" value="BuscarLocais"> <label for="BuscarLocais">Locais</label>  </p>

				<p style="margin:20px;font-weight: bold;font-size: 1.5em;">Por cidade: </p>

				<hr>

				<input type="hidden" name="busca" value="<?php echo $Busca ?>">

				<input type="text"data-role="tagsinput" id="Cidade" name="Cidade" value="<?php echo $Localizacao; ?>" required ><br><br>

				<p class ="small" style="font-size: 0.9em;color: grey;
        text-align: center;">Digite as cidades separando por ",".</p>

        <p style="margin:20px;font-weight: bold;font-size: 1.5em;">Por bairros: </p>

        <input type="text" data-role="tagsinput" id="Bairro" name="Bairros" value="<?php echo $Bairro; ?>" ><br>

	<br>

			<p style="margin:20px;font-weight: bold;font-size: 1.5em;">Preço</p>
			<hr>
			<li>Quanto quer pagar?</li>
			<div class="input-group form-group">
                    <input type="number" style="border-radius: 4px;height:40px;z-index:0;" class="form-control input-md btn-md" step="1" value="<?php echo Busca; ?>" name="PrecoMax" placeholder="No máximo"/>
                </div>
			<li>Do menor  para o maior <input type="radio" id="Ordenar" name="Ordenar" value="ASC" checked></li>
			<li>Do maior para o menor <input type="radio" id="Ordenar" name="Ordenar" value="DESC"></li>
			<li></li><br>

			<div class="form-group">
				<p style="margin:20px;font-weight: bold;font-size: 1.5em;">Tipo</p>
 <div class="form-group">
 <label id="for">Selecione a Categoria :</label>
                <select  name="idCategoria" class="form-control" style=" border: 1px solid #eee;height:40px;" onchange="javascript:enviaDados(this.value,'subcategorias','subcategoria');">
                	<option value="">Selecione uma Categoria</option>

               <?php

                echo $sql_categoria = "SELECT * FROM  categorias ORDER BY  NomeCategoria  ASC";
                $exe_categoria = $mysqli->query($sql_categoria);
                 while( $categoria = $exe_categoria->fetch_assoc()){?>

                  <option value="<?php echo $categoria['idCategoria'];?>" > <?php echo @$categoria['NomeCategoria'];?> </option>
                  <?php  }?>
               </select>
 </div>

<div class="form-group">
 <label id="for">Selecione a SubCategoria :</label>
                <select  name="idSubCategoria" class="form-control" style=" border: 1px solid #eee;height:40px;" id="subcategoria">
                	<option value="">Selecione uma Subcategoria</option>

               </select>
</div>

<p style="margin:20px;font-weight: bold;font-size: 1.5em;">Marca</p>

<div class="form-group">
  <label id="for">Selecione a Marca :</label>
                <select  name="idMarca" class="form-control" style="border:1px solid #EEE;height:40px;">
                	<option value="">Selecione uma marca</option>

               <?php

                echo $sql_marca = "SELECT * FROM  marcas ORDER BY  NomeMarca  ASC";
                $exe_marca = $mysqli->query($sql_marca);
                  while( $marca = $exe_marca->fetch_assoc()){?>

                  <option value="<?php echo $marca['idMarca'];?>" > <?php echo @$marca['NomeMarca'];?> </option>
                  <?php  }?>
               </select>
</div>

<p style="margin:20px;font-weight: bold;font-size: 1.5em;">Tipo de estabelecimento</p>

<div class="form-group">
  <label id="for">Selecione um tipo :</label>
                <select  name="idTipoLoja" class="form-control" style="border:1px solid #EEE;height:40px;">
                	<option value="">Selecione um tipo</option>

               <?php

                echo $sql_TipoLoja = "SELECT * FROM  tiposloja ORDER BY  TipoLoja  ASC";
                $exe_TipoLoja = $mysqli->query($sql_TipoLoja);
                  while( $TipoLoja = $exe_TipoLoja->fetch_assoc()){?>

                  <option value="<?php echo $TipoLoja['idTipoLoja'];?>" > <?php echo @$TipoLoja['TipoLoja'];?> </option>
                  <?php  }?>
               </select>
</div>

		<input class="btn btn-sm col-md-12 col-xs-12" type="submit" value="Buscar" style="border: #60338E;color: #fff;background: #60338E;font-size: 1em;text-align:center; "><br><br>

</form>

	</ul>

  <script>
    Localizacao = document.getElementById("Cidade").value;
    if (Localizacao == "") {
      CidadeLocal = sessionStorage.getItem("Cidade");
      document.getElementById('Cidade').value = CidadeLocal;
    }

    Bairro = document.getElementById("Bairro").value;
    if (Bairro == "") {
      BairroLocal = sessionStorage.getItem("Bairro");
      document.getElementById('Bairro').value = BairroLocal;
    }
    //alert(BairroLocal);

  </script>
