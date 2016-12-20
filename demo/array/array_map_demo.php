<?php
/**
 * Name: ${NAME}<br>
 * User: Yao<br>
 * Date: 16/12/19<br>
 * Time: 22:30<br>
 */
//anonymous function PHP 5.3.0 起
$func = function ($value) {
    return pow($value, 2);
};
var_dump(array_map($func, range(1, 5)));
//传入 NULL 作为回调函数的名称，将创建多维数组（一个数组，内部包含数组。）
$a = array(1, 2, 3, 4, 5);
$b = array("one", "two", "three", "four", "five");
$c = array("uno", "dos", "tres", "cuatro", "cinco");

$d = array_map(null, $a, $b, $c);
print_r($d);

//如果仅传入一个数组，键（key）会保留；传入多个数组，键（key）是整型数字的序列。

$arr = array("stringkey" => "value");
function cb1($a) {
    return array ($a);
}
function cb2($a, $b) {
    return array ($a, $b);
}
var_dump(array_map("cb1", $arr));
var_dump(array_map("cb2", $arr, $arr));
var_dump(array_map(null,  $arr));
var_dump(array_map(null, $arr, $arr));