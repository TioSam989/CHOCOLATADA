<?php
include("../login.logout/config.php");
$id = $_GET['id'];
$result=mysqli_query($mysqli, "UPDATE users SET tipo=3 WHERE id_user=$id");
header("Location: ./dados.php");
?>  

