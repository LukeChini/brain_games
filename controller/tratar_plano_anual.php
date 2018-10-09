


<?php
session_start();
include ('../include/conn.php');

$id = $_SESSION['id_logado'];

$today = date("Y-m-d");
$validade_premium = date('Y-m-d', strtotime('+366 days', strtotime($today)));
$plano = 'anual';




  $alteração_validade_premium = $conn->prepare('UPDATE usuarios SET validade_premium = :validade_premium WHERE id = :id');
  $alteração_validade_premium->bindParam(':validade_premium', $validade_premium, PDO::PARAM_STR);
  $alteração_validade_premium->bindParam(':id', $id, PDO::PARAM_INT);
  if (isset($_POST['enviar'])) {$alteração_validade_premium->execute();}

  $alteração_validade_premium = $conn->prepare('UPDATE usuarios SET plano = :plano WHERE id = :id');
  $alteração_validade_premium->bindParam(':plano', $plano, PDO::PARAM_STR);
  $alteração_validade_premium->bindParam(':id', $id, PDO::PARAM_INT);
  if (isset($_POST['enviar'])) {$alteração_validade_premium->execute();}



  $verificação = $conn->query("SELECT * FROM usuarios WHERE id = '$id'");
  $verificação->execute();
  if (isset($_POST['enviar']))
{$verifica = $verificação->fetch(PDO::FETCH_ASSOC);

  $_SESSION['username_logado'] = $verifica['username'];
  $_SESSION['email_logado'] = $verifica['email'];
  $_SESSION['sexo_logado'] = $verifica['sexo'];
  $_SESSION['aniversario_logado'] = $verifica['aniversario'];
  $_SESSION['validade_premium_logado'] = $verifica['validade_premium'];
  $_SESSION['plano_logado'] = $verifica['plano'];
  $_SESSION['id_logado'] = $verifica['id'];
  $_SESSION['src_perfil'] = $verifica['src_perfil'];
  $_SESSION['admin'] = $verifica['admin'];

  $today = date("Y-m-d"); $_SESSION['premium_logado'] = false;
if($verifica['validade_premium']>$today || $verifica['plano'] == 'vitalicio'){$_SESSION['premium_logado'] = true;}

if($_SESSION['src_perfil'] == NULL && $_SESSION['admin'])                     {$_SESSION['src_perfil']='images/perfil_admin.png';}
elseif($_SESSION['src_perfil'] == NULL && $_SESSION['sexo_logado'] == 'masculino'){$_SESSION['src_perfil']='images/perfil_masculino.jpg';}
elseif($_SESSION['src_perfil'] == NULL && $_SESSION['sexo_logado'] == 'feminino' ){$_SESSION['src_perfil']='images/perfil_feminino.jpg'; }
}



  header("location:../artigos/boas_vindas.php");







 ?>
