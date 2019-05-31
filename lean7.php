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
