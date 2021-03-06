<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Jogos Linguagem</title>
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
            <a class="list-group-item list-group-item-action" href="jogosmemoria.php">Memória</a>
            <a class="list-group-item list-group-item-action" href="jogosespacial.php">Espacial</a>
            <a class="list-group-item list-group-item-action" href="jogoscalculo.php">Cálculo</a>
            <a class="list-group-item list-group-item-action bg-primary font-weight-bold text-white" href="jogoslinguagem.php">Linguagem</a>
          </div>


        <div class="col-12 col-sm-9 col-lg-10 bg-white border">

          <div class="row mt-3 mb-2" >

            <div class="col-12 mb-4 font-weight-bold" style="font-size:25px">Função de Linguagem</div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info text-center font-weight-bold text-white"> <a href="trinta_e_quatro.php" style="color:white">Quadrado Trinta e Quatro</a> </div>
                <div id='divjogoLinguagem1' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <a href="trinta_e_quatro.php" style="color:white"><img id='jogoLinguagem1' src="images/trintaEquatro.png" alt="trinta e quatro" class="card-img-top p-3"></a> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoLinguagem2' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <img id='jogoLinguagem2'src="images/executivoimages.png" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoLinguagem3' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"><img id='jogoLinguagem3'src="images/human-brain-white.jpg" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

          </div>

          <div class="row mt-1 mb-2" >

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoLinguagem4' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <img id='jogoLinguagem4' src="images/depositphotos_90095212-stock-illustration-illustration-of-albert-einstein.jpg" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoLinguagem5' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <img id='jogoLinguagem5' src="images/913183098-1024x1024.jpg" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoLinguagem6' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <img id='jogoLinguagem6' src="images/9170503-en-forme-de-dessin-monochrome-éléments-de-puzzle.jpg" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

        </div>
            </div>
            </div>
            </div>
            <script type="text/javascript">

              const jogoLinguagem1 = document.querySelector('#jogoLinguagem1')
              const jogoLinguagem2 = document.querySelector('#jogoLinguagem2')
              const jogoLinguagem3 = document.querySelector('#jogoLinguagem3')
              const jogoLinguagem4 = document.querySelector('#jogoLinguagem4')
              const jogoLinguagem5 = document.querySelector('#jogoLinguagem5')
              const jogoLinguagem6 = document.querySelector('#jogoLinguagem6')

              jogoLinguagem1.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoLinguagem1.addEventListener('mouseout', function() {this.src = 'images/trintaEquatro.png'})

              jogoLinguagem2.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoLinguagem2.addEventListener('mouseout', function() {this.src = 'images/executivoimages.png'})

              jogoLinguagem3.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoLinguagem3.addEventListener('mouseout', function() {this.src = 'images/human-brain-white.jpg'})

              jogoLinguagem4.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoLinguagem4.addEventListener('mouseout', function() {this.src = 'images/depositphotos_90095212-stock-illustration-illustration-of-albert-einstein.jpg'})

              jogoLinguagem5.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoLinguagem5.addEventListener('mouseout', function() {this.src = 'images/913183098-1024x1024.jpg'})

              jogoLinguagem6.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoLinguagem6.addEventListener('mouseout', function() {this.src = 'images/9170503-en-forme-de-dessin-monochrome-éléments-de-puzzle.jpg'})

              const divjogoLinguagem1 = document.querySelector('#divjogoLinguagem1')
              const divjogoLinguagem2 = document.querySelector('#divjogoLinguagem2')
              const divjogoLinguagem3 = document.querySelector('#divjogoLinguagem3')
              const divjogoLinguagem4 = document.querySelector('#divjogoLinguagem4')
              const divjogoLinguagem5 = document.querySelector('#divjogoLinguagem5')
              const divjogoLinguagem6 = document.querySelector('#divjogoLinguagem6')

              if(window.innerWidth > 991)
              {
                divjogoLinguagem1.style.height = "300px";
                divjogoLinguagem2.style.height = "300px";
                divjogoLinguagem3.style.height = "300px";

                divjogoLinguagem4.style.height = "300px";
                divjogoLinguagem5.style.height = "300px";
                divjogoLinguagem6.style.height = "300px";
              }


            </script>

            <?php require('variaveisPHPecho.php'); echo $html_footer; ?>

            </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
