<?php

class Animal
{
    public $nome;
    public $raca;
    public $cor;
    public $peso;
    public $idade;

    public function __construct()
    {
        echo "Iniciando Animal" . PHP_EOL;
    }

    public function comer($comida, $qtd) 
    {
         return "Comendo $qtd $comida" . PHP_EOL;
    }

    public function imprimir()
    {
        echo "Nome:" . $this->nome . PHP_EOL;
        echo "Raça:" . $this->raca . PHP_EOL;
        echo "Cor:" . $this->cor . PHP_EOL;
        echo "Peso:" . $this->peso . PHP_EOL;
        echo "Idade:" . $this->idade . PHP_EOL;
        echo PHP_EOL . "--------------------------" . PHP_EOL;
    }
}