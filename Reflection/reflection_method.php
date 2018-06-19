<?php
require_once 'Veiculo.php';

$rm = new ReflectionMethod('Automovel', 'setPlaca');

print $rm->getName()."<br>";

print $rm->isPrivate() ? 'E privado' : 'Nao e privado' ."<br>";

print $rm->isStatic() ? 'E estatico' : 'Nao e estatico' ."<br>";

print $rm->isFinal() ? 'E final' : 'Nao e final' ."<br>";

print_r($rm->getParameters());