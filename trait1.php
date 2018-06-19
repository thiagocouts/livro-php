<?php
require_once 'Classes/Record.php';

class Pessoa extends Record {

	const TABLENAME = 'pessoas';

}

class Fornecedor extends Record {

	const TABLENAME = 'fornecedores';

}

class Produto extends Record {

	const TABLENAME = 'produtos';

}

$p = new Pessoa;
$p->load(1);
print "<br>".PHP_EOL;

$p->nome = 'Maria da Silva';
$p->endereco = 'Rua das Marias';
$p->numero = '123';
$p->save();

print $p->toXML();
print $p->toJSON();

print "<br>".PHP_EOL;

$p->delete(3);
print "<br>".PHP_EOL;