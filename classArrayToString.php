<?php
<?php
class ArrayToString{
	public $array;
	
	public function __construct($array){
		$this->array=$array;
		
	}
	public function arrayToString(){
		print implode('', ($this->array));
	}
}
$obj = new ArrayToString(array('banana', 'lemon','apple'));
$rezult= $obj-> arrayToString();
echo $rezult;
?> 
?> 