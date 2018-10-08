<?php if(!$_SESSION['admin']){header('location:inicio-logado.php');} ?>

<?php
session_start();
include ('conn.php');


  $id = $_POST['id'];



  if(isset($_POST['excluir_jogo'])){
  $excluir_jogo = $conn->prepare("DELETE FROM jogos WHERE id = '$id' ");
  $excluir_jogo->bindParam(':id', $id, PDO::PARAM_INT);
  $excluir_jogo->execute();}
  else{ header("location:inicio-logado.php");}





   header("location:view_jogos_tabela.php");






 ?>
