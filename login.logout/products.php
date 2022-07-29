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
                <h3>Preço = <?php echo $price; ?>€</h3>
                  <p class="w3-opacity"><?php echo $nome; ?></p>
                  <p> <?php echo $categoria; ?></p>
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
