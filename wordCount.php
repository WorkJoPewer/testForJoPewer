<?php
function wordCount($text = "hello")
{
    $count = count(explode(" ", $text));
    return $count;
}
echo wordCount();