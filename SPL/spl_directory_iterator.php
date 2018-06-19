<?php

foreach(new DirectoryIterator('\Users\USER\LivroPHP\SPL') as $file){
	print (string) $file."<br>";
	print "Nome: ".$file->getFileName()."<br>";
	print "Extensao: ".$file->getExtension()."<br>";
	print "Tamanho: ".$file->getSize()."<br>";
}