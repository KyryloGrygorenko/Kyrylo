<?php
$cols=10;
$rows=5;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>

         <?php
         for ($n=0; $n<$rows;$n++):
         echo '<tr>';
        for ($i=1; $i<=$cols;$i++) :
            $rand=rand(1,10000);
            $rand_col=rand(0,6);

            echo "<td bgcolor=$colors[$rand_col]>" .$rand ."</td>";
        endfor;
         echo '</tr>';
         endfor;
        ?>





</table>
</body>
</html>
