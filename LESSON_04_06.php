<?php
//Method passing by value (default)
/*
function hello($name)
{
    echo "Hello, $name, how is it going?";
}

hello('Maarten');
*/

function hello($arr)
{
    if (is_array($arr)) {
        //loopt through Array
    foreach ($arr as $name) {
        echo "Hello $name how is it going?";
    }
    } else {
        echo 'Hello, friends!';
    }
}

$names = array(
    'Ed',
    'Mike',
    'Nana',
);
hello($names);
