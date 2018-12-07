<?php

class Cachorro extends Animal
{
    public function comer($qtd, $comida)
    {
        return "O Cachorro " . $this->nome . " está comendo $qtd $comida" . PHP_EOL;
    }
    public function latir() 
    {
        return "Au au" . PHP_EOL;
    }
    public function buscarBolinha() 
    {
        return "Buscando a bolinha..." . PHP_EOL;
    } 

    public function __construct($nome) 
    {

        parent::__construct();
        $this->nome=$nome;
        echo "Iniciando Cachorro" . PHP_EOL . PHP_EOL;
    }
}