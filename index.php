<?php session_start(); ?>
<?php include_once("./connection.php"); ?>

<!DOCTYPE html>
<html>
<title>Gota de Chocolate</title>
<head>
  <link  rel = "shortcut icon"  href = "favicon.png"  type = "image / x-icon" > 
  <link  rel = "icon"  href = "favicon.png"  type = "image / x-icon" >  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>

  img[alt="www.000webhost.com"]{display:none;}</style>
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

  body, html {
    height: 100%;
    line-height: 1.8;
  }

  /* Full height image header */
  .bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("Imagens/choc.jpg");
    min-height: 100%;
  }

  .w3-bar .button {
    padding: 16px;
  }
</style>


<body>


<?php
  if(isset($_SESSION['admin'])){
    include("./login.logout/navbarAdm.php");
  } else{
    include("./login.logout/navbarUser.php");
  }
 
?>
<!-- quando mexer de novo puxar os dados dos produtos pela base de dados usando o mesmo metodo do ./.login.logout/dados.php -->

<!-- Header with full-height image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">The best chocolate</span><br>

  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    
    <a href=""><i class="fa fa-facebook-official w3-hover-opacity" ></i></a>
    <a href=""><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href=""><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href=""><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href=""><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href=""><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
</header>

<!-- Products Section -->
<div class="w3-container" style="padding:128px 16px" id="Products">
  <h3 class="w3-center">PRODUCTS</h3>
  
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
  <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Imagens/1.jpg" alt="M" center>
        <div class="w3-container">
        <h3>Preço = 15€</h3>
          <p class="w3-opacity">Box's chocolates tipo 3</p>
          <p> nooo seeeeeee</p>
        </div>
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Imagens/2.jpg" alt="M" center>
        <div class="w3-container">
        <h3>Preço = 15€</h3>
          <p class="w3-opacity">Box s chocolates tipo 3</p>
          <p> nooo seeeeeee</p>
        </div>
      </div>
    </div>

    
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Imagens/3.jpg" alt="M" center>
        <div class="w3-container">
        <h3>Preço = 15€</h3>
          <p class="w3-opacity">Box's chocolates tipo 3</p>
          <p> nooo seeeeeee</p>
        </div>
      </div>
    </div>
</div>


<!-- Team Section -->
<?php include_once("./login.logout/team.php"); ?>

<!-- About Section -->
<?php include_once("./login.logout/about.php"); ?>

<!-- Contact Section -->
<?php include_once("./login.logout/contact.php"); ?>

<!-- Footer -->
<?php include_once("./login.logout/footer.php"); ?>
 
<script src="./script/script.js"></script>

</body>
</html> 