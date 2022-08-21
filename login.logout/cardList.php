<?php
    function consolepramim($msg){
        echo '<script>console.log("'.$msg.'")</script>';
    }
?>

<table class="w3-table">
                <tr>
                <th>Imagem</th>
                <th>Product Name</th>
                <th>quantidade</th>
                <th>preço</th>
                </tr>
                

                           

<?php

if($mysqli){

    $un = $_SESSION['valid']; //username
    $user = mysqli_query($mysqli, "SELECT * FROM users WHERE Username='$un'") or die("nao foi possivel concluir essa operacao de recolha de items");
    $mehMeh = mysqli_fetch_assoc($user); //lista DE SO UM DADO com o id do usuario q busquei usando o Username
    $idMeh = $mehMeh['Id_user'];
    $mehMeh = mysqli_fetch_assoc($user);


    $resultado = mysqli_query($mysqli, "SELECT * FROM carrinho WHERE Id_user='$idMeh' ORDER BY id_items ") or die("nao foi possivel concluir essa operacao de recolha de items");
    $linha = mysqli_fetch_assoc($resultado); 
    
    if(is_array($linha) && !empty($linha)){

        
        $idItemAntigo = null;
        $idItemAtual;
        $index = 1;
        $indexGeral = 0;
        $indexItem = 0;
        $totalProduto = 0;


        $row_count = mysqli_num_rows($resultado);
        consolepramim("total de $row_count");


        while($linha){


            $idItemAtual = $linha['id_items'];


                if( $idItemAntigo == $idItemAtual ||  $indexItem == 0 ){

                    
                    $indexItem++;
                    consolepramim("Tenho um total de $indexItem produtos");

                    if($indexGeral == $row_count -1 ){
                        $itm = mysqli_query($mysqli, "SELECT * FROM items where Id_items='$idItemAntigo' ") or die("nao foi possivel concluir essa operacao de recolha de items");
                        $prod = mysqli_fetch_assoc($itm);
                        
                        $preco = $prod['price'];
                        $totalProduto = $preco*$indexItem;
                        consolepramim("meu total é $totalProduto");
                        consolepramim("****************************************");
                            
                    }

                }else{

                    $itm = mysqli_query($mysqli, "SELECT * FROM items where Id_items='$idItemAntigo' ") or die("nao foi possivel concluir essa operacao de recolha de items");
                    $prod = mysqli_fetch_assoc($itm);
                    
                    $preco = $prod['price'];
                    $totalProduto = $preco*$indexItem;
                    consolepramim("meu total é $totalProduto");
                    consolepramim("****************************************");
                    consolepramim("Mudei de produto na linha n $indexGeral");
                    $indexItem = 1;
                    consolepramim("Tenho um total de $indexItem produtos");

                }

            $idItemAntigo = $idItemAtual;
            $index++;
            $linha = mysqli_fetch_assoc($resultado); //pra parar de mostrar os dados, senao vai mostrar os mesmos dados repetidamente pra sempre
            
            $indexGeral++;


            
        }

        echo '</table>';

    }else{
        ?>
            <div class="w3-container w3-black">
                <h1>Ainda nao tem nenhum item no carrinho</h1>
            </div>
            
            <div class="container"  >

                <div class="row">
                    <img src="https://i.pinimg.com/originals/ef/4c/23/ef4c232dab28b7581497cee047f21969.gif"  alt="idk wat u gonna put here">
                    <img src="https://i.pinimg.com/originals/ef/4c/23/ef4c232dab28b7581497cee047f21969.gif"  alt="idk wat u gonna put here">
                    <img src="https://i.pinimg.com/originals/ef/4c/23/ef4c232dab28b7581497cee047f21969.gif"  alt="idk wat u gonna put here">
                </div>
            </div>

        <?php 
    }


    
}else{
    alertar("nao foi possivel estabelecer conexao com a base de dados");
    header("Location:../index.php");
}

?>