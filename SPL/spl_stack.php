<?php

$ingredientes = new SplStack();

//acrescentando na fila
$ingredientes->push('Peixe');
$ingredientes->push('Sal');
$ingredientes->push('Limao');

foreach($ingredientes as $item){
	print "Item: ".$item."<br>";
}

//removendo da fila
print $ingredientes->pop()."<br>";
print 'Count: '.$ingredientes->count()."<br>";

print $ingredientes->pop()."<br>";
print 'Count: '.$ingredientes->count()."<br>";

print $ingredientes->pop()."<br>";
print 'Count: '.$ingredientes->count()."<br>";