<?php
$title = 'Brain Games - Entrar';
include 'cabecalho.php';
?>

  <!-- <body>
    <div class="" style="background-color:white">
    <div class="media container" style="background-color:white">
      <img src="images/human-brain-white -menor.jpg" alt="logo" style="width:100px">
      <div class="media-body">
        <h2 class="mt-0 text-info font-weight-bold" style="padding-left:5px">Brain Games</h2>
      </div>
      <p class="btn btn-light mr-3 mt-2 border-0" style="background-color:white">Não é membro?</p>
      <a href="criar_conta.php" class="btn btn-light mt-2">Criar Conta</a>
      </div>
      </div> -->

      <div class="bg-light">
      <div class="container bg-light" >
        <div class="text-center font-weight-bold p-3" style="font-size:30px">
          <p>Acesso para membro</p>
        </div>



      <div class="col-12" >

      <form action="tratar_entrar.php" method="post" >

        <div class="input-group mb-5 col-12 col-lg-5" style="margin:0 auto">
        <div class="input-group-prepend">
        <div class="input-group-text" style="background-color:white"> <img src="images/email.png" alt="" style="height:20px"> </div>
        </div>
        <input type="email" name="email" class="form-control form-control-lg" id="inlineFormInputGroup" placeholder="E-mail">
        </div>

        <div class="input-group mb-5 col-12 col-lg-5" style="margin:0 auto">
        <div class="input-group-prepend">
        <div class="input-group-text" style="background-color:white"> <img src="images/senha.png" alt="" style="height:20px"> </div>
        </div>
        <input type="password" name="senha" class="form-control form-control-lg" placeholder="Senha">
        </div>



        <div class="text-center" style="margin: 0 auto">
        <input type="submit" name="entrar" class="btn btn-danger mr-3 mt-2 mb-3" style="width:300px; height:50px; font-size:20px" value="Entrar"></input>
        </div>



        </form>


        </div>

        </div>


        <div class="text-center mt-3">
          <a href="#">Esqueceu a senha?</a>
        </div>


<?php include "footer.php"; ?>
