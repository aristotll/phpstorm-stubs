<?php
/**
 * Name: ${NAME}<br>
 * User: Yao<br>
 * Date: 16/12/19<br>
 * Time: 21:11<br>
 */
//

/**
 * stripslashes() 是非递归的。如果你想要在多维数组中使用该函数，你需要使用递归函数。
 * @param array|string $value
 * @return array|string the value;
 */
function strip_slashes_deep($value)
{
    return is_array($value) ? array_map("strip_slashes_deep", $value) : stripslashes($value);
}

$strips_slashes_deep = strip_slashes_deep(["f\\'oo", "b\\'ar", ["fo\\'o", "b\\'ar"]]);
print_r($strips_slashes_deep);