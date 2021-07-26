<?php

session_start();
require_once "php/function.php";

?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css"/>
<html lang='ru'>


<head>
    <meta charset='utf-8'>
    <title>Main page</title>
</head>
<body>
<div class="main">
<form method="post" action="topic.php">
    <ul>
        <?php showTopic(); ?>
    </ul>
</form>

<form method="post" action="create.php">
    <button>Создать тему</button>
</form>
</div>
</body>
</html>