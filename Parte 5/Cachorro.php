<?php

require_once('Animal.php');

// Herdamos a classe Animal
class Cachorro extends Animal
{
    /* Somos obrigados a implementar
    *  o método falar
    */
    public function Falar()
    {
        return "Au Au!";
    }

    /* Vamos também complementar
    * o método Descricao
    */
    public function Descricao()
    {
        return parent::Descricao() . ", eu sou um cachorro!";
    }
}

$animal = new Cachorro('Rex', 5);
echo $animal->Descricao();
echo $animal->Falar();


/*

* Classes Finais

* Classes finais podem ser definidas como classes que não podem ser estendidas ou seja, não pode ser uma superclasse. 
*/

// final class Cachorro
// {
//     public $nome;
//     public $idade;

//     function __construct($nome, $idade)
//     {
//         $this->nome = $nome;
//         $this->idade = $idade;
//     }

//     public function Descricao()
//     {
//         return $this->nome . ", " . $this->idade . " anos de idade";
//     }
// }

/*

* Métodos finais

* Assim como classes finais, um método final não pode ser estendido e obviamente não pode ser abstrato, pois métodos    
* abstratos foram feitos para serem estendidos e declarados na classe filha.
*/

// Class Cachorro
// {
//     public $nome;
//     public $idade;

//     /* Este método não pode
//     * se estendido (sobrescrito)
//     */
//     final function Descricao()
//     {
//         return $this->nome . ", " . $this->idade . " anos de idade";
//     }
// }