<?php
session_start();
include ('conn.php');


  $id = $_POST['id'];




  $exluir_jogo = $conn->prepare('DELETE FROM jogos WHERE id = :id ');
  $exluir_jogo->bindParam(':id', $id, PDO::PARAM_INT)
  $exluir_jogo->execute();




   header("location:view_jogos_tabela.php");






 ?>
