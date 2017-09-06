<?php

//incluindo a classe que criamos anteriormente
include("Carro.php");

//Instanciando (opa, palavrinha nova) um novo objeto
$carro = new Carro();

//Atribuindo valores aos atributos que criamos
$carro->ano = 2012;
$carro->modelo = "C4 VTR";
$carro->cor = "Preto";
$carro->fabricante = "Citroen";

echo $carro->fabricante;