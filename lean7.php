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
$str = 'aabbcddddd';
echo strtr ($str, ['a'=>'1', 'b'=>'2', 'c'=>'3']);
echo '<br><br>';

echo 'Задача №20 -<br>Решение:<br>';
$str = 'aabbc';
echo substr_replace($str, '!!!', 3, 5);
echo '<br><br>';

echo 'Задача №21 -<br>Решение:<br>';
$str = 'abc abc abc';
echo strpos($str, 'b');
echo '<br><br>';

echo 'Задача №22 -<br>Решение:<br>';
$str = 'abc abc abc';
echo strrpos($str, 'b');
echo '<br><br>';

echo 'Задача №23 -<br>Решение:<br>';
$str = 'abc abc abc';
echo strpos($str, 'b', 3);
echo '<br><br>';

echo 'Задача №24 -<br>Решение:<br>';
$str = 'aaa aaa aaa aaa aaa';
echo strpos($str, ' ', 4);
echo '<br><br>';

echo 'Задача №25 -<br>Решение:<br>';
$str = 'aaa aaa aaa aaa a..aa';
$str_t = strpos($str, '..');
if (strpos($str, '..', $str_t) == true and $str_t == true) echo 'Есть'; else echo 'Нет';
echo '<br><br>';

echo 'Задача №26 -<br>Решение:<br>';
$str = 'http://10.91.191.5/index.php/telefonnyj-spravochnik';
if (strpos($str, 'http://') === 0) echo 'Есть'; else echo 'Нет';
echo '<br><br>';

echo 'Задача №27 -<br>Решение:<br>';
$str = 'html css php';
$str = explode(' ', $str);
echo $str[0].'_'.$str[1].'_'.$str[2];
echo '<br><br>';

echo 'Задача №28 -<br>Решение:<br>';
$str = ['html', 'css', 'php'];
$str = implode(', ', $str);
echo $str;
echo '<br><br>';

echo 'Задача №29 -<br>Решение:<br>';
$date = '2013-12-31';
$date = explode('-', $date);
$date = $date[2].'.'.$date[1].'.'.$date[0];
echo $date;
echo '<br><br>';

echo 'Задача №30 -<br>Решение:<br>';
$str = '1234567890';
$str = str_split($str, 2);
var_dump($str);
echo '<br><br>';

echo 'Задача №31 -<br>Решение:<br>';
$str = '1234567890';
$str = str_split($str, 1);
var_dump($str);
echo '<br><br>';

echo 'Задача №32 -<br>Решение:<br>';
$str = '1234567890';
$str = str_split($str, 2);
$str = implode('-', $str);
echo $str;
echo '<br><br>';

echo 'Задача №33 -<br>Решение:<br>';
$str = 'fsfsdf   ';
echo trim($str);
echo '<br><br>';

echo 'Задача №34 -<br>Решение:<br>';
$str = '/php/';
echo trim($str, '/');
echo '<br><br>';

echo 'Задача №35 -<br>Решение:<br>';
$str = 'слова слова слова';
$str = rtrim($str, '.');
echo $str.'.';
echo '<br><br>';

echo 'Задача №36 -<br>Решение:<br>';
$str = '12345';
echo strrev($str);
echo '<br><br>';

echo 'Задача №37 -<br>Решение:<br>';
$str = 'kayak';
if ($str === strrev($str)) echo 'Да'; else echo 'Нет';
echo '<br><br>';

echo 'Задача №38 -<br>Решение:<br>';
$str = 'kayak';
echo str_shuffle($str);
echo '<br><br>';

echo 'Задача №39 -<br>Решение:<br>';
$str = 'abcdefghijklmopqrstywxvz';
echo substr(str_shuffle($str), 0, 6);
echo '<br><br>';

echo 'Задача №40 -<br>Решение:<br>';
$str = '12345678';
echo number_format($str, 0, '', ' ');
echo '<br><br>';

echo 'Задача №41 -<br>Решение:<br>';
$str = 'x';
for ($i = 1; $i <=9; $i++) echo str_repeat($str, $i).'<br>';
echo '<br><br>';

echo 'Задача №42 -<br>Решение:<br>';
for ($i = 1; $i <=9; $i++) echo str_repeat($i, $i).'<br>';
echo '<br><br>';

echo 'Задача №43 -<br>Решение:<br>';
$str = 'html, <b>php</b>, js';
echo strip_tags($str);
echo '<br><br>';

echo 'Задача №44 -<br>Решение:<br>';
$str = '<p>html</p> <b>php</b>, <i>js</i>';
echo strip_tags($str, '<b>, <i>');
echo '<br><br>';

echo 'Задача №45 -<br>Решение:<br>';
$str = 'html, <b>php</b>, js';
echo htmlspecialchars($str);
echo '<br><br>';

echo 'Задача №46 -<br>Решение:<br>';
echo ord('a').'<br>';
echo ord('b').'<br>';
echo ord('c').'<br>';
echo ord(' ').'<br>';
echo '<br><br>';

echo 'Задача №48 -<br>Решение:<br>';
echo chr(33);
echo '<br><br>';

echo 'Задача №49 -<br>Решение:<br>';
$str = 'abcdefghijklmopqrstywxvz';
$str = strtoupper($str);
$str = str_shuffle($str);
echo ord($str[0]);
echo '<br><br>';

echo 'Задача №50 -<br>Решение:<br>';
$alphabetmin = 'abcdefghijklmopqrstywxvz';
for ($str = '', $len = 2, $i = ''; $len > strlen($str);) {
    $i = str_shuffle($alphabetmin);
    $str .= $i[0];
}
var_dump($str);
echo '<br><br>';

echo 'Задача №51 -<br>Решение:<br>';
$str = 'L';
if (ord($str) >= 65 and ord($str) <= 90) 
    echo 'Большая буква'; 
elseif (ord($str) >= 97 and ord($str) <= 122) 
    echo 'Маленькая буква';
echo '<br><br>';

echo 'Задача №52 -<br>Решение:<br>';
$str = 'ab-cd-ef';
echo strchr($str, '-');
echo '<br><br>';

echo 'Задача №53 -<br>Решение:<br>';
$str = 'ab-cd-ef';
echo strrchr($str, '-');
echo '<br><br>';

echo 'Задача №54 -<br>Решение:<br>';
$str = 'ab--cd--ef';
echo strstr($str, '--');
echo '<br><br>';

echo 'Задача №55 -<br>Решение:<br>';
$str = 'var_test_text';
$str = str_replace('_', ' ', $str);
$str = lcfirst(ucwords($str));
$str = str_replace(' ', '', $str);
echo $str;
echo '<br><br>';

echo 'Задача №56 -<br>Решение:<br>';
$arr = [1, 2, 3, 33, 44, 343];
foreach ($arr as $value) {
    foreach (str_split($value) as $valuesplit) {
        if (3 == $valuesplit) {
            echo $value.' ';
            break;
        }
    }
    
}
echo '<br><br>';