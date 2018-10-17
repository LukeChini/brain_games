<!DOCTYPE html>
<html>
<head>
	<title>Esqueci minha senha</title>
</head>
<body>
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
	<form action="esqueci_minha_senha.php" method="post">
		<input type="email" placeholder="Digite seu e-mail" name="email"><br>
		<input type="submit" value="Enviar" name="Enviar e-mail">
	</form>
</body>
</html>