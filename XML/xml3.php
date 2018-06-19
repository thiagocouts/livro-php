<?php

//interpreta o documento XML
$xml = simplexml_load_file('paises.xml');

foreach($xml->children() as $elemento => $valor){ //retorna os dados dos elementos filho
	echo "$elemento-> $valor <br>";
}