<?php
session_start();
include ('conn.php');

  $id_array = ['zero'];


  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 14');
  $verificação->bindParam(':id', $id, PDO::PARAM_INT);
  $verificação->execute();
  $verifica = $verificação->fetch(PDO::FETCH_ASSOC);
  $array_id_1 = [];
  if($verifica['id'] !== NULL){array_push($array_id_1,$verifica['id'],$verifica['email']);}
  if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}

  var_dump($array_id_1);
  echo '<br />';


  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 2');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 3');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 4');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 5');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 6');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 7');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 8');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 9');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 10');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 11');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 12');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 13');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 14');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 15');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 16');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 17');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 18');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 19');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 20');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 21');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 22');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 23');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 24');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 25');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 26');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 27');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 28');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 29');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}
  $verificação = $conn->prepare('SELECT * FROM usuarios WHERE id LIKE 30');$verificação->bindParam(':id', $id, PDO::PARAM_INT); $verificação->execute(); $verifica = $verificação->fetch(PDO::FETCH_ASSOC);if($verifica['id'] !== NULL){array_push($id_array,$verifica['id']);}

print_r($id_array);
echo '<br />';
var_dump($verifica['id']);




 ?>
