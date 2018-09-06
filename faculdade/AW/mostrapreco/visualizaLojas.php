<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $dadosL['idLoja']; ?>" data-whatever="">Detalhes</button>

<div class="modal fade" id="exampleModal<?php echo $dadosL['idLoja']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #8A2BE2;color: #fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"  style="background-color: #8A2BE2;color: #fff;text-align: center;font-size: 2em;">Informações da Loja</h4>
      </div>

      <div class="modal-body">

        <div class="container-fluid">

          <div class="well-sm" style="background-color: #fff;border: 2px solid #eee;">
          <div class="row">
            <div class="col-sm-4">
              <?php if (!empty($dadosL['fotoPerfil'])){
            $fotoPerfil = $dadosL['fotoPerfil'];
          }
          else{
            $fotoPerfil = "padraoLojas.png";
          }

          ?>

             <p class="text-center"><img src="imagens/imgEmpresas/<?php echo $dadosL['ImagemLoja']; ?>" class="img-thumbnail" width="150" heigth='150' alt="<?php echo $dadosL['NomeExibicao']; ?>"></p>

            </div>

            <div class="col-sm-7">

             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;">Nome do Usuário: <?php echo $dadosL['NomeLoja']; ?></p>

             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;">Endereço: <?php echo $dadosL['Logradouro']." Nº ".$dadosL['Numero']."."; ?></p>

             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;">Bairro: <?php echo $dadosL['Bairro'].", ".$dadosL['Cidade']."-".$dadosL['UF']; ?></p>

             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;">Horário de Funcionamento</p>

      <?php
      require_once conexao;

      require_once funcoesPhp;

      $queryHora = "SELECT * FROM horariofuncionamento WHERE idLoja =".$dadosL['idLoja']." ORDER BY idHorario ASC";

      $executaQueryHora = $mysqli->query($queryHora);

      while ($dadosHora = $executaQueryHora->fetch_assoc()){;
      ?>

             <p style="font-weight: bold;font-size: 1em;margin-bottom: 5px;"><?php echo $dadosHora['DiaSemana']; ?>: Das <?php echo formataHora($dadosHora['HoraAbertura'])." às ".formataHora($dadosHora['HoraFechamento']); ?></p>

<?php } ?>

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
