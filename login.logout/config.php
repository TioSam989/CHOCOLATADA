<?
    //sessão iniciada
    Session_start();
    //Ligação ao servidor
    $liga=mysqli_connect('localhost', 'login_pap (1).sql', 'users');

    //Verificar
    if(!$liga)
    {
        echo "<h2 ERROOO!!! TENTE DENOVO";
        exit;
    }