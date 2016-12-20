<?php
/**
 * Name: ${NAME}<br>
 * User: Yao<br>
 * Date: 16/12/19<br>
 * Time: 21:41<br>
 */
/*Here are recursive addslashes / stripslashes functions.
given a string - it will simply add / strip slashes
given an array - it will recursively add / strip slashes from the array and all of it subarrays.
if the value is not a string or array - it will remain unmodified!*/


function add_slashes_recursive($variable)
{
    if (is_string($variable))
        return addslashes($variable);

    elseif (is_array($variable))
        foreach ($variable as $i => $value)
            $variable[$i] = add_slashes_recursive($value);

    return $variable;
}

function strip_slashes_recursive($variable)
{
    if (is_string($variable))
        return stripslashes($variable);
    if (is_array($variable))
        foreach ($variable as $i => $value)
            $variable[$i] = strip_slashes_recursive($value);

    return $variable;
}

//If you need to remove all slashes from a string, here's a quick hack:
function strip_all_slashes($string)
{
    while (strchr($string, '\\')) {
        $string = stripslashes($string);
    }
}

//If you want to deal with slashes in double-byte encodings, such as shift_jis or big5, you may use this:
function strip_slashes_double_byte($string)
{
    $string = str_replace("\\\"", "\"", $string);
    $string = str_replace("\\'", "'", $string);
    $string = str_replace("\\\\", "\\", $string);
    return $string;
}