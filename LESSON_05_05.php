<?php
//controle of de knop query verzenden is ingedrukt dmv isset
if (isset($_GET['verzenden']) == 0) {
    ?>
    <form name = "formulier1" action = "LESSON_05_05.php" method = "get">
    Typ hier uw voornaam: <input type = "text" name = "voornaam"><br><br>
    Typ hier uw achternaam: <input type = "text" name =
    "achternaam"><br><br>
    <input type = "submit" name = "verzenden">
    </form>
    <?php

} else {
    //indien ingedrukt voer de onderstaande code uit
    /*Omdat het element verzenden nu in de array $_GET aanwezig is, levert de uitdrukking
    if(isset($_GET['verzenden'])==0){...} False op zodat de inhoud van de if-lus
    wordt overgeslagen.*/
    echo '<b>Welkom '.$_GET['voornaam'].' '.$_GET['achternaam'].'</b>';
}

 ?>
