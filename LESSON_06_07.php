<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Tax rate</title>
</head>
<body>
<?php
/* This script displays and handles an
HTML form. It uses a function to calculate a total from a quantity, price, and tax rate. */

//define a tax rate
$tax = 8.75;

//this function performs the calculation
function calculate_total($quantity, $price)
{
    global $tax; /*This statement tells the function to incorporate the same
    $tax variable as the one that exists outside of the function.*/
    $total = $quantity * $price;

    $taxrate = ($tax / 100) + 1;
    $total = $total * $taxrate;
    $total = number_format($total, 2); //formatting

    return $total; //return value
}

//check for a form submission
if (isset($_POST['submitted'])) {
    if (is_numeric($_POST['quantity']) and is_numeric($_POST['price'])) {
        $total = calculate_total($_POST['quantity'], $_POST['price']);

        echo "<p>
    Your total comes to $<span style=\"font-weight:bold;\">$total</span>,including
    the $tax percent tax rate.
    </p>";
    } else {
        echo '<p style ="color:red;">
    Please enter a valid quantity and price!
    </p> ';
    }
}
?>
<form action="" method="post">
<p>Quantity: <input type="text" name="quantity" size="3"></p>
<p>Price: <input type="text" name="price" size="5"></p>
<input type="submit" name="submit" value="Calculate!">
<input type="hidden" name="submitted" value="true">
</form>
</body>
</html>
