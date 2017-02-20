<?php
//Een functie maken en aanroepen
function strcat($left, $right)
{
    $combined = $left.$right;

    return $combined;
}

echo strcat('Dit is ', 'een zin.');

$naam = 'Alex';
$groet = strcat('Hallo ', $naam);
echo $groet;
