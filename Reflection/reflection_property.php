<?php
require_once 'Veiculo.php';

$rm = new ReflectionProperty('Automovel', 'placa');

print $rm->getName()."<br>";

print $rm->isPrivate() ? 'E privado'."<br>" : 'Nao e privado' ."<br>";

print $rm->isStatic() ? 'E estatico' : 'Nao e estatico' ."<br>";

