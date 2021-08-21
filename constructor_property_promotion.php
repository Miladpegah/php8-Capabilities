<?php 
// php 7 and less
// class User{
// 	protected $name;
	
// 	public function __construct($name){
// 		$this->name = $name;
// 	}
// }

// class Plan{
// 	protected $name;

// 	public function __construct($name){
// 		$this->name = $name;
// 	}

// }

// class Register{
// 		protected User $user;
// 		protected Plan $plan;

// 		public function __construct(User $user,Plan $plan){
// 			$this->user = $user;
// 			$this->plan = $plan;
// 		}
// 	}



// php 8
class User{
	
	public function __construct(protected $name){}
}

class Plan{

	public function __construct(protected $name){}

}

class Register{

		public function __construct(protected User $user,protected Plan $plan){}
	}

$user = new User('milad pegah');
$plan = new Plan('monthly');

var_dump(new Register($user,$plan));
?>