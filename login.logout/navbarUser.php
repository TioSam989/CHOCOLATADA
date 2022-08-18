<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card" id="Navbar">
    <a href="#home" class="w3-bar-item button w3-wide"><img src="Imagens/gota.jfif" height="60" width="80"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-medium">
      <a href="#home" class="w3-bar-item button"><i class="fa fa-home"></i>HOME</a>
      <a href="#Products" class="w3-bar-item button"><i class="fa fa-coffee"></i>PRODUCTS</a>
      <a href="#Team" class="w3-bar-item button"><i class="fa fa-group"></i>TEAM</a>
      <a href="#About" class="w3-bar-item button"><i class="fa fa-question"> </i>ABOUT US</a>
      <a href="#contact" class="w3-bar-item button"><i class="fa fa-question"> </i>CONTACT</a>

      <?php 
        if(isset($_SESSION['valid'])){
          ?>
            <a href="Login.Logout/logout.php" class="w3-bar-item button"><i class="fa fa-envelope"></i>LOGOUT</a>
          <?php

        }else{
          ?>
            <a href="Login.Logout/login.php" class="w3-bar-item button"><i class="fa fa-envelope"></i>LOGIN</a>
          <?php
        }
      ?>


    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-gold w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="Sidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item button w3-large w3-padding-16">Close</a>
  <a href="#home" onclick="w3_close()" class="w3-bar-item button" >HOME</a>
  <a href="#Products" onclick="w3_close()" class="w3-bar-item button">PRODUCTS</a>
  <a href="#Team" onclick="w3_close()" class="w3-bar-item button">TEAM</a>contact
  <a href="#About" onclick="w3_close()" class="w3-bar-item button">ABOUT US</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item button">CONTACT</a>

  <a href="Login.Logout/login.php" onclick="w3_close()" class="w3-bar-item button">LOGIN</a>
  <a href="javascript:void(0)" class="w3-bar-item button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
    <i class="fa fa-bars"></i>
  </a>
</nav>
