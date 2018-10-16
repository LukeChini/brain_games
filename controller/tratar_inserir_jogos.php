 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <title>Brain Games - Erro inserir jogos</title>
     <link rel='shortcut icon' href="../images/brain_icon.gif" />
   </head>
   <body>
     <div class='' style='background-color:rgb(255,255,255)'>
     <div class='container'>
     <nav class='navbar navbar-expand-lg navbar-light' style='background-color:rgb(255,255,255)'>
     <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo03' aria-controls='navbarTogglerDemo03' aria-expanded='false' aria-label='Toggle navigation'>
     <span class='navbar-toggler-icon'></span>
     </button>
     <img src="images/human-brain-white -menor.jpg" alt="logo" style="width:60px">
     <a class='navbar-brand text-info font-weight-bold' href='#'>Brain Games</a>
     <div class='collapse navbar-collapse' id='navbarTogglerDemo03'>
     <ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
     <li class='nav-item active'>
     </li>
     <li class='nav-item'>
     </li>
     <li class='nav-item'>
     </li>
     </ul>
     <button type="button" class="btn btn-light mt-2">Entrar</button>
     </div>
     </div>
     </div>
     </div>
     </nav>
   </div>


  <?php
if(!$_SESSION['admin']){header('location:../artigos/inicio_logado.php');}
include ('../include/conn.php');
  if (isset($_POST['salvar_jogo'])) {

   $funcao       = $_POST['funcao'];
   $nome         = $_POST['nome'];
   $src_img      = $_FILES['arquivo_img'];
   $descricao    = $_POST['descricao'];
   $gratuito     = $_POST['gratuito'];
   $nome_arquivo = $_FILES['arquivo_php'];

   $nome_sem_espaco = str_replace(' ', '_', strtolower($nome));
   $type_img = substr($_FILES['arquivo_img']['name'],-3);


   $src_img_nome = 'jogos_img/'.$nome_sem_espaco.'.'.$type_img;
   $nome_arquivo_nome = 'play/'.$nome_sem_espaco.'.php';

   $verificação = $conn->prepare('SELECT * FROM jogos WHERE nome = :nome');
   $verificação->bindParam(':nome', $nome, PDO::PARAM_STR);
   $verificação->execute();
   $verifica = $verificação->fetch(PDO::FETCH_ASSOC);


   if($verifica['nome']==NULL){
   $stmt = $conn->prepare
   ('INSERT INTO jogos(    funcao,  nome,  src_img,    descricao,  gratuito,  nome_arquivo)
     VALUES              (:funcao, :nome, :src_img_nome, :descricao, :gratuito, :nome_arquivo_nome )');
   $stmt->bindParam(':funcao', $funcao, PDO::PARAM_STR);
   $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
   $stmt->bindParam(':src_img_nome', $src_img_nome, PDO::PARAM_STR);
   $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
   $stmt->bindParam(':gratuito', $gratuito, PDO::PARAM_BOOL);
   $stmt->bindParam(':nome_arquivo_nome', $nome_arquivo_nome, PDO::PARAM_STR);
   $stmt->execute();

   move_uploaded_file($_FILES['arquivo_img']['tmp_name'], '../jogos_img/'.$nome_sem_espaco.'.'.$type_img);
   move_uploaded_file($_FILES['arquivo_php']['tmp_name'], '../play/'.$nome_sem_espaco.".php");


   header("location:../view_admin/view_jogos_tabela.php");
  }

}

    ?>

    <div class="bg-light text-center">


      <p style="font-size:40px"> Jogo já cadastrado no Brain Games! </p>
     <!-- <a href="../view_admin/inserir_jogos.php" class="btn btn-danger mt-2">Retornar</a> -->


      </div>




       <footer class="container mt-3">
           <ul class="nav border-top border-bottom col-12">
           <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="#">Sobre Nós</a></li>
           <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="#">Contato</a></li>
           <li class="nav-item col-12 col-lg-3 text-center"><a class="nav-link text-secondary" href="#">Termos de Serviço</a></li>
           <li class="nav-item col-12 col-lg-3 text-center"><a class="nav-link text-secondary" href="#">Política de Privacidade</a></li>
           <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="#">Ajuda</a></li>
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
