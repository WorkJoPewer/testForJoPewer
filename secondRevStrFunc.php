<?php
function revStr($str="hello")
{
    $out = '';
    $len= strlen($str);
        for ($i=$len -1; $i>=0; $i--){
            $out .=$str[$i];
		}
    return $out;
}
echo revStr();
?>