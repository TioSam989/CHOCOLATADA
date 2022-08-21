<?php
    include("../connection.php");

    $IdCart = $_GET['id_cart'];

    $result=mysqli_query($mysqli, "DELETE FROM carrinho WHERE Id_carrinho='$IdCart';");

    header("Location: ./cart.php");



?>  
