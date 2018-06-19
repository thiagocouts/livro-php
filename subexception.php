<?php
require_once 'Classes/CSVParser.php';

//definicão das subclasses de erro
class FileNotFoundException extends Exception{}
class FilePermissionException extends Exception{}

$csv = new CSVParser('', ';');

try{
	$csv->parse(); //metodo que pode lançar a excecao
	while($row = $csv->fetch()){
		echo $row['Cliente'].' - ';
		echo $row['Cidade'].' <br>';
	}
}catch(FileNotFoundException $excecao){
	print_r($excecao->getTrace());
	die("Arquivo nao encontrado");
}catch(FilePermissionException $excecao){
	echo $excecao->getFile()." : ".$excecao->getLine()." # ".$excecao->getMessage();
}
