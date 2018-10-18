<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Brain Games - Entrar</title>
        <link rel='shortcut icon' href="../images/brain_icon.gif" />
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light w-100 d-flex justify-content-around align-items-center row mx-0 px-1">
            <div class="logo-box col-2 p-1">
                <a class="nav-link p-0" href="index.php">
                    <img src="../images/logo.jpg" alt="logo" class="img-fluid" style="width:100px;">
                </a>
            </div>

            <div class="col-7 col-lg-5 p-1">
                <a class='logo-text nav-link text-info font-weight-bold px-lg-0' href='../index.php'>Brain Games</a>
            </div>

            <button class="navbar-toggler mr-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon top-menu-button"></span>
            </button>

            <div class="botoes-topo collapse navbar-collapse mx-3 mx-sm-5 mr-lg-2 mt-1 mt-sm-2 flex-column flex-md-row col-lg-4" id="navbarSupportedContent">
                <a href="criar_conta.php" class="btn btn-block my-1 mt-sm-2 mr-sm-3">Não é membro?</a>
                <a href="criar_conta.php" class="btn btn-light btn-block mt-sm-2 my-1">Criar Conta</a>
            </div>
        </nav>
    </header>
	<?php
	require("../include/conn.php");
		if(isset($_POST['email'])){
			$search = "SELECT * FROM `usuarios` WHERE `email`='".$_POST['email']."'";
			$query = $conn->query($search);
			if($r = $query->fetch()){
				$passEnconde = file_get_contents('http://ramacciotti.org/api/generate.php?n=6');
				$passDecode = json_decode($passEnconde, true);
				$pass = $passDecode['value'];
				$hashPass = md5($pass);
				$update = $conn->prepare("UPDATE `usuarios` SET `senha`='".$hashPass."'");
				$update->execute();
				$to      = $r['email'];
				$subject = 'Brain Games - Resetar senha!';
				$message = 'Sua nova senha é: $pass';
				$headers = 'From: no-reply@braingames.com' . "\r\n" .
    			'Reply-To: no-reply@braingames.com' . "\r\n" .
    			'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $message, $headers);
				echo "Senha atualizada para: ".$pass;
			}else{
				header('Location: esqueci_minha_senha.php?error=1');
			}
		}
	 ?>
	<?php
		if(isset($_GET['error'])){
			$error = $_GET['error'];
		}
	 ?>

   <main class="bg-light">
       <section class="container">
           <h1 class="text-center p-4">Esqueci minha senha</h1>
	<form class="col-md-8 col-lg-6 mx-auto" action="esqueci_minha_senha.php" method="post">
    <div class="form-group mb-4">
        <div class="input-group mb-2">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-envelope"></i></div>
        </div>
        <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Coloque seu e-mail">
        </div>
    </div>
    <div class="text-center">
    <button type="submit" name="enviar" class="mb-4 btn btn-primary col-8">Enviar e-mail</button>

  </div>
	</form>

  <footer class="container mt-3">
      <ul class="nav col-12">
      <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="../footer/sobre_nos.php">Sobre Nós</a></li>
      <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="../footer/contato.php">Contato</a></li>
      <li class="nav-item col-12 col-lg-3 text-center"><a class="nav-link text-secondary" href="../footer/termos_de_servico.php">Termos de Serviço</a></li>
      <li class="nav-item col-12 col-lg-3 text-center"><a class="nav-link text-secondary" href="../footer/politica_de_privacidade.php">Política de Privacidade</a></li>
      <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="../footer/ajuda.php">Ajuda</a></li>
      </ul>
  </footer>
</body>
</html>
