<?php
//PHP Function Default Arguments
/*
function get_info($name, $title)
{
    echo "$name has arrived, they are with us as a $title";
}

get_info('Mike', 'Frog');
*/

//Title is optional in example
function get_info($name, $title = null)
{
    if ($title) {
        echo "$name has arrived, they are with us as a $title";
    } else {
        echo "$name has arrived, welcome!";
    }
}

get_info('Mike', 'Asshole');
//get_info('Mike');
