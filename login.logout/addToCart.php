<?php
    include("../connection.php");

    $idUser = $_GET['id_users'];
    $prod = $_GET['id_items'];

    $result=mysqli_query($mysqli, "INSERT INTO carrinho (id_user, id_items) VALUES ('$idUser', '$prod');");

    header("Location: ./cart.php");



?>  
