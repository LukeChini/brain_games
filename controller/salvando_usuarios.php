

 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <title>Brain Games - Salvar usuario</title>
     <link rel='shortcut icon' href="../images/brain_icon.gif" />
   </head>
   <body>
     <div class='' style='background-color:rgb(255,255,255)'>
     <div class='container'>
     <nav class='navbar navbar-expand-lg navbar-light' style='background-color:rgb(255,255,255)'>
     <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo03' aria-controls='navbarTogglerDemo03' aria-expanded='false' aria-label='Toggle navigation'>
     <span class='navbar-toggler-icon'></span>
     </button>
     <img src="../images/human-brain-white -menor.jpg" alt="logo" style="width:60px">
     <a class='navbar-brand text-info font-weight-bold' href='../inicial/criar_conta.php'>Brain Games</a>
     <div class='collapse navbar-collapse' id='navbarTogglerDemo03'>
     <ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
     <li class='nav-item active'>
     </li>
     <li class='nav-item'>
     </li>
     <li class='nav-item'>
     </li>
     </ul>
     <a href="../inicial/entrar.php" class="btn btn-light mt-2">Entrar</a>
     </div>
     </div>
     </div>
     </div>
     </nav>
   </div>

   <?php

   include ('../include/conn.php');

   $user_name = $_POST['user_name'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   $confirmar_senha = $_POST['confirmar_senha'];
   $dia_nascimento = $_POST['dia_nascimento'];
   $mes_nascimento = $_POST['mes_nascimento'];
   $ano_nascimento = $_POST['ano_nascimento'];
   $sexo = $_POST['sexo'];
   $termos = $_POST['termos'];

   if(str_word_count($user_name)<1){return header("location:../inicial/criar_conta.php");}


   $aniversario = $ano_nascimento.'-'.$mes_nascimento.'-'.$dia_nascimento;
   $validar_data = checkdate($mes_nascimento,$dia_nascimento,$ano_nascimento);

   $senha_e_confirmar_senha_nao_conferem = "";
   if($senha !== $confirmar_senha){$senha_e_confirmar_senha_nao_conferem ="Senha e Confirmar Senha não conferem";}

   if (isset($_POST['enviar'])) {
     $stmt = $conn->prepare('INSERT INTO usuarios(username, email, senha, aniversario, sexo) VALUES (:username, :email, :senha, :aniversario, :sexo )');


     $stmt->bindParam(':username', $user_name, PDO::PARAM_STR);
     $stmt->bindParam(':email', $email, PDO::PARAM_STR);
     $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
     $stmt->bindParam(':aniversario', $aniversario, PDO::PARAM_STR);
     $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);


     if ($senha === $confirmar_senha && $validar_data) { $stmt->execute();}

   }




   $conta_sucesso = '<p style="font-size:40px"> Conta criada com Sucesso! </p>
  <a href="../inicial/entrar.php" class="btn btn-danger mt-2">Entrar</a>';

    $conta_insucesso ='<p style="font-size:40px"> Senha e Confirmar Senha não conferem! </p>
  <a href="../inicial/criar_conta.php" class="btn btn-danger mt-2">Confirmar Cadastro</a><br />';

    if(!$validar_data && $senha === $confirmar_senha)
    {
      $conta_insucesso ='<p style="font-size:40px"> Data inserida não é válida! </p>
    <a href="../inicial/criar_conta.php" class="btn btn-danger mt-2">Confirmar Cadastro</a><br />';
    }

    if(!$validar_data && $senha !== $confirmar_senha)
    {
      $conta_insucesso ='<p style="font-size:40px"> Data inserida não é válida! </p><br />
                         <p style="font-size:40px"> Senha e Confirmar Senha não conferem! </p><br />
    <a href="../inicial/criar_conta.php" class="btn btn-danger mt-2">Confirmar Cadastro</a><br />';
    }


    ?>

       <div class="bg-light text-center">


         <?php
         if($senha === $confirmar_senha && $validar_data){echo $conta_sucesso;}
         if($senha !== $confirmar_senha || !$validar_data){echo $conta_insucesso;}




         ?>


         </div>





         <footer class="container mt-3">
             <ul class="nav border-top border-bottom col-12">
             <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="../footer/sobre_nos.php">Sobre Nós</a></li>
             <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="../footer/contato.php">Contato</a></li>
             <li class="nav-item col-12 col-lg-3 text-center"><a class="nav-link text-secondary" href="../footer/termos_de_servico.php">Termos de Serviço</a></li>
             <li class="nav-item col-12 col-lg-3 text-center"><a class="nav-link text-secondary" href="../footer/politica_de_privacidade.php">Política de Privacidade</a></li>
             <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="../footer/ajuda.php">Ajuda</a></li>
             </ul>
         </footer>

             </div>



     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
 </html>
