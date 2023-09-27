<?php

function generatePassword($length){

    $str = "abcdefghijklmnopqestuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+";
    $pass = " ";

    for($i=0; $i<=$length; $i++){

        $pass .= $str[rand(0,strlen($str))];
        return $pass;
    }


}

echo generatePassword(12);