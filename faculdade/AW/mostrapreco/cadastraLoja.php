<?php
@session_start();
require_once "includes/config.php";
$_SESSION['pagina'] = "cadastraLoja.php";
$idPessoa = $_SESSION['idPessoa'];
include verificaPermissao;
 ?>
  <div class="col-md-10"  style="background-color:#FFF;">

  <button type="button" class="btn btn-md" onclick="Mudarestado('DivQueSome')" style="color: #fff;background-color: #8a2be2;border: 2px solid #8a2be2;margin-top: 5px;">Cadastrar loja</button>

  <button type="button" class="btn btn-md" onclick="Mudarestado('DivQueSome2');" style="color: #fff;background-color: #8a2be2;border: 2px solid #8a2be2;margin-top: 5px;">Telefones</button>

  <button type="button" class="btn btn-md" onclick="Mudarestado('DivQueSome3');" style="color: #fff;background-color: #8a2be2;border: 2px solid #8a2be2;margin-top: 5px;">Redes Sociais</button>

  <div id="DivQueSome3" class="well-lg" style="background-color: #fff;margin-top: 20px;display:none;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;">

    <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Redes sociais</h1>

    </div>

     <div class="row">
<a class="btn btn-sm col-md-2 col-md-offset-5 " href="javascript:void(0);" onclick="startIntro1();" style="color:#fff;background-color: #8A2BE2;font-size:100%;">Guia de cadastro</a>
</div>

<script type="text/javascript">
function Mudarestado(el) {
       var display = document.getElementById(el).style.display;
       if(display == "none")
           document.getElementById(el).style.display = 'block';
       else
           document.getElementById(el).style.display = 'none';
   }
</script>

<div id="step7" class="lead">
   <form method="POST" action="acoes/executaRedesSociais.php" enctype="multipart/form-data">

     <div class="form-group">
     <label id="for" style="font-weight:bold;">Loja:<span class="asterisco" style="color:	#9400D3;">*</span></label>
                    <select  name="idLoja" class="form-control" style=" border: 1px solid #eee;height: 40px;" required>
                    	<option value="">Selecione uma loja</option>

                   <?php

                    echo $sql_Loja = "SELECT * FROM  lojas WHERE idPessoa = $idPessoa ORDER BY  NomeLoja  ASC";
                    $exe_Loja = $mysqli->query($sql_Loja);
                     while( $Loja = $exe_Loja->fetch_assoc()){?>

                      <option value="<?php echo $Loja['idLoja'];?>" > <?php echo @$Loja['NomeLoja'];?> </option>
                      <?php  }?>
                   </select>
     </div>

<div class="row">
  <div class="col-md-6 col-xs-6">
       <div class="form-group">
           <label style="font-weight: bold;"><i class="far fa-envelope" style="font-size:18px;"></i> Email para contato:<span class="asterisco" style="color:	#9400D3;">*</span> </label>
           <input type="text" id="EmailContato" name="EmailContato" required class="form-control" placeholder="Digite seu email" style="height: 40px;">
       </div>
  </div>

  <div class="col-md-6 col-xs-6">
       <div class="form-group">
           <label style="font-weight: bold;"><i class="fab fa-facebook fa-1x" style="font-size:18px;"></i> Facebook:<span class="asterisco" style="color:	#9400D3;">*</span> </label>
           <input type="text" id="Facebook" name="Facebook" required class="form-control" placeholder="Cole o link da sua conta do Facebook"  style="height: 40px;">
       </div>
</div>
</div>

<div class="row">
  <div class="col-md-6 col-xs-6">
       <div class="form-group">
           <label style="font-weight: bold;"><i class="fab fa-twitter-square fa-1x" style="font-size:18px;"></i> Twitter:<span class="asterisco" style="color:	#9400D3;">*</span> </label>
           <input type="text" id="Twitter" name="Twitter" required class="form-control" placeholder="Cole o link da sua conta do Twitter" style="height: 40px;">
       </div>
</div>

  <div class="col-md-6 col-xs-6">
       <div class="form-group">
           <label style="font-weight: bold;"><i class="fab fa-instagram" style="font-size:18px;"></i> Instagram:<span class="asterisco" style="color:	#9400D3;">*</span> </label>
           <input type="text" id="Instagram" name="Instagram" required class="form-control" placeholder="Cole o link da sua conta do Instagram" style="height: 40px;">
       </div>
</div>
</div>

<div class="row">
  <div class="col-md-6 col-xs-6">
       <div class="form-group">
           <label style="font-weight: bold;"><i class="fab fa-linkedin" style="font-size:18px;"></i>  Linkedin:<span class="asterisco" style="color:	#9400D3;">*</span> </label>
           <input type="text" id="Linkedin" name="Linkedin" required class="form-control" placeholder="Cole o link da sua conta do Linkedin" style="height: 40px;">
       </div>
</div>

  <div class="col-md-6 col-xs-6">
       <div class="form-group">
           <label style="font-weight: bold;"> <i class="fab fa-youtube" style="font-size:18px;"></i> Youtube:<span class="asterisco" style="color:	#9400D3;">*</span> </label>
           <input type="text" id="Youtube" name="Youtube" required class="form-control" placeholder="Cole o link da sua conta do Youtube" style="height: 40px;">
       </div>
</div>
</div>

<div class="">
    <input type="submit" class="btn  btn-lg  " style=" background-color: #8A2BE2; border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;color: #fff;" value="Salvar">

      <input type="reset" class="btn  btn-lg" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;color: #fff;">

</div>
      </form>

</div>

</div>

<!-- fim form contato -->

  <div id="DivQueSome2" class="well-lg" style="background-color: #fff;margin-top: 20px;display:none;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;">

    <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Cadastrar telefones</h1>

 </div>

 <div class="row">
<a class="btn btn-sm col-md-2 col-md-offset-5 " href="javascript:void(0);" onclick="startIntro2();" style="color:#fff;background-color: #8A2BE2;font-size:100%;">Guia de cadastro</a>
</div>

<script type="text/javascript">
function Mudarestado(el) {
       var display = document.getElementById(el).style.display;
       if(display == "none")
           document.getElementById(el).style.display = 'block';
       else
           document.getElementById(el).style.display = 'none';
   }
</script>

<div id="step6" class="lead">
   <form method="POST" action="acoes/executaTelefones.php" enctype="multipart/form-data">

     <div class="form-group">
     <label id="for" style="font-weight:bold;">Loja:<span class="asterisco" style="color:	#9400D3;">*</span></label>
                    <select  name="idLoja" class="form-control" style=" border: 1px solid #eee;height: 40px;" required>
                    	<option value="">Selecione uma loja</option>

                   <?php

                    echo $sql_Loja =   "SELECT * FROM  lojas WHERE idPessoa = $idPessoa ORDER BY  NomeLoja  ASC";
                    $exe_Loja = $mysqli->query($sql_Loja);
                     while( $Loja = $exe_Loja->fetch_assoc()){?>

                      <option value="<?php echo $Loja['idLoja'];?>" > <?php echo @$Loja['NomeLoja'];?> </option>
                      <?php  }?>
                   </select>
     </div>

     <div class="form-group">
     <label id="for" style="font-weight:bold;">Telefone Fixo:</label>
        <input type="text" class="form-control" name="Fixo" id="Fixo" placeholder="Digite o número do telefone">
     </div>

     <div class="form-group">
     <label id="for" style="font-weight:bold;">Celular:</label>
        <input type="text" class="form-control" name="Celular" id="Celular" placeholder="Digite o número do celular">
     </div>

     <div class="form-group">
     <label id="for" style="font-weight:bold;">Whatsapp:</label>
        <input type="text" class="form-control" name="Whatsapp" id="Whatsapp" placeholder="Digite o número do whatsapp">
     </div>

     <div class="form-group">
     <label id="for" style="font-weight:bold;">Ramal:</label>
        <input type="text" class="form-control" name="Ramal" id="Ramal" placeholder="Digite o número do ramal">
     </div>

<div class="">
    <input type="submit" class="btn  btn-lg" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;color: #fff;" value="Salvar">

      <input type="reset" class="btn  btn-lg" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;color: #fff;">

</div>
      </form>

</div>

</div>

<!-- fim div telefone  -->

  <div id="DivQueSome" class="well-lg" style="background-color: #fff;margin-top: 20px;display:none;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;">

    <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

   <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px">Nova Loja</h1>

 </div>

 <div class="row">
<a class="btn btn-sm col-md-2 col-md-offset-5 " href="javascript:void(0);" onclick="startIntro();" style="color:#fff;background-color: #8A2BE2;font-size:100%;">Guia de cadastro</a>
</div>

<script type="text/javascript">
function Mudarestado(el) {
       var display = document.getElementById(el).style.display;
       if(display == "none")
           document.getElementById(el).style.display = 'block';
       else
           document.getElementById(el).style.display = 'none';
   }
</script>

<div id="step4" class="lead">
   <form method="POST" action="acoes/executaCadastraLoja.php" enctype="multipart/form-data">
 <div class="form-group">
 <label style="font-weight: bold;">Nome do estabelecimento:<span class="asterisco" style="color:	#9400D3;">*</span></label>
 <input type="text" id="nomeLoja" name="nomeLoja" required size="25" placeholder="Digite o nome do estabelecimento" class="form-control" style="height: 40px;">
 </div>

 <div class="form-group">
 <label id="for" style="font-weight:bold;">Tipo de estabelecimento:<span class="asterisco" style="color:	#9400D3;">*</span></label>
                <select  name="TipoLoja" id="TipoLoja" class="form-control" style="height: 40px;" required>
                  <option value="">Selecione um tipo</option>

               <?php

                echo $sql_TipoLoja = "SELECT * FROM  tiposloja ORDER BY  TipoLoja  ASC";
                $exe_TipoLoja = $mysqli->query($sql_TipoLoja);
                 while( $TipoLoja = $exe_TipoLoja->fetch_assoc()){?>

                  <option value="<?php echo $TipoLoja['idTipoLoja'];?>" > <?php echo @$TipoLoja['TipoLoja'];?> </option>
                  <?php  }?>
               </select>
  </div>

 <div class="form-group">
 <label for="txtCep" style="font-weight: bold;">CEP:</label>
 <input type="text" id="txtCep" name="cep"  maxlength="9" OnKeyPress="formatar('#####-###', this)" size="25" class="form-control" placeholder="Digite o cep"style="height: 40px;" required>
      <p class="small"><a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="blank" style="color:#60338E;"><i class="fas fa-map-marker-alt"></i> Não sei meu cep</a></p>
 </div>

 <div class="form-group">
 <label for="txtLogradouro" style="font-weight: bold;">Logradouro:</label>
 <input type="text" id="txtLogradouro" name="logradouro" size="25" class="form-control" placeholder="Digite o logradouro" style="height: 40px;">
 </div>

 <div class="form-group">
   <label style="font-weight: bold;"  >Número:<span class="asterisco" style="color:	#9400D3;">*</span></label>
   <input type="number" name="numero" class="form-control form" placeholder="Digite o número" required style="height: 40px;">
   </div>

 <div class="form-group">
 <label for="txtBairro" style="font-weight: bold;"> Bairro:</label>
 <input type="text" id="txtBairro" name="bairro" size="25" class="form-control" placeholder="Digite o bairro" style="height: 40px;">
 </div>
 <div class="form-group">
 <label for="txtCidade" style="font-weight: bold;">Cidade:<span class="asterisco" style="color:	#9400D3;">*</span></label>
 <input type="text" id="txtCidade" name="cidade" required size="25" placeholder="Digite a cidade" class="form-control">
 </div>

 <div class="form-group">
 <label style="font-weight: bold;">Estado:</label>
 <select name="estados-brasil" id="txtEstado" class="form-control"  placeholder="Digite o estado" style="height: 40px;">
   <option value="">Escolha um estado</option>
   <option value="AC">AC</option>
   <option value="AL">AL</option>
   <option value="AP">AP</option>
   <option value="AM">AM</option>
   <option value="BA">BA</option>
   <option value="CE">CE</option>
   <option value="DF">DF</option>
   <option value="ES">ES</option>
   <option value="GO">GO</option>
   <option value="MA">MA</option>
   <option value="MT">MT</option>
   <option value="MS">MS</option>
   <option value="MG">MG</option>
   <option value="PA">PA</option>
   <option value="PB">PB</option>
   <option value="PR">PR</option>
   <option value="PE">PE</option>
   <option value="PI">PI</option>
   <option value="RJ">RJ</option>
   <option value="RN">RN</option>
   <option value="RS">RS</option>
   <option value="RO">RO</option>
   <option value="RR">RR</option>
   <option value="SC">SC</option>
   <option value="SP">SP</option>
   <option value="SE">SE</option>
   <option value="TO">TO</option>
 </select>
 </div>

 </div>

<div id="step5" class="lead">

 <div class="form-group">
 <label for="imagemLoja" style="font-weight: bold;">Foto da Loja:</label>
 <input type="file" id="imagemLoja" name="ImagemLoja" size="25" class="form-control" style="height: 40px;">
 </div>

<label for="HoraFuncionamento" style="font-weight: bold;">Horários de funcionamento:</label>
 <div class="form-group">

<!-- preenchimento automático -->
<!-- colocar bordas para separar essa parte -->
 <div style="">
   <label for=""  style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Preencher automaticamente</label>
  <div class="row">
    <div class="col-md-6 col-xs-6">
   <label for="AberturaAutomatica"  style="font-weight: bold;">Horario de abertura:</label>
   <input type="time" id="AberturaAutomatica"  name="AberturaAutomatica" size="25" class="form-control" style="height: 40px;margin-bottom:10px;">
    </div>

  <div class="col-md-6 col-xs-6">
   <label for="FechamentoAutomatico"   style="font-weight: bold;">Horario de fechamento:</label>
   <input type="time" id="FechamentoAutomatico"  name="FechamentoAutomatico" size="25" class="form-control" style="height: 40px;">
    </div>

    <div class="col-md-12 col-xs-12">
     <label for="Frequencia"   style="font-weight: bold;">Frequência</label>
     <select id="Frequencia"  name="Frequencia" class="form-control" onchange="ValoresAutomaticos(this.value)">
            <option value="">Escolha quando os horários serão aplicados</option>
            <option value="diariamente">Todos os dias</option>
            <option value="diasUteis">Segunda a sexta</option>
            <option value="fimSemana">Fins de semana</option>
     </select>
      </div>
  </div>
</div>

<script>
    function ValoresAutomaticos(frequencia){
      abertura = document.getElementById("AberturaAutomatica").value;
      fechamento = document.getElementById("FechamentoAutomatico").value;
      if (frequencia != "") {
              if(frequencia == "diariamente") {
                  // mudar hora de abertura
                  document.getElementById('AberturaSegunda').value = abertura;
                  document.getElementById('AberturaTerca').value = abertura;
                  document.getElementById('AberturaQuarta').value = abertura;
                  document.getElementById('AberturaQuinta').value = abertura;
                  document.getElementById('AberturaSexta').value = abertura;
                  document.getElementById('AberturaSabado').value = abertura;
                  document.getElementById('AberturaDomingo').value = abertura;
                  // mudar hora de fechamento
                  document.getElementById('FechamentoSegunda').value = abertura;
                  document.getElementById('FechamentoTerca').value = abertura;
                  document.getElementById('FechamentoQuarta').value = abertura;
                  document.getElementById('FechamentoQuinta').value = abertura;
                  document.getElementById('FechamentoSexta').value = abertura;
                  document.getElementById('FechamentoSabado').value = abertura;
                  document.getElementById('FechamentoDomingo').value = abertura;

        }
              else if(frequencia == "diasUteis") {
                  // mudar hora de abertura
                  document.getElementById('AberturaSegunda').value = abertura;
                  document.getElementById('AberturaTerca').value = abertura;
                  document.getElementById('AberturaQuarta').value = abertura;
                  document.getElementById('AberturaQuinta').value = abertura;
                  document.getElementById('AberturaSexta').value = abertura;
                  document.getElementById('AberturaSabado').value = "";
                  document.getElementById('AberturaDomingo').value = "";
                  // mudar hora de fechamento
                  document.getElementById('FechamentoSegunda').value = abertura;
                  document.getElementById('FechamentoTerca').value = abertura;
                  document.getElementById('FechamentoQuarta').value = abertura;
                  document.getElementById('FechamentoQuinta').value = abertura;
                  document.getElementById('FechamentoSexta').value = abertura;
                  document.getElementById('FechamentoSabado').value = "";
                  document.getElementById('FechamentoDomingo').value = "";

        }
        else if(frequencia == "fimSemana") {
            // mudar hora de abertura
            document.getElementById('AberturaSegunda').value = "";
            document.getElementById('AberturaTerca').value = "";
            document.getElementById('AberturaQuarta').value = "";
            document.getElementById('AberturaQuinta').value = "";
            document.getElementById('AberturaSexta').value = "";
            document.getElementById('AberturaSabado').value = abertura;
            document.getElementById('AberturaDomingo').value = abertura;
            // mudar hora de fechamento
            document.getElementById('FechamentoSegunda').value = "";
            document.getElementById('FechamentoTerca').value = "";
            document.getElementById('FechamentoQuarta').value = "";
            document.getElementById('FechamentoQuinta').value = "";
            document.getElementById('FechamentoSexta').value = "";
            document.getElementById('FechamentoSabado').value = abertura;
            document.getElementById('FechamentoDomingo').value = abertura;

  }
      }
    }

</script>
<!-- colocar bordas para separar essa parte -->
<!-- preenchimento automático -->

 <label for=""  style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Segunda-Feira</label>
<div class="row">
  <div class="col-md-6 col-xs-6">
 <label for="AberturaSegunda"  style="font-weight: bold;">Abre às:</label>
 <input type="time" id="AberturaSegunda"  name="AberturaSegunda" size="25" class="form-control" style="height: 40px;margin-bottom:10px;">
  </div>

<div class="col-md-6 col-xs-6">
 <label for="FechamentoSegunda"   style="font-weight: bold;">Fecha às:</label>
 <input type="time" id="FechamentoSegunda"  name="FechamentoSegunda" size="25" class="form-control" style="height: 40px;">
  </div>
</div>

<label for="" style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Terça-Feira</label>

<div class="row">
<div class="col-md-6 col-xs-6">
 <label for="AberturaTerca"  style="font-weight: bold;">Abre às:</label>
 <input type="time" id="AberturaTerca"  name="AberturaTerca" size="25" class="form-control" style="height: 40px;">
</div>

<div class="col-md-6 col-xs-6">
 <label for="FechamentoTerca"   style="font-weight: bold;">Fecha às:</label>
 <input type="time" id="FechamentoTerca"  name="FechamentoTerca" size="25" class="form-control" style="height: 40px;">
</div>
</div>


<label for="" style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Quarta-Feira</label>

<div class="row">
<div class="col-md-6 col-xs-6">
 <label for="AberturaQuarta"  style="font-weight: bold;">Abre às:</label>
 <input type="time" id="AberturaQuarta"   name="AberturaQuarta" size="25" class="form-control" style="height: 40px;">
</div>

<div class="col-md-6 col-xs-6">
 <label for="FechamentoQuarta"  style="font-weight: bold;">Fecha às:</label>
 <input type="time" id="FechamentoQuarta"  name="FechamentoQuarta" size="25" class="form-control" style="height: 40px;">
</div>
</div>

<label for="" style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Quinta-Feira</label>

<div class="row">
<div class="col-md-6 col-xs-6">
 <label for="AberturaQuinta" style="font-weight: bold;">Abre às:</label>
 <input type="time" id="AberturaQuinta" name="AberturaQuinta" size="25" class="form-control" style="height: 40px;">
</div>

<div class="col-md-6 col-xs-6">
 <label for="FechamentoQuinta" style="font-weight: bold;">Fecha às:</label>
 <input type="time" id="FechamentoQuinta" name="FechamentoQuinta" size="25" class="form-control" style="height: 40px;">
</div>
</div>


<label for="" style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Sexta-Feira</label>

<div class="row">
<div class="col-md-6 col-xs-6">
 <label for="AberturaSexta" style="font-weight: bold;">Abre às:</label>
 <input type="time" id="AberturaSexta" name="AberturaSexta" size="25" class="form-control" style="height: 40px;">
</div>

<div class="col-md-6 col-xs-6">
 <label for="FechamentoSexta" style="font-weight: bold;">Fecha às:</label>
 <input type="time" id="FechamentoSexta" name="FechamentoSexta" size="25" class="form-control" style="height: 40px;">
</div>
</div>


<label for="" style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Sábado</label>

<div class="row">
<div class="col-md-6 col-xs-6">
 <label for="AberturaSabado" style="font-weight: bold;">Abre às:</label>
 <input type="time" id="AberturaSabado" name="AberturaSabado" size="25" class="form-control" style="height: 40px;">
</div>

<div class="col-md-6 col-xs-6">
 <label for="FechamentoSabado" style="font-weight: bold;">Fecha às:</label>
 <input type="time" id="FechamentoSabado" name="FechamentoSabado" size="25" class="form-control" style="height: 40px;">
</div>
</div>

<label for="" style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Domingo</label>

<div class="row">
<div class="col-md-6 col-xs-6">
 <label for="AberturaDomingo" style="font-weight: bold;">Abre às:</label>
 <input type="time" id="AberturaDomingo" name="AberturaDomingo" size="25" class="form-control" style="height: 40px;">
</div>

<div class="col-md-6 col-xs-6">
 <label for="FechamentoDomingo" style="font-weight: bold;">Fecha às:</label>
 <input type="time" id="FechamentoDomingo" name="FechamentoDomingo" size="25" class="form-control" style="height: 40px;">
</div>
</div>

 </div>

<div class="">
    <input type="submit" class="btn  btn-lg  " style=" background-color: #8A2BE2;color: #fff; border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;" value="Salvar">

      <input type="reset" class="btn btn- btn-lg" style=" background-color: #8A2BE2;color: #fff; border:1px solid #8A2BE2;margin-bottom: 10px;margin-top: 35px;">



</div>
      </form>
</div>

    </div>

<!-- fim form lojas -->

  <div class="well-lg" style="background-color: #fff;margin-top: 20px;min-height: ;margin-bottom:20px;border: 2px solid lightgray;border-radius: 4px;">
     <div class="well-sm" style="background-color: #8a2be2;color: #fff;height: 60px;border-radius: 5px;margin-bottom: 10px;">

    <h1 style="text-align: center;font-weight: bold;font-size: 1.5em;margin-top: 5px;">Lojas cadastradas</h1>

    </div>
    <?php

      //num_rows obtem o nº de linhas retornado pela consulta
  $queryLoja ="SELECT * FROM `lojas`
  WHERE lojas.idPessoa = $idPessoa";

  $executaQueryLoja = $mysqli->query($queryLoja);

    $linhasM = $executaQueryLoja->num_rows;

      if($linhasM>0){
          ?>
  <table class=" table table-striped table-responsive center-block" id="tabLojas" style="margin-top: -10px;">
      <thead>
        <tr>

          <th >Nome</th>
           <th>Detalhes</th>
          <th >Editar</th>
          <th >Excluir</th>
        </tr>
      </thead>
     <tbody>
                  <?php // utilizar o metodo fetch_assoc() para armazenar os dados da consulta em um array
         while($dadosL= $executaQueryLoja->fetch_assoc())
        {//inicio do while?>
              <tr>

          <td style="width:200px;"><?php echo $dadosL['NomeLoja']; ?></td>
          <td style="width:200px;"><?php include "visualizaLojas.php"; ?></td>
          <td style="width:200px;"><?php include "modalEditaLoja.php" ?></td>
          <td style="width:200px;"><a href="acoesLojas.php?idLoja=<?php echo base64_encode($dadosL['idLoja']); ?>"><button class="btn btn-danger btn-sm">Excluir</button></a></td>
        </tr>
        <?php }   //fim do while


        }//fim do if
        else{
          echo "<div class='col-sm-4 col-sm-offset-4'><h3 class='text-center'>Nenhuma loja cadastrada</h3></div>";
        }


   ?>

  </tbody>
  </table>

  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    <script>$(document).ready(function(){
      $('#tabLojas').DataTable();
      });
    </script>

</div>


  </div>





<script src="js/busca_cep.js"></script>
<script>
function formatar(mascara, documento){
var i = documento.value.length;
var saida = mascara.substring(0,1);
var texto = mascara.substring(i)

if (texto.substring(0,1) != saida){
          documento.value += texto.substring(0,1);
}

}
</script>

<script src="libs/maskedinput/src/jquery.maskedinput.js"></script>
<script>
  $(document).ready(function() {

    document.getElementById("Telefone").onchange = function formataTelefone(e){
      var Telefone = document.getElementById("Telefone").value;
      tamanho = Telefone.length;
      if (tamanho = 11) {

        $("#Telefone").mask("(99) 99999-9999");
      }
      else if {

        $("#Telefone").mask("(99) 9999-9999");
      }
      else{
        alert("verifique se o número e o tipo estão corretos!");
      }

    }

  });
</script>

<script type="text/javascript">
      function startIntro(){
        var intro = introJs();
          intro.setOptions({
            steps: [
            {
              // Primeira parte do guia do cadastra loja
              element: '#step4',
              intro: "<p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p>",
              position: 'right'
            },
              {
                // Segunda Parte do guia do cadastra loja
                element: '#step5',
                intro: '<p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p>',
                position:'right'
              }
            ]
          });

          intro.start();
      }
    </script>

     <script type="text/javascript">
      function startIntro1(){
        var intro = introJs();
          intro.setOptions({
            steps: [
              {
                // Parte do guia do cadastra redes sociais
                element: '#step7',
                intro: '<p>2º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p>',
                position:'right'
              }
            ]
          });

          intro.start();
      }
    </script>

     <script type="text/javascript">
      function startIntro2(){
        var intro = introJs();
          intro.setOptions({
            steps: [
              {
                // Parte do cadastra telefone
                element: '#step6',
                intro: '<p>3º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p><br><p>1º Digite o nome do estabelecimento</p>',
                position:'right'
              }
            ]
          });

          intro.start();
      }
    </script>
