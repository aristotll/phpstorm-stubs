<?php
/**
 * Name: ${NAME}<br>
 * User: Yao<br>
 * Date: 16/12/19<br>
 * Time: 21:33<br>
 */
//
/**
 * for some reason is happens that PHP or Javascript or some naughty insert a lot of  backslash. <br>
 * Ordinary function does not notice that.
 * Therefore, it is necessary that the bit "inflate"
 * @param string $string
 * @return string the string stripped
 */
function remove_slashes($string)
{
    return stripslashes(implode("", explode("\\", $string)));
}
$text="My dog don\\\\\\\\\\\\\\\\'t like the postman!";
echo remove_slashes($text);