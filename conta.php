<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">




    <title>Conta</title>
  </head>
  <body>
<?php if(!isset($_SESSION)){session_start();} ?>

<?php require('nav.php'); ?>
    </div>

</div>

      <div class="bg-light p-3">
      <div class="container bg-white border col-lg-8" >
        <div class="text-center font-weight-bold p-3" style="font-size:30px">
          <p>Conta</p>
        </div>



        <div class="border-top mt-3">
          <?php
          if(!$_SESSION['premium_logado'])
          {
            echo
            '<div class="p-3" style="font-size:25px">
            <p>Você tem Acesso Limitado ao Brain Games</p>
            <a href="planos.php" class="btn btn-danger mr-3 mt-2" style="-webkit-text-stroke-width: 0px;">Liberar Acesso Total</a>
          </div>';
          }

          if($_SESSION['plano_logado'])
          {
            echo
            '<div class="p-3 text-center" style="font-size:25px">
            <p>Você é um Usuario Premium '.ucfirst($_SESSION['plano_logado']).'</p>
          </div>';
          }


          ?>
        </div>

        <div class="border-top ">
          <p class="p-3 col-12" style="font-size:25px">Informações de acesso</p>
          <div class="row">
          <p class="p-3 ml-3 col-lg-4 col-12" style="font-size:15px">Email:</p>
          <p class="p-3 ml-3 col-lg-4 col-12 font-weight-bold" style="font-size:15px"><?php echo $_SESSION['email_logado']; ?></p>
          <a href="alterar-email.php" class="p-3 col-lg-3 col-12 ml-3 font-weight-bold" style="font-size:15px">Alterar email</a>
          </div>

          <div class="">
          <a href="alterar-senha.php" class="p-3 col-lg-4 col-12 font-weight-bold" style="font-size:15px">Alterar senha</a>
          </div>
        </div>

        <div class="border-top mt-3">
          <p class="p-3 col-12" style="font-size:25px">Informações pessoais</p>
          <div class="row">
            <div class="col-lg-3 col-12">
              <div class="m-3 border" style="height:150px; width:150px; margin: 0 auto; overflow:hidden; text-align:center;">
                <img src="<?php echo $_SESSION['src_perfil'] ?>" alt="" style="height:150px;"></img>
              </div>
            </div>

              <div class="col-lg-8 col-12">
                <table class="table table-borderless">

                  <tbody>
                    <tr>
                      <th scope="row">Nome</th>
                      <td><?php echo $_SESSION['username_logado']; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Nascimento</th>

                      <?php
                      $ano = substr ( $_SESSION['aniversario_logado'] , 0 , 4 );
                      $mes = substr ( $_SESSION['aniversario_logado'] , 5 , 2 );
                      $dia = substr ( $_SESSION['aniversario_logado'] , 8 , 2 );

                      if('01' === $mes ){$mes="Janeiro";}   if('07' === $mes ){$mes="Julho";}
                      if('02' === $mes ){$mes="Fevereiro";} if('08' === $mes ){$mes="Agosto";}
                      if('03' === $mes ){$mes="Março";}     if('09' === $mes ){$mes="Setembro";}
                      if('04' === $mes ){$mes="Abril";}     if('10' === $mes ){$mes="Outubro";}
                      if('05' === $mes ){$mes="Maio";}      if('11' === $mes ){$mes="Novembro";}
                      if('06' === $mes ){$mes="Junho";}     if('12' === $mes ){$mes="Dezembro";}

                      $aniversario = $dia." de "."$mes"." "."$ano";

                       ?>
                      <!-- <td>14 de setembro de 1993</td> -->
                      <td><?php echo $aniversario; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Sexo</th>
                      <td ><?php echo ucfirst($_SESSION['sexo_logado']); ?></td>
                    </tr>

                    <tr>
                      <th scope="row" colspan="2"> <a href="alterar-informacoes-pessoais.php">Alterar informações Pessoais</a> </th>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>

          </div>

        <div class="border-top mt-3 mb-3">
          <a href="#" class="m-3 font-weight-bold">Excluir conta</a>
        </div>


        </div>



      <div class="col-12" >


        </div>














<?php require('variaveisPHPecho.php'); echo $html_footer; ?>

            </div>
                    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
