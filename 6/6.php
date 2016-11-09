<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 08.11.2016
 * Time: 15:19
 *
 * <p>6. Создать страницу, на которой можно загрузить несколько фотографий в галерею.
 * Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p>
 */
?>
<head>
    <meta charset="utf-8">
    <style>
        img {

            max-width: 100%;
            height: auto;

        }


    </style>
    </head>
    <form action="" method="post" enctype="multipart/form-data">
        <label for "file1">Выберите файлы для загрузки:</lable><br>
        <input type="file" name="userFile[]"  multiple id = 'file1'>
        <br><br>
        <input type="submit">
    </form>
<?php

$name = array();
$temp = array();
$name[] = $_FILES['userFile']['name'];
$temp[] = $_FILES['userFile']['tmp_name'];
$count = (count($name[0])-1);

$uploaddir = 'C:/xampp/htdocs/site.ua/task_3_functions/gallery/';

for ($i = 0; $i<=(count($name[0])-1); $i++)
{

    $uploadfile = $uploaddir . basename($name[0][$i]);
    move_uploaded_file($temp[0][$i], $uploadfile);
}

for($n=(count($name[0])), $num = 0;$n>1;$n = $n/3){
    $num++;
}
echo $num
?>

<table>

        <?php
        for ($j=0; $j<=0; $j++ )
        {
        echo '<br>';
            for ($i = 0; $i <= (count($name[0]) - 1); $i++)
            {

                ?>
                <tr>
                <td width="30%">
                    <img src="./gallery/<?php
                    echo($name[0][$i]); ?>" height="7%" alt="файл не загружен">
                </td>
                </tr>

                <?php
            }

        ?>
    <?php
    }
    ?>
</table>

