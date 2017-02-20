<?php
//Invoer controleren
$name = $_POST["name"];

if (!preg_match("/^[a-zA-Z]*$/", $name)) {
    //ERROR
}

 ?>
