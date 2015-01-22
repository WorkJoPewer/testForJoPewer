<?php
function revStr($str="hello")
{
for ($i = strlen($str) - 1, $out = ''; $i >= 0; $out .= $str[$i--]) {}
return $out;
}
echo revStr();
?>