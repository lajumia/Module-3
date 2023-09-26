<?php
$text = "The quick brown fox jumps over the lazy dog.";


function textFunction($string){

    $lowerCase = strtolower($string);
    $replaceText = str_replace('brown','red',$lowerCase);
    echo $replaceText;
}


textFunction($text);