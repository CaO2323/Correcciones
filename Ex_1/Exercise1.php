<?php   


$_SESSION["username"] = $_POST["username"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["password"] = $_POST["password"];

echo $_SESSION["username"].PHP_EOL;
echo $_SESSION["email"] .PHP_EOL;




?>