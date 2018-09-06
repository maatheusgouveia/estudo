<?php
@session_start();
ob_start();
define('url','http://localhost/mostrapreco/'); //url raiz do site Local
//define('url','https://mostrapreco.com.br'); //url raiz do site Online
define('raiz',$_SERVER['DOCUMENT_ROOT'].'/mostrapreco');
define('rodape',raiz.'/includes/rodape.php');
define('topo',raiz.'/includes/topo.php');
define('verificaLogado',raiz.'/includes/verificaLogado.php');
define('funcoesPhp',raiz.'/includes/funcoes.php');
define('funcoesJs',url.'js/funcoes.js');
define('conexao',raiz.'/includes/conexao.php');
define('headers',raiz.'/includes/headers.php');
define('verificaPermissao',raiz.'/includes/verificaPermissao.php');
define('thumbnail',raiz.'/includes/thumbnail.php');
define('slider',raiz.'/includes/slider.php');
define('btnMensagem',raiz.'/includes/btnMensagem.php');
define('btnTopo',raiz.'/includes/btnTopo.php');


// font-awesome
define('font-awesome',raiz.'/libs/font-awesome-4.7.0/css/font-awesome.min.css');
// bootstrap
define('bootstrap-css',raiz.'/libs/bootstrap/css/bootstrap.min.css');
// jquery
define('jquery',raiz.'js/jquery-3.2.1.min.js');
// jquery online
define('jquery-on','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
//data-table
define('data-table-css', '//cdn.datatables.net/1.10.16/css/jquery.dataTables.css');
define('data-table-js', '//cdn.datatables.net/1.10.16/js/jquery.dataTables.js');
// script para envio de imagem com ajax
define('ajax-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js');
define('jquey-form', 'https://malsup.github.com/jquery.form.js');
// tags input
define('bootstrap-tagsinput-css',raiz.'/css/bootstrap-tagsinput.css');
define('bootstrap-tagsinput-js',raiz.'/js/bootstrap-tagsinput.min.js');
// bootstrao 3.3.7
define('bootstrap-3.3.7-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u');
define('bootstrap-3.3.7-cssMin', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp');
define('bootstrap-3.3.7-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa');
//bootstrap 4.0.0
define('bootstrap-4.0.0-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css');
define('bootstrap-4.0.0-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js');
// time zone
date_default_timezone_set('America/Sao_Paulo');

 ?>
