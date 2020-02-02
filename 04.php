<?php
// fungsi untuk mengecek vokal
function substituteVowels($string, $change)
{
    $regex = "/^[aiueo]/";
    $converArray = str_split($string);
    $result = [];

    if (strpos($string, "a") || strpos($string, "i") || strpos($string, "u") || strpos($string, "e") || strpos($string, "o"))
    {
        foreach ($converArray as $row)
        {
            if (preg_match($regex, $row[0]))
            {
                $result[] = $change;
            }
            else
            {
                $result[] = $row[0];
            }
        }

        echo implode('', $result);
    } else
    {
        echo 'Tidak ada huruf vokal!';
    }
}

$string = 'Orang jahat adalah orang baik yang tersakiti';
$change = 'i';

substituteVowels($string, $change);