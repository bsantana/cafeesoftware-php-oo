<?php

class Conta{
  public $Cliente;
  public $Agencia;
  public $Conta;
  public $Saldo;
  public $Status;

  /* Método Construtor
  *  Inicializa as propriedades
  */
  function __construct($Titular,$Agencia,$Conta,$Saldo,$Status){
    $this->Cliente = $Titular;
    $this->Agencia = $Agencia;
    $this->Conta = $Conta;
    $this->Saldo = $Saldo;
    $this->Cancelada = $Status;
  }

  /* Método Destrutor
  *  Finaliza os objetos
  */
  function __destruct(){
    echo "<small>O Objeto foi destruído.</small>";
  }

  /* Método Sacar()
  *  Diminui o saldo em quantia
  */
  function Sacar($quantia){
    if( $quantia > 0 ){
      $this->Saldo -= $quantia;
    }
  }

  /* Método Despositar()
  *  Deposita uma quantia, acrescendo o saldo
  */
  function Depositar($quantia){
    if( $quantia > 0 ){
      $this->Saldo += $quantia;
    }
  }

  /* Método ObterSaldo()
  *  Retorna o saldo da conta
  */
  function ObterSaldo(){
    return $this->Saldo;
  }
}

$conta1 = new conta("Jose da silva", 0144, "07126934-24", 5000, "ativa");
echo $conta1->ObterSaldo();