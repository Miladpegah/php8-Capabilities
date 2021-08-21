<?php 
	// if the class return null you have error

	class A {
		public function job(){
			// return new B();
			return null;
		}
	}

	class B {
		public function developer(){
			return "I'm a developer";
		}
	}

	$test = new A();


	// handeling error in php 7 & less
	// if ($test->job()){
	// 	echo $test->job()->developer();
	// }


	// handeling the error in php 8
	echo $test->job()?->developer();
?>