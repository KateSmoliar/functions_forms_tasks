<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 09.11.2016
 * Time: 16:51
 *

13. Есть строка $string =
 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';<br>
<br>
Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите  в виде списка в порядке уменьшения количества:<br><br>


Пример вывода:<br>
яблоко – 12<br>
черешня – 8<br>
груша – 5<br>
слива - 3<br>
</p>

 */
countSame("яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня");
function countSame($a)
{
    $arr = array();
    $arr = explode(" ", $a);
    $arr2 = array();

    foreach ($arr as $value) {
        $arr2[$value] = substr_count($a, $value);

    }

    arsort($arr2);

    foreach ($arr2 as $key => $val) {
        echo $key . " " . $val . "<br>";
    }
}