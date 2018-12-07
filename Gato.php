<?php

class Gato extends Animal
{
    public function comer($qtd, $comida)
    {
        return "A Gata " . $this->nome . " está comendo $qtd $comida" . PHP_EOL;
    }
    public function __construct()
    {
        parent:: __construct();
        echo "Iniciando Gato" . PHP_EOL . PHP_EOL;
    }

    public function cacarRato()
    {
        return "Caçando Rato..." . PHP_EOL ;
    }
    public function ronronar()
    {
        return "ronronando..." . PHP_EOL;
    }
}