<?php
class LetterCount{
	public $string;
	
	public function __construct($string){
		$this-> string = $string;
	}
	public function getLetterCount(){
		echo (strlen($this-> string));
	}
}
$letters= new LetterCount('tak 4asto bivaet lubov umiraet');
$letters -> getLetterCount();
//var_dump((bool)$letters); 
?>  