<?php session_start(); ?>

<div class="w3-top">
  <div class="w3-bar w3-black w3-card" id="Navbar">
    <a href="#home" class="w3-bar-item button w3-wide"><img src="Imagens/gota.jfif" height="60" width="80"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-medium">
      
      <a href="./login.logout/dados.php" class="w3-bar-item button"><i class="fa fa-database"></i>DADOS</a>

      <?php
  
        if( (isset($_SESSION['admin'])) ){
          ?>
          <a href="Login.Logout/logout.php" class="w3-bar-item button"><i class="fas fa-sign-out-alt"></i>Logout</a>
          <?php

        }else{
            header("Location:. ../index.php");
        }
  
      ?> 
      
    </div>

    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
  
    <a href="javascript:void(0)" class="w3-bar-item button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
 
  </div>
</div>