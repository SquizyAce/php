<?php

require_once "php/function.php";

?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css"/>
<html lang='ru'>


<head>
    <meta charset='utf-8'>
    <title>Topic start</title>
</head>
<body>
<div class="create-main">
    <form method="post" style="margin-bottom: 10px">
        <textarea name="author" placeholder="Имя автора" maxlength="32" required="required"></textarea><BR>
        <textarea name="theme" placeholder="Тема" maxlength="128" required="required"></textarea><BR>
        <textarea name="description" placeholder="Краткое содержание" maxlength="516" required="required"></textarea><BR>
        <textarea name="text" maxlength="1024" placeholder="Полное содержание" required="required"></textarea><BR>
        <button name="publish">Опубликовать тему</button>
    </form>

    <form method="post" action="mainpage.php">
        <button>Вернуться на главную</button>
    </form>
</div>
</body>
</html>