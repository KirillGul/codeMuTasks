<?php
echo 'Задача №1 -<br>Решение:<br>';
$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $str = '';
    for ($j = $i; $j > 0; $j--) {
        $str .= 'x';
    }
    $arr[$i-1] = $str;
}
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $str = '';
    for ($k=$j=$i; $j > 0; $j--) {
        $str .= $k;
    }
    $arr[$i-1] = $str;
}
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
function arrayFill ($str, $count)
{
    $arr = [];
    while ($count > 0) {
        $arr[] = $str;
        $count--;
    }
    return $arr;
}

echo '<pre>';
var_dump(arrayFill('x', 5));
echo '</pre>';
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5, 6];
$sumElem = 0;
for ($i = 0; $i <= count($arr); $i++) {
    if ($sumElem <= 10) {
        $sumElem += $arr[$i];
    } else {
        echo $i;
        break;
    }
}
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
$arr = [[1, 2, 3], [4, 5], [6]];
$sumElem = 0;
foreach ($arr as $elem) {
    foreach ($elem as $value) {
        $sumElem += $value;
    }
}
echo $sumElem;
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
$arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
$sumElem = 0;
foreach ($arr as $elem) {
    foreach ($elem as $value) {
        foreach ($value as $jvalue) {
            $sumElem += $jvalue;
        }        
    }
}
echo $sumElem;
echo '<br><br>';

echo 'Задача №7 -<br>Решение:<br>';
$arr = [];
$k = 1;
for ($i = 0; $i <= 2; $i++) {
    for ($j = 0; $j <= 2; $j++) {
        $arr[$i][$j] = $k;
        $k++;
    }
}
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';