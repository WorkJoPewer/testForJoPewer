<?php
function arrToStr(
    $arr = array('banana', 'apple', 'orange')
){
    $str='';
    $count = count($arr);
        for($i=0; $i<$count; $i++){
        $str .= $arr[$i];
        }
    return $str;
}
echo arrToStr();