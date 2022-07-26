<?php

//Validação de utilizador

include("../config.php");

$email = $_POST["email"];
$password = $_POST["password"];

//procura o email na base de dados decripta a password
$sql = "select * from users where Email = '$email' ";
$resultado=mysqli_query($liga, $sql);
$nregistos = mysqli_fetch_assoc($resultado);
$hash = $nregistos['Password'];

$verify = password_verify($password, $hash);








     //Verificar se $verify é true (password está correta)
    if ($verify && $nregistos)
    {
        if($nregistos["tipo"] == 1){
            
            header('location:../Admin/indexAdmin.php');
        }
        elseif($nregistos["tipo"] == 2){
            
            header('location:../User/indexUser.php');
        }
        
    }
    else
    {
        echo "Erro";
        //header('location:login.html');
    }



?>


