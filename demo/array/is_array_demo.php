<?php
/**
 * Name: ${NAME}<br>
 * User: Yao<br>
 * Date: 16/12/19<br>
 * Time: 22:08<br>
 */
/*I've found a faster way of determining an array. If you use is_array() millions of times, you will notice a *huge* difference. On my machine, this method takes about 1/4 the time of using is_array().

Cast the value to an array, then check (using ===) if it is identical to the original. */
$unknown = null;
if ((array)$unknown !== $unknown) {
    echo '$unknown is not an array';
} else {
    echo '$unknown is an array';
}
/*have indeed changed in PHP 7/ PHP 5.6.24. The opposite is now true, is_array is faster than comparison:
is_array  :  0.52148389816284
cast, === :  0.84179711341858*/
