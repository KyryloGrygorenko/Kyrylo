<?php
echo "<table> <tr>";
for ($i=1; $i<=10;$i++) {
    for ($b=1;$b<=10;$b++)
        echo "<td>".($i*$b)."</td>";
    if ($i != 10) echo "</tr> <tr>";
    ;


}
echo "<tr></table>";

