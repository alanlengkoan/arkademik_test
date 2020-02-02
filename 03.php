<?php
// fungsi untuk random
function randomize($string)
{
    if(!is_numeric($string))
    {
        echo str_shuffle($string);
    } else {
        echo "Harus terdapat parameter dan harus string!";
    }
}

$string = 'Rizky';

randomize($string);