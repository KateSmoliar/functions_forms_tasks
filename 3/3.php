<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 08.11.2016
 * Time: 12:26
 * Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 * Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение
 */
function word_length($a)
{
$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);
$max_len = $a;
$file = file_get_contents("task3.txt");
echo $file;
$arr = array();
$arr = explode(" ", $file);
foreach ($arr as $key=> $value)
{

    if ((iconv_strlen($value))> $max_len)
    {
        unset($arr[$key]);
    }
}

$rewrite =implode(" ", $arr);
echo $rewrite;
file_put_contents("task3.txt", $rewrite);
}
?>
<html>
<head>
    <meta charset="utf-8">
    </head>
<form action="3.php" method = "post">
    <lable for "limitNumber">Введите количество допустимых символов в слове: </label>
    <input type = "number" id = "limitNumber" name = "limNum"/><br>
    <input  type = "submit" value = "Отправить" name = 'submit'/><br>
</form>
</html>
<?php
$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);
if ($_POST["submit"])
{
    word_length($_POST["limNum"]);
}