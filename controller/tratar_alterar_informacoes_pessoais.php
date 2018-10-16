

 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <title>Hello, world!</title>
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
session_start();
include ('../include/conn.php');
$username = $_POST['username'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$sexo = $_POST['sexo'];
$id = $_SESSION['id_logado'];
$img_perfil = $_FILES['imagem'];

$aniversario = $ano.'-'.$mes.'-'.$dia;


$validar = checkdate($mes,$dia,$ano);

$type_img = substr($_FILES['imagem']['name'],-3);
$src_img_nome = 'upload/'.$_SESSION['id_logado'].'.'.$type_img;

$src_perfil = NULL;
$null = NULL;

if($_FILES['imagem']['tmp_name'] != NULL){move_uploaded_file($_FILES['imagem']['tmp_name'], '../'.$src_img_nome);}
if($_FILES['imagem']['tmp_name'] != NULL){$src_perfil = $src_img_nome;}

$_SESSION['username_logado'] = $username;
// $_SESSION['email_logado'] = $verifica['email'];
$_SESSION['sexo_logado'] = $sexo;
$_SESSION['aniversario_logado'] = $aniversario;
// $_SESSION['validade_premium_logado'] = $verifica['validade_premium'];
// $_SESSION['id_logado'] = $verifica['id'];
if($_FILES['imagem']['tmp_name'] != NULL){$_SESSION['src_perfil'] = $src_perfil;}

if($src_perfil == NULL && $_SESSION['admin']){$_SESSION['src_perfil']='images/perfil_admin.png';}
elseif($src_perfil == NULL && $_SESSION['sexo_logado'] == 'masculino'){$_SESSION['src_perfil']='images/perfil_masculino.jpg';}
elseif($src_perfil == NULL && $_SESSION['sexo_logado'] == 'feminino' ){$_SESSION['src_perfil']='images/perfil_feminino.jpg'; }

if(isset($_POST['excluir_foto']))
{
  $alteração_src = $conn->prepare("UPDATE usuarios SET src_perfil = '$null' WHERE id = '$id'");
  $alteração_src->bindParam(':src_perfil', $src_perfil, PDO::PARAM_STR);
  $alteração_src->bindParam(':id', $id, PDO::PARAM_INT);
  $alteração_src->execute();
  header("location:conta.php");

  if($_SESSION['admin']){$_SESSION['src_perfil']='images/perfil_admin.png';}
  elseif($_SESSION['sexo_logado'] == 'masculino'){$_SESSION['src_perfil']='images/perfil_masculino.jpg';}
  elseif($_SESSION['sexo_logado'] == 'feminino' ){$_SESSION['src_perfil']='images/perfil_feminino.jpg'; }


}



if($validar){
  $alteração_nome = $conn->prepare('UPDATE usuarios SET username = :username WHERE id = :id');
  $alteração_nome->bindParam(':username', $username, PDO::PARAM_STR);
  $alteração_nome->bindParam(':id', $id, PDO::PARAM_INT);
  $alteração_nome->execute();

  $alteração_aniversario = $conn->prepare('UPDATE usuarios SET aniversario = :aniversario WHERE id = :id');
  $alteração_aniversario->bindParam(':aniversario', $aniversario, PDO::PARAM_STR);
  $alteração_aniversario->bindParam(':id', $id, PDO::PARAM_INT);
  $alteração_aniversario->execute();

  $alteração_sexo = $conn->prepare('UPDATE usuarios SET sexo = :sexo WHERE id = :id');
  $alteração_sexo->bindParam(':sexo', $sexo, PDO::PARAM_STR);
  $alteração_sexo->bindParam(':id', $id, PDO::PARAM_INT);
  $alteração_sexo->execute();

  $alteração_src = $conn->prepare('UPDATE usuarios SET src_perfil = :src_perfil WHERE id = :id');
  $alteração_src->bindParam(':src_perfil', $src_perfil, PDO::PARAM_STR);
  $alteração_src->bindParam(':id', $id, PDO::PARAM_INT);
  $alteração_src->execute();




  header("location:../usuario/conta.php");}







 ?>


    <div class="bg-light text-center">


      <p style="font-size:40px"> Data de Nascimento Invalida! </p>
     <a href="alterar-informacoes-pessoais.php" class="btn btn-danger mt-2">Retornar</a>


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
