<?php
    include("../connection.php");

    $IdProdCart = $_GET['idpc'];

    $result=mysqli_query($mysqli, "DELETE FROM carrinho WHERE id_carrinho='$IdProdCart';");

    header("Location: ./cart.php");



?>  
