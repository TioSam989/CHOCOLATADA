<?php
ob_start();
include ("../config.php");
$name = $_POST["name"];
$email = $_POST["email"];
$telemovel = $_POST["telemovel"];
$username = $_POST["username"];
$pass = 1234;
$hash = password_hash($pass, PASSWORD_DEFAULT);

$sql = "insert into users (Nome, Email, Telemovel, Username, Password, tipo) values ('$name', '$email', '$telemovel', '$username', '$hash', '2')";
$res = mysqli_query($liga, $sql);



header("Location:login.html");

?>