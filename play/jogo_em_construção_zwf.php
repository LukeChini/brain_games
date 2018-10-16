<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php

    if(!isset($_SESSION))
    {
        session_start();
    }

    $usuario_logado = $_SESSION['username_logado'];
    $src = $_SESSION['src_perfil'];

    include ('../include/conn.php');



    $verificação = $conn->query("SELECT * FROM jogos WHERE nome_arquivo = '$nome_arquivo' ");
    $n = $verificação->fetchAll();
    $c = count($n);


    if($_SESSION['username_logado']==NULL){header('location:entrar.php');}
    if(!$_SESSION['premium_logado'] && !$n[0]['gratuito']){header('location:inicio-logado.php');}



     ?>
    <title><?php echo 'Brain Games - '.$n[0]['nome']; ?></title>
  </head>



     <body>


    <?php require('../include/nav.php'); ?>


    </div>

</div>

      <div class="bg-light text-center" style="font-size:50px;">
    <p>Jogo em Construção</p>
    <img src="<?php echo '../'.$n[0]['src_img']; ?>" style="width:50%; margin-bottom:30px;" alt="">
  </div>








    <div class="">
      <?php require('../include/variaveis_php_echo.php'); echo $html_footer; ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    </html>
