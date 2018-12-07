<?php

include "Animal.php";
include "Cachorro.php";
include "Gato.php";

$duke = new Cachorro("Duke dos Reis");

//$duke->nome = "Duke dos Reis";
$duke->raca = "Vira Lata";
$duke->cor = "Branco e Marrom";
$duke->peso = "16 kg";
$duke->idade = "8 anos";

$duke->imprimir();

$mazinha = new cachorro();

$mazinha->nome = "Mazinha";
$mazinha->raca = "Vira Lata";
$mazinha->cor = "Branca com Preta";
$mazinha->peso = "18 kg";
$mazinha->idade = "6 anos";

$mazinha->imprimir();

$charllote = new cachorro();

$charllote->nome = "Charllote";
$charllote->raca = "Vira Lata";
$charllote->cor = "Amarela escura";
$charllote->peso = "25 kg";
$charllote->idade = "9 anos";

$charllote->imprimir();

echo "Charllote: " . $charllote->latir();
echo "Charllote: " . $charllote->comer("Jiló", "5");
echo "Charllote: " . $charllote->buscarBolinha();
echo PHP_EOL . "--------------------------" . PHP_EOL;

echo "Mazinha: " . $mazinha->latir();
echo "Mazinha: " . $mazinha->comer("Ração", "1kg");
echo "Mazinha: " . $mazinha->buscarBolinha();
echo PHP_EOL . "--------------------------" . PHP_EOL;

echo "Duke: " . $duke->latir();
echo "Duke: " . $duke->comer("100gr de", "Bacon");
echo "Duke: " . $duke->buscarBolinha();

echo PHP_EOL . "~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . PHP_EOL;

$mia = new Gato();

$mia->nome = "Mia";
$mia->raca = "Vira Lata";
$mia->cor = "Amarela";
$mia->peso = "6 kg";
$mia->idade = "4 anos";

$mia->imprimir();

$mili = new Gato();

$mili->nome = "Mili";
$mili->raca = "Vira Lata";
$mili->cor = "Amarela";
$mili->peso = "7 kg";
$mili->idade = "4 anos";

$mili->imprimir();

$mel = new Gato();

$mel->nome = "Mel";
$mel->raca = "Vira Lata";
$mel->cor = "Preta branca e Amarela";
$mel->peso = "7 kg";
$mel->idade = "4 anos";

$mel->imprimir();

echo "Mia: " . $mia->cacarRato();
echo "Mia: " . $mia->ronronar();
echo "Mia: " . $mia->comer("1 filé de", "Rato gourmet ao molho de sardinha dinamarquesa");
echo PHP_EOL . '/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\' . PHP_EOL;

echo "Mili: " . $mili->cacarRato();
echo "Mili: " . $mili->ronronar();
echo "Mili: " . $mili->comer("100g", "Ração");
echo PHP_EOL . '/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\' . PHP_EOL;

echo "Mel: " . $mel->cacarRato();
echo "Mel: " . $mel->ronronar();
echo "Mel: " . $mel->comer("100g", "Ração");