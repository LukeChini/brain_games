<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Inserir Jogos -ADMIN</title>
  </head>
  <body>
    <?php require('nav.php'); ?>
    </div>

</div>

      <div class="bg-light">

        <div class="container">

<form class="" enctype="multipart/form-data" action="tratar_inserir-jogos.php" method="post">



        <div class="col-12 col-sm-9 col-lg-10 bg-white border">

          <div class="row mt-3 mb-2" >

            <div class="col-12 mb-4 font-weight-bold" style="font-size:25px">
              <label for="funcao">Função</label>
              <select name="funcao">
                <option  value="executiva">Executiva</option>
                <option  value="memoria">Memória</option>
                <option  value="espacial">Espacial</option>
                <option  value="calculo">Cálculo</option>
                <option  value="linguagem">Linguagem</option>
              </select>
            </div>



            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info text-center font-weight-bold text-white">
                  <input required type="text" name="nome" class="card-header bg-info text-center font-weight-bold text-white" style="color:white; margin-left:-12px;" placeholder="Nome do Jogo"></input>
                </div>
                <div id='divjogoMemoria1'class="border-bottom" style="overflow:hidden; height:300px">
                  <input required name="arquivo_img" type="file" style="color:white;font-size:15px"></input>
                  <p class="card-img-top p-3 text-center">Insira uma Imagem</p>
                </div>
                <div class="card-body">
                  <input required type="text" name="descricao" placeholder="Insira Descrição curta do jogo" style="width:100%; height:50px;"></input>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-5 mb-4 font-weight-bold" style="font-size:25px">
              <label for="funcao">Esse Jogo é Gratuito?</label>
              <select name="gratuito">
                <option  value="0">Não</option>
                <option  value="1">Sim</option>
              </select>
              <hr />

              <label for="arquivo_php">Insira o arquivo do Jogo</label>
              <div class=""style="display:inline-block;font-size:15px">
              <input required type="file" name="arquivo_php" >
              </div>
              <hr />
              <div class="text-center" ><input type="submit" class="btn btn-danger mr-3 mt-2" name="salvar_jogo" value="Salvar Jogo">  </div>
            </div>
          </form>

            <script type="text/javascript">


              const jogoMemoria3 = document.querySelector('#jogoMemoria3')
              const jogoMemoria4 = document.querySelector('#jogoMemoria4')
              const jogoMemoria5 = document.querySelector('#jogoMemoria5')
              const jogoMemoria6 = document.querySelector('#jogoMemoria6')



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
              </div></div>

<?php require('variaveisPHPecho.php'); echo $html_footer; ?>

            </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
