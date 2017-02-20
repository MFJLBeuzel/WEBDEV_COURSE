<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Sticky Text Inputs</title>
</head>
<body>
<?php
//CREATE AND CALL A FUNCTION THAT TAKES AN ARGUMENT

//This function makes a sticky text input.
function make_text_input($name, $label) /*2 arguments which are assigned to
$name and $label */
{
    //Print an opening paragraph and a label tag:
    echo '<p><label>'.$label.':';

    //Text input:
    echo '<input type="text" name= "'.$name.'" size="20"';

    //Add the value
    if (isset($_POST['$name'])) {
        echo ' value="'.htmlspecialchars($_POST['name']).'"';
    }

    //Complete input,label and paragraph.

    echo '></label></p>';
}

//Make form
echo '<form action="" method="post">';

//Create text input
make_text_input('first_name', 'First Name');
make_text_input('last_name', 'Last Name');
make_text_input('email', 'Email Adress');

//Completing form.
echo '<input type="submit" name="submit" value="Register!"></form>';
?>
</body>
</html>
