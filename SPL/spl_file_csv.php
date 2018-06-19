<?php

$dados = [
	array('codigo', 'nome', 'endereco', 'telefone'),
	array('1', 'Maria', 'Rua Maria', '(27) 123456789'),
	array('2', 'Joao', 'Rua Joao', '(27) 123456788'),
	array('3', 'Jose', 'Rua Jose', '(27) 123456787')
];

$file = new SplFileObject('dados.csv', 'w');
$file->setCsvControl(',');

foreach($dados as $linha){
	$file->fputcsv($linha);
}