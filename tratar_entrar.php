<?php

include ('conn.php');


$email = $_POST['email'];
$senha = $_POST['senha'];


// $rs = $conn->prepare("SELECT (email, senha) FROM usuarios WHERE email LIKE '$email' AND senha LIKE '$senha'");
// $rs->bindParam(1, $email . '%');
// if($rs->execute()){
// if($rs->rowCount() > 0){
// while($row = $rs->fetch(PDO::FETCH_OBJ)){
//   echo $row->nome . '<br />';
//   echo $row->email . '<br />';
// }
//             }
//         }

  if(isset($_POST['entrar']))
  {

        $query = "SELECT * FROM usuarios WHERE (email, senha) LIKE (:email, :senha)";
        $rs = $conn -> prepare($query);
        $rs -> bindParam(':email', $email, PDO::PARAM_STR);
        $rs -> bindValue(':senha', $senha, PDO::PARAM_STR);
        $rs -> execute();
        if($rs->rowCount() > 0){
          echo 'kkk';
      }



      }



        // $stmt->bindParam(':username', $user_name, PDO::PARAM_STR);
        // $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        // $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
        // $stmt->bindParam(':aniversario', $aniversario, PDO::PARAM_STR);
        // $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);


 ?>
