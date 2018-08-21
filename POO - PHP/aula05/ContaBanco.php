<?php
class ContaBanco{
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;

  public function abrirConta($t){
    $this->setTipo($t);
    $this->setStatus(true);
    if($t == "CC"){
      $this->setSaldo(50);
    }
    else if($t == "CP"){
      $this->setSaldo(150);
    }
  }

  public function fecharConta(){
    if($this->getSaldo() > 0){
      echo "<br>Conta ainda tem dinheiro<br>";
    }
    else if($this->getSaldo() < 0){
      echo "<br>Débitos pendentes<br>";
    }
    else{
      $this->setStatus(false);
      echo "<br>Conta de {$this->getDono()} fechada com sucesso!<br>";
    }
  }

  public function depositar($v){
    if($this->getStatus()){
      $this->setSaldo($this->getSaldo() + $v);
      echo "<br>Depósito de R$$v autorizado na conta de ".$this->getDono()."<br>";
    }
    else{
      return "<br>Aconta está fechada<br>";
    }
  }

  public function sacar($v){
    if($this->getStatus()){
        if($this->getSaldo() >= $v){
          $this->setSaldo($this->getSaldo() - $v);
          echo "<br>Saque de R$$v autorizado para o usuário " . $this->getDono() . "<br>";
        }
        else{
          echo "<br>Saldo insuficiente<br>";
        }
    }
    else{
      echo "<br>A conta está fechada<br>";
    }
  }

  public function pagarMensalidade(){
    if($this->getTipo() == "CC"){
      $v = 12;
    }
    else if($this->getTipo() == "CP"){
      $v = 20;
    }
    if($this->getStatus()){
      $this->setSaldo($this->getSaldo() - $v);
      echo "<br>Mensalidade de R$$v debitada da conta de ".$this->getDono()."<br>";
    }
    else{
      echo "<br>Problemas com a conta, não posso cobrar";
    }
  }

  public function sacarTudo(){
    if($this->getStatus() and $this->getSaldo() > 0){
      echo "<br>Saque de R$ {$this->getSaldo()} autorizado na para o usuário ".$this->getDono()."<br>";
    $this->sacar($this->getSaldo());
    }
    echo "<br>A conta não tem mais saldo<br>";
  }

//construct
  public function __construct(){
    $this->setSaldo(0);
    $this->setStatus(false);
    echo "<br>Conta criada com sucesso!<br>";
  }
//construct

//getters e setters
  public function getNumConta(){
    return $this->numConta;
  }

  public function setNumConta($n){
    $this->numConta = $n;
  }

  public function getTipo(){
    return $this->tipo;
  }

  public function setTipo($t){
    $this->tipo = $t;
  }

  public function getDono(){
    return $this->dono;
  }

  public function setDono($d){
    $this->dono = $d;
  }

  public function getSaldo(){
    return $this->saldo;
  }

  public function setSaldo($s){
    $this->saldo = $s;
  }

  public function getStatus(){
    return $this->status;
  }

  public function setStatus($s){
    $this->status = $s;
  }

}
//getters e setters
?>
