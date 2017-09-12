<?php

class Conta{
  public $Cliente;
  public $Agencia;
  public $Conta;
  public $Saldo;  
  public $Status;

  /* Método Sacar()
  * Diminui o saldo em quantia
  */
  function Sacar($quantia){
    if( $quantia > 0 ){
      $this->Saldo -= $quantia;
    }
  }

  /* Método Depositar()
  * Deposita uma quantia, acrescendo o saldo
  */
  function Depositar($quantia){
    if ( $quantia > 0 ){
      $this->Saldo += $quantia;
    }
  }

  /* Método ObterSaldo()
  * Retorna o saldo da conta
  */
  function ObterSaldo(){
    return $this->Saldo;
  }
}

//criando o objeto conta
$conta1 = new Conta();

//setando seus atributos
$conta1->Cliente = "Jose da Silva";
$conta1->Agencia = 2927;
$conta1->Conta = "07126934-24";
$conta1->Saldo = 5000;

//executando os métodos
$conta1->Depositar(500);
$conta1->sacar(100);
echo $conta1->ObterSaldo();