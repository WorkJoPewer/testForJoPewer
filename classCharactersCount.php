<?php
class CharactersCount
{
	public $string;
	
	public function __construct($string){
		$this->string =$string;
	}
	public function getCharactersCount(){
		$result = count_chars(($this->string), 0);
		    for ($i=0; $i < count($result); $i++) {
                if ($result[$i] != 0)
    echo "\"" , chr($i) , "\" ����������� � ������ $result[$i] ���(�).<br/>";
            }
	}
}
$char = new CharactersCount('tak 4asto bivaet lubov umiraet');
echo $char -> getCharactersCount();
?>  