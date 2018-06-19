<?php

//interpreta o documento XML
$xml = simplexml_load_file('paises.xml');

//exibe os atributos do objeto criado
echo "Nome: ".$xml->nome."<br>";
echo "Idioma: ".$xml->idioma."<br>";
echo "Capital: ".$xml->capital."<br>";
echo "Moeda: ".$xml->moeda."<br>";
echo "Prefixo: ".$xml->prefixo."<br>";