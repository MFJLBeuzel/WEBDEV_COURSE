<?php
 function strcat($links, $rechts)
 {
     $combined = $links.$rechts;

     return $combined;
 }

echo strcat('Dit is ', 'een zin.');

$naam = 'Ed';
$groet = strcat('Hallo ', $naam);
echo $groet;
