<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<?php
//___Dados iniciais:
$inicial = 0; $form_php = 'jogosmemoria.php';  $funcao = 'memoria';


?>

    <title>Jogos <?php echo ucfirst($funcao); ?></title>
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
            <a class="list-group-item list-group-item-action <?php if($funcao == 'executiva'){echo 'bg-primary font-weight-bold text-white';} ?>" href="jogosexecutiva.php">Executiva</a>
            <a class="list-group-item list-group-item-action <?php if($funcao == 'memoria'){echo 'bg-primary font-weight-bold text-white';} ?>" href="jogosmemoria.php">Memória</a>
            <a class="list-group-item list-group-item-action <?php if($funcao == 'espacial'){echo 'bg-primary font-weight-bold text-white';} ?>" href="jogosespacial.php">Espacial</a>
            <a class="list-group-item list-group-item-action <?php if($funcao == 'calculo'){echo 'bg-primary font-weight-bold text-white';} ?>" href="jogoscalculo.php">Cálculo</a>
            <a class="list-group-item list-group-item-action <?php if($funcao == 'linguagem'){echo 'bg-primary font-weight-bold text-white';} ?>" href="jogoslinguagem.php">Linguagem</a>
          </div>

          <?php
          include ('conn.php');


          $verificação = $conn->query("SELECT * FROM jogos WHERE funcao = '$funcao' ORDER BY gratuito DESC ");


          $n = $verificação->fetchAll();
          $c = count($n);


          if(isset($_GET['p1'])){$inicial = 0;}  if(isset($_GET['p6'])){$inicial = 45;}
          if(isset($_GET['p2'])){$inicial = 9;}  if(isset($_GET['p7'])){$inicial = 54;}
          if(isset($_GET['p3'])){$inicial = 18;} if(isset($_GET['p8'])){$inicial = 63;}
          if(isset($_GET['p4'])){$inicial = 27;} if(isset($_GET['p9'])){$inicial = 72;}
          if(isset($_GET['p5'])){$inicial = 36;}

          $array_abertura = []; $array_fechamento = [];
          for ($i=0; $i < $c; $i++)
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
            if($i<$c && $_SESSION['premium_logado'] || $i<$c && !$_SESSION['premium_logado'] && $n[$i]['gratuito']){
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

          if($i<$c && !$_SESSION['premium_logado'] && !$n[$i]['gratuito'] ){
          echo
          $array_abertura[$i]."<div class='col-12 col-lg-4'>
            <div class='card'>
              <div class='card-header bg-info text-center font-weight-bold text-white'>
              <p style='color:white; display:inline-block'>".$n[$i]['nome']."</p>
              <img src='images/bloquear-simbolo-azul.jpg' style='width:20px; height:20px; margin-bottom:10px;' ></a></div>

              <div id='div_img_".$n[$i]['funcao'].$n[$i]['id']."' class='border-bottom divh300 text-center' style='overflow:hidden; min-height:100px; max-height:300px; margin: 0 auto'>
              <style media='screen'>@media (min-width: 992px){.divh300{height:300px;}}</style>
              <a id='div_premium_".$n[$i]['funcao'].$n[$i]['id']."' href='planos.php' style='display:none;' class='btn btn-danger mr-3 mt-2' >Liberar Acesso Total</a>
                  <img id='img_".$n[$i]['funcao'].$n[$i]['id']."' src='".$n[$i]['src_perfil']."' class='card-img-top p-3; '>
                   </div>
              <div class='card-body'>".$n[$i]['descricao']."</div>
            </div>
          </div>".$array_fechamento[$i];
        }
        }}

        function printar_script($valor_inicial,$valor_final,$n,$array_abertura,$array_fechamento,$c)
        {
        for ($i=$valor_inicial; $i <= $valor_final; $i++) {

        if($i<$c && !$_SESSION['premium_logado'] && !$n[$i]['gratuito'] ){
        echo"
        const div_img_".$n[$i]['funcao'].$n[$i]['id']." = document.querySelector('#div_img_".$n[$i]['funcao'].$n[$i]['id']."')
        const div_premium_".$n[$i]['funcao'].$n[$i]['id']." = document.querySelector('#div_premium_".$n[$i]['funcao'].$n[$i]['id']."')
        const img_".$n[$i]['funcao'].$n[$i]['id']." = document.querySelector('#img_".$n[$i]['funcao'].$n[$i]['id']."')

        div_img_".$n[$i]['funcao'].$n[$i]['id'].".addEventListener('mouseover', function()
        {
          img_".$n[$i]['funcao'].$n[$i]['id'].".src = 'images/cadeado300.jpg'
          div_premium_".$n[$i]['funcao'].$n[$i]['id'].".style.display = 'inline-block'
        })

        div_img_".$n[$i]['funcao'].$n[$i]['id'].".addEventListener('mouseout', function()
        {
          img_".$n[$i]['funcao'].$n[$i]['id'].".src = '".$n[$i]['src_perfil']."'
          div_premium_".$n[$i]['funcao'].$n[$i]['id'].".style.display = 'none'
        })

        ";

      }
      }}





           ?>

        <div class="col-12 col-sm-9 col-lg-10 bg-white border">


            <div class="col-12 mb-4 font-weight-bold" style="font-size:25px">Função <?php echo ucfirst($funcao); ?></div>

            <div class="row mt-3 mb-2" >
            <?php printar_jogos($inicial,($inicial+2),$n,$array_abertura,$array_fechamento,$c); ?>

          </div>

          <div class="row mt-1 mb-2" >

            <?php printar_jogos(($inicial+3),($inicial+5),$n,$array_abertura,$array_fechamento,$c); ?>

        </div>

        <form class="" action="<?php echo $form_php; ?>" method="get">


        <div class="row mt-1 mb-2" >

          <?php printar_jogos(($inicial+6),($inicial+8),$n,$array_abertura,$array_fechamento,$c); ?>

          <script type="text/javascript">
          <?php printar_script($inicial,($inicial+8),$n,$array_abertura,$array_fechamento,$c); ?>

          </script>


          <?php echo $tg_ap1; ?><nav class="col-12 mt-3" aria-label="Page navigation example">
            <ul class="pagination">
                                    <li class="page-item"><input type="submit" name="p1" value="1" class="page-link <?php if($inicial == 0){echo 'bg-info text-white';}else{echo ' bg-secundary';} ?>"></li>
              <?php echo $tg_ap2; ?><li class="page-item"><input type="submit" name="p2" value="2" class="page-link <?php if($inicial == 9){echo 'bg-info text-white';}else{echo ' bg-secundary';} ?>"></li><?php echo $tg_fp2; ?>
              <?php echo $tg_ap3; ?><li class="page-item"><input type="submit" name="p3" value="3" class="page-link <?php if($inicial == 18){echo 'bg-info text-white';}else{echo ' bg-secundary';} ?>"></li><?php echo $tg_fp3; ?>

              <?php echo $tg_ap4; ?><li class="page-item"><input type="submit" name="p4" value="4" class="page-link <?php if($inicial == 27){echo 'bg-info text-white';}else{echo ' bg-secundary';} ?>"></li><?php echo $tg_fp4; ?>
              <?php echo $tg_ap5; ?><li class="page-item"><input type="submit" name="p5" value="5" class="page-link <?php if($inicial == 36){echo 'bg-info text-white';}else{echo ' bg-secundary';} ?>"></li><?php echo $tg_fp5; ?>
              <?php echo $tg_ap6; ?><li class="page-item"><input type="submit" name="p6" value="6" class="page-link <?php if($inicial == 45){echo 'bg-info text-white';}else{echo ' bg-secundary';} ?>"></li><?php echo $tg_fp6; ?>

              <?php echo $tg_ap7; ?><li class="page-item"><input type="submit" name="p7" value="7" class="page-link <?php if($inicial == 54){echo 'bg-info text-white';}else{echo ' bg-secundary';} ?>"></li><?php echo $tg_fp7; ?>
              <?php echo $tg_ap8; ?><li class="page-item"><input type="submit" name="p8" value="8" class="page-link <?php if($inicial == 63){echo 'bg-info text-white';}else{echo ' bg-secundary';} ?>"></li><?php echo $tg_fp8; ?>
              <?php echo $tg_ap9; ?><li class="page-item"><input type="submit" name="p9" value="9" class="page-link <?php if($inicial == 72){echo 'bg-info text-white';}else{echo ' bg-secundary';} ?>"></li><?php echo $tg_fp9; ?>



              <?php echo $tg_ap1; ?>
            </ul>
          </nav><?php echo $tg_fp1; ?>
    </form>
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
