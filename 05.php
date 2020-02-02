<?php
function printSquare($n)
{
    for($i = 1; $i <= $n; $i++){
        for ($j = 1; $j <= $n; $j++) 
        {
            if ($j == 1 || $i == 1 || $j == $n || $i == $n){
                echo '* ';
            } else 
            {
                echo "<a style='color:white'>* </a>";
            }
        }
        echo '<br/>';
    }
}

printSquare(4);