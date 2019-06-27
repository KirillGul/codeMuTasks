<?php
echo 'Задача №1 -<br>Решение:<br>';
echo time();
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
echo mktime(0, 0, 0, 3, 1, 2025);
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
echo mktime(0, 0, 0, 12, 31);
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
echo time() - mktime(13, 12, 59, 3, 15, 2000);
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
echo floor((time() - mktime(7, 23, 48)) / 60 / 60);
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
echo date('Y-m-d H-i-s');
echo '<br><br>';

echo 'Задача №7 -<br>Решение:<br>';
echo date('Y-m-d').'<br>';
echo date('d.m.Y').'<br>';
echo date('d.m.y').'<br>';
echo date('H:i:s').'<br>';
echo '<br><br>';

echo 'Задача №8 -<br>Решение:<br>';
echo date('d.m.Y', mktime(0, 0, 0, 2, 12, 2025));
echo '<br><br>';