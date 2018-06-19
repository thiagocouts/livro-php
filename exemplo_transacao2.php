<?php
require_once 'Classes/ar/ProdutoComTransacao.php';
require_once 'Classes/api/Connection.php';
require_once 'Classes/api/Transaction.php';

try{
	Transaction::open('estoque'); 

	$p1 = new Produto;
	$p1->descricao = "Chocolate Amargo";
	$p1->estoque = 80;
	$p1->preco_custo = 4;
	$p1->preco_venda = 7;
	$p1->codigo_barras = '5463874978';
	$p1->data_cadastro = date('Y-m-d');
	$p1->origem = 'N';

	$p1->save();

	Transaction::close();
	
}catch(Exception $e){
	Transaction::rollback();
	print $e->getMessage();
}