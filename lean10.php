<?php
echo 'Задача №1 -<br>Решение:<br>';
//var_dump($_REQUEST);

if (!empty($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo $name;
}
?>

<form action="" method="POST">
    <input type=text name="name">
    <input type=submit>
</form>

<?php
echo '<br><br>';
?>

<?php
echo 'Задача №2 -<br>Решение:<br>';

if (!empty($_REQUEST['name']))
    echo 'Привет, '.strip_tags($_REQUEST['name']).', ';
if (!empty($_REQUEST['age']))
    echo strip_tags($_REQUEST['age']).' лет.<br>';
if (!empty($_REQUEST['text']))
    echo 'Твое сообщение: '.strip_tags($_REQUEST['text']);

?>

<form action="" method="POST">
    <input type=text name="name">
    <input type=text name="age">
    <textarea name="text"></textarea>
    <input type=submit>
</form>

<?php
echo '<br><br>';
?>

<?php
echo 'Задача №3 -<br>Решение:<br>';

if (!empty($_REQUEST['age']))
    echo strip_tags($_REQUEST['age']).' лет.<br>';

if (empty($_REQUEST['age'])) {
?>

<form action="" method="POST">
    <input type=text name="age">
    <input type=submit>
</form>

<?php
}

echo '<br><br>';
?>

<?php
echo 'Задача №4 -<br>Решение:<br>';
$login = 'aaa';
$pass = '111';

if (!empty($_REQUEST['login']) and !empty($_REQUEST['pass'])) {
    if ($login == trim($_REQUEST['login']) and $pass = trim($_REQUEST['pass'])) {
        echo 'Доступ разрешен!';
    } else {
        echo 'Доступ запрещен!';
    }
}

?>

<form action="" method="POST">
    Введите логин: <input type=text name="login"><br>
    Введите пароль: <input type=password name="pass"><br>
    <input type=submit>
</form>

<?php
echo '<br><br>';
?>

<?php
echo 'Задача №5 -<br>Решение:<br>';

if (!empty($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo $name;
}
?>

<form action="" method="POST">
    <input type=text name="name" placeholder="Введите имя" value="<?php if (!empty($_REQUEST['name'])) echo $_REQUEST['name'];?>">
    <input type=submit>
</form>

<?php
echo '<br><br>';
?>

<?php
echo 'Задача №6 -<br>Решение:<br>';

if (!empty($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo $name;
}

if (!empty($_REQUEST['text'])) {
    $text = $_REQUEST['text'];
    echo $text;
}
?>

<form action="" method="POST">
    <input type=text name="name" placeholder="Введите имя" value="<?php if (!empty($_REQUEST['name'])) echo $_REQUEST['name'];?>">
    <textarea name="text" placeholder="Введите техт"><?php if (!empty($_REQUEST['text'])) echo $_REQUEST['text'];?></textarea>
    <input type=submit>
</form>

<?php
echo '<br><br>';
?>
