<?php
@session_start();
ob_start();
  /**
   * @author Matheus   <>
  **/
// define('URL','https://danilocarreiro.com.br/projetos/fanwars');
// define('RAIZ',$_SERVER['DOCUMENT_ROOT'].'/projetos/fanwars');
define('URL','http://localhost/fanwars'); //url raiz do site Local
define('RAIZ',$_SERVER['DOCUMENT_ROOT'].'/fanwars');
define('RODAPE',RAIZ.'/includes/rodape.php');
define('TOPO',RAIZ.'/includes/topo.php');
define('HEADERS',RAIZ.'/includes/headers.php');
define('BTN_TOPO',RAIZ.'/includes/btnTopo.php');
date_default_timezone_set('America/Sao_Paulo');
