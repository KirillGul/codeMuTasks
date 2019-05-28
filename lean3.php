<?php
echo 'Задача №1 -<br>Решение:<br>';
$arr = ['a', 'b', 'c'];
var_dump($arr);
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
echo $arr[0];
echo $arr[1];
echo $arr[2];
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
$arr = ['a', 'b', 'c', 'd'];
echo $arr[0].'+'.$arr[1].', '.$arr[2].'+'.$arr[3];
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
$arr = [2, 5, 3, 9];
$result = $arr[0]*$arr[1]+$arr[2]*$arr[3];
echo $result;
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;
var_dump($arr);
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['c'];
echo '<br><br>';

echo 'Задача №7 -<br>Решение:<br>';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['a'] + $arr['b'] + $arr['c'];
echo '<br><br>';

echo 'Задача №8 -<br>Решение:<br>';
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo 'Зарплата Пети= '.$arr['Петя'];
echo '<br>Зарплата Коли= '.$arr['Коля'];
echo '<br><br>';

echo 'Задача №9 -<br>Решение:<br>';
$a = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
echo $a[2];
echo '<br><br>';

echo 'Задача №10 -<br>Решение:<br>';
$day = 3;
echo $a[$day];
echo '<br><br>';

echo 'Задача №11 -<br>Решение:<br>';
$arr = [
	'cms'=>['joomla', 'wordpress', 'drupal'],
	'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
echo $arr['cms'][0];
echo '<br>'.$arr['cms'][2];
echo '<br>'.$arr['colors']['green'];
echo '<br>'.$arr['colors']['red'];
echo '<br><br>';

echo 'Задача №12 -<br>Решение:<br>';
$arr = [
    'ru' => [1 => 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en' => [1 => 'mon', 'tue', 'wed', 'thur', 'fri', 'sat', 'san'],
];
echo $arr['ru'][1];
echo '<br>'.$arr['en'][3];
echo '<br><br>';

echo 'Задача №13 -<br>Решение:<br>';
$lang = 'ru';
$day = 3;
echo $arr[$lang][$day];
echo '<br><br>';
