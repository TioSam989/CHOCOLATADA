

<?php

include_once("../connection.php");
session_start();

if(!isset($_SESSION['valid'])){
    header("Location:../index.php");
}

function alertar($msg){
    echo '<script>alert("'.$msg.'")</script>';

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>carrinho</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    

<?php include_once("./cardList.php"); ?>


<div class="w3-container" style="padding:128px 16px" id="Products">
  <h3 class="w3-center">PRODUCTS</h3>
  
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
  <?php 
    
    if($mysqli){
        
        $un = $_SESSION['valid']; //username
        $user = mysqli_query($mysqli, "SELECT Id_user FROM users WHERE Username='$un'") or die("nao foi possivel concluir essa operacao de recolha de items");
        $mehMeh = mysqli_fetch_assoc($user); //lista DE SO UM DADO com o id do usuario q busquei usando o Username
        
            $idMeh = $mehMeh['Id_user'];
            // alertar($idMeh);
            $mehMeh = mysqli_fetch_assoc($user);


        $resultado = mysqli_query($mysqli, "SELECT * FROM items") or die("nao foi possivel concluir essa operacao de recolha de items");
        

        $linha = mysqli_fetch_assoc($resultado); 
        $daodsUser = mysqli_fetch_assoc($user); 

        if(is_array($linha) && !empty($linha)){
          while($linha){

            $id = $linha['id_items'];
            $nome = $linha["nome"];
            $categoria = $linha["categoria"];
            $descricao = $linha["descricao"];
            $cod_prod = $linha["cod_prod"];
            $local = $linha["localDirectory"];
            $price = $linha["price"];

            ?>

        <div class="w3-col l3 m6 w3-margin-bottom">
              <div class="w3-card">
                <img src="../Imagens/<?php echo $local; ?>" alt="Chocolate image" center>
                <div class="w3-container">
                  <h3 ><?php echo $nome; ?></h3>
                  <p class="w3-opacity">Preço = <?php echo $price; ?>€</p>
                  <p> Categoria: <?php echo $categoria; ?></p>
                  <?php
                    if(isset($_SESSION['valid'])){ //se tiver alguem logado faça isso...
                      ?>
                      <!-- ainda nem funciona, falta fazer o sistema do carrinho, quando isso estiver pronto ai faco -->
                        <button name="<?php echo $cod_prod; ?>" style="float:right; margin: 1rem"> <a href="./addToCart.php?id_users=<?php echo $idMeh;?>&id_items=<?php echo $id; ?>"> Add to cart</a></button> <!-- botao de adicionar ao carrinho -->
                        
                      <?php
                    }else{ //se nao, faça isso...
                      ?>
                        <button disabled title="para adicionar o item ao carrinho, logue em uma conta"  style="float:right; margin: 1rem">Add to cart</button> <!-- botao de adicionar ao carrinho desativado, pois nao ta logado -->
                      <?php
                    }
                  ?>
                </div>
              </div>
            </div>
            
            <?php

            $linha = mysqli_fetch_assoc($resultado);


}
}else{
  
  echo "<center> ";
          echo "<p>Nenhum dado</p> ";
          echo "</center> ";

        }
        
        
    }else{
      alertar("nao foi possivel conectar a base de dados");
    }
?>

</div>




</body>
</html>