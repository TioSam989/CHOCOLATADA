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
<style>img[alt="www.000webhost.com"]{display:none;}</style>
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

      <a href="Login.Logout/login.html" class="w3-bar-item button"><i class="fa fa-envelope"></i>LOGIN</a>
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

  <a href="Login.Logout/login.html" onclick="w3_close()" class="w3-bar-item button">LOGIN</a>
  <a href="javascript:void(0)" class="w3-bar-item button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
    <i class="fa fa-bars"></i>
  </a>
</nav>

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
        <img src="Imagens/1.jpg" alt="M" style="center">
        <div class="w3-container">
        <h3>Preço = 15€</h3>
          <p class="w3-opacity">Box´s chocolates tipo 3</p>
          <p> nooo seeeeeee</p>
        </div>
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Imagens/2.jpg" alt="M" style="center">
        <div class="w3-container">
        <h3>Preço = 15€</h3>
          <p class="w3-opacity">Box´s chocolates tipo 3</p>
          <p> nooo seeeeeee</p>
        </div>
      </div>
    </div>

    
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Imagens/3.jpg" alt="M" style="center">
        <div class="w3-container">
        <h3>Preço = 15€</h3>
          <p class="w3-opacity">Box´s chocolates tipo 3</p>
          <p> nooo seeeeeee</p>
        </div>
      </div>
    </div>
</div>


<!-- Team Section -->
<div class="w3-container" style="padding:130px 20px" id="Team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Imagens/AA.jpg" alt="AB" style="width:100%">
        <div class="w3-container">
          <h3>Ana Beatriz</h3>
          <p class="w3-opacity">Olá, sou Ana Beatriz</p>
          <p>17/07/2001 <br> Criadora da marca/site Chocolatada</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Imagens/II.jpg" alt="M" style="width:100%">
        <div class="w3-container">
          <h3>Inês Pereira </h3>
          <p class="w3-opacity">Olá, sou a Inês Pereira</p>
          <p>09/10/2003 <br>Criadora do desing do site </p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Imagens/RR.jpg" alt="RR" style="width:100%">
        <div class="w3-container">
          <h3>Rúben Cabral</h3>
          <p class="w3-opacity">Olá, Ruben Cabral </p>
          <p>23/01/2001 <br> Ajudante do codigo do site</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Imagens/ss.jpg" alt="M" style="width:100%">
        <div class="w3-container">
          <h3>Alexandre e Carla Rodrigues</h3>
          <p class="w3-opacity">Olá, somos Alexandre e Carla Rodrigues</p>
          <p>22/08/1964 e 29/12/1968 <br> Apoio moral durante os 4 anos de curso </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="About">
  <h3 class="w3-center">ABOUT US</h3>
  <p class="w3-center w3-large">Nós vendemos chocolate ?????</p>
  
</div>









<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact"></div>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Rua da Liberdade nº22, Lisboa , Portugal</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +365 942 211 801 / +365 960 194 431</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: gotachocolate@gmail.com</p>
    <br>
    <!-- Image of location/map -->
     <img src="Imagens/choc.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href=""><i class="fa fa-facebook-official w3-hover-opacity" ></i></a>
    <a href=""><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href=""><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href=""><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href=""><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href=""><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
  
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html> 
