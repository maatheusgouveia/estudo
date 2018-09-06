<!-- Button trigger modal -->
<button type="button" class="btn btn-sm col-md-6 col-md-offset-3 col-xs-12" data-toggle="modal" data-target="#myModal" title="Editar dados pessoais" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color:#fff;font-size: 1em;">
  Editar
</button>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#8A2BE2 ;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#000;font-weight:bold;"><span aria-hidden="true" >&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="background-color:#8A2BE2 ;color: #fff;text-align: center;font-size: 2em;font-weight:bold;">Mostra Preço</h4>
      </div>
      <div class="modal-body">
      <h2  style="text-align: center;font-size: 1.8em;font-weight:bold;">Editar dados pessoais </h2>
  <hr>

  <form method="POST" action="acoes/editaDadosPessoais.php" enctype="multipart/form-data">

    <div class="form-group">
      <label style="font-weight: bold;">Nome ou Razão social:</label>
      <input type="text" name="NomeRazaoSocial" value="<?php echo $dados['NomeRazaoSocial']; ?>" class="form-control" style="height: 40px;">
    </div>

    <div class="form-group">
      <label style="font-weight: bold;">Nome de usuário:</label>
      <input type="text" name="NomeExibicao" value="<?php echo $dados['NomeExibicao']; ?>" class="form-control" style="height: 40px;">
    </div>

    <div class="form-group">
      <label style="font-weight: bold;">Email principal:</label>
      <input type="text" name="FotoPerfil" value="<?php echo $dados['Email']; ?>" class="form-control" style="height: 40px;" readonly>
    </div>

    <div class="form-group">
      <label style="font-weight: bold;"><?php echo $dados['TipoPessoa'] ?>:</label>
      <input type="text" name="<?php echo $dados['TipoPessoa'] ?>" value="<?php if (!empty($dadosTipo['CPF'])) {
        echo @$dadosTipo['CPF'];
      }
      else {
        echo @$dadosTipo['CNPJ'];
      }; ?>" class="form-control" style="height: 40px;" readonly>
    </div>

    <div class="form-group">
      <label style="font-weight: bold;">Imagem :</label>
      <input type="file" name="FotoPerfil" value="" class="form-control" style="height: 40px;">
    </div>

    <hr>
<div class="row">
   <div class="footer col-md-5 col-md-offset-4 col-xs-12 col-xs-offset-3" >

<input type="submit" class="btn btn-lg " style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color: #fff;">

 </div>
</div>


  </form>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
