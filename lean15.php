<?php
echo 'Задача №1 -<br>Решение:<br>';
$str = '';
for($i = 1; $i <= 9; $i++) {
    $str .= $i;
}
var_dump($str);
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
$str = '';
for($i = 9; $i >= 1; $i--) {
    $str .= $i;
}
var_dump($str);
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
$str = '-';
for($i = 1; $i <= 9; $i++) {
    $str .= $i.'-';
}
var_dump($str);
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
$str = '';
for($i = 1; $i <= 20; $i++) {
    $str .= 'x';
    echo $str.'<br>';
}
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
$str = '';
for($i = 1; $i <= 9; $i++) {
    for ($j = $i; $j > 0; $j--) {
        echo $i;
    }
    echo '<br>';
}
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
$str = '';
for($i = 1; $i <= 5; $i++) {
    for ($j = $i*2; $j > 0; $j--) {
        echo 'x';
    }
    echo '<br>';
}
echo '<br><br>';