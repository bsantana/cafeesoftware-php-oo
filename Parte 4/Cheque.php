<?php

class Cheque{

  public $Valor;

  /* Método Construtor
  * Recebe o parâmetro $Valor.
  */

  function __construct( $Valor ){

    $this->Valor = $Valor;

  }

  /* Método CalcularJuros()
  * Calcula os Juros, neste caso 20%
  */

  function CalcularJuros(){

    return $this->Valor * 1.20;

  }

  /* Método TipoCheque()
  * Retorna o tipo do Cheque
  */

  function TipoCheque(){

    return "Comum";

  }

}