<?php
class CharactersCount
{
	public $string;
	
	public function __construct(){
		$this->string ='tak 4asto bivaet lubov umiraet';
	}
	public function getCharactersCount(){
		$result = count_chars(($this->string), 0);
		    for ($i=0; $i < count($result); $i++) {
                if ($result[$i] != 0)
    echo "\"" , chr($i) , "\" встречается в строке $result[$i] раз(а).<br/>";
            }
	}
}
$char = new CharactersCount;
$char -> getCharactersCount();
//var_dump((bool)$char); 
?>  