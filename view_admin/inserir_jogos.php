<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Inserir Jogos -ADMIN</title>
        <link rel='shortcut icon' href="../images/brain_icon.gif" />
  </head>
  <body>
    <?php require('../include/nav.php'); ?>
    </div>

    <?php if(!$_SESSION['admin']){header('location:../artigos/inicio_logado.php');} ?>

</div>

      <div class="bg-light">

        <div class="container">

          <div class="col-12 bg-white border text-center">
            <h1>Inserir Jogos</h1>
            <div class="row mt-3 mb-2 text-center" >


              <div class=" text-center" role="group" style="margin:0 auto" aria-label="Basic example">
                <a href="view_jogos_tabela.php" type="button" class="btn btn-success total mt-3 mb-3 font-weight-bold" style="width:200px">Tabela de Jogos</a>
                <a href="inserir_jogos.php" type="button" class="btn btn-info total mt-3 mb-3 font-weight-bold" style="width:200px">Inserir Jogos</a>
                <a href="alterar_jogos.php" type="button" class="btn btn-danger total mt-3 mb-3 font-weight-bold" style="width:200px">Alterar Jogos</a>
              <a href="excluir_jogos.php" type="button" class="btn btn-dark total mt-3 mb-3 font-weight-bold" style="width:200px">Excluir Jogos</a>
              </div>

              <script type="text/javascript">
                $(document).ready(function(){
                  $('#ajax_form').submit(function(e){
                    e.preventDefault();

                    let dados = jQuery(this).serialize();

                    $("[type=submit]",this).each(function(){
                      dados += "&" + escape($(this).attr("name")) + "=" + escape($(this).val())
                    })

                    $.ajax({
                      type:"POST",
                      url:"processa.php",
                      data: dados,
                      success: function(data)
                      {
                        alert(data);
                      }
                    })
                    return false;
                  })
                })
              </script>

              <form class="" id="ajax_form" enctype="multipart/form-data" action="tratar_carregar_imagem.php" method="post">

              </form>

        <form class="" enctype="multipart/form-data" action="tratar_inserir-jogos.php" method="post">
        <div class="col-12 col-sm-9 col-lg-10 bg-white border" style="margin: 0 auto;">

          <div class="bg-info" style="height:50px;">

          </div>

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
                  <form enctype="multipart/form-data" action="perfil.php" method="post">
                        <input required name="arquivo_img" type="file" style="color:white;font-size:15px"></input>
                        <input type="submit" name="enviar" value="Enviar"></input>
                  </form>

                  <?php


                  if(isset($_POST['enviar']))
                  {
                    print_r($_FILES['imagem']);
                    move_uploaded_file($_FILES['imagem']['tmp_name'], 'upload/'.$_FILES['imagem']['name']);
                  }


                   ?>

                  <br /><br/>

                    <figure class="fig">
                      <img class="img" src="<?php echo 'upload/'.$_FILES['imagem']['name'] ?>" >
                      <br />
                  </figure>


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

              </div></div></div></div>

<?php require('../include/variaveis_php_echo.php'); echo $html_footer; ?>

            </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
