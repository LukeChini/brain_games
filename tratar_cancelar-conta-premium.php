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

  $_SESSION['username_logado'] = NULL;
  $_SESSION['email_logado'] = NULL;
  $_SESSION['sexo_logado'] = NULL;
  $_SESSION['aniversario_logado'] = NULL;
  $_SESSION['validade_premium_logado'] = NULL;
  $_SESSION['id_logado'] = NULL;
  $_SESSION['src_perfil'] = NULL;

}





   header("location:conta.php");






 ?>
