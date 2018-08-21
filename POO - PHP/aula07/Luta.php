<?php
require_once "Lutador.php";
class Luta{
  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada;

  function marcarLuta($l1, $l2){
    if($l1->getCategoria() === $l2->getCategoria() and $l1 != $l2){
      $this->aprovada = true;
      $this->desafiado = $l1;
      $this->desafiante = $l2;
    }
    else{
      $this->aprovada = false;
      $this->desafiado = null;
      $this->desafiante = null;
    }
  }
  function lutar(){
    if ($this->aprovada){
      $this->desafiado->apresentar();
      $this->desafiante->apresentar();
      $vencedor = rand(0,2);
      switch ($vencedor) {
        case 0:
          echo "<p>Empate</p>";
          $this->desafiado->empatarLuta();
          $this->desafiante->empatarLuta();
          break;

        case 1:
          echo "<p>{$this->desafiado->getNome()} venceu!</p>";
          $this->desafiado->ganharLuta();
          $this->desafiante->perderLuta();
          break;

        case 2:
          echo "<p>{$this->desafiante->getNome()} venceu!</p>";
          $this->desafiado->perderLuta();
          $this->desafiante->ganharLuta();
          break;
      }
    }
    else{
      echo "<p>Esta luta não pode acontecer</p>";
    }
  }

  //Construct
  function __construct(){
    //
  }

  //Getters
  function getDesafiado(){
    return $this->desafiado;
  }
  function getDesafiante(){
    return $this->desafiante;
  }
  function getRounds(){
    return $this->rounds;
  }
  function getAprovada(){
    return $this->aprovada;
  }

  //Setters
  function setDesafiado($desafiado){
    $this->desafiado = $desafiado ;
  }
  function setDesafiante($desafiante){
    $this->desafiante = $desafiante ;
  }
  function setRounds($rounds){
    $this->rounds = $rounds ;
  }
  function setAprovada($aprovada){
    $this->aprovada = $aprovada ;
  }

}

 ?>
