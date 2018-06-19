<?php
require_once 'Classes/Preferencias.php';

//obtem uma instancia
$p1 = Preferencias::getInstance();
echo "A linguagem e: ".$p1->getData('language')."<br>";

$p1->setData('language', 'pt');
echo "A linguagem e: ".$p1->getData('language')."<br>";

//obtem a mesma instancia
$p2 = Preferencias::getInstance();
echo "A linguagem e: ".$p1->getData('language')."<br>";

//descomentar para gravar um valor
//$p1->save();