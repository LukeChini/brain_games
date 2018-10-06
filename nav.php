<?php

if(!isset($_SESSION))
{
    session_start();
}

$usuario_logado = $_SESSION['username_logado'];
$src = $_SESSION['src_perfil'];
$admin = $_SESSION['admin'];

if($_SESSION['username_logado']==NULL){header('location:entrar.php');}



 ?>


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
     <a class='nav-link text-white' href='abajogos.php'>Jogos</a>
     </li>
     </ul>
     <div class='nav-item dropdown'>
     <div class='row'>


       <?php if(!$_SESSION['premium_logado'])
       {echo '<div><a href="planos.php" class="btn btn-danger mr-3 mt-1" >Torne-se premium</a></div>';} ?>


     <div class=' border' id='div-img' style='height:50px; width:50px; margin: 0 auto; overflow:hidden; text-align:center;'>
     <style media='screen'>
     @media (max-width: 992px) {#div-img{display:none;}}
     </style>
     <img src=<?php  echo $src?> alt='' style='height:50px;'></img>
     </div>
     <a class='nav-link dropdown-toggle text-white font-weight-bold mt-1' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'><?php echo $usuario_logado ?></a>
     <div class='dropdown-menu'>
     <a class='dropdown-item' href='conta.php'>Configurações da conta</a>
     <a class='dropdown-item' href='#'>Ajuda</a>
     <?php if(!$admin){echo '<!--';} ?><a class='dropdown-item' href='acesso_restrito.php'>Acesso Restrito</a><?php if(!$admin){echo '-->';} ?>
     <div class='dropdown-divider'></div>
     <a class='dropdown-item' href='tratar_sair.php'>Sair</a>
     </div>
     </div>
     </div>
     </div>
     </nav>

   </body>
 </html>
