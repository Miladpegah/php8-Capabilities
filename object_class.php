<?php 
class Goftogu
	{
		// 
	}

	$obj = new Goftogu();

	// In php 7 and less you use get class for find class name
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

	 // In php 8 you give a object
	switch ($obj::class) {
	 	case 'Goftogu':
	 		$type = "The conversation is started";
	 		break;

	 	case 'Javab':
	 		$type = "The answer is started";
	 		break;

	 	case 'Nazar':
	 		$type = "The comment is started";
	 		break;

	 	default:
	 		# code...
	 		break;
	 }

	 var_dump($type);
	?>