<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Adding a blog entry (secure)</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //connect and select:
    $dbc = mysqli_connect('localhost', 'MAARTEN', '1234', 'myblog');

    //Set the character set
    mysqli_set_charset($dbc, 'utf8');

    //Validate and secure the form data:
    $problem = false;
    if (!empty($_POST['title']) && !empty($_POST['entry'])) {
        /* For both posted variables, their values are first trimmed and stripped of
tags, then sent through mysqli_real_escape_string(). The result will be safe to use in the query.*/
        $title = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['title'])));
        $entry = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['entry'])));
    } else {
        echo '<p style="color:red;">
        Please submit both a title and an entry.
        </p>';
        $problem = true;
    }
    if (!$problem) {

        //define the query
        $query = "INSERT INTO entries(id, title, entry,date_entered)VALUES(0,'$title','$entry',NOW())";

        //execute the query
        if (@mysqli_query($dbc, $query)) {
            echo '<p>
            The blog entry has been added!
            </p>';
        } else {
            echo '<p style="color:red;">
            Could not add the entry because:<br />'.mysqli_error($dbc).'.
            </p><p>
            The query being run was: '.$query.'
            </p>';
        }

        mysqli_close($dbc); //close the connection
    } //geen probleem
} //end of form submission
?>
<!--display the form-->
<form action="LESSON_06_11.php" method="post">
<p>Entry Title: <input type="text" name="title" size="40" maxsize="100"></p>
<p>Entry Text: <textarea name="entry" cols="40" rows="5"></textarea></p>
<input type="submit" name="submit" value="Post This Entry!">
</form>

</body>
</html>
