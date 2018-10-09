<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Brain Games - Planos</title>
        <link rel='shortcut icon' href="../images/brain_icon.gif" /> 
  </head>
  <body>
<?php require('../include/nav.php'); ?>
    </div>

    <?php if($_SESSION['premium_logado']){header('location:../artigos/inicio_logado.php');} ?>

</div>
      <div class="bg-light">



      <div class="bg-light container">




        <div class="col-12 col-sm-12 col-lg-12 ">

          <div class="row mb-2" >

            <div class="col-12 mb-3 font-weight-bold text-center mt-3" style="font-size:25px">Qual plano Premium é o melhro para você? </div>

            <div class="col-12 col-lg-3 mb-3" >
              <div class="card">
                <div class="card-header bg-white text-center font-weight-bold" style="font-size:25px"> Mensal <br /> <span class="text-secondary" style="font-size:15px">SIMPLES E FÁCIL</span> </div>
                <div class="card-body text-center font-weight-bold" style="font-size:30px"><span>R$</span> 11,95 <span style="font-size:15px">por mês</span></div>
                <div class="card-body text-center" style="color:white">--</div>
                <div class="card-body text-center"><a href="plano_mensal.php" class="btn btn-danger">Selecionar</a></div>
                <div class="card-footer text-center text-secondary">Cobrança recorrente <br /> <span style="color:rgb(247,247,247)">-------------------------------------------------------------------------</span> </div>
                </div>
              </div>


              <div class="col-12 col-lg-3 mb-3" >
                <div class="card">
                  <div class="card-header bg-info text-center font-weight-bold text-white" style="font-size:25px"> Anual <br /> <button type="button" class="btn" style="font-size:10px; background-color:rgb(10,90,100); color:white">MAIS POPULAR</button> </div>
                  <div class="card-body text-center font-weight-bold" style="font-size:30px"><span>R$</span> 4,95 <span style="font-size:15px">por mês</span></div>
                  <div class="card-body text-center text-secondary" >Total R$ 59,40</div>
                  <div class="card-body text-center"><a href="plano_anual.php" class="btn btn-danger">Selecionar</a></div>
                  <div class="card-footer text-center text-secondary">Cobrança recorrente <br /> Garantia de devolução integral do dinheiro por 30 dias </div>
                  </div>
                </div>

                <div class="col-12 col-lg-3 mb-3" >
                  <div class="card">
                    <div class="card-header bg-white text-center font-weight-bold" style="font-size:25px"> Dois anos <br /> <span style="font-size:15px; color:white" > -- </span> </div>
                    <div class="card-body text-center font-weight-bold" style="font-size:30px"><span>R$</span> 3,74 <span style="font-size:15px">por mês</span></div>
                    <div class="card-body text-center text-secondary" >Total R$ 89,76</div>
                    <div class="card-body text-center"><a href="plano_bianual.php" class="btn btn-danger">Selecionar</a></div>
                    <div class="card-footer text-center text-secondary">Cobrança recorrente <br /> Garantia de devolução integral do dinheiro por 30 dias </div>
                    </div>
                  </div>

                  <div class="col-12 col-lg-3 mb-3" >
                    <div class="card">
                      <div class="card-header bg-white text-center font-weight-bold" style="font-size:25px"> Vitalício <br /> <span class="text-secondary" style="font-size:15px">PAGAMENTO ÚNICO</span> </div>
                      <div class="card-body text-center font-weight-bold" style="font-size:30px"><span>R$</span> 299,95</div>
                      <div class="card-body text-center" style="color:white">--</div>
                      <div class="card-body text-center"><a href="plano_vitalicio.php" class="btn btn-danger">Selecionar</a></div>
                      <div class="card-footer text-center text-secondary"><br /> Garantia de devolução integral do dinheiro por 30 dias </div>
                      </div>
                    </div>

          </div>


            </div>
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
