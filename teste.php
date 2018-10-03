


<?php
session_start();
include ('conn.php');



$verificação = $conn->query('SELECT * FROM jogos');
// $verifica = $verificação->fetch(PDO::FETCH_ASSOC);
$array = [];


$n = $verificação->fetchAll();
$c = count($n);


$array_abertura = []; $array_fechamento = [];
for ($i=0; $i < 50; $i++)
{
  if($i>$c || $i==$c){array_push($array_abertura,"<!--");}
  else{array_push($array_abertura,"");}

  if($i>$c || $i==$c){array_push($array_fechamento,"-->");}
  else{array_push($array_fechamento,"");}
}

var_dump($array_abertura);

 ?>
