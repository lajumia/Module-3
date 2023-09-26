<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);

function removeEven($odd)
{
    foreach($odd as $result)
    {

        if($result % 2 != 0)
        {
        echo $result;
        echo "<br>";
        }
    }
}

removeEven($numbers);