<?php

	//this switch is a if statment

	// we use the SWITCH and IF in php 7 and less 
	class Goftogu
	{
		// 
	}

	$obj = new Goftogu();

	// switch (get_class($obj)) {
	//  	case 'Goftogu':
	//  		$type = "The conversation is started";
	//  		break;

	//  	case 'Javab':
	//  		$type = "The answer is started";
	//  		break;

	//  	case 'Nazar':
	//  		$type = "The comment is started";
	//  		break;

	//  	default:
	//  		# code...
	//  		break;
	//  }

	// Instead the if statment use the match method in php 8
	$type = match(get_class($obj)){
		'Goftogu' => 'The conversation is started',
		'Javab' => 'The answer is started',
		'Nazar' => 'The comment is started',
		default => 'The code is working',
	};


	// you can define (two or more condation(elseif) & function) in the match method	
	// function Javab_nazar(){
	// 	return "The answer and comment is started";
	// }

	// $type = match(get_class($obj)){
	// 	'Goftogu' => 'The conversation is started',
	// 	'Javab', 'Nazar' => Javab_nazar(),

	// 	// Anonymous functions
	// 	default => function () { return 'The code is working'; },
	// };	

	 var_dump($type);
?>