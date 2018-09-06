<?php
  if ($dados['TipoUsuario'] == 'Cliente' or $dados['TipoUsuario'] == 'Adm') {

    $sqlTipo = "SELECT * FROM `pessoafisica`
    WHERE idPessoa = ".$dados['idPessoa']."";

    $executaTipo = $mysqli->query($sqlTipo);
    $dadosTipo = $executaTipo->fetch_assoc();

  }

  elseif ($dados['TipoUsuario'] == 'Organização') {

    $sqlTipo = "SELECT * FROM `pessoajuridica`
    WHERE idPessoa = ".$dados['idPessoa']."";

    $executaTipo = $mysqli->query($sqlTipo);
    $dadosTipo = $executaTipo->fetch_assoc();

  }
?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $dados['idUsuario']; ?>" data-whatever="">Detalhes</button>


<div class="modal fade" id="exampleModal<?php echo $dados['idUsuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #8A2BE2;color: #fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"  style="background-color: #8A2BE2;color: #fff;text-align: center;font-size: 2em;">Informações dos Usuários</h4>
      </div>

      <div class="modal-body">


        <div class="container-fluid">

          <div class="well-sm" style="background-color: #fff;border: 2px solid #eee;">
          <div class="row">
            <div class="col-sm-4">
              <?php if (!empty($dados['fotoPerfil'])){
            $fotoPerfil = $dados['fotoPerfil'];
          }
          else{
            $fotoPerfil = "padraoUsuarios.png";
          }

          ?>

             <p class="text-center"><img src="imagens/imgUsuarios/<?php echo $fotoPerfil; ?>" class="img-thumbnail" width="150" heigth='150' alt="<?php echo $dados['NomeExibicao']; ?>"></p>




            </div>

            <div class="col-sm-7">
             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;">ID Usuário: <?php echo $dados['idUsuario']; ?></p>

             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;">ID Pessoa: <?php echo $dados['idPessoa']; ?></p>

             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;">Nome do Usuário: <?php echo $dados['NomeExibicao']; ?></p>

             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;"><?php echo $dados['TipoPessoa'] ?>: <?php if (!empty($dadosTipo['CPF'])) {
               echo @$dadosTipo['CPF'];
             }
             else {
               echo $dadosTipo['CNPJ'];
             }; ?></p>

             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;">Email: <?php echo $dados['Email']; ?></p>

             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;">Tipo :  <?php echo $dados['TipoUsuario']; ?></p>

             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;">Ativo : <?php if (empty($dados['DataAtivacao'])){echo "NÃO";} else{echo "SIM";} ?></p>

             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;">Data cadastro : <?php echo formataData($dados['DataTermos'])." ".mostraHora($dados['DataTermos']); ?></p>

             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;">Data ativação :  <?php if (empty($dados['DataAtivacao'])){echo "Conta não ativada";} else{ echo formataData($data =$dados['DataAtivacao']); echo " ".mostraHora($data =$dados['DataAtivacao']);} ?></p>

            </div>

          </div>


          </div>

        </div>



      </div>
      <div class="modal-footer">
      <?php //include "editaProduto.php"; ?>
        <button type="button" class="btn btn btn-lg" data-dismiss="modal" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color: #fff;">Fechar</button>

      </div>
    </div>
  </div>
</div>


<script>

$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

</script>
