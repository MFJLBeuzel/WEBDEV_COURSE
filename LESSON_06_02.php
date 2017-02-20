<?php
//$_GET example
/*This is a 'superglobal', or automatic global, variable. This simply means that
it is available in all scopes throughout a script.*/

echo 'Hello '.htmlspecialchars($_GET['name']).'!';

//$_POST example
/*An associative array of variables passed to the current script via the HTTP
POST method when using application/x-www-form-urlencoded or multipart/form-data
as the HTTP Content-Type in the request.*/

echo 'Hello '.htmlspecialchars($_POST['name']).'!';
