<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Compra - BiAnual</title>
  </head>
  <body>
<?php require('nav.php'); ?>
    </div>
    <?php if($_SESSION['premium_logado']){header('location:inicio-logado.php');} ?>
</div>
      <div class="bg-light pt-3">



      <div class="bg-light container" >

        <div class="col-12 col-lg-6 border mb-3 p-3 font-weight-bold" style="background-color:rgb(238,238,238); font-size:25px">Dois anos -
          <span style="font-size:15px">(Garantia de devolução integral do dinheiro por 30 dias)</span>   <a href="planos.php" style="font-size:15px">Mudar plano</a> </div>

        <div class=" col-12 col-lg-6 bg-white border">

          <div class="col-12 text-center mt-2 mb-2"> <img src="images/creditcards-491f890bc7d938b88c7a116943cb9efdffe5c48fc565afa5869c9279f316a403.png" alt=""> </div>



          <form action="tratar_plano-bianual.php" method="post">
            <div class="form-group p-2">
              <label for="nome_titular">Nome do titular do cartão:</label>
              <input type="text" class="form-control col-12 col-lg-8" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>

            <div class="form-group p-2">
              <label for="numero_cartao">Número do cartão:</label>
              <input type="text" class="form-control col-12 col-lg-8" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>

            <label for="exampleFormControlSelect1" class="ml-2">Data de validade:</label>
            <div class="form-row ml-2 mb-2">
              <select class="form-control col-5 col-lg-3" id="exampleFormControlSelect1">
                <option>1</option> <option>2</option> <option>3</option> <option>4</option>  <option>5</option>  <option>6</option>
                <option>7</option> <option>8</option> <option>9</option> <option>10</option> <option>11</option> <option>12</option>
              </select>

              <select class="form-control col-5 col-lg-3" id="exampleFormControlSelect1">
                <option>2018</option> <option>2019</option> <option>2020</option> <option>2021</option>  <option>2022</option>
                <option>2023</option> <option>2024</option> <option>2025</option> <option>2026</option>  <option>2027</option>
                <option>2028</option> <option>2029</option> <option>2030</option> <option>2031</option>  <option>2032</option>
                <option>2033</option> <option>2034</option> <option>2035</option> <option>2036</option>  <option>2037</option>
                <option>2038</option> <option>2039</option> <option>2040</option> <option>2041</option>  <option>2042</option>
              </select>

            </div>

            <div class="form-group p-2">
              <label for="codigo_seguranca">Código de segurança:</label>
              <input type="text" class="form-control col-5 col-lg-3" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>

            <p class="ml-2 text-danger font-weight-bold" style="font-size:25px;">Você paga: R$ 89,76</p>

            <p class="ml-2">Ao adquirir, eu concordo com a assinatura recorrente para o serviço da Brain Games,
               sujeito aos <a href="#">Termos de serviço</a> e <a href="#">Política de pagamento</a>, da Brain Games,
                e os seguintes termos: Cobrança anual, R$ 89,76 por ciclo de cobrança, cobrado antecipadamente.
                Posso cancelá-lo a qualquer momento após a efetivação do ciclo de cobrança seguinte.</p>

                <input type="submit" name="enviar" value="Enviar" class="btn btn-danger mb-3"></input>
              </form>
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
