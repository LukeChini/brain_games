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


        <div class="col-12 col-sm-9 col-lg-10 bg-white border">

          <div class="row mt-3 mb-2" >

            <div class="col-12 mb-4 font-weight-bold" style="font-size:25px">Funções da Memória</div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info text-center font-weight-bold text-white"> <a href="trinta_e_quatro.php" style="color:white">Quadrado Trinta e Quatro</a> </div>
                <div id='divjogoMemoria1' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <a href="trinta_e_quatro.php" style="color:white"><img id='jogoMemoria1' src="images/trintaEquatro.png" alt="trinta e quatro" class="card-img-top p-3"></a> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoMemoria2' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <img id='jogoMemoria2'src="images/executivoimages.png" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoMemoria3' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"><img id='jogoMemoria3'src="images/human-brain-white.jpg" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

          </div>

          <div class="row mt-1 mb-2" >

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoMemoria4' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <img id='jogoMemoria4' src="images/depositphotos_90095212-stock-illustration-illustration-of-albert-einstein.jpg" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoMemoria5' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <img id='jogoMemoria5' src="images/913183098-1024x1024.jpg" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoMemoria6' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <img id='jogoMemoria6' src="images/9170503-en-forme-de-dessin-monochrome-éléments-de-puzzle.jpg" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

        </div>
            </div>
            </div>
            </div>
            <script type="text/javascript">

              const jogoMemoria1 = document.querySelector('#jogoMemoria1')
              const jogoMemoria2 = document.querySelector('#jogoMemoria2')
              const jogoMemoria3 = document.querySelector('#jogoMemoria3')
              const jogoMemoria4 = document.querySelector('#jogoMemoria4')
              const jogoMemoria5 = document.querySelector('#jogoMemoria5')
              const jogoMemoria6 = document.querySelector('#jogoMemoria6')

              jogoMemoria1.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoMemoria1.addEventListener('mouseout', function() {this.src = 'images/trintaEquatro.png'})

              jogoMemoria2.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoMemoria2.addEventListener('mouseout', function() {this.src = 'images/executivoimages.png'})

              jogoMemoria3.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoMemoria3.addEventListener('mouseout', function() {this.src = 'images/human-brain-white.jpg'})

              jogoMemoria4.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoMemoria4.addEventListener('mouseout', function() {this.src = 'images/depositphotos_90095212-stock-illustration-illustration-of-albert-einstein.jpg'})

              jogoMemoria5.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoMemoria5.addEventListener('mouseout', function() {this.src = 'images/913183098-1024x1024.jpg'})

              jogoMemoria6.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoMemoria6.addEventListener('mouseout', function() {this.src = 'images/9170503-en-forme-de-dessin-monochrome-éléments-de-puzzle.jpg'})

              const divjogoMemoria1 = document.querySelector('#divjogoMemoria1')
              const divjogoMemoria2 = document.querySelector('#divjogoMemoria2')
              const divjogoMemoria3 = document.querySelector('#divjogoMemoria3')
              const divjogoMemoria4 = document.querySelector('#divjogoMemoria4')
              const divjogoMemoria5 = document.querySelector('#divjogoMemoria5')
              const divjogoMemoria6 = document.querySelector('#divjogoMemoria6')

              if(window.innerWidth > 991)
              {
                divjogoMemoria1.style.height = "300px";
                divjogoMemoria2.style.height = "300px";
                divjogoMemoria3.style.height = "300px";

                divjogoMemoria4.style.height = "300px";
                divjogoMemoria5.style.height = "300px";
                divjogoMemoria6.style.height = "300px";
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
