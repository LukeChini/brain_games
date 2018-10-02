


<?php
session_start();
include ('conn.php');



$verificação = $conn->query('SELECT * FROM usuarios');
// $verifica = $verificação->fetch(PDO::FETCH_ASSOC);
$array = [];

if($n = $verificação->fetchAll()){
  var_dump( $n[0]['username']);
}
// while($nova=$verificação->fetch(PDO::FETCH_ASSOC))
// {
//   array_push($array, $nova['username']);
// }
//
// for ($i=0; $i < 100; $i++)
// {
//     echo $array[$i].'<br />';
// }











 ?>
