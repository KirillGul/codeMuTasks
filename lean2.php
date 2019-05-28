<?php
echo 'Задача №1 -<br>Решение: ';
$a = 3;
echo $a;
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
$a = 10;
$b = 2;
echo 'Сумма = '.($a+$b);
echo '<br>Разность = '.($a-$b);
echo '<br>Произведение = '.$a*$b;
echo '<br>Частное = '.$a/$b;
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
$a = 10;
$b = 2;
$c = 5;
echo $a + $b + $c;
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result;
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
$text = 'Привет, Мир!';
echo $text;
echo '<br><br>';

echo 'Задача №7 -<br>Решение:<br>';
$text1 = 'Привет, ';
$text2 = 'Мир!';
echo $text1.$text2;
echo '<br><br>';

echo 'Задача №8 -<br>Решение:<br>';
$name = 'Кирилл';
echo 'Привет, '.$name;
echo '<br><br>';

echo 'Задача №9 -<br>Решение:<br>';
$age = 34;
echo 'Мне '.$age.' года!';
echo '<br><br>';

echo 'Задача №10 -<br>Решение:<br>';
$text = 'abcde';
echo $text[0];
echo $text[2];
echo $text[4];
echo '<br><br>';

echo 'Задача №11 -<br>Решение:<br>';
$text = 'abcde';
$text[0] = '!';
var_dump($text);
echo '<br><br>';

echo 'Задача №12 -<br>Решение:<br>';
$num = '12345';
var_dump($num[0]+$num[1]+$num[2]+$num[3]+$num[4]);
echo '<br><br>';

echo 'Задача №13 -<br>Решение:<br>';
var_dump(60*60);
var_dump(60*60*24);
var_dump(60*60*24*30); 
echo '<br><br>';

echo 'Задача №14 -<br>Решение:<br>';
$hour = 11;
$min = 59;
$sec = 30;
echo $hour.':'.$min.':'.$sec;
echo '<br><br>';

echo 'Задача №15 -<br>Решение:<br>';
$a = 5;
echo $a*$a;
echo '<br><br>';

echo 'Задача №16 -<br>Решение:<br>';
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var;
echo '<br><br>';

echo 'Задача №17 -<br>Решение:<br>';
$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo $text;
echo '<br><br>';

echo 'Задача №18 -<br>Решение:<br>';
$var = 10;
$var += 1;
$var += 1;
$var -= 1;
echo $var;
echo '<br><br>';

echo 'Задача №19 -<br>Решение:<br>';
$var = 10;
$var += 7;
$var += 1;
$var -= 1;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;
echo '<br><br>';
