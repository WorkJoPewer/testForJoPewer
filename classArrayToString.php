<?php
class StringToArray{
    public $string;
	
	public function __construct(){
	    $this->string = "sunny";
		
	}
	public function strToArray(){
	    print_r (str_split($this->string));
	}
    
}
$obj = new StringToArray;
$obj->strToArray();
?> 