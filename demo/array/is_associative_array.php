<?php
/**
 * Name: ${NAME}<br>
 * User: Yao<br>
 * Date: 16/12/19<br>
 * Time: 22:15<br>
 */
/*Or you could make use of the array_diff_key and array_key function:*/

function is_associative_array($var)
{
    return is_array($var) && array_diff_key($var, array_keys(array_keys($var)));
}

function test($var)
{
    echo is_associative_array($var) ? "I'm an assoc array.\n" : "I'm not an assoc array.\n";
}

// an assoc array
$a = array("a" => "aaa", "b" => 1, "c" => true);
test($a);

// an array
$b = array_values($a);
test($b);

// an object
$c = (object)$a;
test($c);

// other types
test($a->a);
test($a->b);
test($a->c);

//
//The above code outputs:
//I'm an assoc array.
//I'm not an assoc array.
//I'm not an assoc array.
//I'm not an assoc array.
//I'm not an assoc array.
//I'm not an assoc array.