<?php

 /* Perceba a herança acontecendo
 * definida pela palavra extends
 */
class ChequeEspecial extends Cheque{

  /* Método CalcularJuros() - Opa!! Mas esse método já não tinha sido
  * implementado na classe anterior? Sim, está aí o polimorfismo.
  * O juros do Cheque especial é 10%, não 20 como o anterior
  */

  function CalcularJuros(){
    //Perceba que herdamos a propriedade Valor da classe pai
    return $this->Valor * 1.10;

  }

  /* Método TipoCheque() - Também Sobrescrito
  * uso explicito do polimorfismo
  */

  function TipoCheque(){

    return "Especial";

  }

}