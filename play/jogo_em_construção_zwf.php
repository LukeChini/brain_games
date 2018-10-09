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


       <div class='' style='background-color:rgb(14,145,161)'>
       <div class='container'>
       <nav class='navbar navbar-expand-lg navbar-light' style='background-color:rgb(14,145,161)'>
       <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo03' aria-controls='navbarTogglerDemo03' aria-expanded='false' aria-label='Toggle navigation'>
       <span class='navbar-toggler-icon'></span>
       </button>
       <a class='navbar-brand text-white font-weight-bold' href='#'>Brain Games</a>
       <div class='collapse navbar-collapse' id='navbarTogglerDemo03'>
         <ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
         <li class='nav-item active'>
         <a class='nav-link text-white' href='inicio-logado.php'>Início <span class='sr-only'>(current)</span></a>
         </li>
         <li class='nav-item'>
         <a class='nav-link text-white' href='../jogosexecutiva.php'>Jogos</a>
         </li>
         <?php if(!$_SESSION['premium_logado'])
         {echo '<li><a href="../planos.php" class="btn btn-danger mr-3 mt-1" >Torne-se premium</a></li>';} ?>
         </ul>
       <div class='nav-item dropdown'>
       <div class='row'>
       <div class=' border' id='div-img' style='height:50px; width:50px; margin: 0 auto; overflow:hidden; text-align:center;'>
       <style media='screen'>
       @media (max-width: 992px) {#div-img{display:none;}}
       </style>
       <img src=<?php  echo '../'.$src?> alt='' style='height:50px;'></img>
       </div>
       <a class='nav-link dropdown-toggle text-white font-weight-bold mt-1' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'><?php echo $usuario_logado ?></a>
       <div class='dropdown-menu'>
       <a class='dropdown-item' href='conta.php'>Configurações da conta</a>
       <a class='dropdown-item' href='#'>Ajuda</a>
       <div class='dropdown-divider'></div>
       <a class='dropdown-item' href='tratar_sair.php'>Sair</a>
       </div>
       </div>
       </div>
       </div>
       </nav>


    </div>

</div>

      <div class="bg-light text-center" style="font-size:50px;">
    <p>Jogo em Construção</p>
    <img src="<?php echo '../'.$n[0]['src_perfil']; ?>" style="width:50%; margin-bottom:30px;" alt="">
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
