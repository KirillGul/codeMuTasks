<?php
echo 'Задача №1 -<br>Решение:<br>';
$a = 10;
$b = 3;
echo $a % $b;
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
if ($a % $b == 0) echo 'Делится'; else echo 'Делится с остатком';
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
$st = pow(2, 10);
echo $st;
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
echo sqrt(245);
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $value) {
    $sum += pow($value, 2);
}
echo sqrt($sum);
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
$t = sqrt(379);
echo round($t).'<br>';
echo round($t, 1).'<br>';
echo round($t, 2).'<br>';
echo '<br><br>';

echo 'Задача №7 -<br>Решение:<br>';
$arr = [];
$t = sqrt(587);
$arr['floor'][0] = floor($t);
$arr['ceil'][0] = ceil($t);
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №8 -<br>Решение:<br>';
echo min(4, -2, 5, 19, -130, 0, 10).'<br>';
echo max(4, -2, 5, 19, -130, 0, 10);
echo '<br><br>';

echo 'Задача №9 -<br>Решение:<br>';
echo mt_rand(1, 100);
echo '<br><br>';

echo 'Задача №10 -<br>Решение:<br>';
$arr = [];
for ($i = 0; $i <= 9; $i++) {
    $arr[] = mt_rand();
}
var_dump($arr);
echo '<br><br>';

echo 'Задача №11 -<br>Решение:<br>';
$a = 3;
$b = 9;
echo abs($a - $b);
echo '<br><br>';

echo 'Задача №12 -<br>Решение:<br>';
$arr = [1, 2, -1, -2, 3, -3];
foreach ($arr as $key => $value) {
    $arr[$key] = abs($value);
}
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №13 -<br>Решение:<br>';
$a = 30;
$arr = [];
for ($i = 1; $i <= $a; $i++) {
    if ($a % $i == 0) $arr[] = $i;
}
var_dump($arr);
echo '<br><br>';

echo 'Задача №14 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$i = $sum = 0;
foreach ($arr as $value) {
    if ($sum < 10) {
        $i++;
        $sum += $value;
    }
}
echo $i;
echo '<br><br>';
