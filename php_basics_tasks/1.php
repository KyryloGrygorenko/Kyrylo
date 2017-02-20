<?php
$a = 'Hello';  // defined
$b = 5; // defined
$c = null;  // null

var_dump(isset($a)); // bool(true)
var_dump(isset($b)); // bool(true)
var_dump(isset($c)); // bool(false)

var_dump(isset($sdfsdf)); // bool(false)
?>