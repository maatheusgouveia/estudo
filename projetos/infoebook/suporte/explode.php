<?php 

$data = '2017-09-28';

$data_separada = implode('/',array_reverse(explode("-", $data)));

//$juntaData=implode("-", $data_separada);



echo ($data_separada);


 ?>