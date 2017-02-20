<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Connect to MySQL 2</title>
</head>
<body>
<?php
if ($dbc = @mysqli_connect('localhost', 'MAARTEN', '-1234', 'myblog')) {
    echo '<p>Succesfully connected to the database!</p>';
    mysqli_close($dbc);
} else {
    echo '<p style="color:red;">Could not connect to MySQL:<br>'.mysqli_connect_error().'.</p>';
}
?>

</body>
</html>
