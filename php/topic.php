<?php

session_start();

require_once "php/function.php";
?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css"/>
<html lang='ru'>


<head>
    <meta charset='utf-8'>
    <title>Topic</title>
</head>
<body>
<div class="main">

    <form class="topic">
        <?php loadTopic(); ?>
    </form>
    <form method="post" action="editTopic.php">
        <button>Редактировать тему</button>
    </form>
    <form class="create-main"> Комментарии! </form>

        <?php loadComment(); ?>

    <form method="post" class="create-main">
        <textarea name="author" placeholder="Ваше имя" maxlength="32" required="required"></textarea><BR>
        <textarea name="text" placeholder="Текст" maxlength="32" required="required"></textarea><BR>
        <button name="comment">Опубликовать комментарий</button>
    </form>
    <form method="post" action="mainpage.php">
        <button>Вернуться назад</button>
    </form>
</div>
</body>
</html>