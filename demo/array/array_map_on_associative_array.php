<?php
/**
 * Name: ${NAME}<br>
 * User: Yao<br>
 * Date: 16/12/19<br>
 * Time: 22:59<br>
 */
//I was miffed that array_map didn't have a way to pass values *and* keys to the callback, but then I realized I could do this:

function callback($k, $v)
{
    return ($k . $v);
}

$array = ['a' => 'b'];
echo array_map("callback", array_keys($array), $array);