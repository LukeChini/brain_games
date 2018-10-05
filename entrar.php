<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cabecalho.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Brain Games - Entrar</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light w-100 d-flex justify-content-around align-items-center row mx-0 px-1">
            <div class="logo-box col-2 p-1">
                <a class="nav-link p-0" href="index.php">
                    <img src="images/logo.jpg" alt="logo" class="img-fluid">
                </a>
            </div>

            <div class="col-7 col-lg-5 p-1">
                <a class='logo-text nav-link text-info font-weight-bold px-lg-0' href='index.php'>Brain Games</a>
            </div>

            <button class="navbar-toggler mr-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon top-menu-button"></span>
            </button>

            <div class="botoes-topo collapse navbar-collapse mx-3 mx-sm-5 mr-lg-2 mt-1 mt-sm-2 flex-column flex-md-row col-lg-4" id="navbarSupportedContent">
                <a href="criar_conta.php" class="btn btn-danger btn-block btn-sm my-1 mt-sm-2 mr-sm-3">Cadastre-se agora!</a>
            </div>
        </nav>
    </header>

    <main class="bg-light">
      <section class="container">
        <h1 class="text-center p-4">Acesso para membro</h1>

        <form class="col-md-8 col-lg-6 mx-auto" action="tratar_entrar.php" method="post">
          <div class="form-group mb-4">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
              </div>
              <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Coloque seu e-mail">
            </div>
          </div>

          <div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-lock"></i></div>
              </div>
              <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Coloque sua senha">
            </div>
          </div>

          <div class="text-center">
            <a class="my-4 d-block" href="#">Esqueci minha senha</a>
            <button type="submit" class="mb-4 btn btn-primary col-8">Entrar</button>
          </div>
        </form>
      
      </section>
    </main>
<?php include "footer.php"; ?>
