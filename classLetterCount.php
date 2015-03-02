<?php
class LetterCount{
	public $string;
	
	public function __construct(){
		$this-> string = 'tak 4asto bivaet lubov umiraet';
	}
	public function getLetterCount(){
		echo (strlen($this-> string));
	}
}
$letters= new LetterCount;
$letters -> getLetterCount();
//var_dump((bool)$letters); 
?>  