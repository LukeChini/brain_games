<?php
session_start();
include ('../include/conn.php');
if(!$_SESSION['admin']){header('location:../artigos/inicio_logado.php');}

  $id = $_SESSION['id_logado'];

  if(isset($_POST['excluir_usuario'])){
  $excluir_usuario = $conn->prepare("DELETE FROM usuarios WHERE id = '$id' ");
  $excluir_usuario->bindParam(':id', $id, PDO::PARAM_INT);
  $excluir_usuario->execute();}
  else{ header("location:../artigos/inicio_logado.php");}




   header("location:../index.php");






 ?>
