<?php
function wordCount($text = "hello"){
$count=str_word_count($text);
return $count;
}
echo wordCount();

?>