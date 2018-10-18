<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Jogos Memoria</title>
        <link rel='shortcut icon' href="../images/brain_icon.gif" />
  </head>
  <body>
<?php require('../include/nav.php'); ?>
    </div>

</div>

      <div class="bg-light">


      <div class="container bg-light" style="padding-top:20px">



        <div class="col-12 bg-white border">


            <div class="col-12 mb-4 font-weight-bold text-center" style="font-size:25px">
              <h1>
              <?php
              if($_SESSION['sexo_logado'] == 'masculino'){echo 'Bem Vindo!';}
              if($_SESSION['sexo_logado'] == 'feminino'){echo 'Bem Vinda!';}
              if($_SESSION['sexo_logado'] == 'outro'){echo 'Bem Vindo(a)!';} 
              ?>
            </h1>

              <?php        if($_SESSION['plano_logado'])
                        {
                          if($_SESSION['sexo_logado'] == 'masculino'){
                          echo
                          '<div class="p-3 text-center" style="font-size:25px; margin: 0 auto">
                          <p>Você é um Usuario Premium '.ucfirst($_SESSION['plano_logado']).'</p>
                          <div style="width:100px; height:100px;margin: 0 auto"><img src="../images/premium.png" style="width:100px;"></div>
                          </div>

                        ';}
                        else
                        {
                          echo
                          '<div class="p-3 text-center" style="font-size:25px; margin: 0 auto">
                          <p>Você é uma Usuaria Premium '.ucfirst($_SESSION['plano_logado']).'</p>
                          <div style="width:100px; height:100px;margin: 0 auto"><img src="../images/premium.png" style="width:100px;"></div>
                          </div>

                        ';
                        }
                        } ?>

            </div>

            <div class="card mt-3 mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-12 bg-warning" style="margin: 0 auto; display:flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
                    <div class="m-3 rounded-circle text-align bg-white" style="height:150px; width:150px;overflow:hidden; margin: 0 auto; text-align:center; overflow:hidden; display:inline-block">
                      <a href="#"><img src="../images/human-brain-white.jpg" class="mt-4" style="width:120px;"></img></a>
                    </div>
                    </div>
                    <div class="col-lg-8 col-12" style="margin: 0 auto;display:flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
                      <h2 align="center" class="font-weight-bold mt-5">
                      Parabéns! Você resolveu cuidar do futuro do seu cérebro.  </h2>
                      <br/>

                      </div> </div> </div> </div>




              <article class="col-12">

                <p align="justify">
                  Essa parte é difícil. A nossa contribuição para esse esforço é criar exercícios em interessantes formatos de quebra-cabeças. Nós também vamos dizer como os seis sistemas cognitivos, que funcionam mais para você em situações reais, podem ser incentivados a fazer melhor o trabalho deles. São eles: Executiva, Memória, Cálculo, Espacial, Linguagem e Social/Emocional. São eles que o fazem sobressair no trabalho, desenvolver um armazenamento útil de lembranças, planejar e viver de maneira interessante na velhice.
                  </p>
                  <p align="justify">
                  Permita-nos falar um pouco sobre o seu segundo bem mais valioso. O seu segundo bem mais valioso. O seu cérebro começa a ficar mais lento assim que seu projeto termina de se desdobrar por volta dos 20 anos. A partir de então, ele tem uma perda de capacidade igual a cada ano, e continuará assim. Os sintomas da redução de velocidade – dos “momentos seniores” até o Alzheimer – são apenas sinais dos efeitos cumulativos da perda continua que começam a parecer visivelmente no seu comportamento.
                  </p>

                  <div class="card mt-3 mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-8 col-12" style="margin: 0 auto;display:flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
                          <h2 align="center" id="card2" class="font-weight-bold mt-5">
                          Você deu o primeiro passo ao escolher este site.  </h2>
                          <br/>

                          </div>

                        <div class="col-lg-4 col-12 bg-success" style="margin: 0 auto; display:flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
                          <div class="m-3 rounded-circle text-align bg-white" style="height:150px; width:150px;overflow:hidden; margin: 0 auto; text-align:center; overflow:hidden; display:inline-block">
                            <a href="#"><img src="../images/54_Pegadas.png" class="mt-3" style="width:120px;"></img></a>
                          </div>
                          </div>

                         </div> </div> </div>

                  <p align="justify">
                  A boa notícia é que você pode fazer algo. Brain Games é designado a ajuda-lo a tornar mais lenta a redução de velocidade. Ainda não existem pílulas ou vacinas para estimular sua inteligência sem esforço; Em dez anos, algumas pílulas para melhorar a memória serão testadas, aprovadas e vendidas. Agora, o exercício-alvo é tão bom para o seu cérebro quanto para os seus músculos e os sistemas cardiopulmonares.
                  </p>
                  <p align="justify">
                  Experimente um exercício por dia. Comece com os mais fáceis. Se você não avançar, não desista do exercício. A cada dia, você será capaz de aprender alguma coisa sobre como funciona o cérebro humano quando ele soluciona os problemas. Chamamos essas dicas de desempenho de “você sabia”, pois muitas delas serão uma surpresa. Contudo, nós as selecionamos nos resultados da pesquisa neurocientífica, muitos delas em pesquisas publicadas desde a virada do milênio. Geralmente, você pode aplica-las diretamente em situações da vida real para aprimorar o desempenho. Algumas confirmarão uma sensação que você teve o tempo todo, sozinho, sobre como o cérebro consegue fazer as coisas.
                  </p>

                  <div class="card mt-3 mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-4 col-12 bg-info" style="margin: 0 auto; display:flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
                          <div class="m-3 rounded-circle text-align" style="background-color:rgb(246,246,246);height:150px; width:150px;overflow:hidden; margin: 0 auto; text-align:center; overflow:hidden; display:inline-block">
                            <a href="#"><img src="../images/dedos.jpg" class="mt-3 ml-4" style="width:120px;"></img></a>
                          </div>
                          </div>
                          <div class="col-lg-8 col-12" style="margin: 0 auto;display:flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
                            <h2 align="center" class="font-weight-bold mt-5">
                          Os jogos o ajudarão de três maneiras, bem diferentes.  </h2>
                            <br/>

                            </div> </div> </div> </div>

                  <p align="justify">
                  Primeiro, eles o tornarão efetivamente mais consciente de que, de fato, você pode controlar muito do que acontece no seu cérebro. Você pode aperfeiçoar a habilidade com a qual lida. Segundo, eles o ensinarão estratégias para ver os problemas de maneiras que sugerem soluções. Diferentes formatos de quebra-cabeças podem ser aplicados aos problemas do mundo real. Terceiro, você estará ajudando a tornar mais fortes as células cerebrais. É verdade, quando você fizer as células trabalharem, fisicamente elas criarão novas conexões, chamadas dendritos e axônios, que lhes permitirão passar sinais entre as células. Como tudo mais, quanto mais recursos você puder levar para solucionar um problema, mais provavelmente encontrará uma boa solução.
                  </p>
                  <p align="justify">
                  Um motivo importante para permanecer com um enigma até você ter conseguido dominá-lo , por mais doloroso que possa ser, é que é benéfico para você da mesma maneira que “sem dor, sem valor” é em uma rotina física de exercícios. Ele constrói o mesmo tipo de resistência. É conhecido como “concentração” no desempenho mental. A perseverança pode ser aperfeiçoada da mesma forma como o treinamento aeróbico o ajuda a correr ou nadar mais longe sempre a cada vez. Frequentemente, capacidades maiores de concentração vencerão uma corrida competitiva por uma solução.
                  </p>




              </article>


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
