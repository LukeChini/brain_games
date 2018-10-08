<?php if(!$_SESSION['admin']){header('location:inicio-logado.php');} ?>
   <?php

   include ('conn.php');

   $funcao       = $_POST['funcao'];
   $nome         = $_POST['nome'];
   $src_img      = $_FILES['arquivo_img'];
   $descricao    = $_POST['descricao'];
   $gratuito     = $_POST['gratuito'];
   $nome_arquivo = $_FILES['arquivo_php'];

   $nome_sem_espaco = str_replace(' ', '_', strtolower($nome));
   $type_img = substr($_FILES['arquivo_img']['name'],-3);


   $src_img_nome = 'jogos_img/'.$nome_sem_espaco.'.'.$type_img;
   $nome_arquivo_nome = 'play/'.$nome_sem_espaco.'.php';





   $stmt = $conn->prepare
   ('INSERT INTO jogos(    funcao,  nome,  src_perfil,    descricao,  gratuito,  nome_arquivo)
     VALUES              (:funcao, :nome, :src_img_nome, :descricao, :gratuito, :nome_arquivo_nome )');
   $stmt->bindParam(':funcao', $funcao, PDO::PARAM_STR);
   $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
   $stmt->bindParam(':src_img_nome', $src_img_nome, PDO::PARAM_STR);
   $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
   $stmt->bindParam(':gratuito', $gratuito, PDO::PARAM_BOOL);
   $stmt->bindParam(':nome_arquivo_nome', $nome_arquivo_nome, PDO::PARAM_STR);
  if(isset($_POST['salvar_jogo'])){$stmt->execute();}

   move_uploaded_file($_FILES['arquivo_img']['tmp_name'], 'jogos_img/'.$nome_sem_espaco.'.'.$type_img);
   move_uploaded_file($_FILES['arquivo_php']['tmp_name'], 'play/'.$nome_sem_espaco.".php");


   header("location:view_jogos_tabela.php");






    ?>
