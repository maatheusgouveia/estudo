<?php
@session_start();
//require_once "../../includes/config.php";
require_once raiz.'/libs/Facebook/autoload.php';

$fb= new Facebook\facebook([
    'app_id'=>'195829027949480',
    'app_secret'=>'30bce572b89168c0c8e445254adf807f',
    'default_graph_version'=>'v3.1'
]);
