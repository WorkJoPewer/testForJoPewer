<?php
function arrToStr($arr = array('banana', 'apple', 'orange')){
$str= '';
for($i=0; $i<count($arr); $str.= $arr[$i++]){}
return $str;
}
echo arrToStr();
?>