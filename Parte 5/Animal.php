<?php

 /*Definimos uma classe como abstrata
 * utilizando a palavra reservada abstract
 * antes da palavra class
 */

abstract class Animal
{
    public $nome;
    public $idade;

    //O método construtor seta os dois atributos
    function __construct( $nome, $idade )
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    //O método descrição retorna o nome e a idade
    public function Descricao()
    {
        return $this->nome . ", " . $this->idade . " anos de idade";
    }

    /*O método Falar deve
    *ser implementado na classe filha
    *perceba que ele não tem implementação
    */
    abstract public function Falar();
}