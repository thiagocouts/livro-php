<?php

$dom = new DOMDocument();
$dom->formatOutput = true;

$bases = $dom->createElement('bases');
$base = $dom->createElement('base');

$bases->appendChild($base);

$atrr = $dom->createAttribute('id');
$atrr->value = '1';

$base->appendChild($atrr);

$base->appendChild($dom->createElement('name', 'teste'));
$base->appendChild($dom->createElement('host', '198.168.0.1'));
$base->appendChild($dom->createElement('type', 'mysql'));
$base->appendChild($dom->createElement('user', 'mary'));

echo $dom->saveXML($bases);