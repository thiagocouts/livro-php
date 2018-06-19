<?php
require_once 'Classes/ar/Produto.php';
require_once 'Classes/api/Connection.php';
require_once 'Classes/api/Transaction.php';

try{
	Transaction::open('estoque'); 

	//obten conexao ativa
	$conn = Transaction::get();
	Produto::setConnection($conn);

	$p1 = new Produto;
	$p1->descricao = "Vinho Brasileiro Tinto Merlot";
	$p1->estoque = 10;
	$p1->preco_custo = 12;
	$p1->preco_venda = 18;
	$p1->codigo_barras = '4535673452';
	$p1->data_cadastro = date('Y-m-d');
	$p1->origem = 'N';

	$p1->save();

	throw new Exception("Excecao proposital");

	$p2 = new Produto;
	$p2->descricao = "Vinho Importado Tinto Carmenere";
	$p2->estoque = 10;
	$p2->preco_custo = 18;
	$p2->preco_venda = 29;
	$p2->codigo_barras = '1234567678';
	$p2->data_cadastro = date('Y-m-d');
	$p2->origem = 'I';

	$p2->save();

	Transaction::close();
	
}catch(Exception $e){
	Transaction::rollback();
	print $e->getMessage();
}