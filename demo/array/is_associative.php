<?php
/**
 * Name: ${NAME}<br>
 * User: Yao<br>
 * Date: 16/12/19<br>
 * Time: 22:20<br>
 */
//Yet another simpler, faster is_assoc():
function is_assoc($array)
{
    foreach (array_keys($array) as $k => $v) {
        if ($k !== $v)
            return true;
    }
    return false;
}