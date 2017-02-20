<?php
/*
Return returns program control to the calling module. If called from within a
function, the return statement immediately ends. Execution of the current
function, and returns its argument as the value of the function call.
Keep in mind that even if PHP allows you to use "return" in the global scope.
It is very bad design to do so.
*/

/*
function hello($name)
{
    if ($name == 'Mike') {
        return 'Hello, Mike!';
    } else {
        return 'Hello, stranger!';
    }
}

$greeting = hello('Mike');
echo $greeting;
*/

function add_up($a, $b)
{
    $arr = array(
        $a,
        $b,
        $a + $b,
    );

    return $arr;
}

$value = add_up(5, 9);
echo $value[2];
