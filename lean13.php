<?php
echo 'Задача №1 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 6];
$flag = false;
foreach ($arr as $key => $value) {
    if ($value == 5) $flag = true;
}

if ($flag) echo 'Есть';
else echo 'Нет';
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
$i = $int = 31;
$flag = false;

while (--$int > 1 and $int != 1 and $int != $i) {
    if ($i % $int == 0) {
        $flag = true;
        break;
    }
    //$int--;
}

if ($flag) echo 'Делиться';
else echo 'Не делиться';
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5, 5];
$flag = false;

foreach ($arr as $key => $value) {
    if (!empty($arr[$key+1])) {
        if ($value == $arr[$key+1]) {
            $flag = true;
            break;
        }
    }
}
if ($flag) echo 'Есть';
else echo 'Нет';
echo '<br><br>';
