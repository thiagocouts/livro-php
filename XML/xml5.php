<?php

//interpreta o documento XML
$xml = simplexml_load_file('paises2.xml');

//alteracao das propriedades
$xml->moeda = "Novo Real (NR$)";
$xml->geografia->clima = "Temperado";

//adiciona novo modo
$xml->addChild('presidente', 'Fulano');

//exibindo novo XML
echo $xml->asXML();

//grava no arquivo paises2.xml
file_put_contents('paises2.xml', $xml->asXML());