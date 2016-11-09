<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 07.11.2016
 * Time: 23:32
 *
<p>1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
 * которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
</p>
 */
function getCommonWords($a, $b)
{


    $firstText = $a;
    $secondText = $b;

    $arr1 = array();
    $arr2 = array();
    $arr1 = explode(" ", $firstText);
    $arr2 = explode(" ", $secondText);


    foreach ($arr1 as $key1=> $value1)
    {
        foreach ($arr2 as $key2 =>$value2)
        {
            if ($value1 == $value2)
            {
                echo $value1."<br>";
            }
        }
    }

}

?>
<html>
<body>
<form action = "1.php" method = "post">
      <textarea name = "text1" cols = '25' rows = 7 placeholder="Введите первый набор значений"></textarea>
        <br>

        <textarea name = "text2" cols = '25' rows = 7 placeholder="Введите второй набор значений"></textarea>
    <br>
    <input type = "submit" name = 'submit' value = "Отправка результата:">
    </form>
<?php

$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);
getCommonWords($_POST["text1"],$_POST["text2"] );
?>
</body>
</html>
