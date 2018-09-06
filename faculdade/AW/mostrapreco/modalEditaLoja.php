<!-- Button trigger modal -->
<button type="button" class="btn-warning btn-sm" data-toggle="modal" data-target="#myModalM<?php echo $dadosL['idLoja']; ?>" title="Cadastrar um endereço" style="color:#fff;">
  Editar
</button>


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


<!-- Modal -->
<div class="modal fade" id="myModalM<?php echo $dadosL['idLoja']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#8A2BE2 ;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#000;font-weight:bold;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="background-color:#8A2BE2 ;color: #fff;text-align: center;font-size: 2em;font-weight:bold;">Mostra Preço</h4>
      </div>
      <div class="modal-body">
      <h2  style="text-align: center;font-size: 1.8em;font-weight:bold;">Editar seu endereço </h2>
  <hr>

    <form method="POST" action="acoes/editaLoja.php" enctype="multipart/form-data">

      <input type="hidden" name="idLoja" value="<?php echo $dadosL['idLoja']; ?>">

  <div class="form-group">
  <label style="font-weight:bold;">Nome do estabelecimento:<span class="asterisco" style="color:	#9400D3;">*</span></label>
  <input type="text" value="<?php echo $dadosL['NomeLoja']; ?>" id="NomeLoja" name="NomeLoja" required size="25" class="form-control">
  </div>

  <div class="form-group">
  <label id="for" style="font-weight:bold;">Tipo de estabelecimento:</label>
                 <select  name="TipoLoja" id="TipoLoja" class="form-control" style=" border: 1px solid #eee;height: 40px;">
                   <option value="">Selecione um tipo</option>

                <?php

                 echo $sql_TipoLoja = "SELECT * FROM  tiposloja ORDER BY  TipoLoja  ASC";
                 $exe_TipoLoja = $mysqli->query($sql_TipoLoja);
                  while( $TipoLoja = $exe_TipoLoja->fetch_assoc()){?>

                   <option value="<?php echo $TipoLoja['idTipoLoja'];?>" <?php if($TipoLoja['idTipoLoja'] == $dadosL['TipoLoja']){ echo "selected";} ?> > <?php echo @$TipoLoja['TipoLoja'];?> </option>
                   <?php  }?>
                </select>
   </div>

<div class="form-group">
  <label for="txtCep" style="font-weight:bold;">CEP:</label>
  <input type="text" id="txtCep" name="CEP"  maxlength="9" OnKeyPress="formatar('#####-###', this)" size="25" class="form-control" value="<?php echo $dadosL['CEP']; ?>">
       <p class="small"><a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="blank" style="color:#60338E;"><i class="fas fa-map-marker-alt"></i> Não sei meu cep</a></p>
</div>

<div class="form-group">
  <label for="txtLogradouro" style="font-weight:bold;">Logradouro:</label>
  <input type="text" id="txtLogradouro" name="Logradouro" size="25" value="<?php echo $dadosL['Logradouro']; ?>" class="form-control">
</div>

<div class="form-group">
    <label style="font-weight:bold;">Número:<span class="asterisco" style="color:	#9400D3;">*</span></label>
    <input type="number" name="Numero" value="<?php echo $dadosL['Numero']; ?>" class="form-control form" placeholder="" required>
    </div>

<div class="form-group">
  <label for="txtBairro" style="font-weight:bold;"> Bairro:</label>
  <input type="text" id="txtBairro" name="Bairro" value="<?php echo $dadosL['Bairro']; ?>" size="25" class="form-control">
</div>
<div class="form-group">
  <label for="txtCidade" style="font-weight:bold;">Cidade:<span class="asterisco" style="color:	#9400D3;">*</span></label>
  <input type="text" id="txtCidade" name="Cidade" value="<?php echo $dadosL['Cidade']; ?>" required size="25" class="form-control">
</div>

  <div class="form-group">
  <label style="font-weight:bold;">Estado:</label>
  <select name="estados-brasil" id="txtEstado" class="form-control">
    <option value="AC" <?php if($dadosL['UF'] == "AC"){echo "selected";} ?>>AC</option>
    <option value="AL" <?php if($dadosL['UF'] == "AL"){echo "selected";} ?>>AL</option>
    <option value="AP" <?php if($dadosL['UF'] == "AP"){echo "selected";} ?>>AP</option>
    <option value="AM" <?php if($dadosL['UF'] == "AM"){echo "selected";} ?>>AM</option>
    <option value="BA" <?php if($dadosL['UF'] == "BA"){echo "selected";} ?>>BA</option>
    <option value="CE" <?php if($dadosL['UF'] == "CE"){echo "selected";} ?>>CE</option>
    <option value="DF" <?php if($dadosL['UF'] == "DF"){echo "selected";} ?>>DF</option>
    <option value="ES" <?php if($dadosL['UF'] == "ES"){echo "selected";} ?>>ES</option>
    <option value="GO" <?php if($dadosL['UF'] == "GO"){echo "selected";} ?>>GO</option>
    <option value="MA" <?php if($dadosL['UF'] == "MA"){echo "selected";} ?>>MA</option>
    <option value="MT" <?php if($dadosL['UF'] == "MT"){echo "selected";} ?>>MT</option>
    <option value="MS" <?php if($dadosL['UF'] == "MS"){echo "selected";} ?>>MS</option>
    <option value="MG" <?php if($dadosL['UF'] == "MG"){echo "selected";} ?>>MG</option>
    <option value="PA" <?php if($dadosL['UF'] == "PA"){echo "selected";} ?>>PA</option>
    <option value="PB" <?php if($dadosL['UF'] == "PB"){echo "selected";} ?>>PB</option>
    <option value="PR" <?php if($dadosL['UF'] == "PR"){echo "selected";} ?>>PR</option>
    <option value="PE" <?php if($dadosL['UF'] == "PE"){echo "selected";} ?>>PE</option>
    <option value="PI" <?php if($dadosL['UF'] == "PI"){echo "selected";} ?>>PI</option>
    <option value="RJ" <?php if($dadosL['UF'] == "RJ"){echo "selected";} ?>>RJ</option>
    <option value="RN" <?php if($dadosL['UF'] == "RN"){echo "selected";} ?>>RN</option>
    <option value="RS" <?php if($dadosL['UF'] == "RS"){echo "selected";} ?>>RS</option>
    <option value="RO" <?php if($dadosL['UF'] == "RO"){echo "selected";} ?>>RO</option>
    <option value="RR" <?php if($dadosL['UF'] == "RR"){echo "selected";} ?>>RR</option>
    <option value="SC" <?php if($dadosL['UF'] == "SC"){echo "selected";} ?>>SC</option>
    <option value="SP" <?php if($dadosL['UF'] == "SP"){echo "selected";} ?>>SP</option>
    <option value="SE" <?php if($dadosL['UF'] == "SE"){echo "selected";} ?>>SE</option>
    <option value="TO" <?php if($dadosL['UF'] == "TO"){echo "selected";} ?>>TO</option>
  </select>
  </div>

  <div class="form-group">
  <label for="ImagemLoja" style="font-weight: bold;">Foto da Loja:</label>
  <input type="file" id="ImagemLoja" name="ImagemLoja" size="25" class="form-control" style="height: 40px;">
  </div>

  <label for="HoraFuncionamento" style="font-weight: bold;">Horários de funcionamento:</label>

   <div class="form-group">
   <label for=""  style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Segunda-Feira</label>
  <div class="row">

    <?php
    $querySegunda = "SELECT * FROM horariofuncionamento WHERE idLoja = ".$dadosL['idLoja']." AND DiaSemana = 'Segunda-Feira'";
    $executaQuerySegunda = $mysqli->query($querySegunda);
    $dadosSegunda = $executaQuerySegunda->fetch_assoc();
    ?>

    <div class="col-md-6 col-xs-6">
   <label for="AberturaSegunda"  style="font-weight: bold;">Abre às:</label>
   <input type="time" id="AberturaSegunda" value="<?php echo $dadosSegunda['HoraAbertura']; ?>" name="AberturaSegunda" size="25" class="form-control" style="height: 40px;margin-bottom:10px;">
    </div>

  <div class="col-md-6 col-xs-6">
   <label for="FechamentoSegunda"   style="font-weight: bold;">Fecha às:</label>
   <input type="time" id="FechamentoSegunda" value="<?php echo $dadosSegunda['HoraFechamento']; ?>" name="FechamentoSegunda" size="25" class="form-control" style="height: 40px;">
    </div>
  </div>


  <label for="" style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Terça-Feira</label>

  <div class="row">

    <?php
    $queryTerca = "SELECT * FROM horariofuncionamento WHERE idLoja = ".$dadosL['idLoja']." AND DiaSemana = 'Terça-Feira'";
    $executaQueryTerca = $mysqli->query($queryTerca);
    $dadosTerca = $executaQueryTerca->fetch_assoc();
    ?>

  <div class="col-md-6 col-xs-6">
   <label for="AberturaTerca"  style="font-weight: bold;">Abre às:</label>
   <input type="time" id="AberturaTerca" value="<?php echo $dadosTerca['HoraAbertura']; ?>"  name="AberturaTerca" size="25" class="form-control" style="height: 40px;">
  </div>

  <div class="col-md-6 col-xs-6">
   <label for="FechamentoTerca"   style="font-weight: bold;">Fecha às:</label>
   <input type="time" id="FechamentoTerca" value="<?php echo $dadosTerca['HoraFechamento']; ?>"  name="FechamentoTerca" size="25" class="form-control" style="height: 40px;">
  </div>
  </div>

  <label for="" style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Quarta-Feira</label>

  <div class="row">

    <?php
    $queryQuarta = "SELECT * FROM horariofuncionamento WHERE idLoja = ".$dadosL['idLoja']." AND DiaSemana = 'Quarta-Feira'";
    $executaQueryQuarta = $mysqli->query($queryQuarta);
    $dadosQuarta = $executaQueryQuarta->fetch_assoc();
    ?>

  <div class="col-md-6 col-xs-6">
   <label for="AberturaQuarta"  style="font-weight: bold;">Abre às:</label>
   <input type="time" id="AberturaQuarta" value="<?php echo $dadosQuarta['HoraAbertura']; ?>"  name="AberturaQuarta" size="25" class="form-control" style="height: 40px;">
  </div>

  <div class="col-md-6 col-xs-6">
   <label for="FechamentoQuarta"  style="font-weight: bold;">Fecha às:</label>
   <input type="time" id="FechamentoQuarta" value="<?php echo $dadosQuarta['HoraFechamento']; ?>"  name="FechamentoQuarta" size="25" class="form-control" style="height: 40px;">
  </div>
  </div>

  <label for="" style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Quinta-Feira</label>

  <div class="row">

    <?php
    $queryQuinta = "SELECT * FROM horariofuncionamento WHERE idLoja = ".$dadosL['idLoja']." AND DiaSemana = 'Quinta-Feira'";
    $executaQueryQuinta = $mysqli->query($queryQuinta);
    $dadosQuinta = $executaQueryQuinta->fetch_assoc();
    ?>

  <div class="col-md-6 col-xs-6">
   <label for="AberturaQuinta" style="font-weight: bold;">Abre às:</label>
   <input type="time" id="AberturaQuinta" value="<?php echo $dadosQuinta['HoraAbertura']; ?>" name="AberturaQuinta" size="25" class="form-control" style="height: 40px;">
  </div>

  <div class="col-md-6 col-xs-6">
   <label for="FechamentoQuinta" style="font-weight: bold;">Fecha às:</label>
   <input type="time" id="FechamentoQuinta" value="<?php echo $dadosQuinta['HoraFechamento']; ?>" name="FechamentoQuinta" size="25" class="form-control" style="height: 40px;">
  </div>
  </div>


  <label for="" style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Sexta-Feira</label>

  <div class="row">

    <?php
    $querySexta = "SELECT * FROM horariofuncionamento WHERE idLoja = ".$dadosL['idLoja']." AND DiaSemana = 'Sexta-Feira'";
    $executaQuerySexta = $mysqli->query($querySexta);
    $dadosSexta = $executaQuerySexta->fetch_assoc();
    ?>

  <div class="col-md-6 col-xs-6">
   <label for="AberturaSexta" style="font-weight: bold;">Abre às:</label>
   <input type="time" id="AberturaSexta" value="<?php echo $dadosSexta['HoraAbertura']; ?>" name="AberturaSexta" size="25" class="form-control" style="height: 40px;">
  </div>

  <div class="col-md-6 col-xs-6">
   <label for="FechamentoSexta" style="font-weight: bold;">Fecha às:</label>
   <input type="time" id="FechamentoSexta" value="<?php echo $dadosSexta['HoraFechamento']; ?>" name="FechamentoSexta" size="25" class="form-control" style="height: 40px;">
  </div>
  </div>


  <label for="" style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Sábado</label>

  <div class="row">

    <?php
    $querySabado = "SELECT * FROM horariofuncionamento WHERE idLoja = ".$dadosL['idLoja']." AND DiaSemana = 'Sábado'";
    $executaQuerySabado = $mysqli->query($querySabado);
    $dadosSabado = $executaQuerySabado->fetch_assoc();
    ?>

  <div class="col-md-6 col-xs-6">
   <label for="AberturaSabado" style="font-weight: bold;">Abre às:</label>
   <input type="time" id="AberturaSabado" value="<?php echo $dadosSabado['HoraAbertura']; ?>" name="AberturaSabado" size="25" class="form-control" style="height: 40px;">
  </div>

  <div class="col-md-6 col-xs-6">
   <label for="FechamentoSabado" style="font-weight: bold;">Fecha às:</label>
   <input type="time" id="FechamentoSabado" value="<?php echo $dadosSabado['HoraFechamento']; ?>" name="FechamentoSabado" size="25" class="form-control" style="height: 40px;">
  </div>
  </div>

  <label for="" style="font-weight: bold;margin-top:10px;margin-bottom:5px;">Domingo</label>

  <div class="row">

    <?php
    $queryDomingo = "SELECT * FROM horariofuncionamento WHERE idLoja = ".$dadosL['idLoja']." AND DiaSemana = 'Domingo'";
    $executaQueryDomingo = $mysqli->query($queryDomingo);
    $dadosDomingo = $executaQueryDomingo->fetch_assoc();
    ?>

  <div class="col-md-6 col-xs-6">
   <label for="AberturaDomingo" style="font-weight: bold;">Abre às:</label>
   <input type="time" id="AberturaDomingo" value="<?php echo $dadosDomingo['HoraAbertura']; ?>" name="AberturaDomingo" size="25" class="form-control" style="height: 40px;">
  </div>

  <div class="col-md-6 col-xs-6">
   <label for="FechamentoDomingo" style="font-weight: bold;">Fecha às:</label>
   <input type="time" id="FechamentoDomingo" value="<?php echo $dadosDomingo['HoraFechamento']; ?>" name="FechamentoDomingo" size="25" class="form-control" style="height: 40px;">
  </div>
  </div>


   </div>

<hr>
<div class="row">
   <div class="footer col-md-5 col-md-offset-4 col-xs-12 col-xs-offset-3" >

<input type="submit" class="btn  btn-lg " style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color: #fff;" value="Salvar">

<!-- <input type="reset" class="btn  btn-lg" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color: #fff;"> -->

<button type="button" class="btn  btn-lg" data-dismiss="modal" style=" background-color: #8A2BE2; border:1px solid #8A2BE2;color: #fff;">Fechar</button>

 </div>
</div>
       </form>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
