    <?php if(!$_SESSION['admin']){header('location:../artigo/inicio_logado.php');} ?>

<?php
session_start();
include ('../include/conn.php');

  $funcao       = $_POST['funcao'];
  $nome         = $_POST['nome'];
  $src_img      = $_FILES['arquivo_img'];
  $descricao    = $_POST['descricao'];
  $gratuito     = $_POST['gratuito'];
  $nome_arquivo = $_FILES['arquivo_php'];
  $id           = $_POST['id'];

  $nome_sem_espaco = str_replace(' ', '_', strtolower($nome));
  $type_img = substr($_FILES['arquivo_img']['name'],-3);


  $src_img_nome = 'jogos_img/'.$nome_sem_espaco.'.'.$type_img;
  $nome_arquivo_nome = 'play/'.$nome_sem_espaco.'.php';

if(isset($_POST['alterar_jogo'])){
  $alteração_funcao = $conn->prepare('UPDATE jogos SET funcao = :funcao WHERE id = :id');
  $alteração_funcao->bindParam(':funcao', $funcao, PDO::PARAM_STR);
  $alteração_funcao->bindParam(':id', $id, PDO::PARAM_INT);
  $alteração_funcao->execute();

  $alteração_nome = $conn->prepare('UPDATE jogos SET nome = :nome WHERE id = :id');
  $alteração_nome->bindParam(':nome', $nome, PDO::PARAM_STR);
  $alteração_nome->bindParam(':id', $id, PDO::PARAM_INT);
  $alteração_nome->execute();

  if($src_img['name'] != NULL){
  $alteração_src = $conn->prepare('UPDATE jogos SET src_perfil = :src_img_nome WHERE id = :id');
  $alteração_src->bindParam(':src_img_nome', $src_img_nome, PDO::PARAM_STR);
  $alteração_src->bindParam(':id', $id, PDO::PARAM_INT);
  $alteração_src->execute();}

  $alteração_descricao = $conn->prepare('UPDATE jogos SET descricao = :descricao WHERE id = :id');
  $alteração_descricao->bindParam(':descricao', $descricao, PDO::PARAM_STR);
  $alteração_descricao->bindParam(':id', $id, PDO::PARAM_INT);
  $alteração_descricao->execute();

  $alteração_gratuito = $conn->prepare('UPDATE jogos SET gratuito = :gratuito WHERE id = :id');
  $alteração_gratuito->bindParam(':gratuito', $gratuito, PDO::PARAM_STR);
  $alteração_gratuito->bindParam(':id', $id, PDO::PARAM_INT);
  $alteração_gratuito->execute();

  if($nome_arquivo['name'] != NULL){
  $alteração_arquivo_php = $conn->prepare('UPDATE jogos SET nome_arquivo = :nome_arquivo_nome WHERE id = :id');
  $alteração_arquivo_php->bindParam(':nome_arquivo_nome', $nome_arquivo_nome, PDO::PARAM_STR);
  $alteração_arquivo_php->bindParam(':id', $id, PDO::PARAM_INT);
  $alteração_arquivo_php->execute();}}

  if($src_img['name'] != NULL){move_uploaded_file($_FILES['arquivo_img']['tmp_name'], 'jogos_img/'.$nome_sem_espaco.'.'.$type_img);}
  if($nome_arquivo['name'] != NULL){move_uploaded_file($_FILES['arquivo_php']['tmp_name'], 'play/'.$nome_sem_espaco.".php");}




   header("location:../view_admin/view_jogos_tabela.php");






 ?>
