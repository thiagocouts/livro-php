<?php

$classes = spl_classes(); //Lista classes da SPL

foreach($classes as $classe){
	$rc = new ReflectionClass($classe);
	print $classe."<br>";

	foreach($rc->getMethods() as $method){
		print " ".$method->getName()."<br>";

		print "(";
		$paramNames = array();
		$parameters = $method->getParameters();

		if(count($parameters) > 0){
			foreach($parameters as $parameter){
				if($parameter->isOptional()){
					$paramNames[] = "[".$parameter->getName()."]"."<br>";
				}else{
					$paramNames[] = "[".$parameter->getName()."<br>";
				}
			}
		}

		print implode(', ', $paramNames);
		print ")";
		print "<br>";
	}
}