<?php
session_start();

class DBConnect
{
private $dbName = "e2e4test";
private $login = "mysql";
private $pass = "mysql";
private $host = "localhost";

    function getTopic(){
    $mysql =  mysqli_connect($this->host, $this->login, $this->pass, $this->dbName);
    $mysql->set_charset("SET NAMES `utf-8`");
    if (!$mysql) die("Connection failed: " . mysqli_connect_error());
    $result = $mysql->query("SELECT id, theme, description FROM topics");
    mysqli_close($mysql);
    return $result;
}


    function findTopic($TS){
        $mysql =  mysqli_connect($this->host, $this->login, $this->pass, $this->dbName);
        $mysql->set_charset("SET NAMES `utf-8`");
        if (!$mysql) die("Connection failed: " . mysqli_connect_error());
        $result = $mysql->query(" SELECT * FROM topics WHERE id='$TS' ");
        mysqli_close($mysql);
        return $result;
    }

    function findComment($TS){
        $mysql =  mysqli_connect($this->host, $this->login, $this->pass, $this->dbName);
        $mysql->set_charset("SET NAMES `utf-8`");
        if (!$mysql) die("Connection failed: " . mysqli_connect_error());
        $result = $mysql->query(" SELECT author, text FROM comments WHERE tid='$TS' ");
        mysqli_close($mysql);
        return $result;
    }

    function publishTopic($author, $theme, $description, $text){
        $mysql =  mysqli_connect($this->host, $this->login, $this->pass, $this->dbName);
        $mysql->set_charset("SET NAMES `utf-8`");
        if (!$mysql) die("Connection failed: " . mysqli_connect_error());
        $sql = "INSERT INTO topics VALUES (NULL,'$author', '$theme', '$description','$text')";
        if (mysqli_query($mysql, $sql)) {
            header("Refresh:0; url=mainpage.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysql);
        }
        mysqli_close($mysql);
    }

    function publishComment($author, $text, $TS){
        $mysql =  mysqli_connect($this->host, $this->login, $this->pass, $this->dbName);
        $mysql->set_charset("SET NAMES `utf-8`");
        if (!$mysql) die("Connection failed: " . mysqli_connect_error());
        $sql = "INSERT INTO comments VALUES (NULL,'$TS', '$author','$text')";
        if (mysqli_query($mysql, $sql)) {
            header("Refresh:0");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysql);
        }
        mysqli_close($mysql);
    }

    function editTopic($author, $theme, $description, $text, $TS){
        $mysql =  mysqli_connect($this->host, $this->login, $this->pass, $this->dbName);
        $mysql->set_charset("SET NAMES `utf-8`");
        if (!$mysql) die("Connection failed: " . mysqli_connect_error());
        $sql = "UPDATE topics SET author='$author', theme='$theme', description='$description', text='$text' WHERE id='$TS'";
        if (mysqli_query($mysql, $sql)) {
            header("Refresh:0; url=topic.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysql);
        }
        mysqli_close($mysql);
    }


}