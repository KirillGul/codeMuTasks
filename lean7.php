<?php
echo 'Задача №1 -<br>Решение:<br>';
$str = 'php';
echo strtoupper($str);
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
$str = 'PHP';
echo strtolower($str);
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
$str = 'london';
echo ucfirst($str);
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
$str = 'London';
echo lcfirst($str);
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
$str = 'london is the capital of great britain';
echo ucwords($str);
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
$str = 'LONDON';
echo ucfirst(strtolower($str));
echo '<br><br>';

echo 'Задача №7 -<br>Решение:<br>';
$str = 'html css php';
echo strlen($str);
echo '<br><br>';

echo 'Задача №8 -<br>Решение:<br>';
$password = '12345';
if (strlen($password) > 5 and strlen($password) < 10) 
    echo 'Пароль подходит'; 
else 
    echo 'Нужно придумать другой пароль';
echo '<br><br>';

echo 'Задача №9 -<br>Решение:<br>';
$str = 'html css php';
echo substr($str, 0, 4).'<br>';
echo substr($str, 5, 3).'<br>';
echo substr($str, 9).'<br>';
echo '<br><br>';

echo 'Задача №10 -<br>Решение:<br>';
$str = 'Hello, world.';
echo substr($str, -3).'<br>';
echo '<br><br>';

echo 'Задача №11 -<br>Решение:<br>';
$str = 'http://10.91.191.5/index.php/telefonnyj-spravochnik';
if (substr($str, 0, 7) == 'http://') echo 'Да'; else echo 'Нет';
echo '<br><br>';

echo 'Задача №12 -<br>Решение:<br>';
$str = 'http://10.91.191.5/index.php/telefonnyj-spravochnik';
if (substr($str, 0, 7) == 'http://' or substr($str, 0, 8) == 'https://')
    echo 'Да';
else
    echo 'Нет';
echo '<br><br>';

echo 'Задача №13 -<br>Решение:<br>';
$str = 'kartinka.png';
if (substr($str, -4) == '.png') echo 'Да'; else echo 'Нет';
echo '<br><br>';

echo 'Задача №14 -<br>Решение:<br>';
if (substr($str, -4) == '.png' or substr($str, -4) == '.jpg')
    echo 'Да';
else 
    echo 'Нет';
echo '<br><br>';

echo 'Задача №15 -<br>Решение:<br>';
$str = 'fsdfsd';
if (strlen($str) > 5) {
    echo substr($str, 0, 5).'...';
} elseif (strlen($str) <= 5) {
    echo $str;
}
echo '<br><br>';

echo 'Задача №16 -<br>Решение:<br>';
$str = '31.12.2013';
echo str_replace('.', '-', $str);
echo '<br><br>';

echo 'Задача №17 -<br>Решение:<br>';
$str = 'aabbc';
echo str_replace(['a', 'b', 'c'], [1, 2, 3], $str);
echo '<br><br>';

echo 'Задача №18 -<br>Решение:<br>';
$str = '1a2b3c4b5d6e7f8g9h0';
echo str_replace([1,2,3,4,5,6,7,8,9,0], '', $str);
echo '<br><br>';

echo 'Задача №19 -<br>Решение:<br>';
$str = 'aabbc';
echo strtr ($str, ['a'=>'1', 'b'=>'2', 'c'=>'3']);
echo '<br><br>';

echo 'Задача №20 -<br>Решение:<br>';
echo '<br><br>';
