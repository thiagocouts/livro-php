<?php
require_once 'Classes/Cesta.php';
require_once 'Classes/Produto.php';

// criacao da cesta
$c1 = new Cesta;

//agregacao dos produtos
$c1->addItem($p1 = new Produto('Chocolate', 10, 5));
$c1->addItem($p2 = new Produto('Cafe', 20, 3));
$c1->addItem($p3 = new Produto('Mostarda', 15, 8));

foreach($c1->getItens() as $item){
	echo "Item: ".$item->getDescricao()."<br>";
}
