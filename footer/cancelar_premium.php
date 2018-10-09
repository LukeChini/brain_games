<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Jogos Memoria</title>
  </head>
  <body>
<?php require('../include/nav.php'); ?>
    </div>

</div>



      <div class="bg-light">


      <div class="container bg-light" style="padding-top:20px">
        <div class="row">

        <div class="col-12 bg-white border text-center">
          <h1>Cancelamento da Conta</h1>
          <div class="row mt-3 mb-2 text-center" >


            <div class=" text-center" role="group" style="margin:0 auto" aria-label="Basic example">
              <?php if($_SESSION['plano_logado']){echo '<a href="cancelar_conta_premium.php" type="button" class="btn btn-danger total mt-3 mb-3 font-weight-bold" style="width:200px">Cancelar conta premium</a>';} ?>
              <a href="excluir_usuario.php" type="button" class="btn btn-dark total mt-3 mb-3 font-weight-bold" style="width:200px">Excluir Usuario</a>
            </div>





            <?php require('../include/variaveis_php_echo.php'); echo $html_footer; ?>

            </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
