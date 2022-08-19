<?php
session_start();
unset($_SESSION['valid']);
unset($_SESSION['admin']);
header("Location:../index.php");
?>
