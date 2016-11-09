<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 08.11.2016
 * Time: 11:15
 * 2. Создать форму с элементом textarea.
 * При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.


function max_len_3w ($a)
{
    $arr = array();
    $arr = explode (" ", $a);
    sort($arr);
    echo "<pre>";
    var_dump ($a);
    echo "</pre>";


}*/
function max_len_3w($a)
{

    $arr = array();
    $arr = explode (" ", $a);
    $arr_len =  array();



    foreach ($arr as $value)
    {
        $len =  strlen($value);
        $arr_len[ strlen($value)] = $value;
    }
    krsort($arr_len);


    if ((count($arr_len))>3)
    {
        $new_arr = array_slice($arr_len, 0, 3);
        foreach ($new_arr as $value)
        {
            echo $value . " ";
        }
    }
    else
    {
        foreach ($arr_len as $v)
        {
            echo $v . " ";
        }
    }
}
?>

<html>
<body>
<form action = "2.php" method = "post">
      <textarea name = "text1" cols = '25' rows = 7 placeholder="Введите набор значений"></textarea>
        <br>
    <input type = "submit" name = 'submit' value = "Отправка результата:">
    </form>
<?php
$_POST = array();
parse_str(file_get_contents('php://input'), $_POST);
max_len_3w($_POST["text1"]);



