<?php
function arrToStr($arr = array('banana', 'apple', 'orange')){
for($i=0, $str= ''; $i<count($arr); $str.= $arr[$i++]){}
return $str;
}
echo arrToStr();
?>