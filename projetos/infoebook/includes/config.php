<?php session_start();
//script de configurações básicas do php
define('url','http://localhost/infoebook'); //url raiz do site
define('raiz',$_SERVER['DOCUMENT_ROOT'].'/infoebook');
define('conexao',raiz.'/includes/conexao.php');// conexao padrão do site
define('funcoes',raiz.'/includes/funcoes.php'); // arquivo de funcoes
define('topo',raiz.'/includes/topo.php'); // arquivo de funcoes
define('topo_admin',raiz.'/includes/topo_admin.php'); // arquivo de funcoes
define('menu',raiz.'/includes/menu.php'); // arquivo de funcoes
define('js','<script src="'.url.'/js/jquery-2.2.3.min.js"></script>
             <script src="'.url.'/bootstrap/js/bootstrap.min.js"></script>
			 <script src="'.url.'/js/funcoes.js"></script>');

define('headers',raiz.'/includes/headers.php');

date_default_timezone_set("America/Sao_Paulo");
?>