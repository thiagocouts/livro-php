<?php

//interpreta o documento XML
$xml = simplexml_load_file('paises4.xml');

echo "Nome: ".$xml->nome."<br>";
echo "Idioma: ".$xml->idioma."<br>";

echo "***Estados*** <br>";

foreach($xml->estados->estado as $estado){
	echo str_pad('Estado: '.$estado['nome'], 30).' - Capital: '.$estado['capital']."<br>";
}