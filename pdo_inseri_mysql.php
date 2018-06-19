<?php

try {
	//instancia o objeto
	$conn = new PDO('mysql:host=localhost;port=3306;dbname=livro', 'root', '');
	//executa instrucoes
	$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (1, 'Erico Verissimo')");
	$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (2, 'John Lennon')");
	$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (3, 'Ayrton Senna')");
	$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (4, 'Mario Quintana')");
	$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (5, 'Anita Garibaldi");
	//fecha a conexao
	$conn = null;
}catch(PDOException $e) {
	print "Erro!: ".$e->getMessage()."<br>";
}