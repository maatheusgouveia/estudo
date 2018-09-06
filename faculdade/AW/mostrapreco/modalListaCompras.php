

  <div class="modal fade" id="myModalLista" tabindex="-1" role="dialog" style="position: absolute ;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#8A2BE2 ;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#000;font-weight:bold;"><span aria-hidden="true" >&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="background-color:#8A2BE2 ;color: #fff;text-align: center;font-size: 2em;font-weight:bold;">Mostra Preço</h4>
      </div>
      <div class="modal-body">

       <h2  style="text-align: center;font-size: 1.8em;font-weight: bold;">Nova lista de compras</h2>
  <hr>
        <form method="POST" action="acoes/executaLista.php">
    <div class="form-group">


<input type="text" name="NomeLista" class="form-control form" placeholder="Nome da lista de compras" required>

    </div>






       <input type="submit" class="btn btn btn-lg  " style=" background-color: #8A2BE2; border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;color: #fff;">

        <button type="button" class="btn btn btn-lg" data-dismiss="modal" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color: #fff;margin-bottom: 10px;margin-top: 35px; ">Fechar</button>
       </form>
      </div>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
