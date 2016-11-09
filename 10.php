<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 09.11.2016
 * Time: 15:49
 *
 * 0. Написать функцию, которая считает количество уникальных слов в тексте.
Слова разделяются пробелами. Текст должен вводиться с формы.
 */
function count_unique($a)
{
    $arr = array();
    $string = $a;
    $arr = explode(" ", $string);
    $arr1 = array_unique($arr);
    $result = count($arr1);

    echo $result;
}
?>
<form action = "" method = "post">
    <textarea placeholder="Введите строку" cols = 50 rows = 5 name = "str"></textarea>
    <input type = "submit" name = 'submit'>
    </form>
<?php
count_unique($_POST["str"]);
