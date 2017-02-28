<?php

$employee1 = [
    'age' => 61,
    'name' => 'Mike',
    'surname' => 'Johnson',
    'weight' => 67.6,
    'can_swim' => 0
];
$employee2 = [
    'age' => 31,
    'name' => 'Ricky',
    'surname' => 'Adams',
    'weight' => 80.4,
    'can_swim' => 1
];
$employee3 = [
    'age' => 41,
    'name' => 'Martin',
    'surname' => 'Sanki',
    'weight' => 112.3,
    'can_swim' => 1
];
$employee4 = [
    'age' => 35,
    'name' => 'Sanchos',
    'surname' => 'Huan',
    'weight' => 67,
    'can_swim' => 1
];
$employee5 = [
    'age' => 31,
    'name' => 'David',
    'surname' => 'Hopkins',
    'weight' => 82.7,
    'can_swim' => 0
];
$employee6 = [
    'age' => 33,
    'name' => 'Maria',
    'surname' => 'Lopez',
    'weight' => 53,
    'can_swim' => 1
];
$employee7 = [
    'age' => 44,
    'name' => 'Victoria',
    'surname' => 'Vanito',
    'weight' => 55.3,
    'can_swim' => 1
];
$employee8 = [
    'age' => 45,
    'name' => 'Lesley',
    'surname' => 'Ovens',
    'weight' => 92.5,
    'can_swim' => 1
];
$employee9 = [
    'age' => 55,
    'name' => 'Hengry',
    'surname' => 'Timmos',
    'weight' => 88.9,
    'can_swim' => 1
];
$employee10 = [
    'age' => 41,
    'name' => 'Martin',
    'surname' => 'Sanki',
    'weight' => 99.5,
    'can_swim' => 0
];
$employees = [$employee1, $employee2,$employee3,$employee4,$employee5,$employee6,$employee7,$employee8,$employee9,$employee10];
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

<table border="solid 1px black" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Age</th>
        <th>Weight</th>
        <th>Can swim?</th>
    </tr>
    <?php for ($i=0;$i<count ($employees);$i++) :

        if ($i%2){$bg_clr="#808080";}
        else {$bg_clr="#dcdcdc";}
        ?>

        <tr bgcolor="<?=$bg_clr?>">
            <td><?=$employees [$i]['name'] ?></td>
            <td><?=$employees [$i]['surname'] ?></td>
            <td><?=$employees [$i]['age'] ?></td>
            <td><?=$employees [$i]['weight'] ?></td>
            <!--            <td>--><?//=$employees [$i]['can_swim']? 'Yes':'No' ?><!--</td>-->
            <td><?php if ($employees [$i]['can_swim']) {echo 'yes';}
                else {echo 'no';}?></td>
        </tr>
    <?php endfor; ?>



</table>
</body>
</html>