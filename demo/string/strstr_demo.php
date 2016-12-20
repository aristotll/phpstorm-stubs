<?php
/**
 * Name: ${NAME}<br>
 * User: Yao<br>
 * Date: 16/12/20<br>
 * Time: 21:51<br>
 */
var_dump(strtr('test', 't', '哈哈'));// terminal 乱码
var_dump(strtr("test2", ['2' => 'ha']));
$trans = array("hello" => "hi", "hi" => "hello");
echo strtr("hi all, I said hello", $trans);