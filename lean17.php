<?php
echo 'Задача №1 -<br>Решение:<br>';
function isNumberInRange($int)
{
    return $int > 0 and $int < 10;
}
echo isNumberInRange(-5);
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
$arr = [-1, -22, 3, 9, 44];
$result = [];
foreach ($arr as $value) {
    if (isNumberInRange($value)) $result[] = $value;
}
echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
function getDigitsSum($int)
{
    return array_sum(str_split($int));
}
echo getDigitsSum(55);
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
$result = [];
for ($i = 1; $i <= 2019; $i++) {
    if (getDigitsSum($i) == 13) $result[] = $i;
}
echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
function isEven($int)
{
    return $int % 2 == 0;
}
echo isEven(3);
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
$arr = [-1, -22, 3, 9, 44];
$result = [];
foreach ($arr as $value) {
    if (isEven($value)) $result[] = $value;
}
echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<br><br>';

echo 'Задача №7 -<br>Решение:<br>';
function getDivisors($int)
{
    $result = [];
    $i = $int;
    while ($i > 0) {
        if ($int % $i == 0) $result[] = $i;
        $i--;
    }
    return $result;
}
echo '<pre>';
var_dump(getDivisors(6));
echo '</pre>';
echo '<br><br>';

echo 'Задача №8 -<br>Решение:<br>';
function getCommonDivisors ($int1, $int2)
{
    $result = [];
    $result[] = array_intersect(getDivisors($int1), getDivisors($int2));
    return $result;
}
echo '<pre>';
var_dump(getCommonDivisors(6, 9));
echo '</pre>';
echo '<br><br>';