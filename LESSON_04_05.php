<?php
/*
function hello()
{
    echo 'Hello, World!';
}

//call function
hello();
*/

//global statement used
//function scope extension: argument or global statement
//$current_user = 'Mike';
$current_user = 'TEsT!';

function is_mike()
{
    global $current_user;

    if ($current_user === 'Mike') {
        echo 'It is Mike!';
    } else {
        echo 'No, it is not Mike!';
    }
}

is_mike();
