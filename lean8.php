<?php
echo 'Задача №1 -<br>Решение:<br>';
$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
echo count($arr);
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
echo $arr[count($arr)-1];
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo in_array(3, $arr);
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr);
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
echo array_product($arr);
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr)/count($arr);
echo '<br><br>';

echo 'Задача №7 -<br>Решение:<br>';
$arr = range(1, 100);
var_dump($arr);
echo '<br><br>';

echo 'Задача №8 -<br>Решение:<br>';
$arr = range('a', 'z');
var_dump($arr);
echo '<br><br>';

echo 'Задача №9 -<br>Решение:<br>';
$arr = range(1, 9);
$str = implode('-', $arr);
echo $str;
echo '<br><br>';

echo 'Задача №10 -<br>Решение:<br>';
echo array_sum(range(1, 100));
echo '<br><br>';

echo 'Задача №11 -<br>Решение:<br>';
echo array_product(range(1, 10));
echo '<br><br>';

echo 'Задача №12 -<br>Решение:<br>';
$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
echo '<br><br>';

echo 'Задача №13 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
$result = array_slice($arr, 1, 3);
var_dump($result);
echo '<br><br>';

echo 'Задача №14 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
$result = array_splice($arr, 1, 2);
var_dump($arr);
echo '<br><br>';

echo 'Задача №15 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
$result = array_splice($arr, 1, 3);
var_dump($result);
echo '<br><br>';

echo 'Задача №16 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
$result = array_splice($arr, 0, 3);
$result[] = 'a';
$result[] = 'b'; 
$result[] = 'c';
$result = array_merge($result, $arr);
var_dump($result);
echo '<br><br>';

echo 'Задача №17 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
$result = array_splice($arr, 1);
$arr[] = 'a';
$arr[] = 'b';
$arr = array_merge($arr, $result);
$result = array_splice($arr, 6);
$arr[] = 'c';
$arr = array_merge($arr, $result);
$arr[] = 'e';
var_dump($arr);
echo '<br><br>';

echo 'Задача №18 -<br>Решение:<br>';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_keys($arr);
$values = array_values($arr);
var_dump($keys);
var_dump($values);
echo '<br><br>';

echo 'Задача №19 -<br>Решение:<br>';
$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];
var_dump(array_combine($arr1, $arr2));
echo '<br><br>';

echo 'Задача №20 -<br>Решение:<br>';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$arr = array_flip($arr);
var_dump($arr);
echo '<br><br>';

echo 'Задача №21 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
$arr = array_reverse($arr);
var_dump($arr);
echo '<br><br>';