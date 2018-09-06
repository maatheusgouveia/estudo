<div class="row">
            <div class="col-md-12 form-group">

            <div class="col-md-2" style="border-left: 5px solid #8A2BE2;">

            <img src="imagens/imgUsuarios/<?php if (!empty($_SESSION['FotoPerfil'])) {
              echo $_SESSION['FotoPerfil'];
            }
            else{
              echo "padraoUsuarios.png";
            }  ?>" class="img-circle" alt="" width="100" height="100" style="margin-bottom: 10px;">

            </div>

            <div class="col-md-10">
            <div class="row"><span style="font-weight: bold;"><?php echo $_SESSION['NomeExibicao'];  ?> </span></div>
            <div class="row"><p style="margin: 10px;"><?php echo $ConteudoComentario ?></p></div>
            <div class="row"><div class="small"></div></div>
            </div>

            </div>

            <!-- <hr style="border: 1px dashed #eee;width: 90%;"> -->
        </div>
