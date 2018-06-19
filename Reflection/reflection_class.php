<?php
require_once 'Veiculo.php';

$rc = new ReflectionClass('Automovel');

print_r($rc->getMethods())."<br>";
print_r($rc->getProperties())."<br>";
print_r($rc->getParentClass())."<br>";