<?php
echo 'Задача №1 -<br>Решение:<br>';
function func1($a, $b) 
{
    return $a == $b;
}
echo func1(3, 4);
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
function func2($a, $b) 
{
    return ($a + $b) > 10;
}

echo func2(5, 11);
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
function func3($a) 
{
    return $a < 0;
}

echo func3(-5);
echo '<br><br>';