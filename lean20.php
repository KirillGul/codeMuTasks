<?php
echo 'Задача №1 -<br>Решение:<br>';
?>

<form action="" method="POST">
    Введите имя: <input typy="text" name="name">
    <br>
    <input type="checkbox" name="hello">
    <br>
    <input type="submit">
</form>

<?php
if ($_REQUEST['name'] and $_REQUEST['hello'] == NULL) {
    echo 'Досвиданья '.$_REQUEST['name'];
} elseif ($_REQUEST['name']) {
    echo 'Привет '.$_REQUEST['name'];
}
echo '<br><br>';

echo 'Задача №2 -<br>Решение:<br>';
?>

<form action="" method="POST">
    Какой из языков вы знаете:
    <br>
    HTML: <input type="checkbox" name="html"><br>
    CSS: <input type="checkbox" name="css"><br>
    PHP: <input type="checkbox" name="php"><br>
    JavaScript: <input type="checkbox" name="javascript"><br>
    <br>
    <input type="submit">
</form>

<?php
if ($_REQUEST['html'] != NULL) {
    echo 'HTML'.'<br>';
}
if ($_REQUEST['css'] != NULL) {
    echo 'CSS'.'<br>';
}
if ($_REQUEST['php'] != NULL) {
    echo 'PHP'.'<br>';
}
if ($_REQUEST['javascript'] != NULL) {
    echo 'JavaScript'.'<br>';
}
echo '<br><br>';

echo 'Задача №3 -<br>Решение:<br>';
?>

<form action="" method="POST">
    Знаете ли вы PHP:
    <br>
    Да: <input type="radio" name="php1" checked value="1"><br>
    Нет: <input type="radio" name="php1"  value="0"><br>
    <br>
    <input type="submit">
</form>

<?php
if (!empty($_REQUEST['php1']) and $_REQUEST['php1'] == 1) {
    echo 'Знаю<br>';
} else {
    echo 'Не знаю<br>';
}
echo '<br><br>';

echo 'Задача №4 -<br>Решение:<br>';
?>

<form action="" method="POST">
    Укажите ваш возраст:
    <br>
    менее 20 лет: <input type="radio" name="year" value="1"><br>
    20-25: <input type="radio" name="year"  value="2"><br>
    26-30: <input type="radio" name="year"  value="3"><br>
    более 30: <input type="radio" name="year"  value="4"><br>
    <br>
    <input type="submit">
</form>

<?php
if (!empty($_REQUEST['year']) and $_REQUEST['year'] == 1) {
    echo 'Возраст менее 20<br>';
} elseif (!empty($_REQUEST['year']) and $_REQUEST['year'] == 2) {
    echo 'Возраст 20-25<br>';
} elseif (!empty($_REQUEST['year']) and $_REQUEST['year'] == 3) {
    echo 'Возраст 26-30<br>';
} elseif (!empty($_REQUEST['year']) and $_REQUEST['year'] == 4) {
    echo 'Возраст более 30<br>';
}
echo '<br><br>';

echo 'Задача №5 -<br>Решение:<br>';
?>

<form action="" method="POST">
    Укажите ваш возраст:
    <br>
    <select name="sel_year">
        <option>менее 20 лет</option>
        <option>20-25</option>
        <option>26-30</option>
        <option>более 30</option>
    </select>
    <br>
    <input type="submit">
</form>

<?php
if (!empty($_REQUEST['sel_year'])) {
    echo 'Вам '.$_REQUEST['sel_year'];
}
echo '<br><br>';

echo 'Задача №6 -<br>Решение:<br>';
?>

<form action="" method="POST">
    Укажите ваш возраст:
    <br>
    <select multiple name="sel_year[]">
        <option>HTML</option>
        <option>CSS</option>
        <option>PHP</option>
        <option>JavaScript</option>
    </select>
    <br>
    <input type="submit">
</form>

<?php
if (!empty($_REQUEST['sel_year']) and count($_REQUEST['sel_year']) > 0) {
    foreach ($_REQUEST['sel_year'] as $value) {
        echo $value.'<br>';
    }
}
echo '<br><br>';

echo 'Задача №7-8 -<br>Решение:<br>';
function input($type, $name, $value)
{
    if(isset($_REQUEST[$name])) {
        $value = $_REQUEST[$name];
    }
    return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'">';
}
//echo input('text', 'fsf', 'fdfs');
echo '<br><br>';

echo 'Задача №9 -<br>Решение:<br>';
function inputCheckbox($name)
{
    return '<input type="hidden" name="'.$name.'" value="0">
    <input type="checkbox" name="'.$name.'" value="1">';
}
echo '<br><br>';

echo 'Задача №10 -<br>Решение:<br>';
function inputCheckboxSave($name)
{
    if(isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
        $value = 'checked';
    } else {
        $value = '';
    }
    return '<input type="hidden" name="'.$name.'" value="0">
    <input type="checkbox" name="'.$name.'" value="1">';
}
echo '<br><br>';