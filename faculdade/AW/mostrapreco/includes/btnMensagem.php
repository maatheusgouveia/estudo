<style>
  .btn-email{
  position: fixed;
  width: 50px;
  height: 50px;
  padding: 5px 8px;
  font-size: 12px;
  line-height: 1.33;
  border-radius: 25px;
  background-color: #60338e;
  border: 1px solid #60338e;
  bottom: 30px;
  left: 20px;
  z-index: 1;
  }

  button:hover{
    /* background-color: #60338e; */
    color:#000;
  }

  button{
    color:#000;
  }

  .borda{
    border: 1px solid #DCDCDC;
  }
</style>

<!-- Button trigger modal -->

<button type="button" class="btn  btn-lg btn-circle btn-email" data-toggle="modal" data-target="#myModalMsg" style="z-index: 1;color: #fff;">

   <i class="fa fa-comments-o fa-2x" title="Enviar Mensagem"></i>

</button>

<!-- Modal -->

<div class="modal fade" id="myModalMsg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header" style="background-color:#8A2BE2;">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  ><span aria-hidden="true" style="color:#000;font-weight:bold;">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel" style="background-color:#8A2BE2 ;font-size: 2em;text-align: center;color: #fff;font-weight:bold;">Mostra Preço</h4>

      </div>

      <div class="modal-body">

      <h2  style="text-align: center;font-size: 1.5em;font-weight: bold;">Enviar uma Mensagem</h2>

  <hr>

  <div id="retorno">

  </div>

       <form method="POST" action="enviarEmail.php" style="text-align: center;margin: 20px;" id="enviarEmail">

          <div class="form-group">

          <span style="color: #;font-weight: bold;">Assunto:<span class="asterisco" style="color:	#9400D3;">*</span></span> <br>
          <select class="btn btn-lg borda " name="assunto" id="assunto" style="width: 100%;" required>
            <option value="">Selecione um assunto</option>
            <option value="reportar" >Reportar um Bug</option>
            <option value="sugestao">Sugestão/Reclamação</option>
            <option value="desenvolvedores">Mensagem aos desenvolvedores</option>
            <option value="outros">Outros</option>
          </select> <br>

          </div>

<div class="form-group">

          <span style="color: #;font-weight: bold;">Nome:<span class="asterisco" style="color:	#9400D3;">*</span></span> <br>

          <input type="text" style="text-align:left;margin-bottom: 20px;" name="nomeMensagem" class="btn btn-lg col-xs-12 col-sm-12 col-md-12 col-xl-12 borda" size="35" required placeholder="Qual o seu nome?" value="<?php echo @$_SESSION['NomeRazaoSocial']; ?>"> <br>

</div>

         <span style="color: #;font-weight: bold;"> Email:<span class="asterisco" style="color:	#9400D3;">*</span></span> <br>

<input type="email" style="text-align:left;margin-bottom: 20px;" name="emailMensagem" class="btn btn-lg col-xs-12 col-sm-12 col-md-12 col-xl-12 borda" size="35" required placeholder="Um email para entrarmos em contato se for necessário" value="<?php echo @$_SESSION['Email']; ?>"> <br>

      <span style="color: #;font-weight: bold;">Mensagem:<span class="asterisco" style="color:	#9400D3;">*</span></span> <br>

      <textarea class="col-xs-12 col-sm-12 col-md-12 col-xl-12 borda" name="mensagem" id="mensagem" cols="40" rows="5" class="btn btn-lg" required style="margin-bottom: 10px;"></textarea> <br> <br> <br>

<hr>

      <div class="footer" >
       <input type="submit" class="btn  btn-lg " style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color: #fff;">
       <input type="reset" class="btn  btn-lg" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color: #fff;">
       <!-- <button type="button" class="btn  btn-lg" data-dismiss="modal" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color: #fff;">Fechar</button> -->
        </div>
         </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(e){
     $("#enviarEmail").submit(function(){
         $.ajax({
          //caminho/nome do arquivo que irá receber o form
            url:'enviarEmail.php',
            type:'POST',
            data:$(this).serialize(),
            beforeSend:function(){
            $('#retorno').html("<img src='imagens/loading.gif'>");
            }, //o que aconteceao enviar dados
            success:function(data){
            $("#retorno").html(data);
            } ,// dados de retorno do arquivo que recebe o form
         }); //fim ajax
         return false;
     }); //fim form exemplo
  }) // fim jquery
</script>
