<?php
$num=0;
for ($n = 1000; $n > 50; $n=$n/2) {
        echo "$n <br>";
        $num++;
}
echo "{$num} - количество итераций";