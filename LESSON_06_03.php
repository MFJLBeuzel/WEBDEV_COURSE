<?php
//Bestandsinformatie inlezen
echo 'bestandsnaam: '.$_FILES['bestandsveld']['name'];
echo '<br>Tijdelijk bestand: '.$_FILES['bestandsveld']['tmp_name'];
echo '<br>Bestandstandsgrootte: '.$_FILES['bestandsveld']['size'];
echo '<br>Bestandstype: '.$_FILES['bestandsveld']['type'];
