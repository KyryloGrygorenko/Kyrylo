<?php
$result=0;
$a= array(26,17,136,12,79,15);
foreach ($a as $v) {
        $result+=$v*$v;
}
echo "<pre> $result";
