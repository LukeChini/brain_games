  <?php
  session_start();
  include ('conn.php');

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE email LIKE :email AND senha LIKE :senha');
  $verificação->bindParam(':email', $email, PDO::PARAM_STR);
  $verificação->bindParam(':senha', $senha, PDO::PARAM_STR);
  $verificação->execute();
  $verifica = $verificação->fetch(PDO::FETCH_ASSOC);

  $_SESSION['username_logado'] = $verifica['username'];
  $_SESSION['email_logado'] = $verifica['email'];
  $_SESSION['sexo_logado'] = $verifica['sexo'];
  $_SESSION['aniversario_logado'] = $verifica['aniversario'];
  $_SESSION['validade_premium_logado'] = $verifica['validade_premium'];
  $_SESSION['id_logado'] = $verifica['id'];
  $_SESSION['src_perfil'] = $verifica['src_perfil'];

  if($_SESSION['src_perfil'] == NULL && $_SESSION['sexo_logado'] == 'masculino'){$_SESSION['src_perfil']='images/perfil_masculino.jpg';}
  elseif($_SESSION['src_perfil'] == NULL && $_SESSION['sexo_logado'] == 'feminino' ){$_SESSION['src_perfil']='images/perfil_feminino.jpg'; }

  if(!$verifica['email']==NULL){

    return header("location:inicio-logado.php");
  }else{
    return header("location:entrar.php");
  }