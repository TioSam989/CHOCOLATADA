<?php 

    include_once("../connection.php");
    session_start();

    function alertar($msg){
        echo '<script>alert("'.$msg.'")</script>';
    }

	function refreshMeh(){
		echo '<script>
			location.reload();
			return false;
		</script>';
	}

    if( (isset($_SESSION['admin'])) || (isset($_SESSION['valid']))  ){
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html>

    
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="./registrarPage.css">
</head>

<!-- Style do login -->



<body>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card" style="height:auto">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
                        <!-- Aqui podes mudar a imagem do login -->
						<img src="../imagens/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
				
				
			
			<?php
			
			if($mysqli){
				if(isset($_POST['submitRegistrar'])){
					

					$name= $_POST['name'];
					$email= $_POST['email'];
					$telemovel= $_POST['telemovel'];
					$username= $_POST['meh'];
					$meh= $_POST['meh'];
					
					$pass1 = md5($_POST['pass1']);
					$pass2 = md5($_POST['pass2']);



					
					if($pass1 != $pass2){
						alertar("senhas não combinam");
						header("Refresh:1; URL=./registrar.php");
					}else{
						$pass = $pass1;
						$emailQuery = mysqli_query($mysqli, "SELECT * FROM Users WHERE email='$email' ") or die("Nao foi possivel executar o seu pedido");
						$row = mysqli_fetch_assoc($emailQuery);

						if(is_array($row) && !empty($row)){
							alertar("Esse email ja esta em utilização");
							header("Refresh:1; URL=./registrar.php");
						}else{

							$usernameQuery = mysqli_query($mysqli, "SELECT * FROM Users WHERE username='$username' ") or die("Nao foi possivel executar o seu pedido");
							$row = mysqli_fetch_assoc($usernameQuery);
							
							if(is_array($raw) && !empty($raw)){
								alertar("esse username ja esta em utilização");
								header("Refresh:1;URL=./registrar.php");
							}else{
								mysqli_query($mysqli, "INSERT INTO users(Nome, Email, Telemovel, Username, Password, tipo) VALUES('$name','$email', '$telemovel','$username','$pass', 2)") or die("nao foi possivel concluir a operação");
								alertar("conta criada com exito");
								header("Location: ../index.php");
							}


						}
						
					}


				}else{

					
				?>


<form method="POST" action="">
						<div class="input-group mb-3"><!--name-->
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-id-card"></i></span>
							</div>
							<input type="text" name="name" class="form-control input_user" value="" placeholder="Name" autofocus required>
						</div>
						<div class="input-group mb-3"><!--mail-->
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" value="" placeholder="Email" [A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$ required>
						</div>
                        <div class="input-group mb-3"><!--cell-->
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-phone"></i></span>
							</div>
							<input type="number" name="telemovel" class="form-control input_user" value=""  placeholder="Phone Number" required>
							
						
						</div>
                        <div class="input-group mb-3"><!--username-->
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="Usermane"required>
						</div>

						<div class="input-group mb-3"> <!--pass1-->
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="pass1" class="form-control input_user" value="" placeholder="Pass123*" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W+)(?=^.{8,50}$).*$" title="deve conter no minimo 8 caracteres, uma letra maiuscula, uma letra minuscula, um numerico e um caractere especial( @#$* )" required>
						</div>
						<div class="input-group mb-3"><!--pass2-->
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="pass2" class="form-control input_user" value="" placeholder="Pass123*" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W+)(?=^.{8,50}$).*$" title="deve conter no minimo 8 caracteres, uma letra maiuscula, uma letra minuscula e um caractere especial( @#$* )" required>
						</div>
						<!-- Se precisares do lembrar da senha 
                            <div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div> -->
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="submitRegistrar" class="btn login_btn">Registrar</button>
				   </div>
					</form>




				<?php


				}

			}else{
				alertar("impossivel ligar a base de dados");
			}
			
			?>
				
			
			</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Tem conta? <a href="./login.php" class="ml-2">Login</a>
					</div>

					<!-- Esqueci-me da senha
                        <div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</body>
</html>
