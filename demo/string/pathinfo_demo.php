<?php
/**
 * Name: ${NAME}<br>
 * User: Yao<br>
 * Date: 16/12/18<br>
 * Time: 22:29<br>
 */
$path = "/";
var_dump(pathinfo($path));
//错误 if $file has no extension, you get wrong variable values:
// $extension would be assigned with 'filename' array element of pathinfo() result, but $filename - would be empty.
list($dir_name, $base_name, $extension, $file_name) = array_values(pathinfo($path));//这个是最理想的结果
//echo $dir_name, $base_name, $extension, $file_name;

//pathinfo() is locale aware, so for it to parse a path containing multi byte characters correctly,
// the matching locale must be set using the setlocale() function.
var_dump(pathinfo('中国人2016.xls'));//貌似 mac 没有出现错误? Windows 的锅?

//If a file has more than one 'file extension' (seperated by periods), the last one will be returned.
echo 'Extension: ' . pathinfo('/dir/test.tar.gz')['extension'];
//will produce:
//Extension: gz
//and not tar.gz


//If you want only the file extension, use this:
$extension = substr(strrchr('/dir/test.tar.gz', "."), 1);//1开始因为拓展名有点
//This is many times faster than using pathinfo() and getting the value from array.
var_dump($extension);