<?php
abstract class Pessoa{
  private $idPessoa;
  private $NomeRazaoSocial;
  private $TipoPessoa;

  public function getIdPessoa(){
    return $this->idPessoa;
  }
  public function getNomeRazaoSocial(){
    return $this->NomeRazaoSocial;
  }
  public function getTipoPessoa(){
    return $this->TipoPessoa;
  }
  public function setIdPessoa($idPessoa){
    $this->idPessoa = $idPessoa;
  }
  public function setNomeRazaoSocial($NomeRazaoSocial){
    $this->NomeRazaoSocial = $NomeRazaoSocial;
  }
  public function setTipoPessoa($TipoPessoa){
    $this->TipoPessoa = $TipoPessoa;
  }

}


 ?>
