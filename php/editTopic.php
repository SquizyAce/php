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

    <form method="post" style="margin-bottom: 10px">
        <?php editTopic();?>
        <button name="edit">Отредактировать тему</button>
    </form>

    <form method="post" action="topic.php">
        <button>Вернуться назад</button>
    </form>
</div>
</body>
</html>