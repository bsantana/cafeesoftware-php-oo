<?php

//Incluimos as duas classes
require_once("Cheque.php");
require_once("ChequeEspecial.php");

// Criação dos cheques
$Cheques[1] = new Cheque(380.00);
$Cheques[2] = new ChequeEspecial(600.00);
$Cheques[3] = new Cheque(230.00);
$Cheques[4] = new Cheque(40.00);

// Percorrendo os Cheques
foreach ( $Cheques as $key => $Cheque )
{

  echo "Cheque $key ( {$Cheque->TipoCheque()} )
  com juros: R$ {$Cheque->CalcularJuros()} ";

}