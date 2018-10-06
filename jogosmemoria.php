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
    <?php require('nav.php'); ?>
    </div>

</div>

      <div class="bg-light">


      <div class="container bg-light" style="padding-top:20px">
        <div class="row">


          <div id="list-example" class="col-12 col-sm-3 col-lg-2 list-group mb-3 text-align">
            <p class="list-group-item list-group-item-action bg-info text-center font-weight-bold text-white">Funções</p>
            <a class="list-group-item list-group-item-action" href="abajogos.php">Executiva</a>
            <a class="list-group-item list-group-item-action bg-primary font-weight-bold text-white" href="jogosmemoria.php">Memória</a>
            <a class="list-group-item list-group-item-action" href="jogosespacial.php">Espacial</a>
            <a class="list-group-item list-group-item-action" href="jogoscalculo.php">Cálculo</a>
            <a class="list-group-item list-group-item-action" href="jogoslinguagem.php">Linguagem</a>
          </div>

          <?php
          include ('conn.php');



          $verificação = $conn->query("SELECT * FROM jogos WHERE funcao = 'memoria' ");


          $n = $verificação->fetchAll();
          $c = count($n);



          $array_abertura = []; $array_fechamento = [];
          for ($i=0; $i < 9; $i++)
          {
            if($i>$c || $i==$c){array_push($array_abertura,"<!--");}
            else{array_push($array_abertura,"");}

            if($i>$c || $i==$c){array_push($array_fechamento,"-->");}
            else{array_push($array_fechamento,"");}
          }

          //tag abertura e fechamento das paginas $tg_ap1 = Tag abertura da página 1 $tg_fp1 = Tag fechamento da página 1

          $tg_ap1="<!--";$tg_ap2="<!--";$tg_ap3="<!--";$tg_ap4="<!--";$tg_ap5="<!--";$tg_ap6="<!--";$tg_ap7="<!--";$tg_ap8="<!--";$tg_ap9="<!--";
          $tg_fp1="-->";$tg_fp2="-->";$tg_fp3="-->";$tg_fp4="-->";$tg_fp5="-->";$tg_fp6="-->";$tg_fp7="-->";$tg_fp8="-->";$tg_fp9="-->";

          if($c>9){$tg_ap1="";$tg_ap2="";$tg_fp1="";$tg_fp2="";}
          if($c>18){$tg_ap3="";$tg_fp3="";}
          if($c>27){$tg_ap4="";$tg_fp4="";}
          if($c>36){$tg_ap5="";$tg_fp5="";}
          if($c>45){$tg_ap6="";$tg_fp6="";}
          if($c>54){$tg_ap7="";$tg_fp7="";}
          if($c>63){$tg_ap8="";$tg_fp8="";}
          if($c>72){$tg_ap9="";$tg_fp9="";}


          function printar_jogos($valor_inicial,$valor_final,$n,$array_abertura,$array_fechamento,$c)
          {
          for ($i=$valor_inicial; $i <= $valor_final; $i++) {
            if($i<$c){
            echo
            $array_abertura[$i]."<div class='col-12 col-lg-4'>
              <div class='card'>
                <div class='card-header bg-info text-center font-weight-bold text-white'>
                <p style='color:white'>".$n[$i]['nome']."</p> </div>

                <div class='border-bottom divh300' style='overflow:hidden; min-height:100px; max-height:300px'>
                <style media='screen'>@media (min-width: 992px){.divh300{height:300px;}}</style>
                  <a href='".$n[$i]['nome_arquivo']."'style='color:white'>
                    <img src='".$n[$i]['src_perfil']."' class='card-img-top p-3'></a> </div>
                <div class='card-body'>".$n[$i]['descricao']."</div>
              </div>
            </div>".$array_fechamento[$i];
          }
        }}



           ?>

        <div class="col-12 col-sm-9 col-lg-10 bg-white border">


            <div class="col-12 mb-4 font-weight-bold" style="font-size:25px">Função Memoria</div>

            <div class="row mt-3 mb-2" >
            <?php printar_jogos(0,2,$n,$array_abertura,$array_fechamento,$c); ?>

          </div>

          <div class="row mt-1 mb-2" >

            <?php printar_jogos(3,5,$n,$array_abertura,$array_fechamento,$c); ?>

        </div>


        <div class="row mt-1 mb-2" >

          <?php printar_jogos(6,8,$n,$array_abertura,$array_fechamento,$c); ?>


          <?php echo $tg_ap1; ?><nav class="col-12 mt-3" aria-label="Page navigation example">
            <ul class="pagination">

              <li class="page-item"><a class="page-link bg-info text-white" href="abajogos.php">1</a></li>
              <?php echo $tg_ap2; ?><li class="page-item"><a class="page-link" href="funcaoexecutivap2.php">2</a></li><?php echo $tg_fp2; ?>
              <?php echo $tg_ap3; ?><li class="page-item"><a class="page-link" href="funcaoexecutivap3.php">3</a></li><?php echo $tg_fp3; ?>

              <?php echo $tg_ap4; ?><li class="page-item"><a class="page-link" href="funcaoexecutivap4.php">4</a></li><?php echo $tg_fp4; ?>
              <?php echo $tg_ap5; ?><li class="page-item"><a class="page-link" href="funcaoexecutivap5.php">5</a></li><?php echo $tg_fp5; ?>
              <?php echo $tg_ap6; ?><li class="page-item"><a class="page-link" href="funcaoexecutivap6.php">6</a></li><?php echo $tg_fp6; ?>

              <?php echo $tg_ap7; ?><li class="page-item"><a class="page-link" href="funcaoexecutivap7.php">7</a></li><?php echo $tg_fp7; ?>
              <?php echo $tg_ap8; ?><li class="page-item"><a class="page-link" href="funcaoexecutivap8.php">8</a></li><?php echo $tg_fp8; ?>
              <?php echo $tg_ap9; ?><li class="page-item"><a class="page-link" href="funcaoexecutivap9.php">9</a></li><?php echo $tg_fp9; ?>



              <?php echo $tg_ap1; ?>
            </ul>
          </nav><?php echo $tg_fp1; ?>

      </div>





            </div>
            </div>
            </div>


<?php require('variaveisPHPecho.php'); echo $html_footer; ?>

            </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
