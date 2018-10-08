<?php if(!$_SESSION['premium_logado']){header('location:inicio-logado.php');} ?>

<?php
session_start();
include ('conn.php');

  $id = $_SESSION['id_logado'];
  $null = NULL;

if(isset($_POST['cancelar_premium']))
{
  $alteração_validade_premium = $conn->prepare("UPDATE usuarios SET validade_premium = '$null' WHERE id = '$id'");
  $alteração_validade_premium->execute();

  $alteração_plano = $conn->prepare("UPDATE usuarios SET plano = '$null' WHERE id = '$id'");
  $alteração_plano->execute();

  $_SESSION['username_logado'] = $verifica['username'];
  $_SESSION['email_logado'] = $verifica['email'];
  $_SESSION['sexo_logado'] = $verifica['sexo'];
  $_SESSION['aniversario_logado'] = $verifica['aniversario'];
  $_SESSION['validade_premium_logado'] = $verifica['validade_premium'];
  $_SESSION['plano_logado'] = $verifica['plano'];
  $_SESSION['id_logado'] = $verifica['id'];
  $_SESSION['src_perfil'] = $verifica['src_perfil'];
  $_SESSION['admin'] = $verifica['admin'];
}





   header("location:conta.php");






 ?>
