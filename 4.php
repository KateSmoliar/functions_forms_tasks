<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 08.11.2016
 * Time: 13:25
 * Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции
 */



function getfiles($dir)
{
    $files = scandir($dir);
   echo "<pre>";
    print_r($files);
    echo "</pre>";
}
getfiles ('C:\xampp\htdocs\site.ua\task_3_functions');