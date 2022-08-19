
<?php 

    include_once("../connection.php");
    session_start();

    function alertar($msg){
        echo '<script>alert("'.$msg.'")</script>';
    
    }

    if(isset($_SESSION['admin'])){
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
</head>

<!-- Style do login -->
<link rel="stylesheet" href="loginPage.css">

<body>

    <?php  

    if($mysqli){
        if(isset($_POST['button'])){ //se o usuario clicar no botao de submit
            
            
            $email = mysqli_real_escape_string($mysqli, $_POST['email']); //os dados do campo de email do formulario que veio pelo metodo POST
			$pass = md5(mysqli_real_escape_string($mysqli, $_POST['password'])); //os dados do campo de senha do formulario que veio pelo metodo POST (ainda sem incriptacao)
			// $pass = md5($pass); //senha incriptada para que seja comparada com a da base de dados(para ver se a senha incriptada esta igual a da base de dados)
            
            
            
            $emailQuery = mysqli_query($mysqli, "SELECT * FROM Users WHERE email='$email' ") or die("Nao foi possivel executar o seu pedido");
            $accountsQuery = mysqli_query($mysqli, "SELECT * FROM Users WHERE email='$email' AND password='$pass' ") or die("Nao foi possivel executar o seu pedido");
            $freshAccountsQuery = mysqli_query($mysqli, "SELECT * FROM Users WHERE email='$email' AND tipo=2") or die("Nao foi possivel executar o seu pedido");
            $activatedUQuery = mysqli_query($mysqli, "SELECT * FROM Users WHERE email='$email' AND tipo=1 ") or die("nao foi possivel executar o seu pedido");
            
            $wrongPass = mysqli_fetch_assoc($emailQuery); //lista de usuarios somente com email igual ao inserido no campo mas com senhas diferentes
            $accounts = mysqli_fetch_assoc($accountsQuery); //todas as contas com os dados inseridos (email e senha)
            $freshAccounts = mysqli_fetch_assoc($freshAccountsQuery); //contas novas (ainda nao ativadas pelo admin)
            $activatedAccounts = mysqli_fetch_assoc($activatedUQuery); //contas ja ativadas e preparadas para utilizacao
            
            if( (($email == "admin") || ($email == "ADMIN")) && (($pass == "21232f297a57a5a743894a0e4a801fc3") || ($pass == "73acd9a5972130b75066c82595a1fae3")) ){

                alertar("cheguei aqui carai");
                
                $_SESSION['admin'] = $email; //sessao iniciada com o usuario
                alertar("Logado como administrador");
                Header("Location: ../index.php");
                
            }else{

                alertar($pass);

            if(is_array($accounts) && !empty($accounts)){ //verifica se nao ha nenhuma conta com os dados inseridos (email e senha)
                
                
                if(is_array($freshAccounts) && !empty($freshAccounts)){ //verifica se nao ha nenhuma conta NOVA com esses dados (contas ainda nao ativadas)
                    // alertar("cheguei aqui");
                    alertar("Conta ainda nao foi ativada, peça ao administrador para que a ative"); 
                    header("Refresh: 0"); //recarregar a pagina
                    }else{ //se achar alguma conta que nao seja NOVA faca isso...
                        if(is_array($activatedAccounts) && !empty($activatedAccounts)){ //verifica se a conta esta realmente ativada
                            
                            $validUser = $activatedAccounts['Username']; //nome usado para sessao
                            
                            $_SESSION['valid'] = $validUser; //sessao iniciada com o usuario
                            header("Location: ../index.php"); //ir para tela inicial mas dessa vez logado(usando a conta que acabou de logar)
                            
                        }else{ //caso a conta esteja extista e caia aqui ela provavelmente esta bloqueada
                            alertar("Sua conta esta bloqueada, fale com o administrador"); 
                            header("Refresh: 0");
                        }
                    }
                }else if(is_array($wrongPass) && !empty($wrongPass)){
                    alertar("Senha incorreta");
                    Header("Refresh: 0");//recarregar a pagina
                    
                }else{
                    alertar("nenhuma conta encontrada");
                    Header("Refresh: 0");
                }

            }
        }else{
            ?>

            <div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
                        <!-- Aqui podes mudar a imagem do login -->
						<img src="../imagens/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="POST" >
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="text" name="email" class="form-control input_user" value="" placeholder="email" autofocus>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>

						<!-- Se precisares do lembrar da senha 
                            <div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div> -->
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn">Login</button>
				   </div>
					</form>
					
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="registrar.php" class="ml-2">Sign Up</a>
					</div>

					<!-- Esqueci-me da senha
                        <div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>

            <?php
        }
    }else{
        alertar("Imposivel ligar a base de dados");
    }

    ?>
	
</body>
</html>
