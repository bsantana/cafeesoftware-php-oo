<?php

require_once("Pessoa.php");

class Funcionario extends Pessoa{
  public $Salario;
  public $Cargo;
  public $DiaPagamento;
  public $money;

  /* Método Construtor
  *  Inicializa as propriedades
  */
  function __construct($Nome, $AnoDeNascimento, $Endereco, $Telefone, $Salario, $Cargo, $DiaPagamento){

    // Chamada do método do construtor da classe-pai
    parent::__construct($Nome, $AnoDeNascimento, $Endereco, $Telefone);

    // Inicializa as variáveis/propriedades locais da Classe
    $this->Salario = $Salario;
    $this->Cargo = $Cargo;
    $this->DiaPagamento = $DiaPagamento;
  }

  /* Método EscreverSalario
  *  Escreve o salário do funcionário
  */
  function EscreverSalario(){
    echo "Salário: {$this->Salario}";
  }

  /* Método EscreveDados()
  *  Este método sobrescreve o método EscreveDados() da classe-pai
  */
  function EscreveDados(){
    parent::EscreveDados();

    echo "Salário: {$this->Salario}<br>
          Cargo: {$this->Cargo}<br>
          Dia de pagamento: {$this->DiaPagamento}";
  }

  function newOrder( $money ){
    return $this->money = $money;
  }
}