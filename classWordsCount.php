<?php
class WordCount{
	public $words;
	
	public function __construct($words){
		$this -> words = $words;
	}
	public function getwordsCount(){
		echo count(explode(" ", $this->words));
	}
}
$object	= new WordCount('tak 4asto bivaet lubov umiraet');
echo $object -> getWordsCount();
//var_dump((bool)$object); 
?>  