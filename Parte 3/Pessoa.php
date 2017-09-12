<?php

class Pessoa{
  public $Nome;
  public $AnoDeNascimento;
  public $Endereco;
  public $Telefone;

  /* Método Construtor
  *  Inicializa as propriedades
  */
  function __construct($Nome, $AnoDeNascimento, $Endereco, $Telefone){
    $this->Nome = $Nome;
    $this->AnoDeNascimento = $AnoDeNascimento;
    $this->Endereco = $Endereco;
    $this->Telefone = $Telefone;
  }

  /* Método EscreveDados()
  *  Retorna os dados da Pessoa
  */
  function EscreveDados(){
    echo "Nome:  {$this->Nome}<br>
          Ano de nascimento:  {$this->AnoDeNascimento} <br>
          Endereço: {$this->Endereco} <br>
          Telefone: {$this->Telefone} <br>";
  }

  /* Método ObterIdade()
  *  Retorna a idade
  */
  function ObterIdade(){
    $ano_atual = date("Y",time());
    return $ano_atual - $this->AnoDeNascimento;
  }
}