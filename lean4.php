<?php
echo 'Задача №1 -<br>Решение:<br>';
//$a = 1;
//$a = 0;
$a = -3;
if ($a == 0) echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
if ($a > 0) echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
if ($a < 0) echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
if ($a >= 0) echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
if ($a <= 0) echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
if ($a != 0) echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №7 -<br>Решение:<br>';
$a = 'test';
//$a = 'тест';
//$a = 3;
if ($a == 'test') echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №8 -<br>Решение:<br>';
//$a = '1';
//$a = 1;
$a = 3;
if ($a == '1') echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №9 -<br>Решение:<br>';
//$a = 1;
//$a = 3;
//$a = -3;
//$a = 0;
//$a = null;
//$a = true;
$a = '0';
if (empty($a)) echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №10 -<br>Решение:<br>';
if (!empty($a)) echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №11 -<br>Решение:<br>';
if (isset($a)) echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №12 -<br>Решение:<br>';
if (!isset($a)) echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №13 -<br>Решение:<br>';
$var = true;
//$var = false;
//if ($var == true) echo 'Верно'; else echo 'Неверно';
if ($var == true) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br><br>';

echo 'Задача №14 -<br>Решение:<br>';
//if ($var != true) echo 'Верно'; else echo 'Неверно';
if ($var != true) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
echo '<br><br>';

echo 'Задача №15 -<br>Решение:<br>';
$a = 1;
if ($a > 0 and $a < 5) echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №16 -<br>Решение:<br>';
$a = 1;
$b = 3;
if ($a == 0 or $a == 2) echo $a += 7; else echo $a /= 10;
echo '<br><br>';

echo 'Задача №17 -<br>Решение:<br>';
$a = 3;
$b = 5;
if ($a <= 1 and $b >= 3) echo $a + $b; else echo $a - $b;
echo '<br><br>';

echo 'Задача №18 -<br>Решение:<br>';
$a = 1;
$b = 6;
if (($a > 2 and $a < 11) or ($b >= 6 and $b < 14)) echo 'Верно'; else echo 'Неверно';
echo '<br><br>';

echo 'Задача №19 -<br>Решение:<br>';
$num = 3;
switch ($num) {
    case '1':
        $result = 'зима';
        break;
    case '2':
        $result = 'весна';
        break;
    case '3':
        $result = 'лето';
        break;
    case '4':
        $result = 'осень';
        break;    
}
var_dump($result);
echo '<br><br>';

echo 'Задача №20 -<br>Решение:<br>';
$day = 21;
if ($day >= 1 and $day <= 10) {
    echo '1-ая декада';
} elseif ($day >= 11 and $day <= 20) {
    echo '2-ая декада';
} elseif ($day >= 21 and $day <= 31) {
    echo '3-ая декада';
}
echo '<br><br>';

echo 'Задача №21 -<br>Решение:<br>';
$month = 6;
if ($month == 12 or ($month >= 1 and $month <= 2)) {
    echo 'зима';
} elseif ($month >= 3 and $month <= 5) {
    echo 'весна';
} elseif ($month >= 6 and $month <= 8) {
    echo 'лето';
} elseif ($month >= 9 and $month <= 11) {
    echo 'осень';
}
echo '<br><br>';

echo 'Задача №22 -<br>Решение:<br>';
$year = 1600;
if ($year % 4 == 0 and ($year % 100 != 0 or $year % 400 == 0)) {
    echo 'Высокосный';
} else {
    echo 'Не высокосный';
}
echo '<br><br>';

echo 'Задача №23 -<br>Решение:<br>';
$str = 'abcde';
if ($str[0] == 'a') echo 'Да'; else echo 'Нет';
echo '<br><br>';

echo 'Задача №24 -<br>Решение:<br>';
$str = '12345';
if ($str[0] == '1' or $str[0] == '2' or $str[0] == '3') echo 'Да'; else echo 'Нет';
echo '<br><br>';

echo 'Задача №25 -<br>Решение:<br>';
$str = '123';
echo $str[0] + $str[1] + $str[2];
echo '<br><br>';

echo 'Задача №26 -<br>Решение:<br>';
$str = '123124';
if ($str[0] + $str[1] + $str[2] == $str[3] + $str[4] + $str[5]) {
    echo 'Да';
} else {
    echo 'Нет';
}
echo '<br><br>';
