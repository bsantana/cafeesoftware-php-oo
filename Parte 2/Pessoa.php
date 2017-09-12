<?php

class Pessoa
{
	public $nome;
	public $altura;
	public $nascimento;
	public $salario;

	public function MostrarPessoa()
	{
		echo "Nome: " . $this->nome;
		echo "<br>Altura: " . $this->altura;
		echo "<br>Nascimento: " . $this->nascimento;
		echo "<br>Salario: " . $this->salario;
	}
}

$p1 = new Pessoa();

$p1->nome = 'José da Silva';
$p1->altura = 1.82;
$p1->nascimento = '1989-01-22';
$p1->salario = 3600;

$p1->MostrarPessoa();