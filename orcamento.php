<?php
require_once 'Classes/Orcamento.php';
require_once 'Classes/Produto.php';

$o = new Orcamento;

$o->adiciona(new Produto('Maquina de cafe', 10, 299), 1);
$o->adiciona(new Produto('Barbeador eletrico', 10, 170), 1);
$o->adiciona(new Produto('Barra de chocalate', 10, 7), 3);

echo $o->calculoTotal();