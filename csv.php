<?php
require_once 'Classes/CSVParser.php';

$csv = new CSVParser('clientes.csv', ';');

try{
	$csv->parse(); //metodo que pode lançar a excecao
	while($row = $csv->fetch()){
		echo $row['Cliente'].' - ';
		echo $row['Cidade'].' <br>';
	}
}catch(Exception $e){
	echo $e->getMessage();
}

