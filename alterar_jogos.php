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

<?php
include ('conn.php');

$select_cadastrados = $conn->query('SELECT * FROM jogos');
$n = $select_cadastrados->fetchAll();
$c = count($n);





 ?>

      <div class="bg-light">

        <div class="container">

          <div class="col-12 col-sm-9 col-lg-10 bg-danger">

            <div class="col-12 mb-4 font-weight-bold" style="font-size:25px">
              <form class="" action="alterar_jogos.php" method="post">
              <label for="id_jogo" class="mt-3">Jogo:</label>
              <select name="id_jogo">
                <?php

                $id_selecionado = $n[ $_POST['id_jogo'] ]['id'];
                for ($i=0; $i < $c; $i++)
                {
                  if($n[$i]['id'] == $id_selecionado)
                  {echo "<option selected value='".$i."'>".$n[$i]['id']." - ".$n[$i]['nome']."</option>";}
              else{echo "<option          value='".$i."'>".$n[$i]['id']." - ".$n[$i]['nome']."</option>";}

                }
                 ?>
              </select>

              <div class="text-center" ><input type="submit" class="btn btn-info mr-3 mb-2" name="pesquisar_jogo" value="Pesquisar">  </div>
            </div>
              </form>



            <?php



             ?>

          </div>

<form class="" enctype="multipart/form-data" action="tratar_alterar-jogos.php" method="post">



        <div class="col-12 col-sm-9 col-lg-10 bg-white border">

          <div class="row mt-3 mb-2" >

            <div class="col-12 mb-4 font-weight-bold" style="font-size:25px">
              <label for="funcao">Função</label>
              <select name="funcao">
                <option <?php if($n[ $_POST['id_jogo'] ]['funcao'] == 'executiva'){echo 'selected';} ?> value="executiva">Executiva</option>
                <option <?php if($n[ $_POST['id_jogo'] ]['funcao'] == 'memoria'){echo 'selected';} ?> value="memoria">Memória</option>
                <option <?php if($n[ $_POST['id_jogo'] ]['funcao'] == 'espacial'){echo 'selected';} ?> value="espacial">Espacial</option>
                <option <?php if($n[ $_POST['id_jogo'] ]['funcao'] == 'calculo'){echo 'selected';} ?> value="calculo">Cálculo</option>
                <option <?php if($n[ $_POST['id_jogo'] ]['funcao'] == 'linguagem'){echo 'selected';} ?> value="linguagem">Linguagem</option>
              </select>

              <input type="text" style="display:none;" name="id" value="<?php echo $n[ $_POST['id_jogo'] ]['id']; ?>"></input>
            </div>



            <div class="col-12 col-lg-4" >
              <div class="card">
                <div class="card-header bg-info text-center font-weight-bold text-white">
                  <input required type="text" name="nome" value="<?php echo $n[ $_POST['id_jogo'] ]['nome']; ?>"class="card-header bg-info text-center font-weight-bold text-white" style="color:white; margin-left:-12px;" placeholder="Nome do Jogo"></input>
                </div>
                <div id='divjogoMemoria1'class="border-bottom" style="overflow:hidden; height:300px">
                  <input name="arquivo_img" type="file" style="color:white;font-size:15px"></input>
                  <img class="card-img-top p-3 text-center" src="<?php echo $n[ $_POST['id_jogo'] ]['src_perfil']; ?>"></img>
                </div>
                <div class="card-body">
                  <input required type="text" name="descricao" value="<?php echo $n[ $_POST['id_jogo'] ]['descricao']; ?>" placeholder="Insira Descrição curta do jogo" style="width:100%; height:50px;"></input>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-5 mb-4 font-weight-bold" style="font-size:25px">
              <label for="funcao">Esse Jogo é Gratuito?</label>
              <select name="gratuito">
                <option   value="0">Não</option>
                <option <?php if($n[ $_POST['id_jogo'] ]['gratuito']){echo 'selected';} ?> value="1">Sim</option>
              </select>
              <hr />

              <label for="arquivo_php">Insira o arquivo do Jogo</label>
              <div class=""style="display:inline-block;font-size:15px">
              <input type="file" name="arquivo_php" >
              </div>
              <hr />
              <div class="text-center" ><input type="submit" class="btn btn-danger mr-3 mt-2" name="alterar_jogo" value="Alterar Jogo">  </div>
            </div>
          </form>






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
