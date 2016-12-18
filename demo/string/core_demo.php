<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yao
 * Date: 16/12/18
 * Time: 20:24
 */
$zend_version = zend_version();
var_dump(strtoupper($zend_version));
var_dump(strtolower($zend_version));
echo '注意,不能找到2:' . strpos($zend_version, 2, 0);
echo '\n';
echo "\n";
echo '能找到:' . strpos('A', 65, 0);
echo "\n";
echo strrev($zend_version);
echo "\n";
var_dump(nl2br("\n" . $zend_version . "\r"));
echo nl2br("Welcome\r\nThis is my HTML document", false);
