<?php
class StringToArray{
    public $string;
	
	public function __construct($string){
	    $this->string = $string;
	    
    }
	public function stringToArray(){
	    print_r (str_split($this->string));
	}
    
}
$obj = new StringToArray('SUNNY');
echo $obj->getStringToArray();
?> 