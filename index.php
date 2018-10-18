<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Brain Games</title>
        <link rel='shortcut icon' href="images/brain_icon.gif" />
  </head>
  <body>
    <?php
    session_start();
    $_SESSION['index_logar'] = true;
    $_SESSION['usuario_logado'] = false;




     ?>

    <header>
    <nav class="navbar navbar-expand-lg navbar-light w-100 d-flex justify-content-around align-items-center row mx-0 px-1">
        <div class="logo-box col-2 p-1">
            <a class="nav-link p-0" href="index.php">
                <img src="images/logo.jpg" alt="logo" class="img-fluid" style="width:100px;">
            </a>
        </div>

        <div class="col-7 col-lg-5 p-1">
            <a class='logo-text nav-link text-info font-weight-bold px-lg-0' href='index.php'>
              Brain Games
            </a>
        </div>

        <button class="navbar-toggler mr-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon top-menu-button"></span>
        </button>

        <div class="botoes-topo collapse navbar-collapse mx-3 mx-sm-5 mr-lg-2 mt-1 mt-sm-2 flex-column flex-md-row col-lg-4" id="navbarSupportedContent">
            <a href="inicial/criar_conta.php" class="btn btn-danger btn-block my-1 mt-sm-2 mr-sm-3">Cadastre-se agora</a>
            <a href="inicial/entrar.php" class="btn btn-light btn-block mt-sm-2 my-1">Entrar</a>
        </div>
    </nav>
</header>
  </div>

      <div class="bg-light">
          <div style="display:inline-block"><img id='div-img' src="images/9443xadrez3.jpg" alt="" style="width:100%; position:relative; filter: grayscale(25%);">
          <div class=" text-center text-white font-weight-bold text-secundary" style="position:absolute; width:100%; top:20%; display:inline-block; font-size:40px;">
            <p id='text-img-chess' style="-webkit-text-stroke-width: 0.3px; -webkit-text-stroke-color: black;">Quebra-cabeças Divertidos para Aperfeiçoar seu Cérebro<br />
              <style media='screen'>
              @media (max-width: 992px){#text-img-chess{font-size:20px;}}
              </style>
                    <a href="inicial/../inicial/criar_conta.php" class="btn btn-danger mr-3 mt-2" style="-webkit-text-stroke-width: 0px;">Comece Agora</a></p></div>
          </img>
          </div>
      <div class="container bg-light" >
        <div class="text-center">
          <!-- <img src="images/brain-games-xadrez.jpg" alt=""> -->



        </div>





        <footer class='container mt-3'>
        <ul class='nav border-top border-bottom col-12'>
        <li class='nav-item col-12 col-lg-2 text-center'><a class='nav-link text-secondary' href='footer/sobre_nos.php'>Sobre Nós</a></li>
        <li class='nav-item col-12 col-lg-2 text-center'><a class='nav-link text-secondary' href='footer/contato.php'>Contato</a></li>
        <li class='nav-item col-12 col-lg-3 text-center'><a class='nav-link text-secondary' href='footer/termos_de_servico.php'>Termos de Serviço</a></li>
        <li class='nav-item col-12 col-lg-3 text-center'><a class='nav-link text-secondary' href='footer/politica_de_privacidade.php'>Política de Privacidade</a></li>
        <li class='nav-item col-12 col-lg-2 text-center'><a class='nav-link text-secondary' href='footer/ajuda.php'>Ajuda</a></li>
        </ul>
        </footer>

            </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
