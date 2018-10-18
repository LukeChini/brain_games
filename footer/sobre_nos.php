<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sobre Nós</title>
  </head>
  <?php
  session_start();
  if ($_SESSION['index_logar'])
  {
  echo '<header>
  <nav class="navbar navbar-expand-lg navbar-light w-100 d-flex justify-content-around align-items-center row mx-0 px-1">
      <div class="logo-box col-2 p-1">
          <a class="nav-link p-0" href="index.php">
              <img src="../images/logo.jpg" alt="logo" class="img-fluid" style="width:100px;">
          </a>
      </div>

      <div class="col-7 col-lg-5 p-1">
          <a class="logo-text nav-link text-info font-weight-bold px-lg-0" href="../index.php">
            Brain Games
          </a>
      </div>

      <button class="navbar-toggler mr-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon top-menu-button"></span>
      </button>

      <div class="botoes-topo collapse navbar-collapse mx-3 mx-sm-5 mr-lg-2 mt-1 mt-sm-2 flex-column flex-md-row col-lg-4" id="navbarSupportedContent">
          <a href="../inicial/criar_conta.php" class="btn btn-danger btn-block my-1 mt-sm-2 mr-sm-3">Cadastre-se agora</a>
          <a href="../inicial/entrar.php" class="btn btn-light btn-block mt-sm-2 my-1">Entrar</a>
      </div>
  </nav>
  </header>';

  }
  if($_SESSION['usuario_logado'])
  {
    require('../include/nav.php');
  }

  ?>



    </div>

</div>
      <div class="bg-light pt-3">
  <div class="container">

  <section class='informação' id='about'>

  <p class=" font-weight-bold" style="font-size:30px">Sobre Nós</p>
    <p>Na Brain Games, acreditamos em ajudar as pessoas a manterem o cérebro desafiado. Por isso, criamos uma ferramenta online simples que permite que qualquer um treine suas habilidades cognitivas essenciais. De neurociência a artes visuais, combinamos diversas disciplinas para criar um programa de treinamento cerebral envolvente, colocando pesquisa cognitiva ao alcance de todos. Através do
      <a href="https://www.lumosity.com/hcp">Projeto Cognição Humana</a>, colaboramos com mais de 100 pesquisadores líderes, médicos e professores de instituições ao redor do mundo.
    </P></section>

  <section class='row' id='team'>

    <p class=" font-weight-bold" style="font-size:30px">Nossa Equipe</p>
      <p>Nossa equipe da Brain Games é composta por um time de alunos da Digital House co curso de FullStack que criou ferramentas digitais que ajudam usuários em diversas áreas, como treino cognitivo, sono e atenção plena (mindfulness).
      </p></section>

      <footer class="container mt-3">
          <ul class="nav col-12">
          <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="../footer/sobre_nos.php">Sobre Nós</a></li>
          <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="../footer/contato.php">Contato</a></li>
          <li class="nav-item col-12 col-lg-3 text-center"><a class="nav-link text-secondary" href="../footer/termos_de_servico.php">Termos de Serviço</a></li>
          <li class="nav-item col-12 col-lg-3 text-center"><a class="nav-link text-secondary" href="../footer/politica_de_privacidade.php">Política de Privacidade</a></li>
          <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="../footer/ajuda.php">Ajuda</a></li>
          </ul>
      </footer>
      <div class='pixels'>
      <script>
      //<![CDATA[

        Eventd = (typeof(Eventd) === 'object') ? Eventd : {};
        Eventd.disabled = true;
        Eventd.clientName = '';
        Eventd.controllerName = "terms";
        Eventd.controllerAction = "show";
        var _leq = _leq || [];
        _leq.push(['page_view']);

      //]]>
      </script>

</div>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
