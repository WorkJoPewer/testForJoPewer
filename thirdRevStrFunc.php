<?php
function revStr($str = "hello")
{
    $revStr= implode("", array_reverse(str_split($str)));
    return $revStr;
}
echo revStr();
?>