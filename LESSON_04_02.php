<?php
//Oefening4a:De functie optellen()
//werkt met return waarde
/*function optellen_1($a,$b)
{
    $resultaat = $a + $b;
    return $resultaat;
}

//De functie wordt aangeroepen door de naam en de twee parameters tussen haakjes, gescheiden
//door komma's, aan te roepen
echo optellen_1(2,4); */

//werkt met globale variabele $som

function optellen_2($a, $b)
{
    global $som;
    $som = $a + $b;

    return $resultaat;
}

$som = 5 + 5;
echo $som;

//optellen3($a, $b, &$som): een versie die werkt met call-by-reference.
