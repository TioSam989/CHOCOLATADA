<?php
    $DB_Host = 'localhost';
    $DB_Name = 'c';
    $DB_Username = 'root';
    $DB_Password = '';

    $mysqli = @mysqli_connect($DB_Host, $DB_Username, $DB_Password, $DB_Name) or die( "Impossivel Ligar à Base de Dados"); 
    // error_reporting(0);
    if (!$mysqli){
        echo "impossible to call database";
        echo "Error number: ".mysqli_connect_errno()."br";
        echo "Error info: ".mysqli_connect_error()."br";
        exit;
    }
?>