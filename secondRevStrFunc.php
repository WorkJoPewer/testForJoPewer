<?php
function revStr($str="hello")
{
$out = '';
for ($i = strlen($str) - 1; $i >= 0; $out .= $str[$i--]) {}
return $out;
}
echo revStr();
?>