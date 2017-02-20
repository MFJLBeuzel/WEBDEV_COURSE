<!DOCTYPE html>
<html lang=nl>
<head>
 <meta charset=UTF-8 >
 <meta name=description content="beschrijving van de webpagina" >
 <meta name=keywords content="trefwoorden, gescheiden, door, komma's">
 <title>$_SERVER</title>
</head>
<body>
<h1>Oefening 3b:$_SERVER en de explode() functie.</h1>
<?php
//The explode() function breaks a string into an array.
echo (explode($delimiter,$_SERVER['SCRIPT_NAME']));
?>
</body>
</html>
