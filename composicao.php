<?php

require_once 'Classes/Produto.php';
require_once 'Classes/Caracteristica.php';

$p1 = new Produto('Chocolate', 10, 7);

//composicao
$p1->addCaracteristica('Cor', 'Branco');
$p1->addCaracteristica('Peso', '2.6 kg');
$p1->addCaracteristica('Potencia', '20 watts RMS');

echo "Produto: ".$p1->getDescricao()."<br>";
foreach($p1->getCaracteristica() as $c){
	echo "Caracteristica: ".$c->getNome()." - ".$c->getValor()."<br>";
}