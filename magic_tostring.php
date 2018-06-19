<?php

class Titulo {

	private $data;

	public function __set($propriedade, $valor)
	{
		$this->data[$propriedade] = $valor;
	}

	public function __get($propriedade)
	{
		return $this->data['propriedade'];
	}

	public function __toString()
	{
		return json_encode($this->data);
	}
}

$titulo = new Titulo;

$titulo->dt_vencimento = '2015-10-20';
$titulo->valor = 12345;
$titulo->juros = 0.1;
$titulo->multa = 2;

echo "O conteudo do titulo e: ".$titulo;