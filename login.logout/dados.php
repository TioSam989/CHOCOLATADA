<!DOCTYPE html>
<?php include_once("../connection.php") ?>
<?php session_start(); ?>
<?php 
    function alertar($msg){ //funcao pra alertar (so uso para testes)
        echo '<script>alert("'.$msg.'")</script>';
    }
    function JSredirect($URL){ //funcao para redirecionar paginas usando JavaScript
        echo '<script>document.location = "'.$URL.'"</script>';
    }

	if(!isset($_SESSION['admin'])){
		header("Location: ../index.php");
	}
?>
<script>
function addJS(url, attr, subAttr){ //funcao ainda nao terminada que vai fazer parte do carrinho(depois explico melhor)
  document.location = `${url}?${attr}=${subAttr}`
}
</script>
    
<html>
<head>
	<title>Chocolatada</title>
	<link rel ="shortcut icon" href="favicon.png" type="image/x-icon" > 
	<link rel ="icon" href="favicon.png" type="image/x-icon" >  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<!-- <link rel="stylesheet" href="https:///cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>img[alt="www.000webhost.com"]{display:none;}</style>

<link rel="stylesheet" href="dadosStyle.css">
<body>
<style>
	.listPlace{
		max-width:90%;
	}
</style>



<?php
 if(isset($_SESSION['admin'])){ //se estiver logado na conta do ADM vai mostrar a NAVBAR do ADM e nao a normal
	?>

	<div class="w3-top">
	  <div class="w3-bar w3-black w3-card" id="Navbar" style="margin-bottom:1rem;">
		<a href="#home" class="w3-bar-item button w3-wide"><img src="../Imagens/gota.jfif" height="60" width="80"></a>
		<!-- Right-sided navbar links -->
		<div class="w3-right w3-hide-medium">
		  
		  <a href="../login.logout/dados.php" class="w3-bar-item button"><i class="fa fa-database"></i>DADOS</a>
	
		  <?php
	  
			if( (isset($_SESSION['admin'])) ){
			  ?>
			  <a href="../Login.Logout/logout.php" class="w3-bar-item button"><i class="fas fa-sign-out-alt"></i>Logout</a>
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
	<?php
 }else{ //caso nao esteja logado com o ADM vai mostrar a qualquer outro a NAVBAR normal
  include("../navBar.php");
 }
 
 ?>

 <div class="listPlace" >
	

<?php
if($mysqli){//verifica se ha ligacao com a DB
  if(!isset($_SESSION['admin'])){ //ve se é o ADM que esta logado, se estiver vai fazer a parte a baixo
      //nao faz nada por enquanto mas ele vai so listar os dados dos usuarios
  }else{//se nao for o ADM logado ele vai mostrar as coisas a baixo
    ?>

	<style>
		
		.bruhContainer{
			transition: 0.3s;
		}
		
		.bruhContainer:hover {
			background-color: #bf9000;
		}
		.delete, .activate, .deactivate{
			border: none;
			border-radius: 10%;
			margin-bottom: 1rem;
		} 
		.delete{
			background-color: red;
		} 
		.activate{
			background-color: greenyellow;
		}
		.deactivate{
			background-color: orangered;
		}
	</style>

<!-- Header with full-height image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:0cm">
    <span class="w3-jumbo w3-hide-small" >The best chocolate</span><br>

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

<?php
if($mysqli){// verificar se ha conexao com a DB
	echo "<div>";
	echo "<form method='POST' style='margin-top:5rem;' action=''>";

	echo "<div class='container'>";
	echo "<div class='row'>";

	
	echo "<h1>Todos</h1>";
	
	echo "<button name='novinhos' >Ver Somente Novos</button>";
	echo "<button name='ativadinhos'>Ver somente Ativados</button>";
	echo "<button name='desativadinhos'>Ver somente Desativados</button>";
	echo "</div>";
	
	echo "</div>";
	echo "</div>";
	echo "</form>";
	
	if(isset($_POST['novinhos'])){
		$resultado = mysqli_query($mysqli, "SELECT * FROM users WHERE tipo=2");
	}elseif(isset($_POST['ativadinhos'])){
		$resultado = mysqli_query($mysqli, "SELECT * FROM users WHERE tipo=1");
	}elseif(isset($_POST['desativadinhos'])){
		$resultado = mysqli_query($mysqli, "SELECT * FROM users WHERE tipo=3");
	}else{
		$resultado = mysqli_query($mysqli, "SELECT * FROM users ");//uma query pra selecionar todos os items existentes na loja de chocolate
		
	}
	$linha = mysqli_fetch_assoc($resultado); //arrumar os dados recebidos na query anteior em arrays
	

  if(is_array($linha) && !empty($linha)){ //verificar se realmente ha dados
    while($linha){ // enquanto tiver daoos pra mostrar ele vai mostrar na tela
	$id = $linha['Id_user'];
	$nomeUs = $linha['Nome'];

	 echo "<div>";
     echo " <div class='w3-third bruhOutContainer' id='$nomeUs' style='padding:1rem;'>";
     echo "<div class='w3-card bruhContainer'>";
     echo "  <div class='w3-container'>";
	 echo "    <h2><strong></strong>".$linha['Nome']."</h2>";
	 echo "<div  w3-center>";
	 if($linha['tipo'] == 2){ //conta criada recentemente
		echo " <p> <strong>Status:</strong> Conta Nova/Bloqueada </p>";
	 }elseif($linha['tipo'] == 1){
		echo "<p> <strong>Status:</strong> Conta Ativada </p>";
	 }elseif($linha['tipo'] == 3){
		echo "<p> <strong>Status:</strong> Conta Desativada </p>";
	 }
	 echo "</div>";

	 echo "    <p><strong>Username: </strong>".$linha['Username']."</p>";
	 echo "    <p class='w3-opacity'><strong>Email: </strong>".$linha['Email'];
	 echo " <p><strong>Telemovel: </strong>".$linha['Telemovel']."</p>";
	 echo "<div class='w3-left'>";
	 if($linha['tipo'] == 2){ //conta nova( ainda bloqueada )

		echo "<button class='btnBruh activate'><a href=\"ativar.php?id=$id\" onClick=\"return confirm('Tem a certeza que quer ativar esse usuario ?')\">ativar</a>"."</button>";



		echo "<button class='btnBruh delete'><a href=\"apagar.php?id=$id\" onClick=\"return confirm('Tem a certeza que quer deletar esse usuario ?')\">Apagar</a>"."</button>";

	}elseif($linha['tipo'] == 1){  //conta desbloqueada
		echo "<button class='btnBruh deactivate'><a href=\"desativar.php?id=$id\" onClick=\"return confirm('Tem a certeza que quer desativar esse usuario ?')\">Desativar</a>"."</button>";

	}elseif($linha['tipo'] == 3){ //conta desativada por alguma razão
		echo "<button class='btnBruh activate'><a href=\"ativar.php?id=$id\" onClick=\"return confirm('Tem a certeza que quer ativar esse usuario ?')\">ativar</a>"."</button>";

		echo "<button class='btnBruh delete'><a href=\"apagar.php?id=$id\" onClick=\"return confirm('Tem a certeza que quer deletar esse usuario ?')\">Apagar</a>"."</button>";
	}
	echo "</div>";
		
	echo "<div class='w3-right'>";
	if($linha['tipo'] == 2){ //conta criada recentemente
		echo "<div>";
		echo "  <i class='fas fa-kiwi-bird fa-2xl'></i>";
		echo "</div>";
	 }elseif($linha['tipo'] == 1){
		echo "  <i class='fas fa-check fa-2xl'></i>";

	 }elseif($linha['tipo'] == 3){
		echo "  <i class='fas fa-ban fa-2xl'></i>";
	 }
	 echo "</div>";
	 
	echo "</div>";
	echo " </div>";
	echo "  </div>";
	echo " </div>";
	 

     $linha = mysqli_fetch_assoc($resultado); //pra parar de mostrar os dados, senao vai mostrar os mesmos dados repetidamente pra sempre

    }
  }else{// se nao tiver nenhum produto vai escrever que nao ha produto
    echo "<center> ";
    echo "<p>Nenhum dado</p> ";
    echo "</center> ";
  }

}else{ // caso nao consiga ligar a DB
  alertar("nao foi possivel concetar a base de dados");

}
  ?>

 </div>

</div>

</div>


    <?php
  }
}
?>
    <!-- Footer -->
   


</body>
</html> 