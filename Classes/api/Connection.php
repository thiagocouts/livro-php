<?php

final class Connection {

	private function __construct() {}

	public static function open($name)
	{
		//verifica se existe o arquivo de configuracoes para este banco de dados
		if(file_exists("Config/{$name}.ini")){
			$db = parse_ini_file("Config/{$name}.ini");
		}else{
			throw new Exception("Arquivo '$name' nao encontrado");
		}

		//lê as informacoes contidas no arquivo
		$user = isset($db['user']) ? $db['user'] : null;
		$pass = isset($db['pass']) ? $db['pass'] : null;
		$name = isset($db['name']) ? $db['name'] : null;
		$host = isset($db['host']) ? $db['host'] : null;
		$type = isset($db['type']) ? $db['type'] : null;
		$port = isset($db['port']) ? $db['port'] : null;

		//descobre qual o tipo (driver) de banco de dados a ser utilizado
		switch($type){
			case 'pgsql':
				$port = $port ? $port : '5432';
				$conn = new PDO("pgsql:dbname={$name}; user={$user}; password={$pass};
								host={$host}; port={$port}");
				break;
			case 'mysql':
				$port = $port ? $port : '3306';
				$conn = new PDO("mysql:host={$host};port={$port};dbname={$name}", $user, $pass);
				break;
			case 'sqlite':
				$conn = new PDO("sqlite:{$name}");
				break;
			case 'ibase':
				$conn = new PDO("firebird:dbname={$name}", $user, $pass);
				break;
			case 'oci8':
				$conn = new PDO("oci:dbname={$name}", $user, $pass);
				break;
			case 'mssql':
				$conn = new PDO("mssql:host={$host};1433;dbname={$name}", $user, $pass);
				break;
		}

		//define para que o PDO lance exceçoes na ocorrencia de erros
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conn;
	}
}