<?php 
class Recipt{
	protected $text;
	protected $total;
	protected $date;
	protected $paid;

	public function __construct($text,$total,$date,$paid){
		$this->text = $text;
		$this->total = $total;
		$this->date = $date;
		$this->paid = $paid;
		
	}

}

$recipt = new Recipt(
// The name most be cince whit varable
total: 2000,

text: 'Customer',

paid: true,

date: new DateTime(),

);

var_dump($recipt);
?>