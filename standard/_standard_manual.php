<?php

/**
 * strtr — 转换指定字符
 * @param string $str The string being translated. -> 待转换的字符串。
 * @param array $replace_pairs
 * The replace_pairs parameter may be used as a substitute for to and from <br>
 * in which case it's an array in the form array('from' => 'to', ...). -> <br>
 * 可以用来取代 to 和 from 参数，以 array('from' => 'to', ...) 格式出现的数组。
 * @return string A copy of str, -> 待转换的字符串。
 * translating all occurrences of each character in from to the corresponding character in to.
 * @link https://secure.php.net/manual/en/function.strtr.php
 */
function strtr($str, array $replace_pairs)
{
}

;

/**
 * Halts the execution of the compiler. ->  中断编译器的执行 常常是一些工具用 <br>
 * This can be useful to embed data in PHP scripts, like the installation files. <br>
 * Byte position of the data start can be determined by the __COMPILER_HALT_OFFSET__ constant
 * which is defined only if there is a __halt_compiler() presented in the file. <br>
 * Note: __halt_compiler() can only be used from the outermost scope.
 * @link http://php.net/manual/en/function.halt-compiler.php
 * @return void
 * @since 5.1
 */
function PS_UNRESERVE_PREFIX___halt_compiler()
{
}

/**
 * Byte position of the data start, defined only if there is a __halt_compiler() presented in the file. ->
 * 获取数据开始字节所在的位置
 * @link http://php.net/manual/en/function.halt-compiler.php
 * @return void
 * @since 5.1
 */
define("__COMPILER_HALT_OFFSET__", 0);


/**
 * Convert hex to binary
 * @link http://php.net/manual/en/function.hex2bin.php
 * @param string $data
 * @return string Returns the binary representation of the given data.
 * @see bin2hex(), unpack()
 * @since 5.4.0
 */
function hex2bin($data)
{
}

;

/**
 * This function flushes all response data to the client and finishes the request.
 * This allows for time consuming tasks to be performed without leaving the connection to the client open.
 * @return boolean Returns TRUE on success or FALSE on failure.
 * @link http://php.net/manual/en/install.fpm.php
 * @since 5.3.3
 */
function fastcgi_finish_request()
{
}

;

/**
 * Get or Set the HTTP response code
 * @param int $response_code [optional] The optional response_code will set the response code.
 * @return int The current response code. By default the return value is int(200).
 */
function http_response_code($response_code)
{
}
