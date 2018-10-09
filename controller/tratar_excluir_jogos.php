    <?php if(!$_SESSION['admin']){header('location:../artigo/inicio_logado.php');} ?>

<?php
session_start();
include ('../include/conn.php');


  $id = $_POST['id'];



  if(isset($_POST['excluir_jogo'])){
  $excluir_jogo = $conn->prepare("DELETE FROM jogos WHERE id = '$id' ");
  $excluir_jogo->bindParam(':id', $id, PDO::PARAM_INT);
  $excluir_jogo->execute();}
  else{ header("location:../artigos/inicio_logado.php");}





   header("location:../view_admin/view_jogos_tabela.php");






 ?>
