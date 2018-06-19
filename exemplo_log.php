<?php
require_once 'Classes/ar/ProdutoComTransacaoELog.php';
require_once 'Classes/api/Connection.php';
require_once 'Classes/api/Transaction.php';
require_once 'Classes/api/Logger.php';
require_once 'Classes/api/LoggerTXT.php';

try{
	Transaction::open('estoque');
	Transaction::setLogger(new LoggerTXT('log.txt'));
	Transaction::log('Inserindo produto novo');

	$p1 = new Produto;

	$p1->descricao = "Chocolate Branco";
	$p1->estoque = 100;
	$p1->preco_custo = 5;
	$p1->preco_venda = 10;
	$p1->codigo_barras = '2345654567';
	$p1->data_cadastro = date('Y-m-d');
	$p1->origem = 'N';

	$p1->save();

	Transaction::close();

}catch(Exception $e){
	Transaction::rollback();
	print $e->getMessage();
}