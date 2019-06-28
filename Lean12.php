<?php
echo 'Задача №1 -<br>Решение:<br>';
function squareOfNumber($a) {
    return $a*$a;
}
echo squareOfNumber(2);
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
function sumOfNumber($a, $b) {
    return $a+$b;
}
echo sumOfNumber(2, 2);
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
function func1($a, $b, $c) {
    return ($a - $b) / $c;
}
echo func1(6, 3, 1);
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
function func2($a) {
    $week = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
    return $week[$a];
}
echo func2(6);
echo '<br><br>';