<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">




    <title>Cancelar conta premium</title>
  </head>
  <body>
<?php
if(!isset($_SESSION)){session_start();}
if(!$_SESSION['premium_logado']){header('location:inicio-logado.php');}
?>

<?php require('nav.php'); ?>
    </div>

</div>

      <div class="bg-light p-3">
      <div class="container bg-white border col-lg-8" >
        <div class="text-center font-weight-bold p-3" style="font-size:30px">
          <p>Cancelar Conta Premium</p>
        </div>



        <div class="border-top mt-3 text-center">
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
            '<div class="p-3 text-center" style="font-size:25px; margin: 0 auto">
            <p>Você é um Usuario Premium '.ucfirst($_SESSION['plano_logado']).'</p>
            <div style="width:100px; height:100px;margin: 0 auto"><img src="images/premium.png" style="width:100px;"></div>
            </div>


          ';
          }


          ?>

          <form class="" action="tratar_cancelar-conta-premium.php" method="post">


          <p class="p-3 col-12 font-weight-bold" style="font-size:25px; color:red;">
            Ao acionar o botão "Cancelar conta premium" este usuario não terá mais acesso premium Brain Games e estará sujeito aos Termos de Serviço estabelecidos.</p>
          <input type="submit" class="btn btn-danger mt-3 mb-3 font-weight-bold" style="width:200px" name="cancelar_premium" value="Cancelar conta premium">
        </div>

      </form>



      <div class="col-12" >


        </div>











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
