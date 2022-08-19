<?php
include("../connection.php");
$id = $_GET['id'];
$result=mysqli_query($mysqli, "DELETE FROM users WHERE id_user=$id");
header("Location: ./dados.php");
?>  
