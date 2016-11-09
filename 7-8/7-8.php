<?php
/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 09.11.2016
 * Time: 14:42
 * <p>7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
Все добавленные комментарии выводятся над текстовым полем.</p>
 */

function getContent()
{
    if (is_readable('messages.db'))
    {
        $f = file_get_contents("messages.db");
        $messages = unserialize($f);
        return $messages;
    }
}
function inpContent($messages)
{

    if (isset($_POST['submit'])){

        $newPost['userName']    = htmlspecialchars($_POST['userName']);
        $newPost['userMessage'] = htmlspecialchars($_POST['userMessage']);
        $messages[] = $newPost;
        $messagesDB = serialize($messages); // возвращает из массивва строку
        file_put_contents("messages.db",$messagesDB);

    }
    return $messages;
}

function showContent($messages)
{
    if (isset($messages))
    {
        $messages = array_reverse($messages);
        $badWords = array('bad', 'fuck', 'bitch');

        foreach ($messages as $post)

        {
            foreach($badWords as $word)
            {
                $post['userName'] = str_replace($word, 'Некорректный комментарий', $post['userName']);
                if (isset($post['userMessage'])) {
                    $post['userMessage'] = str_replace($word, 'Некорректный комментарий', $post['userMessage']);
                }
            }
            if (isset($post['userMessage'])) {
                echo "Пользователь: {$post['userName']} " . "Сообщение: {$post['userMessage']}<br>";
            }

        }
    }
}
$messages = getContent();
$messages = inpContent($messages);
showContent($messages);

?>
    <doctype! html>
    <html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <form  action = "" method="POST">
        <lable for "usName">Введите логин</label>
        <input type="text" name  = "userName" id = 'usName' placeholder = 'login' required>
        <br>
        <br>
        <lable for "usMes">Введите сообщение</label>
        <textarea rows = "7" cols ='35' name  = "userMessage" id = "usMes" placeholder="message" required></textarea>
        <br>
        <input type = "submit" value = "submit" name = "submit">
        <br>
    </form>

    </body>
    </html>


<?php





