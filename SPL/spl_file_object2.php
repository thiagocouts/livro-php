<?php

$file = new SplFileObject('spl_file_object2.php');

print "Forma 1: ". PHP_EOL."<br>";
while(!$file->eof()){

	print "Linha: ".$file->fgets()."<br>";
}

print PHP_EOL.PHP_EOL."<br>";

print "Forma 2: ". PHP_EOL."<br>";
foreach($file as $linha => $conteudo){

	print "{$linha}: {$conteudo}"."<br>";
}