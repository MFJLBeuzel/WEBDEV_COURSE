<!DOCTYPE html>
<html lang=nl>
<head>
 <meta charset=UTF-8 >
 <meta name=description content="beschrijving van de webpagina" >
 <meta name=keywords content="trefwoorden, gescheiden, door, komma's">
 <title>Schaakbord</title>
</head>
<body>
<h1>Oefening 2: Schaakbord</h1>
<?php
echo "<table border = '1' width = '400' height = '400'>";
$aantalRij = 8;
$aantalKolom = $aantalRij;
for ($rij = 0; $rij < $aantalRij; $rij++) {
echo "<tr>";
for ($kolom = 0; $kolom < $aantalKolom; $kolom++) {
if ($kolom % 2 == $rij %2) {
echo "<td></td>";
} else {
echo "<td bgcolor=black></td>";
}
}
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
