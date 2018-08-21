<?php

class caneta{
  // var = visibilidade padrão, ouseja, pública
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada;

  public function rabiscar(){
    if ($this->tampada) {
      echo "<p>Não posso rabiscar com a caneta tampada!</p>";
    }
    else{
    echo "<p>Estou rabiscando...</p>";
  }
  }

  public function tampar(){
    $this->tampada = true;
  }

  public function destampar(){
    $this->tampada = false;
  }
} //fim class caneta

 ?>
