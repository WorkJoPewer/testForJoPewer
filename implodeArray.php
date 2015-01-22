<?php
function arrToStr($array = array('banana', 'apple', 'orange')){
$string= implode("", $array);
return $string;
}
echo arrToStr();
?>