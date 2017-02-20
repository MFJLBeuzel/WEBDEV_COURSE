<?php
/*
PHP supports the concept of variable functions. This means that if a variable
name has parentheses appended to it, PHP will look for a function with the same
name as whatever the variable evaluates to, and will attempt to execute it.
Among other things, this can be used to implement callbacks, function tables,
and so forth.
*/

//Variable functions

function answer()
{
    return 42;
}

function add_up($a, $b)
{
    return $a + $b;
}

$func = 'add_up';
$num = $func(5, 10);

echo $num;
