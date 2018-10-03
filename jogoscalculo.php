<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Jogos Calculo</title>
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
            <a class="list-group-item list-group-item-action bg-primary font-weight-bold text-white" href="jogoscalculo.php">Cálculo</a>
            <a class="list-group-item list-group-item-action" href="jogoslinguagem.php">Linguagem</a>
          </div>


        <div class="col-12 col-sm-9 col-lg-10 bg-white border">

          <div class="row mt-3 mb-2" >

            <div class="col-12 mb-4 font-weight-bold" style="font-size:25px">Função de Cálculo</div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info text-center font-weight-bold text-white"> <a href="trinta_e_quatro.php" style="color:white">Quadrado Trinta e Quatro</a> </div>
                <div id='divjogoCalculo1' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <a href="trinta_e_quatro.php" style="color:white"><img id='jogoCalculo1' src="images/trintaEquatro.png" alt="trinta e quatro" class="card-img-top p-3"></a> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoCalculo2' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <img id='jogoCalculo2'src="images/executivoimages.png" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoCalculo3' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"><img id='jogoCalculo3'src="images/human-brain-white.jpg" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

          </div>

          <div class="row mt-1 mb-2" >

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoCalculo4' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <img id='jogoCalculo4' src="images/depositphotos_90095212-stock-illustration-illustration-of-albert-einstein.jpg" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoCalculo5' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <img id='jogoCalculo5' src="images/913183098-1024x1024.jpg" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info bg-info text-center font-weight-bold text-white">Quadrado Trinta e Quatro</div>
                <div id='divjogoCalculo6' class="border-bottom" style="overflow:hidden; min-height:100px; max-height:300px"> <img id='jogoCalculo6' src="images/9170503-en-forme-de-dessin-monochrome-éléments-de-puzzle.jpg" alt="trinta e quatro" class="card-img-top p-3"> </div>
                <div class="card-body">Teste sua capacidade Executiva com este jogo lógico</div>
              </div>
            </div>

        </div>
            </div>
            </div>
            </div>
            <script type="text/javascript">

              const jogoCalculo1 = document.querySelector('#jogoCalculo1')
              const jogoCalculo2 = document.querySelector('#jogoCalculo2')
              const jogoCalculo3 = document.querySelector('#jogoCalculo3')
              const jogoCalculo4 = document.querySelector('#jogoCalculo4')
              const jogoCalculo5 = document.querySelector('#jogoCalculo5')
              const jogoCalculo6 = document.querySelector('#jogoCalculo6')

              jogoCalculo1.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoCalculo1.addEventListener('mouseout', function() {this.src = 'images/trintaEquatro.png'})

              jogoCalculo2.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoCalculo2.addEventListener('mouseout', function() {this.src = 'images/executivoimages.png'})

              jogoCalculo3.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoCalculo3.addEventListener('mouseout', function() {this.src = 'images/human-brain-white.jpg'})

              jogoCalculo4.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoCalculo4.addEventListener('mouseout', function() {this.src = 'images/depositphotos_90095212-stock-illustration-illustration-of-albert-einstein.jpg'})

              jogoCalculo5.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoCalculo5.addEventListener('mouseout', function() {this.src = 'images/913183098-1024x1024.jpg'})

              jogoCalculo6.addEventListener('mouseover', function() {this.src = 'images/cadeado300.jpg'})
              jogoCalculo6.addEventListener('mouseout', function() {this.src = 'images/9170503-en-forme-de-dessin-monochrome-éléments-de-puzzle.jpg'})

              const divjogoCalculo1 = document.querySelector('#divjogoCalculo1')
              const divjogoCalculo2 = document.querySelector('#divjogoCalculo2')
              const divjogoCalculo3 = document.querySelector('#divjogoCalculo3')
              const divjogoCalculo4 = document.querySelector('#divjogoCalculo4')
              const divjogoCalculo5 = document.querySelector('#divjogoCalculo5')
              const divjogoCalculo6 = document.querySelector('#divjogoCalculo6')

              if(window.innerWidth > 991)
              {
                divjogoCalculo1.style.height = "300px";
                divjogoCalculo2.style.height = "300px";
                divjogoCalculo3.style.height = "300px";

                divjogoCalculo4.style.height = "300px";
                divjogoCalculo5.style.height = "300px";
                divjogoCalculo6.style.height = "300px";
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
