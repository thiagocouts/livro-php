<?php
require_once 'Classes/ar/Produto.php';

try{
	$conn = new PDO('mysql:host=localhost;port=3306;dbname=livro', 'root', '');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	Produto::setConnection($conn);

	$produtos = Produto::all();
	foreach($produtos as $produto){
		$produto->delete();
	}

	$p1 = new Produto;

	$p1->descricao = 'Vinho Brasileiro Tinto Merlot';
	$p1->estoque = 10;
	$p1->preco_custo = 12;
	$p1->preco_venda = 18;
	$p1->codigo_barras = '1234545903';
	$p1->data_cadastro = date('Y-m-d');
	$p1->origem = 'N';

	$p1->save();

	$p2 = new Produto;

	$p2->descricao = 'Vinho Brasileiro Tinto Merlot';
	$p2->estoque = 10;
	$p2->preco_custo = 12;
	$p2->preco_venda = 18;
	$p2->codigo_barras = '1234545903';
	$p2->data_cadastro = date('Y-m-d');
	$p2->origem = 'N';

	$p2->save();

	$p3 = Produto::find(1);
	print 'Descricao: '.$p3->descricao."<br>";
	print 'Margem de Lucro: '.$p3->getMargemLucro()."<br>";
	$p3->registraCompra(14, 5);
	$p3->save();

}catch(Exception $e){
	print $e->getMessage();
}