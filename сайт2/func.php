<?php
$mysqli=false;
$_SESSION["inform"]="";
function connectDB(){
	global $mysqli;
	$mysqli = new mysqli("localhost", "mysql", "mysql","golovinde");
	$mysqli->query("SET NAMES `utf-8`");
}

function closeDB(){
global $mysqli;
$mysqli->close();
}

if(isset($_POST['reg'])){
if($_POST['login']!="" && $_POST['pas']!="")
{
writecustomerDB();
}
else
{
$_SESSION["inform"]="Пожалуйста, заполните все поля!";	
}
}


function writecustomerDB(){
$UserName=$_POST['login'];
$password=$_POST['pas'];
$conn = mysqli_connect("localhost", "mysql", "mysql","golovinde");
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO users VALUES (NULL,'$login',NULL,'$password')";
if (mysqli_query($conn, $sql)) {
      $_SESSION["inform"]="Пользователь был создан!";
} else {
      $_SESSION["inform"]="Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}


mysqli_close($conn);
unset($_SESSION["arra"]); 
unset($_SESSION["howmuch"]);
$_SESSION["inform"]=$idforuser;
echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=end.php">';
echo $_SESSION["inform"];	

?>