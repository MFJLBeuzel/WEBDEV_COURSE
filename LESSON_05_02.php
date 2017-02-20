<?php
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$nieuwsbrief = false;

if ($_POST['nieuwsbrief']) {
    $nieuwsbrief = true;
}
//als checkbox niet aangevinkt is, wordt hij niet meegezonden

//sla gegevens op in database...
 ?>

 Bedankt <?= $voornaam ?> <?= $achternaam ?> voor het invullen.
 U wil <?php if ($nieuwsbrief) {
     echo 'wel';
 } else {
     echo 'niet';
 } ?>
 de nieuwsbrief ontvangen.
