<?php
session_start();
require_once "class/DBConnect.php";
function showTopic(){
    $db = new DBConnect();
    $dba = $db -> getTopic();
    while ($i = $dba -> fetch_assoc())
    {
     echo "<li><button name='TS' value='".$i['id']."'>".$i['theme']."</button><BR>".$i['description']."</li>";
    }
}

function loadTopic(){
    $TS = $_SESSION["TS"];
    $db = new DBConnect();
    $dba = $db -> findTopic($TS);
    while ($i = $dba -> fetch_assoc())
    {
        echo "<span style='font-size: 30px'>Тема: ".$i["theme"]."</span><BR>";
        echo "<span style='font-size: 25px'>Автор: ".$i["author"]."</span><BR>";
        echo "<span>Краткое содержание: ".$i["description"]."</span><BR>";
        echo "<span>Полное содержание: ".$i["text"]."</span><BR>";
    }
}

function editTopic(){
    $TS = $_SESSION["TS"];
    $db = new DBConnect();
    $dba = $db -> findTopic($TS);
    while ($i = $dba -> fetch_assoc())
    {
        echo "<textarea name='theme' placeholder='Тема' maxlength='128' required='required'>".$i["theme"]."</textarea><BR>";
        echo "<textarea name='author' placeholder='Имя автора' maxlength='32' required='required'>".$i["author"]."</textarea><BR>";
        echo "<textarea name='description' placeholder='Краткое содержание' maxlength='516' required='required'>".$i["description"]."</textarea><BR>";
        echo "<textarea name='text' placeholder='Полное содержание' maxlength='1024' required='required'>".$i["text"]."</textarea><BR>";
    }
}

function loadComment(){
    $TS = $_SESSION["TS"];
    $dc = new DBConnect();
    $dca = $dc -> findComment($TS);
    while ($i = $dca -> fetch_assoc())
    {
        echo "<form class='comment'>Автор: ".$i["author"]."<BR>".$i["text"]."</form>";
    }
}

if (isset($_POST["TS"])) {
    $_SESSION["TS"] = $_POST["TS"];
}

if (isset($_POST["publish"])) {
    $pb = new DBConnect();
    $pb -> publishTopic($_POST["author"],$_POST["theme"],$_POST["description"],$_POST["text"]);
}

if (isset($_POST["edit"])) {
    $TS = $_SESSION["TS"];
    $pb = new DBConnect();
    $pb -> editTopic($_POST["author"],$_POST["theme"],$_POST["description"],$_POST["text"], $TS);
}

if (isset($_POST["comment"])) {
    $TS = $_SESSION["TS"];
    $pb = new DBConnect();
    $pb -> publishComment($_POST["author"],$_POST["text"], $TS);
}
?>
