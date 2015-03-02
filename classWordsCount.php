<?php
class WordCount{
	public $words;
	
	public function __construct(){
		$this -> words = 'tak 4asto bivaet lubov umiraet';
	}
	public function getwordsCount(){
		echo count(explode(" ", $this->words));
	}
}
$object	= new WordCount;
$object -> getWordsCount();
//var_dump((bool)$object); 
?>  