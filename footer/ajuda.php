<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Central de Ajuda </title>
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
</div></div>
<div class="bg-light">
<div class="container bg-light py-5">
      <h1 class="p-2">Bem-vindo(a) à Central de ajuda</h1>
      <section>
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Estou tendo problemas para me conectar a minha conta. O que devo fazer?
                </button>
              </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body d-block">
                <p> Há diversas razões pelas quais você pode ter problemas ao se conectar. Abaixo estão alguns dos
                problemas mais comuns dos usários.</p>

                <h6  class="h5">Estou vendo “Ôpa, essa informação de login está incorreta.Tente novamente.”</h6>
                <ol>
                  <li>Confirme se a tecla caps lock está desabilitada (as senhas diferenciam maiúsculas
                  de minúsculas) e se você não adicionou nenhum espaço antes ou depois da sua senha
                  por engano.</li>
                  <li>Redefina a sua senha formulário de Redefinição de Senha. (Certifique-se de usar o
                  endereço de e-mail vinculado a sua conta na Brain Games). Se você não receber o e-mail
                  de redefinição de senha, verifique a sua pasta de spam. Se ele não estiver lá, envie
                  um e-mail para a nossa equipe de atendimento ao cliente, e redefiniremos a senha para você.</li>
                  <li>Se você ainda está tendo problemas, exclua qualquer senha armazenada automaticamente.
                  Isso vai garantir que informações inválidas das senhas não sejam inseridas automaticamente
                  pelo seu computador ou navegador.</li>
                </ol>

                <h6 class="h5">Estou vendo “Lamentamos mas não foi possível criar uma nova conta usando essas informações.
                Se você já possui uma conta, conecte-se.”</h6>
                <p>Se você está recebendo esse erro, isso quer dizer que você está usando a página de criação de conta
                em vez da página de login. Certifique-se de estar se conectando na página de login. </p>

                <h6 class="h5">Estou me conectando na conta de outra pessoa?</h6>
                <p>Isso pode acontecer se você estiver usando um computador compartilhado. Se a pessoa que usou a conta
                Brain Games antes de você e não desconectou da conta, você será levado automaticamente a conta dela quando
                acessar o lumosity.com. Observe que os lembretes de treinamento não vão levar você automaticamente até a
                sua conta, eles simplesmente irão levá-lo para o site Lumosity.com
                Para se desconectar da sua conta, clique no nome na parte superior direita da tela e selecione Desconectar.
                Consulte as instruções detalhadas para se desconectar.</p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Como faço para ser reembolsado?
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <h6 class="h5">Direito a reembolsos</h6>
                <p>Os reembolsos estão disponíveis para qualquer compra ou cobrança de renovação efetuadas pela Brain Games,
                com ou Google Play, desde que feitas nos últimos 30 dias (exceto para as compras de assinaturas mensais).</p>
                <p>As compras feitas pelo Apple iTunes não são reembolsáveis. Todos os reembolsos de assinaturas adquiridas
                pela App Store da Apple estão sujeitos
                aos
                <a href="http://www.apple.com/legal/itunes/us/terms.html" target="_blank">Termos de Serviços do iTunes</a>
                e são, portanto, não reembolsáveis pela Lumosity.</p>
                <h6 class="h5">Como solicitar um reembolso</h6>
                <p>Envie um E-mail para solicitação de reembolso e enviaremos um formulario, preencha os campos necessários.
                Os reembolsos estão sujeitos à nossa elegibilidade ao reembolso acima.</p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Onde estão os jogos gratuitos?
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                <p>Como usuário grátis você pode jogar 2 jogos por dia, desde que tenha uma conta conosco. Você pode jogar esses jogos quantas vezes quiser.
                Em um computador, acesse Brain Games. Conecte-se se solicitado e depois clique em “Iniciar treinamento”.
                Em um iPhone ou iPad, instale o aplicativo Brain Games e clique em “Iniciar treinamento”.
                Em um dispositivo Android, instale o aplicativo Brain Games e toque em “Iniciar treinamento”.
                Você pode jogar novamente os jogos através da guia Jogos.</p>
                <h6 class="h5">O que está incluso em uma assinatura gratuita?</h6>
                <p>A assinatura Básica (grátis) inclui 2 jogos gratuitos como parte de sua sessão de treinamento
                diário. Os jogos são trocados diariamente, por isso você vai experimentar um conjunto
                equilibrado de jogos sem comprar uma assinatura.</p>
                <h6 class="h5">Quando eu me conecto não vejo “Iniciar treinamento”.</h6>
                <p>Se você está tendo um problema diferente que esteja impedindo de acessar o seu treinamento grátis,
                envie-nos um e-mail!</p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Como tornar-me premium?
                </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                <p>É só se cadastrar em um dos planos do site. Acesse a página de <a href="../planos/planos.php">planos</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>


    <footer class="container mt-3">
        <ul class="nav col-12">
        <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="../footer/sobre_nos.php">Sobre Nós</a></li>
        <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="../footer/contato.php">Contato</a></li>
        <li class="nav-item col-12 col-lg-3 text-center"><a class="nav-link text-secondary" href="../footer/termos_de_servico.php">Termos de Serviço</a></li>
        <li class="nav-item col-12 col-lg-3 text-center"><a class="nav-link text-secondary" href="../footer/politica_de_privacidade.php">Política de Privacidade</a></li>
        <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="../footer/ajuda.php">Ajuda</a></li>
        </ul>
    </footer>
              </div>

        <img style="display: none;" src="https://www.lumosity.com/landing_pages/pixel.png?referrer=https%3A%2F%2Fwww.lumosity.com%2Fcontact&amp;request_uri=https%3A%2F%2Fbeacon.lumosity.com%2Flegal" alt="Pixel.png?referrer=https%3a%2f%2fwww.lumosity.com%2fcontact&amp;request uri=https%3a%2f%2fbeacon.lumosity" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
</html>
