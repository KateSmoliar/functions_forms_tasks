<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 09.11.2016
 * Time: 16:43
 */

function getReverse($a)
{
    $arr = array();
    $arr = explode(". ", $a);
    krsort($arr);
    $a = implode(". ", $arr);
    echo $a;
}

getReverse('А васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался.а там хоть трава не расти.');