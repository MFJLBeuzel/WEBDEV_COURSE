<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Date Menus</title>
</head>
<body>
<?php
//create a function that generates month, day and year pull-down menu

function make_date_menus()
{
    //Array to store the months:
    $months = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'Oktober', 'November', 'December'];
//Make the month pull-down menu:
echo '<select name="month">';
    foreach ($months as $key => $value) {
        echo "\n<option value=\"$key\">
        $value
        </option>";
    }

    echo '</select>';

//Make the day pull-down menu:
echo '<select name="day">';
    for ($day = 1; $day <= 31; ++$day) {
        echo "\n<option value=\"$day\">
    $day
    </option>";
    }

    echo '</select>';

//Make the year pull-down menu:
echo '<select name="year">';
    $start_year = date('Y');
    for ($y = $start_year; $y <= ($start_year + 10); ++$y) {
        echo "\n<option value=\"$y\">
    $y</option>";
    }
    echo '</select>';
} //End of make_date_menus()function

//Make the form:
echo '<form action="" method="post">';
make_date_menus();
echo '</form>';

?>
</body>
</html>
