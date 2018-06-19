<?php

//interpreta o documento XML
$xml = simplexml_load_file('paises3.xml');

echo "Nome: ".$xml->nome."<br>";
echo "Idioma: ".$xml->idioma."<br>";

echo "***Estados*** <br>";

/**
 * voce pode acessar um estado pelo seu indice
 * echo $xml->estado->nome[0];
 */

foreach($xml->estados->nome as $estado){
	echo "Estado: ".$estado."<br>";
}