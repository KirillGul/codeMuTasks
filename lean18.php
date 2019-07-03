<?php
echo 'Задача №1 -<br>Решение:<br>';
function getTranslit($str)
{
    $result = '';
    for($i = strlen($str) - 1; $i >= 0; $i--) {
        $result .= $str[$i];
    }
    return $result;
}
echo getTranslit('Privet');
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
function func1($int, $str1, $str2, $str3)
{
    switch ($int) {
        case '1':
            return $int.' '.$str1;
        case ($int >= 2 and $int <=4):
            return $int.' '.$str2;
        case ($int >= 5):
        return $int.' '.$str3;
    }
}
echo func1(5, 'яблоко', 'яблока', 'яблок');
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
function lykiBillets($int)
{
    $int = str_split($int);
    return $int[0]+$int[1]+$int[2] == $int[3]+$int[4]+$int[5];
}

if (lykiBillets(653653)) echo 'Счастливый билет';
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
function getDivisors1($int)
{
    $result = [];
    $i = $int-1;
    while ($i > 0) {
        if ($int % $i == 0) $result[] = $i;
        $i--;
    }
    return $result;
}

function getSum($int)
{
    return array_sum($int);
}

$result = [];
for ($i = 1; $i <= 12; $i++) {
    $int1 = getSum(getDivisors1($i));
    for ($j = $i+1; $j <= 12; $j++) {
        if ($int1 == getSum(getDivisors1($j))) {            
            $result[] = $i.' - '.$j;
        }
    }
}
echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<br><br>';