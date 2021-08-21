<?php 
	// 1. weakmap is a key value pair
	// 2. keys are object

	// $map = new weakmap();

	$obj = new stdClass();

	// the unseting varable without weakmap is not working(php 7 and less)
	// $store = new SplObjectStorage();


	// php 8
	$store = new weakmap();

	$store[$obj] = 'foobar';

	
	var_dump($store);
	
	unset($obj);

	var_dump($store);
?>