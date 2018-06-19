<?php

$ingredientes = new SplQueue();

//acrescentando na fila
$ingredientes->enqueue('Peixe');
$ingredientes->enqueue('Sal');
$ingredientes->enqueue('Limao');

foreach($ingredientes as $item){
	print "Item: ".$item."<br>";
}

//removendo da fila
print $ingredientes->dequeue()."<br>";
print 'Count: '.$ingredientes->count()."<br>";

print $ingredientes->dequeue()."<br>";
print 'Count: '.$ingredientes->count()."<br>";

print $ingredientes->dequeue()."<br>";
print 'Count: '.$ingredientes->count()."<br>";
