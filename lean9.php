<?php
echo 'Задача №1 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr)/count($arr);
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
echo array_sum(range(1,100));
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
$arr = range(1, 100);
echo implode("<br>", $arr);
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
$arr = array_fill(0, 10, 'x');
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
$arr = (range(1, 10));
shuffle($arr);
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
$i = 3;
$arr = range(1, $i);
$result = array_product($arr);
echo $result;
echo '<br><br>';

echo 'Задача №7 -<br>Решение:<br>';
$i = 2;
$arr = range(1, $i);
$result = array_sum($arr);
echo $result;
echo '<br><br>';

echo 'Задача №8 -<br>Решение:<br>';
$str = 'abc';
$str = strrev($str);
$str = ucfirst($str);
$str = strrev($str);
echo $str;
echo '<br><br>';

echo 'Задача №9 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
$arr = array_map('sqrt', $arr);
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №10 -<br>Решение:<br>';
$arr_keys = range('a', 'z');
$arr_values = range(1, 26);
$arr = array_combine($arr_keys, $arr_values);
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №11 -<br>Решение:<br>';
$str = '1234567890';
$arr = array_chunk(str_split($str), 2);
$arr = array_map('array_sum', $arr);
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';