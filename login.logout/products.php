<div class="w3-container" style="padding:128px 16px" id="Products">
  <h3 class="w3-center">PRODUCTS</h3>
  
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
  <?php 
    include_once("./connection.php");
    
    
    if($mysqli){

        $resultado = mysqli_query($mysqli, "SELECT * FROM items") or die("nao foi possivel concluir essa operacao de recolha de items");
        $linha = mysqli_fetch_assoc($resultado); 

        if(is_array($linha) && !empty($linha)){
          while($linha){

            $nome = $linha["nome"];
            $categoria = $linha["categoria"];
            $descricao = $linha["descricao"];
            $cod_prod = $linha["cod_prod"];
            $local = $linha["localDirectory"];
            $price = $linha["price"];

            ?>

        <div class="w3-col l3 m6 w3-margin-bottom">
              <div class="w3-card">
                <img src="Imagens/<?php echo $local; ?>" alt="Chocolate image" center>
                <div class="w3-container">
                  <h3 ><?php echo $nome; ?></h3>
                  <p class="w3-opacity">Preço = <?php echo $price; ?>€</p>
                  <p> Categoria: <?php echo $categoria; ?></p>
                  <?php
                    if(isset($_SESSION['valid'])){ //se tiver alguem logado faça isso...
                      ?>
                      <!-- ainda nem funciona, falta fazer o sistema do carrinho, quando isso estiver pronto ai faco -->
                        <button style="float:right; margin: 1rem">Add to cart</button> <!-- botao de adicionar ao carrinho -->
                        
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
