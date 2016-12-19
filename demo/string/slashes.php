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