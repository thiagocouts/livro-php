<?php
require_once 'Classes/Conta.php';
require_once 'Classes/ContaPoupanca.php';
require_once 'Classes/ContaCorrente.php';

//criacao dos objetos
$contas = array();

$contas[] = new ContaCorrente(6677, "CC 1234-56", 100, 500);
$contas[] = new ContaPoupanca(6678, "CP 1234-57", 100);

//percorre as contas
foreach($contas as $key => $conta){

	echo "<b>Conta: {$conta->getInfo()}</b><br>";
	echo "Saldo atual: {$conta->getSaldo()} <br>";
	$conta->depositar(200);
	echo "Deposito de: 200 <br>";
	echo "Saldo atual: {$conta->getSaldo()} <br>";

	if($conta->retirar(700)){
		echo "Retirade de: 700 <br>";
	}else{
		echo "Retirade de: 700 (Nao permitida) <br>";
	} 

	echo "Saldo atual: {$conta->getSaldo()} <br>";
}