<?php

$dados = ['salmao', 'tilapia', 'sardinha', 'badejo', 'pescada', 'dourado', 'cavala'];

$objarray = new ArrayObject($dados);

//acrescenta
$objarray->append('bacalhau');

//obtem posicao 2
print "Posicao 2: ".$objarray->offsetGet(2)."<br>";

//substitui posicao 2
$objarray->offsetSet(2, 'linguado');

//elimina posicao 4
$objarray->offsetUnset(4);

//testa se posicao existe
if($objarray->offsetExists(10)){
	echo "Posicao 10 encontrada"."<br>";
}else{
	echo "Posicao 10 nao encontrada"."<br>";
}

print "Total: ".$objarray->count();
$objarray[] = 'atum'; //acrescenta
$objarray->natsort(); //ordena

//percorre dados
print "<br>";
foreach($objarray as $item){
	print "Item: ".$item."<br>";
}

print $objarray->serialize();