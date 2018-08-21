<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador{
  private $volume;
  private $ligado;
  private $tocando;
//Construct
  public function __construct(){
    $this->volume = 50;
    $this->ligado = false;
    $this->tocando = false;
  }
//Getters
  private function getVolume(){
    return $this->volume;
  }

  private function getLigado(){
    return $this->ligado;
  }

  private function getTocando(){
    return $this->tocando;
  }
//Setters
  private function setVolume($volume){
    $this->volume = $volume;
  }

  private function setLigado($ligado){
    $this->ligado = $ligado;
  }

  private function setTocando($tocando){
    $this->tocando = $tocando;
  }
//Métodos
public function ligar(){
  $this->setLigado(true);
}
public function desligar(){
  $this->setLigado(false);
}
public function abrirMenu(){
  echo "<p>----------MENU----------</p>";
  echo "<br>Está ligado?: ".($this->getLigado()?"SIM":"NÃO");
  echo "<br>Está tocando?: ".($this->getTocando()?"SIM":"NÃO");
  echo "<br>Volume: ".$this->getVolume();
  for($i=0; $i <= $this->getVolume(); $i+=10){
    echo "|";
  }
  echo "<br>";
}
public function fecharMenu(){
  echo "<br>Fechando menu...";
}
public function maisVolume(){
  if($this->getLigado()){
    $this->setVolume($this->getVolume() + 5);
  }
  else{
    echo "<br>A TV está desligada!";
  }
}
public function menosVolume(){
  if($this->getLigado()){
    $this->setVolume($this->getVolume() - 5);
  }
  else{
    echo "<br>A TV está desligada!";
  }
}
public function ligarMudo(){
  if($this->getLigado and $this->getVolume() > 0){
    $this->setVolume(0);
  }
}
public function desligarMudo(){
  if($this->getLigado and $this->getVolume() == 0){
    $this->setVolume(50);
  }
}
public function play(){
  if($this->getLigado() and !($this->getTocando())){
    $this->setTocando(true);
  }
}
public function pause(){
  if($this->getLigado() and $this->getTocando()){
    $this->setTocando(false);
  }
}
}
 ?>
