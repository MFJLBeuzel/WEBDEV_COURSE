<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Connect to MySQL 2</title>
</head>
<body>
<?php
if ($dbc = @mysqli_connect('localhost', 'MAARTEN', '1234', 'myblog')) {
    $query = 'CREATE TABLE entries(id INT UNSIGNED NOT NULL AUTO_INCREMENT
        PRIMARY KEY, title VARCHAR(100) NOT NULL,entry TEXT NOT NULL, date_entered
        DATETIME NOT NULL)CHARACTER
        SET utf8';
    if (@mysqli_query($dbc, $query)) {
        echo '<p>
    The Table has been created!
    </p>';
    } else {
        echo '<p style="color:red;">
    Could not create the table because:<br />'.mysqli_error($dbc).'.
    </p>
    <p>
    The query being run was: '.$query.'
    </p>';
    }
    mysqli_close($dbc); //close the connection
} else { //connection failure
    '<p style = "color:red;">
    Could not connect to the database:<br />' .mysqli_connect_error().' .
    </p>';
}
?>

</body>
</html>
