<?php

require_once("Funcionario.php");

$leandro = new Funcionario("Leandro Castro", 1985, "Rua das Flores 33 - Juiz de fora","(32) 3232-3535", 4.000, "Desenvolvedor Java/PHP", 8);

echo 'Idade: '.$leandro->ObterIdade().'<br>';
$leandro->EscreveDados();
