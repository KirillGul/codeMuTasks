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

echo 'Задача №9 -<br>Решение:<br>';
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
echo $week[date('w')].'<br>';
echo $week[date('w', mktime(0, 0, 0, 6, 6, 2006))].'<br>';
echo $week[date('w', mktime(0, 0, 0, 3, 17, 1985))];
echo '<br><br>';

echo 'Задача №10 -<br>Решение:<br>';
$month = [1=>'янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'];
echo $month[date('n')].'<br>';
echo '<br><br>';

echo 'Задача №11 -<br>Решение:<br>';
$m = 6;
echo date('t', mktime(0,0,0,$m));
echo '<br><br>';

echo 'Задача №12 -<br>Решение:<br>';
?>
<form action="" method="POST">
    <input type="text" name="text" placeholder="Введите год">
    <input type="submit">
</form>
<?php
if (!empty($_REQUEST['text']) and strlen($_REQUEST['text']) == 4) {
    $year = $_REQUEST['text'];
    if (date('L', mktime(0,0,0,0,0,$year)) == 1) {
        echo 'Высокосный';
    } else {
        echo 'Не высокосный';
    }
}
echo '<br><br>';

echo 'Задача №13 -<br>Решение:<br>';
?>
<form action="" method="POST">
    <input type="text" name="date" placeholder="Введит дату в формате 31.12.2025">
    <input type="submit">
</form>
<?php
if (!empty($_REQUEST['date'])) {
    $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
    $date = $_REQUEST['date'];
    $date = explode('.', $date);
    $datetimeshamp = mktime(0,0,0,$date[1], $date[0], $date[2]);
    echo $week[date('w', $datetimeshamp)];
}
echo '<br><br>';

echo 'Задача №14 -<br>Решение:<br>';
?>
<form action="" method="POST">
    <input type="text" name="date" placeholder="Введит дату в формате 31.12.2025">
    <input type="submit">
</form>
<?php
if (!empty($_REQUEST['date'])) {
    $month = [1=>'янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'];
    $date = $_REQUEST['date'];
    $date = explode('.', $date);
    $datetimeshamp = mktime(0,0,0,$date[1], $date[0], $date[2]);
    echo $month[date('n', $datetimeshamp)];
}
echo '<br><br>';

echo 'Задача №15 -<br>Решение:<br>';
?>
<form action="" method="POST">
    Введите дату 1:<input type="text" name="date1" placeholder="Введит дату в формате 31.12.2025">
    <br>
    Введите дату 2:<input type="text" name="date2" placeholder="Введит дату в формате 31.12.2025">
    <input type="submit">
</form>
<?php
if (!empty($_REQUEST['date1']) and !empty($_REQUEST['date2'])) {
    $date1 = $_REQUEST['date1'];
    $date2 = $_REQUEST['date2'];
    if ($date1 > $date2) echo $date1;
    if ($date1 < $date2) echo $date2;
    else 'Даты равный'.$date1.' = '.$date2;
}
echo '<br><br>';

echo 'Задача №16 -<br>Решение:<br>';
$date = '2025-12-31';
echo date('d-m-Y', strtotime($date));
echo '<br><br>';

echo 'Задача №17 -<br>Решение:<br>';
?>
<form action="" method="POST">
    Введите дату (в формате):<input type="text" name="date3" placeholder="2025-12-31T12:13:59">
    <br>
    <input type="submit">
</form>
<?php
if (!empty($_REQUEST['date3'])) {
    $date = $_REQUEST['date3'];
    echo date('H:i:s d.m.Y', strtotime($date));
}
echo '<br><br>';

echo 'Задача №18 -<br>Решение:<br>';
$date = '2025-12-31';
$date = date_create($date);
date_modify($date, '2 days');
date_modify($date, '1 month 3 days');
date_modify($date, '1 year');
echo date_format($date, 'd-m-Y');
echo '<br><br>';

echo 'Задача №19 -<br>Решение:<br>';
$date = '30.12.2019';
$date = explode('.', $date);
$tdateShtamp = mktime(0,0,0,$date[1],$date[0],$date[2]);
$tYearShtamp = mktime(0,0,0,1,1,$date[2]+1);
echo floor(($tYearShtamp - $tdateShtamp) / 60 / 60 / 24);
echo '<br><br>';

echo 'Задача №20 -<br>Решение:<br>';
?>
<form action="" method="POST">
    <input type="text" name="year" placeholder="Введите год">
    <br>
    <input type="submit">
</form>
<?php
if (!empty($_REQUEST['year']) and strlen($_REQUEST['year']) == 4) {
    $year = $_REQUEST['year'];
    $p13 = [];
    for ($i = 1; $i <= 12; $i++) {
        for ($j = 1; $j <= 31; $j++) {
            if (date('w', mktime(0,0,0,$i,$j,$year)) == 5 and $j == 13) {
                $p13[] = date('Y-m-d', mktime(0,0,0,$i,$j,$year));
            }
        }
    }
    var_dump($p13);
}
echo '<br><br>';

echo 'Задача №21 -<br>Решение:<br>';
$tdateShtamp = time() - (100*24*60*60);
echo date('w', $tdateShtamp);
echo '<br><br>';