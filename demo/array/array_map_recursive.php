<?php
/**
 * Name: ${NAME}<br>
 * User: Yao<br>
 * Date: 16/12/20<br>
 * Time: 20:28<br>
 */
//Simplest array_map_recursive() implementation.

function array_map_recursive(callable $func, array $array)
{
    return filter_var($array, FILTER_CALLBACK, ['options' => $func]);// 貌似就是 recursive array map 原因不知
}

var_dump(array_map_recursive(function ($value) {
    return 2 * $value;
}, [1, [2]]));