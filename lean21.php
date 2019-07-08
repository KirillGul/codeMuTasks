<?php
echo 'Задача №1 -<br>Решение:<br>';
for ($i = 1; $i <=100; $i++) {
    //echo $i.'<br>';
}
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
for ($i = 1; $i <=100; $i++) {
    if ($i % 2 == 0) {
        //echo $i.'<br>';
    }
}
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
$sum = 0;
for ($i = 1; $i <=100; $i++) {
    $sum += $i;
}
echo $sum;
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
$sum = 0;
for ($i = 1; $i <=15; $i++) {
    $sum += $i*$i;
}
echo $sum;
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
$sum = 0;
for ($i = 1; $i <=15; $i++) {
    $sum += sqrt($i);
}
echo round($sum, 2);
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
$sum = 0;
for ($i = 1; $i <=100; $i++) {
    if ($i % 7 == 0) {
        $sum += $i;
    }
}
echo $sum;
echo '<br><br>';

echo 'Задача №7 -<br>Решение:<br>';
$arr = [];
for ($i = 0; $i <=9; $i++) {
    $arr[$i] = 'x';
}
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №8 -<br>Решение:<br>';
$arr = [];
for ($i = 0, $j = 1; $i <=9; $i++, $j++) {
    $arr[$i] = $j;
}
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №9 -<br>Решение:<br>';
$arr = [];
for ($i = 1, $j = 10; $i <= 10; $i++, $j--) {
    $arr[$i] = $j;
}
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №10 -<br>Решение:<br>';
$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $arr[$i] = mt_rand(1, 10);
}
echo '<pre>';
var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №11 -<br>Решение:<br>';
$str = '';
for ($i = 1; $i <= 6; $i++) {
    $str .= mt_rand(1, 9);
}
echo $str;
echo '<br><br>';

echo 'Задача №12 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
$sum = 0;
foreach ($arr as $value) {
    $sum += $value;
}
echo $sum;
echo '<br><br>';

echo 'Задача №13 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
$sum = 0;
foreach ($arr as $value) {
    $sum += pow($value, 2);
}
echo $sum;
echo '<br><br>';

echo 'Задача №14 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
$sum = 0;
foreach ($arr as $value) {
    $sum += pow($value, 2);
}
echo floor(sqrt($sum));
echo '<br><br>';

echo 'Задача №15 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5, 9, 10];
$sum = 0;
foreach ($arr as $value) {
    if ($value > 0 and $value < 10) {
        $sum += $value;
    }
}
echo $sum;
echo '<br><br>';

echo 'Задача №16 -<br>Решение:<br>';
$arr = [1, 2, 3, 2, 1, 1, 1];
$int1 = 0;
$int2 = 0;
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i+2] < count($arr) and $arr[$i] == $arr[$i+1] and $arr[$i+1] == $arr[$i+2]) {
        echo "Есть";
        break;
    }
}
echo '<br><br>';

echo 'Задача №17 -<br>Решение:<br>';
$str = '';
for ($i = 1; $i <= 5; $i++) {
    for ($j = $i; $j > 0; $j--) {
        $str .=$i;
    }
}
echo $str;
echo '<br><br>';

echo 'Задача №18 -<br>Решение:<br>';
$arr = [
    0=>['name'=>'Коля', 'salary'=>300],
    1=>['name'=>'Вася', 'salary'=>400],
    2=>['name'=>'Петя', 'salary'=>500],
];

foreach ($arr as $value) {
    echo $value['name'].'-'.$value['salary'].'<br>';
}
echo '<br><br>';

echo 'Задача №19 -<br>Решение:<br>';
$arr = [];
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $arr[$i][$j] = mt_rand(1, 10);
    }
}
echo '<pre>';
//var_dump($arr);
echo '</pre>';
echo '<br><br>';

echo 'Задача №20 -<br>Решение:<br>';
function ucSymbolFirst ($str)
{
    $arruc = range('a', 'z');
    $arrlc = range('A', 'Z');
    
    if (ord($str[0]) >= 97 and ord($str[0]) <= 122) {
        foreach ($arruc as $key => $value) {
            if ($str[0] == $value) {
                $str[0] = $arrlc[$key];
                return $str; 
            }
        }
    } elseif (ord($str[0]) >= 65 and ord($str[0]) <= 90) {
        foreach ($arrlc as $key => $value) {
            if ($str[0] == $value) {
                $str[0] = $arruc[$key];
                return $str; 
            }
        }
    } else {
        return $str;
    }
}

echo ucSymbolFirst('Gdfg');
echo '<br><br>';