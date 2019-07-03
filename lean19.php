<?php
echo 'Задача №1 -<br>Решение:<br>';
function cut($str, $int = 10)
{
    return substr($str, 0, $int);
}
echo cut('Privet', 5);
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
$arr = [1, 2, 3, 4, 5];
write($arr);
function write($ar)
{
    echo array_shift($ar).'<br>';
    if (!empty($ar)) {
        write($ar);
    }
}
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
$int = 46;
func1($int);
function func1($int)
{
    echo $int = array_sum(str_split($int)).'<br>';
    if ($int > 9) {
        $result = func1($int);
    }
    return $result;
}
echo '<br><br>';