<?php

final class Transaction {

	private static $conn; //conexao ativa
	private static $logger; //objeto de log 

	//private function __construct() {}

	public static function open($database)
	{
		if(empty(self::$conn)){
			self::$conn = Connection::open($database);
			self::$conn->beginTransaction();//inicia a transacao

			self::$logger = null; //desliga o LOG de SQL
		}
	}

	public static function get()
	{
		return self::$conn;//retorna a conexao ativa
	}

	public static function rollback()
	{
		if(self::$conn){
			self::$conn->rollback();//desfaz operacoes realizadas
			self::$conn = null;
		}
	}

	public static function close()
	{
		if(self::$conn){
			self::$conn->commit();//aplica operacoes realizadas
			self::$conn = null;
		}
	}

	public static function setLogger(Logger $logger)
	{
		self::$logger = $logger;
	}

	public static function log($message)
	{
		if(self::$logger){
			self::$logger->write($message);
		}
	}
}