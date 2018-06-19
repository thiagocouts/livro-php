<?php

require_once 'Classes/Fabricante.php';
require_once 'Classes/Produto.php';

// cricao de objetos
$p1 = new Produto('Chocolate', 10, 7);
$f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', 123456);

// associacao
$p1->setFabricante($f1);

echo "A descricao e ".$p1->getDescricao()."<br>";
echo "O fabricante e ".$p1->getFabricante()->getNome()."<br>";
