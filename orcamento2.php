<?php
require_once 'Classes/Orcamento.php';
require_once 'Classes/OrcavelInterface.php';
require_once 'Classes/Produto.php';
require_once 'Classes/Servico.php';

$o = new Orcamento;

$o->adiciona(new Produto('Maquina de cafe', 10, 299), 1);
$o->adiciona(new Produto('Barbeador eletrico', 10, 170), 1);
$o->adiciona(new Produto('Barra de chocalate', 10, 7), 3);

$o->adiciona(new Servico('Corte de grama', 20), 1);
$o->adiciona(new Servico('Corte de barba', 20), 1);
$o->adiciona(new Servico('Limpeza de apto', 50), 1);

echo $o->calculoTotal();