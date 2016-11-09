<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 08.11.2016
 * Time: 13:46
 * Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
 *  Директория и искомое слово задаются как параметры функции
 */

function get_files($dir, $word)
{


    $files = scandir($dir);

    echo "<pre>";
    print_r($files);
    echo "</pre>";
    foreach ($files as $value) {
        if (strpos($value, $word) == "false") {
            echo $value . "<br>";
        }
    }
}

get_files ('C:\xampp\htdocs\site.ua\task_3_functions','task');