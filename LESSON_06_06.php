<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<?php
/*Creating and using functions that return a value*/
/*This script will display an HTML form where a
user enters a quantity and price. When the form is submitted (back to this same
page), a total value will be calculated and printed.*/

function calculate_total($quantity, $price) //two arguments
{
    $total = $quantity * $price; //multiply to create a total
    $total = number_format($total, 2); //total value is formatted before returning

    return $total;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //If it’s a POST request, that means the form has been submitted.
    if (is_numeric($_POST['quantity']) and is_numeric($_POST['price'])) /*first checks
    that a numeric quantity and price were entered. */
    {
        $total = calculate_total($_POST['quantity'], $_POST['price']); /*If so,
        the total is determined by calling the calculate_total() function and
        assigning the result to the $total variable.*/
        echo "<p>
        Your total comes to $<span style=\"font-weight:bold;\">$total</span>.
        </p>";
    } else {
        /*If either of the form variables was not properly submitted, a message
        is printed indicating that.*/
        echo '<p style="color:red;">
        Please enter a valid quantity and price!
        </p>';
    }
}

?>
<!--Display HTML form -->
<form action="" method="post">
    <p>Quantity: <input type="text" name="quantity" size="3" /></p>
    <p>Price: <input type="text" name="price" size="5" /></p>
    <input type="submit" name="submit" value="Calculate!" />
</form>
</body>
</html>
