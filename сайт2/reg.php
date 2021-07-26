<!DOCTYPE html>
<html lang='ru'>

<head>
    <?php 
require_once "func.php";
    ?>
    <meta charset='utf-8'>
	<link rel="stylesheet" type="text/css" href="style.css"/>
    <title>ООО"Билеты.рф"</title>
		</head>
<form method="POST">		
<div class = "main-reg">
<div class = "reg-up">
Добро пожаловать!<BR>
</div>
<center>
<div class = "reg-down">
Логин:
<INPUT type="text" name="login"><BR>
Пароль:
<INPUT type="text" name="pas"><BR>
</center>
<div class = "reg-button">
<INPUT type="button" onclick="" name="login" value="Логин"><BR>
<INPUT type="button" onclick="" name="reg" value="Регистрация"><BR>
</div>
</div>
</div>
</form>	
<center style="color: blue;"><?php 
echo " ".$_SESSION["inform"]." ";
?></center>
</body>
</html>