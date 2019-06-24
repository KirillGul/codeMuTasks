<?php
echo 'Задача №1 -<br>Решение:<br>';
$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $elem) {
    echo $elem.'<br>';
}
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
$result = 0;
foreach ($arr as $elem) {
    $result += $elem;
}
var_dump($result);
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
$result = 0;
foreach ($arr as $elem) {
    $result += $elem * $elem;
}
var_dump($result);
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $key => $value) {
    echo $key.' - '.$value.'<br>';
}
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
$arr = ['Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400'];
foreach ($arr as $key => $value) {
    echo $key.' - зарпалата '.$value.' долларов<br>';
}
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
$i = 1;
while ($i <= 100) {
    echo $i.'<br>';
    $i++;
}
echo '<br><br>';

echo 'Задача №7 -<br>Решение:<br>';
$i = 11;
while ($i <= 33) {
    echo $i.'<br>';
    $i++;
}
echo '<br><br>';

echo 'Задача №8 -<br>Решение:<br>';
for ($i = 0; $i <= 100; $i += 2) {
    echo $i.'<br>';
}
echo '<br><br>';

echo 'Задача №9 -<br>Решение:<br>';
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo $sum.'<br>';
echo '<br><br>';

echo 'Задача №10 -<br>Решение:<br>';
$arr = [2, 5, 9, 15, 0, 4];
foreach ($arr as $value) {
    if ($value > 3 and $value < 10) echo $value.'<br>';
}
echo '<br><br>';

echo 'Задача №11 -<br>Решение:<br>';
$arr = [2, 5, 9, 15, 0, 4, -3, -5, -10];
$sum = 0;
foreach ($arr as $value) {
    if ($value > 0) $sum += $value;
}
echo $sum.'<br>';
echo '<br><br>';

echo 'Задача №12 -<br>Решение:<br>';
$arr = [2, 5, 9, 15, 0, 4, -3, -5, -10];
foreach ($arr as $value) {
    if ($value == 4) {
        echo 'Есть!';
        break;
    }
}
echo '<br><br>';

echo 'Задача №13 -<br>Решение:<br>';
$arr = ['10', '20', '30', '50', '235', '3000'];
foreach ($arr as $value) {
    if ($value[0] == 1 or $value[0] == 2 or $value[0] == 5) {
        echo $value.'<br>';
    }
}
echo '<br><br>';

echo 'Задача №14 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$str = '-';
foreach ($arr as $value) {
    $str .= $value.'-';
}
echo $str;
echo '<br><br>';

echo 'Задача №15 -<br>Решение:<br>';
$arr = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
foreach ($arr as $value) {
    if ($value == 'сб' or $value == 'вс') {
        echo '<b>'.$value.'</b><br>';
    } else echo $value.'<br>';
}
echo '<br><br>';

echo 'Задача №16 -<br>Решение:<br>';
$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
foreach ($arr as $value) {
    if ($value == 'чт') {
        $day = $value;
        echo '<i>'.$day.'</i><br>';
    } else echo $value.'<br>';
}
echo '<br><br>';

echo 'Задача №17 -<br>Решение:<br>';
$arr = [];
for ($i = 1; $i <= 100; $i++) {
    $arr[] = $i;
}
var_dump($arr);
echo '<br><br>';

echo 'Задача №18 -<br>Решение:<br>';
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr as $key=>$value) {
    $en[] = $key;
    $ru[] = $value;
}
var_dump($en);
var_dump($ru);
echo '<br><br>';

echo 'Задача №19 -<br>Решение:<br>';
$num = 1000;
/*
$i = 0;
while ($num > 50) {
    $num /= 2;
    $i++;
}
*/
for ($i = 0; $num > 50; $i++) {
    $num /= 2;
}
echo $i;
echo '<br><br>';
