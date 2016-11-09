<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 09.11.2016
 * Time: 0:52
 *
 * Написать функцию, которая переворачивает строку.
Было "abcde", должна выдать "edcba".
Ввод текста реализовать с помощью формы.

 */


function reverse($a){
  // setlocale(LC_ALL, 'Russian_Russia.1251');
  //  mb_convert_encoding($a, "utf-8");
    iconv_set_encoding($a, "utf-8");
    $b="";
    for ($i=iconv_strlen($a)-1; $i>=0; $i-- )
    {
       $b .= mb_substr($a, $i, 1, "UTF-8");
    }
    $a=$b;
    iconv_set_encoding($a, "utf-8");
    echo  $a;
}
?>
<html>
<head>
    <meta charset="utf-8">
    </head>
<form action = "" method = "post">
    <lable for 'str'>Введите строку</lable>
    <input type = "text" name = "str" id = 'str' accept-charset="utf-8" value =<?php
    if (isset($_POST["submit"]))
    {
        reverse($_POST["str"]);

    }

    ?>>
    <input type = "submit" value = "press button" name = "submit">
  </form>
</html>
