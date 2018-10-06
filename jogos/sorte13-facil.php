<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- <link rel="stylesheet" type="text/css" href="css/reset.css"> -->
    <link rel="stylesheet" type="text/css" href="css/styles2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" media="screen, projection, print" href="https://asset.lumosity.com/lumosity/production/train/application-2c19bfac939b4921187f1a38fc013480dee5e14b3e135fd247c9837d2b3c39e6.css" /> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

  </head>
  <body>


    <?php
    session_start();

    //______Parametros_iniciais_da_tabela____________________________________________
    //__por_padrão_não_utilizar_o_numero_0(zero)_nas_variaveis_ $xn_numero _ele_pode_dar_erro_com_o_submit_voltar___________

    $numero_inicial = 1;      $numero_max_movimentos = 14;      $resultado_esperado = $re = 14;      $nome_arquivo="sorte13_facil";

                       $b1_numero=7;       $c1_numero=1;       $d1_numero=1;      $e1_numero=1;      $f1_numero=7;
    $a2_numero=1;      $b2_numero=1;       $c2_numero=1;       $d2_numero=7;      $e2_numero=1;      $f2_numero=1;      $g2_numero=7;
    $a3_numero=7;      $b3_numero=7;       $c3_numero=7;       $d3_numero=7;      $e3_numero=7;      $f3_numero=1;      $g3_numero=7;
    $a4_numero=7;      $b4_numero=7;       $c4_numero=7;       $d4_numero=7;      $e4_numero=7;      $f4_numero=1;      $g4_numero=7;
    $a5_numero=7;      $b5_numero=7;       $c5_numero=7;       $d5_numero=7;      $e5_numero=7;      $f5_numero=1;      $g5_numero=7;
    $a6_numero=7;      $b6_numero=7;       $c6_numero=7;       $d6_numero=7;      $e6_numero=1;      $f6_numero=1;      $g6_numero=7;
    $a7_numero=$re;    $b7_numero=$re;     $c7_numero=$re;     $d7_numero=$re;    $e7_numero=$re;    $f7_numero=$re;    $g7_numero=$re;

                       $b1_operador='x';   $c1_operador='+';   $d1_operador='+';  $e1_operador='+';  $f1_operador='x';
    $a2_operador='+';  $b2_operador='+';   $c2_operador='+';   $d2_operador='x';  $e2_operador='+';  $f2_operador='+';  $g2_operador='x';
    $a3_operador='x';  $b3_operador='x';   $c3_operador='x';   $d3_operador='x';  $e3_operador='x';  $f3_operador='+';  $g3_operador='x';
    $a4_operador='x';  $b4_operador='x';   $c4_operador='x';   $d4_operador='x';  $e4_operador='x';  $f4_operador='+';  $g4_operador='x';
    $a5_operador='x';  $b5_operador='x';   $c5_operador='x';   $d5_operador='x';  $e5_operador='x';  $f5_operador='+';  $g5_operador='x';
    $a6_operador='x';  $b6_operador='x';   $c6_operador='x';   $d6_operador='x';  $e6_operador='+';  $f6_operador='+';  $g6_operador='x';
    $a7_operador='=';  $b7_operador='=';   $c7_operador='=';   $d7_operador='=';  $e7_operador='=';  $f7_operador='=';  $g7_operador='=';

    //___utilizar_seguintes_operadores:
    //__ + para somar ______ - para subtrair ________ x para multiplicar ________ ÷ para dividir ___________

    //__!desenvolvedor!__utilize_este_espaço_para_armazenar_a_string_com_o_array_de_gabarito:_(comentar! //___)___

    $visualizar_array = false; // valor true para visualizar e false para omitir

    //_Exemplo:__Array ( [0] => init [1] => a2 [2] => b2 [3] => b3 [4] => c3 [5] => c4 [6] => d4 [7] => e4 [8] => f4 [9] => f5 [10] => g5 [11] => g6 [12] => f6 [13] => e6 [14] => f6 )


    //_____Mensagem_de_resultado_da_partida____________________________________________________________
           $_SESSION["ganhou"] = ""; $ganhou_mensagem        = "Parabéns você é um gênio!";
           $_SESSION["perdeu"] = ""; $ganhou_perdeu          = "Tente novamente!";
    $_SESSION["passou_de_max"] = ""; $passou_de_max_mensagem = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";


//__ $xn_op_nu = operador concatenado com numero __________________________________

                                   $b1_op_nu=$b1_operador.$b1_numero; $c1_op_nu=$c1_operador.$c1_numero; $d1_op_nu=$d1_operador.$d1_numero;
$a2_op_nu=$a2_operador.$a2_numero; $b2_op_nu=$b2_operador.$b2_numero; $c2_op_nu=$c2_operador.$c2_numero; $d2_op_nu=$d2_operador.$d2_numero;
$a3_op_nu=$a3_operador.$a3_numero; $b3_op_nu=$b3_operador.$b3_numero; $c3_op_nu=$c3_operador.$c3_numero; $d3_op_nu=$d3_operador.$d3_numero;
$a4_op_nu=$a4_operador.$a4_numero; $b4_op_nu=$b4_operador.$b4_numero; $c4_op_nu=$c4_operador.$c4_numero; $d4_op_nu=$d4_operador.$d4_numero;
$a5_op_nu=$a5_operador.$a5_numero; $b5_op_nu=$b5_operador.$b5_numero; $c5_op_nu=$c5_operador.$c5_numero; $d5_op_nu=$d5_operador.$d5_numero;
$a6_op_nu=$a6_operador.$a6_numero; $b6_op_nu=$b6_operador.$b6_numero; $c6_op_nu=$c6_operador.$c6_numero; $d6_op_nu=$d6_operador.$d6_numero;
$a7_op_nu=$a7_operador.$a7_numero; $b7_op_nu=$b7_operador.$b7_numero; $c7_op_nu=$c7_operador.$c7_numero; $d7_op_nu=$d7_operador.$d7_numero;

$e1_op_nu=$e1_operador.$e1_numero; $f1_op_nu=$f1_operador.$f1_numero;
$e2_op_nu=$e2_operador.$e2_numero; $f2_op_nu=$f2_operador.$f2_numero; $g2_op_nu=$g2_operador.$g2_numero;
$e3_op_nu=$e3_operador.$e3_numero; $f3_op_nu=$f3_operador.$f3_numero; $g3_op_nu=$g3_operador.$g3_numero;
$e4_op_nu=$e4_operador.$e4_numero; $f4_op_nu=$f4_operador.$f4_numero; $g4_op_nu=$g4_operador.$g4_numero;
$e5_op_nu=$e5_operador.$e5_numero; $f5_op_nu=$f5_operador.$f5_numero; $g5_op_nu=$g5_operador.$g5_numero;
$e6_op_nu=$e6_operador.$e6_numero; $f6_op_nu=$f6_operador.$f6_numero; $g6_op_nu=$g6_operador.$g6_numero;
$e7_op_nu=$e7_operador.$e7_numero; $f7_op_nu=$f7_operador.$f7_numero; $g7_op_nu=$g7_operador.$g7_numero;

//___ Função que requer resultado / operador / numero __ retorna a função aritimetica correspondente do operador ____

function calcula_resultado($resultado,$operador,$numero)
{
  if($operador == 'x'){return $resultado = $resultado * $numero;}
  if($operador == '÷'){return $resultado = $resultado / $numero;}
  if($operador == '+'){return $resultado = $resultado + $numero;}
  if($operador == '-'){return $resultado = $resultado - $numero;}
  if($operador == '='){return $resultado == $numero;}
  else{return 'operador não correspondente';}
}

function calcula_resultado_inverso($resultado,$operador,$numero)
{
  if($operador == 'x'){return $resultado = $resultado / $numero;}
  if($operador == '÷'){return $resultado = $resultado * $numero;}
  if($operador == '+'){return $resultado = $resultado - $numero;}
  if($operador == '-'){return $resultado = $resultado + $numero;}
  else{return 'operador não correspondente';}
}

//___ Função que inverte operador e concatena com numero __________________________________

function inverte_operador($operador,$numero)
{
  if($operador == 'x'){return '÷'.$numero;}
  if($operador == '÷'){return 'x'.$numero;}
  if($operador == '+'){return '-'.$numero;}
  if($operador == '-'){return '+'.$numero;}
  else{return 'operador não correspondente';}
}

//___ If's_para_visualizar_ou_não_o_array_que_percorre_a_tabela ____
$tag_fechamento_ini = "<!--"; $tag_fechamento_fin = "-->";
if($visualizar_array){$tag_fechamento_ini =""; $tag_fechamento_fin = "";}


//_________as_variaveis_ $xn_string __foram_criadas_para_incrementar_um_array_com_o_histórico_de_jogadas___

                  $b1_string='b1';   $c1_string='c1';   $d1_string='d1';  $e1_string='e1';  $f1_string='f1';  $init_string='init';
$a2_string='a2';  $b2_string='b2';   $c2_string='c2';   $d2_string='d2';  $e2_string='e2';  $f2_string='f2';  $g2_string='g2';
$a3_string='a3';  $b3_string='b3';   $c3_string='c3';   $d3_string='d3';  $e3_string='e3';  $f3_string='f3';  $g3_string='g3';
$a4_string='a4';  $b4_string='b4';   $c4_string='c4';   $d4_string='d4';  $e4_string='e4';  $f4_string='f4';  $g4_string='g4';
$a5_string='a5';  $b5_string='b5';   $c5_string='c5';   $d5_string='d5';  $e5_string='e5';  $f5_string='f5';  $g5_string='g5';
$a6_string='a6';  $b6_string='b6';   $c6_string='c6';   $d6_string='d6';  $e6_string='e6';  $f6_string='f6';  $g6_string='g6';
$a7_string='a7';  $b7_string='b7';   $c7_string='c7';   $d7_string='d7';  $e7_string='e7';  $f7_string='f7';  $g7_string='g7';


//__________Esta_variavel:_ $xn_td_id _é_a_variavel_que_determinará_o_conteudo_do_botão_de_jogo___________

             $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
$a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
$a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
$a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
$a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
$a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
$a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

//__________Esta_variavel:_ $xn_in_id _é_a_variavel_que_determinará_o_conteudo_do_botão_voltar___________

             $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
$a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
$a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
$a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
$a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
$a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
$a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;



//_______________Linha_1_______________________________________

  if (isset($_POST['reiniciar'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
    $_SESSION["count"] = $_SESSION["count"] *0;

                 $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
    $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION['array_jogadas'] = array($init_string);

    $_SESSION["a1_count"] = 0; $_SESSION["a2_count"] = 0; $_SESSION["a3_count"] = 0; $_SESSION["a4_count"] = 0; $_SESSION["a5_count"] = 0; $_SESSION["a6_count"] = 0; $_SESSION["a7_count"] = 0;
    $_SESSION["b1_count"] = 0; $_SESSION["b2_count"] = 0; $_SESSION["b3_count"] = 0; $_SESSION["b4_count"] = 0; $_SESSION["b5_count"] = 0; $_SESSION["b6_count"] = 0; $_SESSION["b7_count"] = 0;
    $_SESSION["c1_count"] = 0; $_SESSION["c2_count"] = 0; $_SESSION["c3_count"] = 0; $_SESSION["c4_count"] = 0; $_SESSION["c5_count"] = 0; $_SESSION["c6_count"] = 0; $_SESSION["c7_count"] = 0;
    $_SESSION["d1_count"] = 0; $_SESSION["d2_count"] = 0; $_SESSION["d3_count"] = 0; $_SESSION["d4_count"] = 0; $_SESSION["d5_count"] = 0; $_SESSION["d6_count"] = 0; $_SESSION["d7_count"] = 0;
    $_SESSION["e1_count"] = 0; $_SESSION["e2_count"] = 0; $_SESSION["e3_count"] = 0; $_SESSION["e4_count"] = 0; $_SESSION["e5_count"] = 0; $_SESSION["e6_count"] = 0; $_SESSION["e7_count"] = 0;
    $_SESSION["f1_count"] = 0; $_SESSION["f2_count"] = 0; $_SESSION["f3_count"] = 0; $_SESSION["f4_count"] = 0; $_SESSION["f5_count"] = 0; $_SESSION["f6_count"] = 0; $_SESSION["f7_count"] = 0;
    $_SESSION["g1_count"] = 0; $_SESSION["g2_count"] = 0; $_SESSION["g3_count"] = 0; $_SESSION["g4_count"] = 0; $_SESSION["g5_count"] = 0; $_SESSION["g6_count"] = 0; $_SESSION["g7_count"] = 0;

  }


  if (isset($_POST['b1'])){
  $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$b1_operador,$b1_numero);

                   $b1_td_id=0; $c1_td_id=1; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
      $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
      $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
      $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
      $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
      $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
      $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                   $b1_in_id=1; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
      $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
      $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
      $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
      $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
      $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
      $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;



  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

  $_SESSION["b1_count"] = $_SESSION["b1_count"] + 1;

  $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
  $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
  $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
  $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
  $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
  $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
  $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

  $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
  $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
  $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
  $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
  $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
  $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
  $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

  $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
  $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
  $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
  $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
  $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
  $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
  $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

  array_push($_SESSION['array_jogadas'],$b1_string);
  }


  if (isset($_POST['c1'])){
  $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$c1_operador,$c1_numero);

                     $b1_td_id=1; $c1_td_id=0; $d1_td_id=1; $e1_td_id=0; $f1_td_id=0;
        $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
        $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
        $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
        $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
        $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
        $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                     $b1_in_id=0; $c1_in_id=1; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
        $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
        $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
        $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
        $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
        $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
        $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;


  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

  $_SESSION["c1_count"] = $_SESSION["c1_count"] + 1;

  $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
  $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
  $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
  $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
  $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
  $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
  $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

  $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
  $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
  $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
  $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
  $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
  $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
  $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

  $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
  $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
  $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
  $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
  $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
  $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
  $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

  array_push($_SESSION['array_jogadas'],$c1_string);
  }

  if (isset($_POST['d1'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$d1_operador,$d1_numero);

                         $b1_td_id=0; $c1_td_id=1; $d1_td_id=0; $e1_td_id=1; $f1_td_id=0;
            $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=1; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;


  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["d1_count"] = $_SESSION["d1_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

    array_push($_SESSION['array_jogadas'],$d1_string);
    }

  if (isset($_POST['e1'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$e1_operador,$e1_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=1; $e1_td_id=0; $f1_td_id=1;
            $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=1; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

    array_push($_SESSION['array_jogadas'],$e1_string);
    }

  if (isset($_POST['f1'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$f1_operador,$f1_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=1; $f1_td_id=0;
            $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=1;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["f1_count"] = $_SESSION["f1_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

    array_push($_SESSION['array_jogadas'],$f1_string);
    }

  //_______________Linha_2_______________________________________

  if (isset($_POST['a2'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$a2_operador,$a2_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
            $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
            $a3_td_id=1; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=1; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["a2_count"] = $_SESSION["a2_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$a2_string);
    }

  if (isset($_POST['b2'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$b2_operador,$b2_numero);

                         $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
            $a2_td_id=1; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
            $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=1; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$b2_string);
    }


  if (isset($_POST['c2'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$c2_operador,$c2_numero);

                         $b1_td_id=0; $c1_td_id=1; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
            $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=1; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["c2_count"] = $_SESSION["c2_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$c2_string);
    }

  if (isset($_POST['d2'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$d2_operador,$d2_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=1; $e1_td_id=0; $f1_td_id=0;
            $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=1; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$d2_string);
    }

  if (isset($_POST['e2'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$e2_operador,$e2_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=1; $f1_td_id=0;
            $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=1; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["e2_count"] = $_SESSION["e2_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$e2_string);
    }

  if (isset($_POST['f2'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$f2_operador,$f2_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
            $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=1;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=1; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$f2_string);
    }

  if (isset($_POST['g2'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$g2_operador,$g2_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
            $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=1;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=1;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["g2_count"] = $_SESSION["g2_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$g2_string);
    }

  //______________Linha_3________________________________________

  if (isset($_POST['a3'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$a3_operador,$a3_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
            $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
            $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=1; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=1; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$a3_string);
    }

  if (isset($_POST['b3'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$b3_operador,$b3_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
            $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
            $a3_td_id=1; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=1; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}


    $_SESSION["b3_count"] = $_SESSION["b3_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$b3_string);
    }


  if (isset($_POST['c3'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$c3_operador,$c3_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
            $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
            $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=1; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$c3_string);
    }

  if (isset($_POST['d3'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$d3_operador,$d3_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
            $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=1; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["d3_count"] = $_SESSION["d3_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$d3_string);
    }

  if (isset($_POST['e3'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$e3_operador,$e3_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
            $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=1; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$e3_string);
    }

  if (isset($_POST['f3'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$f3_operador,$f3_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
            $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=1;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=1; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["f3_count"] = $_SESSION["f3_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$f3_string);
    }

  if (isset($_POST['g3'])){
    $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$g3_operador,$g3_numero);

                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
            $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=1;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=1;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$g3_string);
    }

    //______________Linha_4________________________________________

    if (isset($_POST['a4'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$a4_operador,$a4_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=1; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=1; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=1; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

      $_SESSION["a4_count"] = $_SESSION["a4_count"] + 1;

      $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
      $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
      $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
      $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
      $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
      $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
      $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

      $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
      $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
      $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
      $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
      $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
      $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
      $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

      $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
      $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
      $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
      $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
      $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
      $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
      $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
      array_push($_SESSION['array_jogadas'],$a4_string);
      }

    if (isset($_POST['b4'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$b4_operador,$b4_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=1; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=1; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

      $_SESSION["b4_count"] = $_SESSION["b4_count"] + 1;

      $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
      $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
      $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
      $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
      $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
      $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
      $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

      $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
      $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
      $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
      $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
      $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
      $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
      $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

      $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
      $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
      $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
      $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
      $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
      $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
      $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
      array_push($_SESSION['array_jogadas'],$b4_string);
      }


    if (isset($_POST['c4'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$c4_operador,$c4_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=1; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["c4_count"] = $_SESSION["c4_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$c4_string);
    }

    if (isset($_POST['d4'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$d4_operador,$d4_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=1; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 1;

        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
        array_push($_SESSION['array_jogadas'],$d4_string);
        }

    if (isset($_POST['e4'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$e4_operador,$e4_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=1; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;


    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

        $_SESSION["e4_count"] = $_SESSION["e4_count"] + 1;

        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
        array_push($_SESSION['array_jogadas'],$e4_string);
        }

    if (isset($_POST['f4'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$f4_operador,$f4_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=1;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=1; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 1;

        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
        array_push($_SESSION['array_jogadas'],$f4_string);
        }

    if (isset($_POST['g4'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$g4_operador,$g4_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=1;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=1;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=1;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

        $_SESSION["g4_count"] = $_SESSION["g4_count"] + 1;

        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
        array_push($_SESSION['array_jogadas'],$g4_string);
        }



    //______________Linha_5________________________________________

    if (isset($_POST['a5'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$a5_operador,$a5_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=1; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=1; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=1; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

            $_SESSION["a5_count"] = $_SESSION["a5_count"] + 1;

            $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
            $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
            $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
            $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
            $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
            $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
            $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

            $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
            $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
            $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
            $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
            $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
            $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
            $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

            $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
            $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
            $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
            $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
            $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
            $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
            $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
            array_push($_SESSION['array_jogadas'],$a5_string);
            }

    if (isset($_POST['b5'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$b5_operador,$b5_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=1; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=1; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=1; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                $_SESSION["b5_count"] = $_SESSION["b5_count"] + 1;

                $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
                array_push($_SESSION['array_jogadas'],$b5_string);
                }


    if (isset($_POST['c5'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$c5_operador,$c5_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=1; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=1; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 1;

    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
    array_push($_SESSION['array_jogadas'],$c5_string);
    }

    if (isset($_POST['d5'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$d5_operador,$d5_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=1; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=1; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

        $_SESSION["d5_count"] = $_SESSION["d5_count"] + 1;

        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
        array_push($_SESSION['array_jogadas'],$d5_string);
        }

    if (isset($_POST['e5'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$e5_operador,$e5_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=1; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=1; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 1;

        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
        array_push($_SESSION['array_jogadas'],$e5_string);
        }

    if (isset($_POST['f5'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$f5_operador,$f5_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=1;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=1; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=1; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

        $_SESSION["f5_count"] = $_SESSION["f5_count"] + 1;

        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
        array_push($_SESSION['array_jogadas'],$f5_string);
        }

    if (isset($_POST['g5'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$g5_operador,$g5_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=1;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=1;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=1;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 1;

        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
        array_push($_SESSION['array_jogadas'],$g5_string);
        }



    //______________Linha_6________________________________________

    if (isset($_POST['a6'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$a6_operador,$a6_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=1; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=1; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=1; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=1; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;

    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

    $_SESSION["a6_count"] = $_SESSION["a6_count"] + 1;

            $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
            $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
            $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
            $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
            $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
            $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
            $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

            $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
            $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
            $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
            $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
            $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
            $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
            $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

            $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
            $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
            $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
            $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
            $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
            $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
            $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
            array_push($_SESSION['array_jogadas'],$a6_string);
            }

    if (isset($_POST['b6'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$b6_operador,$b6_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=1; $b6_td_id=0; $c6_td_id=1; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=1; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=1; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

  $_SESSION["b6_count"] = $_SESSION["b6_count"] + 1;

          $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
          $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
          $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
          $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
          $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
          $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
          $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

          $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
          $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
          $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
          $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
          $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
          $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
          $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

          $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
          $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
          $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
          $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
          $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
          $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
          $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
          array_push($_SESSION['array_jogadas'],$b6_string);
          }


    if (isset($_POST['c6'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$c6_operador,$c6_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=1; $c6_td_id=0; $d6_td_id=1; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=1; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=1; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

  $_SESSION["c6_count"] = $_SESSION["c6_count"] + 1;

          $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
          $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
          $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
          $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
          $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
          $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
          $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

          $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
          $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
          $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
          $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
          $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
          $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
          $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

          $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
          $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
          $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
          $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
          $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
          $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
          $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
          array_push($_SESSION['array_jogadas'],$c6_string);
          }

    if (isset($_POST['d6'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$d6_operador,$d6_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=1; $d6_td_id=0; $e6_td_id=1; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=1; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=1; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

  $_SESSION["d6_count"] = $_SESSION["d6_count"] + 1;

          $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
          $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
          $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
          $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
          $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
          $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
          $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

          $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
          $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
          $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
          $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
          $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
          $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
          $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

          $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
          $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
          $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
          $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
          $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
          $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
          $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
          array_push($_SESSION['array_jogadas'],$d6_string);
          }

    if (isset($_POST['e6'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$e6_operador,$e6_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=1; $e6_td_id=0; $f6_td_id=1; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=1; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=1; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

  $_SESSION["e6_count"] = $_SESSION["e6_count"] + 1;

          $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
          $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
          $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
          $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
          $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
          $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
          $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

          $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
          $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
          $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
          $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
          $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
          $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
          $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

          $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
          $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
          $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
          $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
          $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
          $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
          $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
          array_push($_SESSION['array_jogadas'],$e6_string);
          }

    if (isset($_POST['f6'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$f6_operador,$f6_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=1; $f6_td_id=0; $g6_td_id=1;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=1; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=1; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

  $_SESSION["f6_count"] = $_SESSION["f6_count"] + 1;

          $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
          $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
          $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
          $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
          $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
          $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
          $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

          $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
          $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
          $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
          $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
          $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
          $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
          $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

          $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
          $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
          $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
          $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
          $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
          $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
          $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
          array_push($_SESSION['array_jogadas'],$f6_string);
          }

    if (isset($_POST['g6'])){
      $_SESSION['resultado'] = calcula_resultado($_SESSION['resultado'],$g6_operador,$g6_numero);

                           $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=1;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=1; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=1;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=1;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

  $_SESSION["g6_count"] = $_SESSION["g6_count"] + 1;

          $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
          $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
          $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
          $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
          $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
          $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
          $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

          $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
          $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
          $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
          $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
          $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
          $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
          $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

          $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
          $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
          $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
          $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
          $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
          $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
          $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;
          array_push($_SESSION['array_jogadas'],$g6_string);
          }

  //______________Linha_7________________________________________

  if (isset($_POST['a7'])){
  $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
  $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION['resultado']==$a7_numero && $_SESSION["count"]==$numero_max_movimentos)
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
    $_SESSION["count"] = $_SESSION["count"] *0;

                         $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
            $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["ganhou"] = $ganhou_mensagem; $_SESSION["perdeu"] = "";
    $_SESSION['array_jogadas'] = array($init_string);
  }


  else
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
    $_SESSION["count"] = $_SESSION["count"] *0;

                         $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
            $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
            $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

    $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = $ganhou_perdeu;
    $_SESSION['array_jogadas'] = array($init_string);
  }
  }

  if (isset($_POST['b7'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
    $_SESSION["count"] = $_SESSION["count"] + 1;

    if($_SESSION['resultado']==$b7_numero && $_SESSION["count"]==$numero_max_movimentos)
    {
      $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
      $_SESSION["count"] = $_SESSION["count"] *0;

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
              $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

      $_SESSION["ganhou"] = $ganhou_mensagem; $_SESSION["perdeu"] = "";
      $_SESSION['array_jogadas'] = array($init_string);
    }


    else
    {
      $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
      $_SESSION["count"] = $_SESSION["count"] *0;

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
              $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

      $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = $ganhou_perdeu;
      $_SESSION['array_jogadas'] = array($init_string);
    }
    }

  if (isset($_POST['c7'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
    $_SESSION["count"] = $_SESSION["count"] + 1;

    if($_SESSION['resultado']==$c7_numero && $_SESSION["count"]==$numero_max_movimentos)
    {
      $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
      $_SESSION["count"] = $_SESSION["count"] *0;

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
              $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

      $_SESSION["ganhou"] = $ganhou_mensagem; $_SESSION["perdeu"] = "";
      $_SESSION['array_jogadas'] = array($init_string);
    }


    else
    {
      $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
      $_SESSION["count"] = $_SESSION["count"] *0;

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
              $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

      $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = $ganhou_perdeu;
      $_SESSION['array_jogadas'] = array($init_string);
    }
    }

  if (isset($_POST['d7'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
    $_SESSION["count"] = $_SESSION["count"] + 1;

    if($_SESSION['resultado']==$d7_numero && $_SESSION["count"]==$numero_max_movimentos)
    {
      $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
      $_SESSION["count"] = $_SESSION["count"] *0;

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
              $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

      $_SESSION["ganhou"] = $ganhou_mensagem; $_SESSION["perdeu"] = "";
      $_SESSION['array_jogadas'] = array($init_string);
    }


    else
    {
      $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
      $_SESSION["count"] = $_SESSION["count"] *0;

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
              $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

      $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = $ganhou_perdeu;
      $_SESSION['array_jogadas'] = array($init_string);
    }
    }


  if (isset($_POST['e7'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
    $_SESSION["count"] = $_SESSION["count"] + 1;

    if($_SESSION['resultado']==$e7_numero && $_SESSION["count"]==$numero_max_movimentos)
    {
      $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
      $_SESSION["count"] = $_SESSION["count"] *0;

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
              $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

      $_SESSION["ganhou"] = $ganhou_mensagem; $_SESSION["perdeu"] = "";
      $_SESSION['array_jogadas'] = array($init_string);
    }


    else
    {
      $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
      $_SESSION["count"] = $_SESSION["count"] *0;

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
              $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

      $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = $ganhou_perdeu;
      $_SESSION['array_jogadas'] = array($init_string);
    }
    }



  if (isset($_POST['f7'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
    $_SESSION["count"] = $_SESSION["count"] + 1;

    if($_SESSION['resultado']==$f7_numero && $_SESSION["count"]==$numero_max_movimentos)
    {
      $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
      $_SESSION["count"] = $_SESSION["count"] *0;

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
              $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

      $_SESSION["ganhou"] = $ganhou_mensagem; $_SESSION["perdeu"] = "";
      $_SESSION['array_jogadas'] = array($init_string);
    }


    else
    {
      $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
      $_SESSION["count"] = $_SESSION["count"] *0;

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
              $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

      $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = $ganhou_perdeu;
      $_SESSION['array_jogadas'] = array($init_string);
    }
    }


  if (isset($_POST['g7'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
    $_SESSION["count"] = $_SESSION["count"] + 1;

    if($_SESSION['resultado']==$g7_numero && $_SESSION["count"]==$numero_max_movimentos)
    {
      $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
      $_SESSION["count"] = $_SESSION["count"] *0;

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
              $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

      $_SESSION["ganhou"] = $ganhou_mensagem; $_SESSION["perdeu"] = "";
      $_SESSION['array_jogadas'] = array($init_string);
    }


    else
    {
      $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
      $_SESSION["count"] = $_SESSION["count"] *0;

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
              $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

      $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = $ganhou_perdeu;
      $_SESSION['array_jogadas'] = array($init_string);
    }
    }

    //______Inicio_dos_submit_tipo_inverso______________________________________________________________
    //_______Linha_1______b1_inverso____________________________________________________________________
    if (isset($_POST['b1_inverso'])){
        if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c1')
        {
          $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b1_operador,$b1_numero);

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=1; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=1; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

              $_SESSION["count"] = $_SESSION["count"] - 1;
              if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

              $_SESSION["b1_count"] = $_SESSION["b1_count"] - 1;

              $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
              $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
              $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
              $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
              $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
              $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
              $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

              $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
              $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
              $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
              $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
              $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
              $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
              $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

              $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
              $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
              $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
              $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
              $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
              $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
              $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

              array_pop($_SESSION['array_jogadas']);

        }

        elseif($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b2')
        {
          $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b1_operador,$b1_numero);

                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=1; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=1; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

              $_SESSION["count"] = $_SESSION["count"] - 1;
              if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

              $_SESSION["b1_count"] = $_SESSION["b1_count"] - 1;

              $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
              $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
              $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
              $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
              $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
              $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
              $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

              $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
              $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
              $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
              $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
              $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
              $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
              $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

              $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
              $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
              $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
              $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
              $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
              $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
              $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

              array_pop($_SESSION['array_jogadas']);
        }
        else
        {
          $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
          $_SESSION["count"] = $_SESSION["count"] *0;

                       $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
          $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
          $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
          $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
          $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
          $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
          $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                       $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
          $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
          $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
          $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
          $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
          $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
          $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

          $_SESSION['array_jogadas'] = array($init_string);

          $_SESSION["a1_count"] = 0; $_SESSION["a2_count"] = 0; $_SESSION["a3_count"] = 0; $_SESSION["a4_count"] = 0; $_SESSION["a5_count"] = 0; $_SESSION["a6_count"] = 0; $_SESSION["a7_count"] = 0;
          $_SESSION["b1_count"] = 0; $_SESSION["b2_count"] = 0; $_SESSION["b3_count"] = 0; $_SESSION["b4_count"] = 0; $_SESSION["b5_count"] = 0; $_SESSION["b6_count"] = 0; $_SESSION["b7_count"] = 0;
          $_SESSION["c1_count"] = 0; $_SESSION["c2_count"] = 0; $_SESSION["c3_count"] = 0; $_SESSION["c4_count"] = 0; $_SESSION["c5_count"] = 0; $_SESSION["c6_count"] = 0; $_SESSION["c7_count"] = 0;
          $_SESSION["d1_count"] = 0; $_SESSION["d2_count"] = 0; $_SESSION["d3_count"] = 0; $_SESSION["d4_count"] = 0; $_SESSION["d5_count"] = 0; $_SESSION["d6_count"] = 0; $_SESSION["d7_count"] = 0;
          $_SESSION["e1_count"] = 0; $_SESSION["e2_count"] = 0; $_SESSION["e3_count"] = 0; $_SESSION["e4_count"] = 0; $_SESSION["e5_count"] = 0; $_SESSION["e6_count"] = 0; $_SESSION["e7_count"] = 0;
          $_SESSION["f1_count"] = 0; $_SESSION["f2_count"] = 0; $_SESSION["f3_count"] = 0; $_SESSION["f4_count"] = 0; $_SESSION["f5_count"] = 0; $_SESSION["f6_count"] = 0; $_SESSION["f7_count"] = 0;
          $_SESSION["g1_count"] = 0; $_SESSION["g2_count"] = 0; $_SESSION["g3_count"] = 0; $_SESSION["g4_count"] = 0; $_SESSION["g5_count"] = 0; $_SESSION["g6_count"] = 0; $_SESSION["g7_count"] = 0;

        }

    }

//_______Linha_1______c1_inverso____________________________________________________________________

    if (isset($_POST['c1_inverso'])){
        if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b1')
        {
          $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c1_operador,$c1_numero);

                           $b1_td_id=0; $c1_td_id=1; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=1; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

              $_SESSION["count"] = $_SESSION["count"] - 1;
              if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

              $_SESSION["c1_count"] = $_SESSION["c1_count"] - 1;

              $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
              $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
              $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
              $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
              $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
              $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
              $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

              $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
              $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
              $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
              $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
              $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
              $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
              $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

              $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
              $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
              $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
              $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
              $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
              $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
              $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

              array_pop($_SESSION['array_jogadas']);

        }

        if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd1')
        {
          $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c1_operador,$c1_numero);

                           $b1_td_id=0; $c1_td_id=1; $d1_td_id=0; $e1_td_id=1; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=1; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

              $_SESSION["count"] = $_SESSION["count"] - 1;
              if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

              $_SESSION["c1_count"] = $_SESSION["c1_count"] - 1;

              $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
              $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
              $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
              $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
              $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
              $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
              $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

              $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
              $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
              $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
              $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
              $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
              $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
              $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

              $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
              $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
              $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
              $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
              $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
              $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
              $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

              array_pop($_SESSION['array_jogadas']);

        }

        if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c2')
        {
          $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c1_operador,$c1_numero);

                           $b1_td_id=0; $c1_td_id=1; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
              $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
              $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
              $a2_in_id=0; $b2_in_id=0; $c2_in_id=1; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

              $_SESSION["count"] = $_SESSION["count"] - 1;
              if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

              $_SESSION["c1_count"] = $_SESSION["c1_count"] - 1;

              $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
              $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
              $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
              $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
              $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
              $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
              $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

              $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
              $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
              $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
              $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
              $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
              $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
              $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

              $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
              $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
              $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
              $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
              $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
              $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
              $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

              array_pop($_SESSION['array_jogadas']);

        }
    }

    //_______Linha_1______d1_inverso____________________________________________________________________

        if (isset($_POST['d1_inverso'])){
            if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c1')
            {
              $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d1_operador,$d1_numero);

                               $b1_td_id=1; $c1_td_id=0; $d1_td_id=1; $e1_td_id=0; $f1_td_id=0;
                  $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                  $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                  $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                  $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                  $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                  $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                               $b1_in_id=0; $c1_in_id=1; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                  $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                  $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                  $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                  $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                  $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                  $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                  $_SESSION["count"] = $_SESSION["count"] - 1;
                  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                  $_SESSION["d1_count"] = $_SESSION["d1_count"] - 1;

                  $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                  $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                  $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                  $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                  $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                  $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                  $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                  $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                  $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                  $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                  $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                  $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                  $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                  $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                  $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                  $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                  $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                  $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                  $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                  $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                  $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                  array_pop($_SESSION['array_jogadas']);

            }

            if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e1')
            {
              $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d1_operador,$d1_numero);

                               $b1_td_id=0; $c1_td_id=0; $d1_td_id=1; $e1_td_id=0; $f1_td_id=1;
                  $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
                  $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                  $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                  $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                  $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                  $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                               $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=1; $f1_in_id=0;
                  $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                  $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                  $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                  $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                  $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                  $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                  $_SESSION["count"] = $_SESSION["count"] - 1;
                  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                  $_SESSION["d1_count"] = $_SESSION["d1_count"] - 1;

                  $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                  $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                  $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                  $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                  $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                  $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                  $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                  $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                  $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                  $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                  $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                  $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                  $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                  $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                  $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                  $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                  $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                  $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                  $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                  $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                  $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                  array_pop($_SESSION['array_jogadas']);

            }

            if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd2')
            {
              $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d1_operador,$d1_numero);

                               $b1_td_id=0; $c1_td_id=0; $d1_td_id=1; $e1_td_id=0; $f1_td_id=0;
                  $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
                  $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                  $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                  $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                  $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                  $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                               $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                  $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=1; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                  $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                  $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                  $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                  $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                  $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                  $_SESSION["count"] = $_SESSION["count"] - 1;
                  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                  $_SESSION["d1_count"] = $_SESSION["d1_count"] - 1;

                  $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                  $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                  $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                  $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                  $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                  $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                  $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                  $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                  $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                  $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                  $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                  $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                  $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                  $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                  $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                  $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                  $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                  $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                  $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                  $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                  $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                  array_pop($_SESSION['array_jogadas']);

            }

          }

//_______Linha_1______e1_inverso____________________________________________________________________

              if (isset($_POST['e1_inverso'])){
                  if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd1')
                  {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e1_operador,$e1_numero);

                                     $b1_td_id=0; $c1_td_id=1; $d1_td_id=0; $e1_td_id=1; $f1_td_id=0;
                        $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                        $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                        $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                        $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                        $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                        $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                     $b1_in_id=0; $c1_in_id=0; $d1_in_id=1; $e1_in_id=0; $f1_in_id=0;
                        $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                        $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                        $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                        $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                        $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                        $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                        $_SESSION["count"] = $_SESSION["count"] - 1;
                        if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                        $_SESSION["e1_count"] = $_SESSION["e1_count"] - 1;

                        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                        array_pop($_SESSION['array_jogadas']);

                  }

                  if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f1')
                  {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e1_operador,$e1_numero);

                                     $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=1; $f1_td_id=0;
                        $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
                        $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                        $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                        $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                        $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                        $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                     $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=1;
                        $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                        $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                        $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                        $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                        $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                        $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                        $_SESSION["count"] = $_SESSION["count"] - 1;
                        if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                        $_SESSION["e1_count"] = $_SESSION["e1_count"] - 1;

                        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                        array_pop($_SESSION['array_jogadas']);

                  }

                  if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e2')
                  {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e1_operador,$e1_numero);

                                     $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=1; $f1_td_id=0;
                        $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
                        $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
                        $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                        $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                        $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                        $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                     $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                        $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=1; $f2_in_id=0; $g2_in_id=0;
                        $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                        $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                        $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                        $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                        $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                        $_SESSION["count"] = $_SESSION["count"] - 1;
                        if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                        $_SESSION["e1_count"] = $_SESSION["e1_count"] - 1;

                        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                        array_pop($_SESSION['array_jogadas']);

                  }

                }

//_______Linha_1______f1_inverso____________________________________________________________________

                        if (isset($_POST['f1_inverso'])){
                            if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == "e1")
                            {
                              $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f1_operador,$f1_numero);

                                               $b1_td_id=0; $c1_td_id=0; $d1_td_id=1; $e1_td_id=0; $f1_td_id=1;
                                  $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
                                  $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                                  $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                                  $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                                  $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                                  $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                               $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=1; $f1_in_id=0;
                                  $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                                  $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                                  $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                                  $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                                  $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                                  $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                                  $_SESSION["count"] = $_SESSION["count"] - 1;
                                  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                                  $_SESSION["f1_count"] = $_SESSION["f1_count"] - 1;

                                  $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                                  $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                                  $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                                  $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                                  $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                                  $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                                  $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                                  $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                                  $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                                  $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                                  $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                                  $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                                  $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                                  $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                                  $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                                  $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                                  $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                                  $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                                  $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                                  $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                                  $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                                  array_pop($_SESSION['array_jogadas']);

                            }

                            elseif($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f2')
                            {
                              $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f1_operador,$f1_numero);

                                               $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
                                  $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=1;
                                  $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                                  $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                                  $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                                  $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                                  $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                               $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                                  $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=1; $g2_in_id=0;
                                  $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                                  $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                                  $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                                  $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                                  $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                                  $_SESSION["count"] = $_SESSION["count"] - 1;
                                  if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                                  $_SESSION["f1_count"] = $_SESSION["f1_count"] - 1;

                                  $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                                  $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                                  $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                                  $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                                  $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                                  $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                                  $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                                  $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                                  $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                                  $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                                  $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                                  $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                                  $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                                  $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                                  $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                                  $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                                  $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                                  $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                                  $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                                  $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                                  $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                                  array_pop($_SESSION['array_jogadas']);

                            }
                            else
                            {
                              $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
                              $_SESSION["count"] = $_SESSION["count"] *0;

                                           $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
                              $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
                              $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                              $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                              $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                              $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                              $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                           $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                              $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                              $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                              $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                              $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                              $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                              $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                              $_SESSION['array_jogadas'] = array($init_string);

                              $_SESSION["a1_count"] = 0; $_SESSION["a2_count"] = 0; $_SESSION["a3_count"] = 0; $_SESSION["a4_count"] = 0; $_SESSION["a5_count"] = 0; $_SESSION["a6_count"] = 0; $_SESSION["a7_count"] = 0;
                              $_SESSION["b1_count"] = 0; $_SESSION["b2_count"] = 0; $_SESSION["b3_count"] = 0; $_SESSION["b4_count"] = 0; $_SESSION["b5_count"] = 0; $_SESSION["b6_count"] = 0; $_SESSION["b7_count"] = 0;
                              $_SESSION["c1_count"] = 0; $_SESSION["c2_count"] = 0; $_SESSION["c3_count"] = 0; $_SESSION["c4_count"] = 0; $_SESSION["c5_count"] = 0; $_SESSION["c6_count"] = 0; $_SESSION["c7_count"] = 0;
                              $_SESSION["d1_count"] = 0; $_SESSION["d2_count"] = 0; $_SESSION["d3_count"] = 0; $_SESSION["d4_count"] = 0; $_SESSION["d5_count"] = 0; $_SESSION["d6_count"] = 0; $_SESSION["d7_count"] = 0;
                              $_SESSION["e1_count"] = 0; $_SESSION["e2_count"] = 0; $_SESSION["e3_count"] = 0; $_SESSION["e4_count"] = 0; $_SESSION["e5_count"] = 0; $_SESSION["e6_count"] = 0; $_SESSION["e7_count"] = 0;
                              $_SESSION["f1_count"] = 0; $_SESSION["f2_count"] = 0; $_SESSION["f3_count"] = 0; $_SESSION["f4_count"] = 0; $_SESSION["f5_count"] = 0; $_SESSION["f6_count"] = 0; $_SESSION["f7_count"] = 0;
                              $_SESSION["g1_count"] = 0; $_SESSION["g2_count"] = 0; $_SESSION["g3_count"] = 0; $_SESSION["g4_count"] = 0; $_SESSION["g5_count"] = 0; $_SESSION["g6_count"] = 0; $_SESSION["g7_count"] = 0;

                            }

                          }

//_______Linha_2______a2_inverso____________________________________________________________________
                          if (isset($_POST['a2_inverso'])){
                              if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b2')
                              {
                                $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$a2_operador,$a2_numero);

                                                 $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                                    $a2_td_id=1; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                                    $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                                    $a2_in_id=0; $b2_in_id=1; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                                    $_SESSION["count"] = $_SESSION["count"] - 1;
                                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                                    $_SESSION["a2_count"] = $_SESSION["a2_count"] - 1;

                                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                                    array_pop($_SESSION['array_jogadas']);

                              }

                              elseif($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'a3')
                              {
                                $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$a2_operador,$a2_numero);

                                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                                    $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                                    $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                                    $a4_td_id=1; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                                    $a3_in_id=1; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                                    $_SESSION["count"] = $_SESSION["count"] - 1;
                                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                                    $_SESSION["a2_count"] = $_SESSION["a2_count"] - 1;

                                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                                    array_pop($_SESSION['array_jogadas']);

                              }
                              else
                              {
                                $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
                                $_SESSION["count"] = $_SESSION["count"] *0;

                                             $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
                                $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
                                $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                                $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                                $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                                $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                                $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                             $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                                $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                                $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                                $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                                $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                                $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                                $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                                $_SESSION['array_jogadas'] = array($init_string);

                                $_SESSION["a1_count"] = 0; $_SESSION["a2_count"] = 0; $_SESSION["a3_count"] = 0; $_SESSION["a4_count"] = 0; $_SESSION["a5_count"] = 0; $_SESSION["a6_count"] = 0; $_SESSION["a7_count"] = 0;
                                $_SESSION["b1_count"] = 0; $_SESSION["b2_count"] = 0; $_SESSION["b3_count"] = 0; $_SESSION["b4_count"] = 0; $_SESSION["b5_count"] = 0; $_SESSION["b6_count"] = 0; $_SESSION["b7_count"] = 0;
                                $_SESSION["c1_count"] = 0; $_SESSION["c2_count"] = 0; $_SESSION["c3_count"] = 0; $_SESSION["c4_count"] = 0; $_SESSION["c5_count"] = 0; $_SESSION["c6_count"] = 0; $_SESSION["c7_count"] = 0;
                                $_SESSION["d1_count"] = 0; $_SESSION["d2_count"] = 0; $_SESSION["d3_count"] = 0; $_SESSION["d4_count"] = 0; $_SESSION["d5_count"] = 0; $_SESSION["d6_count"] = 0; $_SESSION["d7_count"] = 0;
                                $_SESSION["e1_count"] = 0; $_SESSION["e2_count"] = 0; $_SESSION["e3_count"] = 0; $_SESSION["e4_count"] = 0; $_SESSION["e5_count"] = 0; $_SESSION["e6_count"] = 0; $_SESSION["e7_count"] = 0;
                                $_SESSION["f1_count"] = 0; $_SESSION["f2_count"] = 0; $_SESSION["f3_count"] = 0; $_SESSION["f4_count"] = 0; $_SESSION["f5_count"] = 0; $_SESSION["f6_count"] = 0; $_SESSION["f7_count"] = 0;
                                $_SESSION["g1_count"] = 0; $_SESSION["g2_count"] = 0; $_SESSION["g3_count"] = 0; $_SESSION["g4_count"] = 0; $_SESSION["g5_count"] = 0; $_SESSION["g6_count"] = 0; $_SESSION["g7_count"] = 0;

                              }
                            }

//_______Linha_2______b2_inverso____________________________________________________________________
                            if (isset($_POST['b2_inverso'])){
                            if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b1')
                            {
                            $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b2_operador,$b2_numero);

                                         $b1_td_id=0; $c1_td_id=1; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                            $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                            $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                         $b1_in_id=1; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                            $_SESSION["count"] = $_SESSION["count"] - 1;
                            if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                            $_SESSION["b2_count"] = $_SESSION["b2_count"] - 1;

                            $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                            $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                            $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                            $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                            $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                            $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                            $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                            $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                            $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                            $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                            $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                            $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                            $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                            $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                            $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                            $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                            $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                            $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                            $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                            $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                            $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                            array_pop($_SESSION['array_jogadas']);

                            }

                            if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'a2')
                            {
                            $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b2_operador,$b2_numero);

                                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                            $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                            $a3_td_id=1; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                            $a2_in_id=1; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                            $_SESSION["count"] = $_SESSION["count"] - 1;
                            if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                            $_SESSION["b2_count"] = $_SESSION["b2_count"] - 1;

                            $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                            $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                            $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                            $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                            $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                            $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                            $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                            $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                            $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                            $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                            $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                            $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                            $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                            $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                            $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                            $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                            $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                            $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                            $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                            $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                            $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                            array_pop($_SESSION['array_jogadas']);

                            }

                            if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c2')
                            {
                            $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b2_operador,$b2_numero);

                                         $b1_td_id=0; $c1_td_id=1; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                            $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                            $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                            $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                            $a2_in_id=0; $b2_in_id=0; $c2_in_id=1; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                            $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                            $_SESSION["count"] = $_SESSION["count"] - 1;
                            if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                            $_SESSION["b2_count"] = $_SESSION["b2_count"] - 1;

                            $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                            $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                            $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                            $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                            $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                            $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                            $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                            $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                            $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                            $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                            $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                            $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                            $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                            $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                            $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                            $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                            $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                            $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                            $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                            $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                            $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                            array_pop($_SESSION['array_jogadas']);

                            }

                            if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b3')
                            {
                            $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b2_operador,$b2_numero);

                                         $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                            $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                            $a3_td_id=1; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                            $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                            $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                            $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                            $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                         $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                            $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                            $a3_in_id=0; $b3_in_id=1; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                            $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                            $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                            $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                            $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                            $_SESSION["count"] = $_SESSION["count"] - 1;
                            if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                            $_SESSION["b2_count"] = $_SESSION["b2_count"] - 1;

                            $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                            $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                            $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                            $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                            $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                            $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                            $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                            $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                            $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                            $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                            $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                            $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                            $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                            $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                            $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                            $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                            $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                            $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                            $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                            $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                            $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                            array_pop($_SESSION['array_jogadas']);

                            }
                          }

//_______Linha_2______c2_inverso____________________________________________________________________
                          if (isset($_POST['c2_inverso'])){
                          if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c1')
                          {
                          $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c2_operador,$c2_numero);

                                       $b1_td_id=1; $c1_td_id=0; $d1_td_id=1; $e1_td_id=0; $f1_td_id=0;
                          $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                          $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                          $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                          $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                          $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                          $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                       $b1_in_id=0; $c1_in_id=1; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                          $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                          $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                          $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                          $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                          $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                          $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                          $_SESSION["count"] = $_SESSION["count"] - 1;
                          if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                          $_SESSION["c2_count"] = $_SESSION["c2_count"] - 1;

                          $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                          $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                          $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                          $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                          $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                          $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                          $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                          $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                          $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                          $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                          $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                          $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                          $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                          $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                          $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                          $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                          $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                          $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                          $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                          $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                          $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                          array_pop($_SESSION['array_jogadas']);

                          }

                          if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b2')
                          {
                          $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c2_operador,$c2_numero);

                                       $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                          $a2_td_id=1; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                          $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                          $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                          $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                          $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                          $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                       $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                          $a2_in_id=0; $b2_in_id=1; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                          $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                          $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                          $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                          $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                          $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                          $_SESSION["count"] = $_SESSION["count"] - 1;
                          if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                          $_SESSION["c2_count"] = $_SESSION["c2_count"] - 1;

                          $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                          $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                          $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                          $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                          $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                          $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                          $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                          $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                          $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                          $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                          $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                          $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                          $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                          $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                          $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                          $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                          $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                          $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                          $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                          $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                          $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                          array_pop($_SESSION['array_jogadas']);

                          }

                          if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd2')
                          {
                          $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c2_operador,$c2_numero);

                                       $b1_td_id=0; $c1_td_id=0; $d1_td_id=1; $e1_td_id=0; $f1_td_id=0;
                          $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
                          $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                          $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                          $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                          $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                          $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                       $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                          $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=1; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                          $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                          $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                          $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                          $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                          $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                          $_SESSION["count"] = $_SESSION["count"] - 1;
                          if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                          $_SESSION["c2_count"] = $_SESSION["c2_count"] - 1;

                          $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                          $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                          $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                          $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                          $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                          $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                          $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                          $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                          $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                          $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                          $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                          $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                          $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                          $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                          $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                          $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                          $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                          $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                          $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                          $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                          $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                          array_pop($_SESSION['array_jogadas']);

                          }

                          if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c3')
                          {
                          $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c2_operador,$c2_numero);

                                       $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                          $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                          $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                          $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                          $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                          $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                          $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                       $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                          $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                          $a3_in_id=0; $b3_in_id=0; $c3_in_id=1; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                          $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                          $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                          $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                          $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                          $_SESSION["count"] = $_SESSION["count"] - 1;
                          if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                          $_SESSION["c2_count"] = $_SESSION["c2_count"] - 1;

                          $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                          $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                          $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                          $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                          $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                          $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                          $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                          $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                          $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                          $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                          $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                          $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                          $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                          $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                          $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                          $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                          $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                          $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                          $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                          $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                          $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                          array_pop($_SESSION['array_jogadas']);

                          }
                        }

//_______Linha_2______d2_inverso____________________________________________________________________
                        if (isset($_POST['d2_inverso'])){
                        if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd1')
                        {
                        $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d2_operador,$d2_numero);

                                     $b1_td_id=0; $c1_td_id=1; $d1_td_id=0; $e1_td_id=1; $f1_td_id=0;
                        $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                        $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                        $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                        $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                        $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                        $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                     $b1_in_id=0; $c1_in_id=0; $d1_in_id=1; $e1_in_id=0; $f1_in_id=0;
                        $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                        $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                        $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                        $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                        $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                        $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                        $_SESSION["count"] = $_SESSION["count"] - 1;
                        if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                        $_SESSION["d2_count"] = $_SESSION["d2_count"] - 1;

                        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                        array_pop($_SESSION['array_jogadas']);

                        }

                        if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c2')
                        {
                        $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d2_operador,$d2_numero);

                                     $b1_td_id=0; $c1_td_id=1; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                        $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                        $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                        $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                        $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                        $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                        $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                     $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                        $a2_in_id=0; $b2_in_id=0; $c2_in_id=1; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                        $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                        $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                        $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                        $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                        $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                        $_SESSION["count"] = $_SESSION["count"] - 1;
                        if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                        $_SESSION["d2_count"] = $_SESSION["d2_count"] - 1;

                        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                        array_pop($_SESSION['array_jogadas']);

                        }

                        if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e2')
                        {
                        $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d2_operador,$d2_numero);

                                     $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=1; $f1_td_id=0;
                        $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
                        $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
                        $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                        $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                        $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                        $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                     $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                        $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=1; $f2_in_id=0; $g2_in_id=0;
                        $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                        $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                        $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                        $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                        $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                        $_SESSION["count"] = $_SESSION["count"] - 1;
                        if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                        $_SESSION["d2_count"] = $_SESSION["d2_count"] - 1;

                        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                        array_pop($_SESSION['array_jogadas']);

                        }

                        if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd3')
                        {
                        $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d2_operador,$d2_numero);

                                     $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                        $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                        $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
                        $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                        $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                        $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                        $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                     $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                        $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                        $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=1; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                        $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                        $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                        $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                        $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                        $_SESSION["count"] = $_SESSION["count"] - 1;
                        if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                        $_SESSION["d2_count"] = $_SESSION["d2_count"] - 1;

                        $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                        $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                        $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                        $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                        $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                        $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                        $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                        $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                        $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                        $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                        $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                        $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                        $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                        $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                        $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                        $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                        $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                        $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                        $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                        $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                        $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                        array_pop($_SESSION['array_jogadas']);

                        }
                      }

//_______Linha_2______e2_inverso____________________________________________________________________
                      if (isset($_POST['e2_inverso'])){
                      if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e1')
                      {
                      $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e2_operador,$e2_numero);

                                   $b1_td_id=0; $c1_td_id=0; $d1_td_id=1; $e1_td_id=0; $f1_td_id=1;
                      $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
                      $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                      $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                      $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                      $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                      $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                   $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=1; $f1_in_id=0;
                      $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                      $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                      $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                      $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                      $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                      $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                      $_SESSION["count"] = $_SESSION["count"] - 1;
                      if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                      $_SESSION["e2_count"] = $_SESSION["e2_count"] - 1;

                      $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                      $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                      $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                      $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                      $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                      $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                      $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                      $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                      $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                      $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                      $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                      $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                      $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                      $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                      $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                      $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                      $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                      $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                      $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                      $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                      $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                      array_pop($_SESSION['array_jogadas']);

                      }

                      if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd2')
                      {
                      $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e2_operador,$e2_numero);

                                   $b1_td_id=0; $c1_td_id=0; $d1_td_id=1; $e1_td_id=0; $f1_td_id=0;
                      $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
                      $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                      $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                      $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                      $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                      $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                   $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                      $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=1; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                      $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                      $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                      $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                      $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                      $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                      $_SESSION["count"] = $_SESSION["count"] - 1;
                      if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                      $_SESSION["e2_count"] = $_SESSION["e2_count"] - 1;

                      $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                      $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                      $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                      $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                      $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                      $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                      $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                      $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                      $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                      $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                      $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                      $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                      $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                      $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                      $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                      $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                      $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                      $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                      $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                      $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                      $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                      array_pop($_SESSION['array_jogadas']);

                      }

                      if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f2')
                      {
                      $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e2_operador,$e2_numero);

                                   $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
                      $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=1;
                      $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                      $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                      $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                      $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                      $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                   $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                      $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=1; $g2_in_id=0;
                      $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                      $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                      $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                      $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                      $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                      $_SESSION["count"] = $_SESSION["count"] - 1;
                      if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                      $_SESSION["e2_count"] = $_SESSION["e2_count"] - 1;

                      $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                      $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                      $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                      $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                      $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                      $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                      $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                      $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                      $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                      $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                      $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                      $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                      $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                      $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                      $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                      $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                      $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                      $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                      $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                      $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                      $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                      array_pop($_SESSION['array_jogadas']);

                      }

                      if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e3')
                      {
                      $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e2_operador,$e2_numero);

                                   $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                      $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
                      $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                      $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
                      $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                      $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                      $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                   $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                      $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                      $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=1; $f3_in_id=0; $g3_in_id=0;
                      $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                      $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                      $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                      $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                      $_SESSION["count"] = $_SESSION["count"] - 1;
                      if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                      $_SESSION["e2_count"] = $_SESSION["e2_count"] - 1;

                      $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                      $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                      $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                      $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                      $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                      $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                      $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                      $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                      $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                      $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                      $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                      $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                      $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                      $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                      $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                      $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                      $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                      $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                      $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                      $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                      $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                      array_pop($_SESSION['array_jogadas']);

                      }

                    }


//_______Linha_2______f2_inverso____________________________________________________________________
                    if (isset($_POST['f2_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f1')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f2_operador,$f2_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=1; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=1;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f2_count"] = $_SESSION["f2_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e2')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f2_operador,$f2_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=1; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=1; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f2_count"] = $_SESSION["f2_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'g2')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f2_operador,$f2_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=1;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=1;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f2_count"] = $_SESSION["f2_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f2_operador,$f2_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=1;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=1; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f2_count"] = $_SESSION["f2_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }


//_______Linha_2______g2_inverso____________________________________________________________________
                    if (isset($_POST['g2_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f2')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$g2_operador,$g2_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=1;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=1; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["g2_count"] = $_SESSION["g2_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    elseif($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'g3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$g2_operador,$g2_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=1;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=1;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["g2_count"] = $_SESSION["g2_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    else
                    {
                      $_SESSION['resultado'] = $_SESSION['resultado'] *0 +$numero_inicial;
                      $_SESSION["count"] = $_SESSION["count"] *0;

                                   $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
                      $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
                      $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                      $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                      $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                      $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                      $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                   $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                      $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                      $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                      $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                      $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                      $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                      $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                      $_SESSION['array_jogadas'] = array($init_string);

                      $_SESSION["a1_count"] = 0; $_SESSION["a2_count"] = 0; $_SESSION["a3_count"] = 0; $_SESSION["a4_count"] = 0; $_SESSION["a5_count"] = 0; $_SESSION["a6_count"] = 0; $_SESSION["a7_count"] = 0;
                      $_SESSION["b1_count"] = 0; $_SESSION["b2_count"] = 0; $_SESSION["b3_count"] = 0; $_SESSION["b4_count"] = 0; $_SESSION["b5_count"] = 0; $_SESSION["b6_count"] = 0; $_SESSION["b7_count"] = 0;
                      $_SESSION["c1_count"] = 0; $_SESSION["c2_count"] = 0; $_SESSION["c3_count"] = 0; $_SESSION["c4_count"] = 0; $_SESSION["c5_count"] = 0; $_SESSION["c6_count"] = 0; $_SESSION["c7_count"] = 0;
                      $_SESSION["d1_count"] = 0; $_SESSION["d2_count"] = 0; $_SESSION["d3_count"] = 0; $_SESSION["d4_count"] = 0; $_SESSION["d5_count"] = 0; $_SESSION["d6_count"] = 0; $_SESSION["d7_count"] = 0;
                      $_SESSION["e1_count"] = 0; $_SESSION["e2_count"] = 0; $_SESSION["e3_count"] = 0; $_SESSION["e4_count"] = 0; $_SESSION["e5_count"] = 0; $_SESSION["e6_count"] = 0; $_SESSION["e7_count"] = 0;
                      $_SESSION["f1_count"] = 0; $_SESSION["f2_count"] = 0; $_SESSION["f3_count"] = 0; $_SESSION["f4_count"] = 0; $_SESSION["f5_count"] = 0; $_SESSION["f6_count"] = 0; $_SESSION["f7_count"] = 0;
                      $_SESSION["g1_count"] = 0; $_SESSION["g2_count"] = 0; $_SESSION["g3_count"] = 0; $_SESSION["g4_count"] = 0; $_SESSION["g5_count"] = 0; $_SESSION["g6_count"] = 0; $_SESSION["g7_count"] = 0;

                    }

                    }

//_______Linha_3______a3_inverso____________________________________________________________________
                    if (isset($_POST['a3_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'a2')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$a3_operador,$a3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=1; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=1; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$a3_operador,$a3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=1; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=1; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'a4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$a3_operador,$a3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=1; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=1; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=1; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_3______b3_inverso____________________________________________________________________
                    if (isset($_POST['b3_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b2')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b3_operador,$b3_numero);

                                 $b1_td_id=1; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=1; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=1; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b3_count"] = $_SESSION["b3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'a3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b3_operador,$b3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=1; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=1; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b3_count"] = $_SESSION["b3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b3_operador,$b3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=1; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b3_count"] = $_SESSION["b3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b3_operador,$b3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=1; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=1; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b3_count"] = $_SESSION["b3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_3______c3_inverso____________________________________________________________________
                    if (isset($_POST['c3_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c2')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c3_operador,$c3_numero);

                                 $b1_td_id=0; $c1_td_id=1; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=1; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c3_count"] = $_SESSION["c3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c3_operador,$c3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=1; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=1; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c3_count"] = $_SESSION["c3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c3_operador,$c3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=1; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c3_count"] = $_SESSION["c3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c3_operador,$c3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=1; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c3_count"] = $_SESSION["c3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);
                  }
                }




//_______Linha_3______d3_inverso____________________________________________________________________
                    if (isset($_POST['d3_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd2')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d3_operador,$d3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=1; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=1; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d3_count"] = $_SESSION["d3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d3_operador,$d3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=1; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d3_count"] = $_SESSION["d3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d3_operador,$d3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=1; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d3_count"] = $_SESSION["d3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d3_operador,$d3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=1; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d3_count"] = $_SESSION["d3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_3______e3_inverso____________________________________________________________________
                    if (isset($_POST['e3_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e2')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e3_operador,$e3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=1; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=1; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e3_count"] = $_SESSION["e3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e3_operador,$e3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=1; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e3_count"] = $_SESSION["e3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e3_operador,$e3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=1;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=1; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e3_count"] = $_SESSION["e3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e3_operador,$e3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=1; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e3_count"] = $_SESSION["e3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_3______f3_inverso____________________________________________________________________
                    if (isset($_POST['f3_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f2')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f3_operador,$f3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=1;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=1;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=1; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f3_count"] = $_SESSION["f3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f3_operador,$f3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=1; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f3_count"] = $_SESSION["f3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'g3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f3_operador,$f3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=1;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=1;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f3_count"] = $_SESSION["f3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f3_operador,$f3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=1;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=1; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f3_count"] = $_SESSION["f3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_3______g3_inverso____________________________________________________________________
                    if (isset($_POST['g3_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'g2')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$g3_operador,$g3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=1;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=1;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["g3_count"] = $_SESSION["g3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$g3_operador,$g3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=1;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=1; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["g3_count"] = $_SESSION["g3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'g4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$g3_operador,$g3_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=1;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=1;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=1;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["g3_count"] = $_SESSION["g3_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_4______a4_inverso____________________________________________________________________
                    if (isset($_POST['a4_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'a3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$a4_operador,$a4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=1; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=1; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=1; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["a4_count"] = $_SESSION["a4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$a4_operador,$a4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=1; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=1; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["a4_count"] = $_SESSION["a4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'a5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$a4_operador,$a4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=1; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=1; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=1; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["a4_count"] = $_SESSION["a4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }
//_______Linha_4______b4_inverso____________________________________________________________________
                    if (isset($_POST['b4_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b4_operador,$b4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=1; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=1; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=1; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b4_count"] = $_SESSION["b4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'a4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b4_operador,$b4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=1; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=1; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=1; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b4_count"] = $_SESSION["b4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b4_operador,$b4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=1; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b4_count"] = $_SESSION["b4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b4_operador,$b4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=1; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=1; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=1; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b4_count"] = $_SESSION["b4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_4______c4_inverso____________________________________________________________________
                    if (isset($_POST['c4_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c4_operador,$c4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=1; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=1; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c4_count"] = $_SESSION["c4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c4_operador,$c4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=1; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=1; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c4_count"] = $_SESSION["c4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c4_operador,$c4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=1; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c4_count"] = $_SESSION["c4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c4_operador,$c4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=1; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=1; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c4_count"] = $_SESSION["c4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }
//_______Linha_4______d4_inverso____________________________________________________________________
                    if (isset($_POST['d4_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d4_operador,$d4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=1; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=1; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d4_count"] = $_SESSION["d4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d4_operador,$d4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=1; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d4_count"] = $_SESSION["d4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d4_operador,$d4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=1; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d4_count"] = $_SESSION["d4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d4_operador,$d4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=1; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=1; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d4_count"] = $_SESSION["d4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }
//_______Linha_4______e4_inverso____________________________________________________________________
                    if (isset($_POST['e4_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e4_operador,$e4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=1; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=1; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e4_count"] = $_SESSION["e4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e4_operador,$e4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=1; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e4_count"] = $_SESSION["e4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e4_operador,$e4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=1;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=1; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e4_count"] = $_SESSION["e4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e4_operador,$e4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=1; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=1; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e4_count"] = $_SESSION["e4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_4______f4_inverso____________________________________________________________________
                    if (isset($_POST['f4_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f4_operador,$f4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=1; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=1;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=1; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f4_count"] = $_SESSION["f4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f4_operador,$f4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=1; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f4_count"] = $_SESSION["f4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'g4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f4_operador,$f4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=1;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=1;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=1;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f4_count"] = $_SESSION["f4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f4_operador,$f4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=1;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=1; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=1; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f4_count"] = $_SESSION["f4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_4______g4_inverso____________________________________________________________________
                    if (isset($_POST['g4_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'g3')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$g4_operador,$g4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=1;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=1;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=1;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["g4_count"] = $_SESSION["g4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$g4_operador,$g4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=1;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=1; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["g4_count"] = $_SESSION["g4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'g5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$g4_operador,$g4_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=1;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=1;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=1;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["g4_count"] = $_SESSION["g4_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }


//_______Linha_5______a5_inverso____________________________________________________________________
                    if (isset($_POST['a5_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'a4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$a5_operador,$a5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=1; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=1; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=1; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$a5_operador,$a5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=1; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=1; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=1; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'a6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$a5_operador,$a5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=1; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=1; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=1; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=1; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_5______b5_inverso____________________________________________________________________
                    if (isset($_POST['b5_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b5_operador,$b5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=1; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=1; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=1; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b5_count"] = $_SESSION["b5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'a5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b5_operador,$b5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=1; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=1; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=1; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b5_count"] = $_SESSION["b5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b5_operador,$b5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=1; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=1; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b5_count"] = $_SESSION["b5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b5_operador,$b5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=1; $b6_td_id=0; $c6_td_id=1; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=1; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=1; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b5_count"] = $_SESSION["b5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_5______c5_inverso____________________________________________________________________
                    if (isset($_POST['c5_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c5_operador,$c5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=1; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=1; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c5_count"] = $_SESSION["c5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c5_operador,$c5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=1; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=1; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=1; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c5_count"] = $_SESSION["c5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c5_operador,$c5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=1; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=1; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c5_count"] = $_SESSION["c5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c5_operador,$c5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=1; $c6_td_id=0; $d6_td_id=1; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=1; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=1; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c5_count"] = $_SESSION["c5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }
//_______Linha_5______d5_inverso____________________________________________________________________
                    if (isset($_POST['d5_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d5_operador,$d5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=1; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=1; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d5_count"] = $_SESSION["d5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d5_operador,$d5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=1; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=1; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d5_count"] = $_SESSION["d5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d5_operador,$d5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=1; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=1; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d5_count"] = $_SESSION["d5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d5_operador,$d5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=1; $d6_td_id=0; $e6_td_id=1; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=1; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=1; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d5_count"] = $_SESSION["d5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_5______e5_inverso____________________________________________________________________
                    if (isset($_POST['e5_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e5_operador,$e5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=1; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=1; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e5_count"] = $_SESSION["e5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e5_operador,$e5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=1; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=1; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e5_count"] = $_SESSION["e5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e5_operador,$e5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=1;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=1; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=1; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e5_count"] = $_SESSION["e5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e5_operador,$e5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=1; $e6_td_id=0; $f6_td_id=1; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=1; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=1; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e5_count"] = $_SESSION["e5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_5______f5_inverso____________________________________________________________________
                    if (isset($_POST['f5_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f5_operador,$f5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=1; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=1;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=1; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f5_count"] = $_SESSION["f5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f5_operador,$f5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=1; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=1; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f5_count"] = $_SESSION["f5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'g5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f5_operador,$f5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=1;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=1;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=1;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f5_count"] = $_SESSION["f5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f5_operador,$f5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=1; $f6_td_id=0; $g6_td_id=1;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=1; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=1; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f5_count"] = $_SESSION["f5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }
//_______Linha_5______g5_inverso____________________________________________________________________
                    if (isset($_POST['g5_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'g4')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$g5_operador,$g5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=1;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=1;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=1;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["g5_count"] = $_SESSION["g5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }

                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$g5_operador,$g5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=1;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=1; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=1; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["g5_count"] = $_SESSION["g5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'g6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$g5_operador,$g5_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=1;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=1; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=1;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=1;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["g5_count"] = $_SESSION["g5_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_6______a6_inverso____________________________________________________________________
                    if (isset($_POST['a6_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'a5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$a6_operador,$a6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=1; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=1; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=1; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["a6_count"] = $_SESSION["a6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$a6_operador,$a6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=1; $b6_td_id=0; $c6_td_id=1; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=1; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=1; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["a6_count"] = $_SESSION["a6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }
//_______Linha_6______b6_inverso____________________________________________________________________
                    if (isset($_POST['b6_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b6_operador,$b6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=1; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=1; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=1; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=1; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b6_count"] = $_SESSION["b6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'a6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b6_operador,$b6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=1; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=1; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=1; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=1; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b6_count"] = $_SESSION["b6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$b6_operador,$b6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=1; $c6_td_id=0; $d6_td_id=1; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=1; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=1; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["b6_count"] = $_SESSION["b6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }
//_______Linha_6______c6_inverso____________________________________________________________________
                    if (isset($_POST['c6_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c6_operador,$c6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=1; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=1; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=1; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c6_count"] = $_SESSION["c6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'b6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c6_operador,$c6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=1; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=1; $b6_td_id=0; $c6_td_id=1; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=1; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=1; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c6_count"] = $_SESSION["c6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$c6_operador,$c6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=1; $d6_td_id=0; $e6_td_id=1; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=1; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=1; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["c6_count"] = $_SESSION["c6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }
//_______Linha_6______d6_inverso____________________________________________________________________
                    if (isset($_POST['d6_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d6_operador,$d6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=1; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=1; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=1; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d6_count"] = $_SESSION["d6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'c6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d6_operador,$d6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=1; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=1; $c6_td_id=0; $d6_td_id=1; $e6_td_id=0; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=1; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=1; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d6_count"] = $_SESSION["d6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$d6_operador,$d6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=1; $e6_td_id=0; $f6_td_id=1; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=1; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=1; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["d6_count"] = $_SESSION["d6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_6______e6_inverso____________________________________________________________________
                    if (isset($_POST['e6_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e6_operador,$e6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=1; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=1; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=1; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e6_count"] = $_SESSION["e6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'd6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e6_operador,$e6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=1; $e5_td_id=0; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=1; $d6_td_id=0; $e6_td_id=1; $f6_td_id=0; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=1; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=1; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e6_count"] = $_SESSION["e6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$e6_operador,$e6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=1; $f6_td_id=0; $g6_td_id=1;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=1; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=1; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["e6_count"] = $_SESSION["e6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_6______f6_inverso____________________________________________________________________
                    if (isset($_POST['f6_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f6_operador,$f6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=1; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=1;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=1; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=1; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f6_count"] = $_SESSION["f6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'e6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f6_operador,$f6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=1; $f5_td_id=0; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=1; $e6_td_id=0; $f6_td_id=1; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=1; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=1; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f6_count"] = $_SESSION["f6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'g6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$f6_operador,$f6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=0; $g5_td_id=1;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=1; $g6_td_id=0;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=1;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=1;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["f6_count"] = $_SESSION["f6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }

//_______Linha_6______g6_inverso____________________________________________________________________
                    if (isset($_POST['g6_inverso'])){
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'g5')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$g6_operador,$g6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=1;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=0; $f6_td_id=0; $g6_td_id=1;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=0; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=1;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=0; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["g6_count"] = $_SESSION["g6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    if($_SESSION['array_jogadas'][$_SESSION["count"]-1] == 'f6')
                    {
                    $_SESSION['resultado'] = calcula_resultado_inverso($_SESSION['resultado'],$g6_operador,$g6_numero);

                                 $b1_td_id=0; $c1_td_id=0; $d1_td_id=0; $e1_td_id=0; $f1_td_id=0;
                    $a2_td_id=0; $b2_td_id=0; $c2_td_id=0; $d2_td_id=0; $e2_td_id=0; $f2_td_id=0; $g2_td_id=0;
                    $a3_td_id=0; $b3_td_id=0; $c3_td_id=0; $d3_td_id=0; $e3_td_id=0; $f3_td_id=0; $g3_td_id=0;
                    $a4_td_id=0; $b4_td_id=0; $c4_td_id=0; $d4_td_id=0; $e4_td_id=0; $f4_td_id=0; $g4_td_id=0;
                    $a5_td_id=0; $b5_td_id=0; $c5_td_id=0; $d5_td_id=0; $e5_td_id=0; $f5_td_id=1; $g5_td_id=0;
                    $a6_td_id=0; $b6_td_id=0; $c6_td_id=0; $d6_td_id=0; $e6_td_id=1; $f6_td_id=0; $g6_td_id=1;
                    $a7_td_id=0; $b7_td_id=0; $c7_td_id=0; $d7_td_id=0; $e7_td_id=0; $f7_td_id=1; $g7_td_id=0;

                                 $b1_in_id=0; $c1_in_id=0; $d1_in_id=0; $e1_in_id=0; $f1_in_id=0;
                    $a2_in_id=0; $b2_in_id=0; $c2_in_id=0; $d2_in_id=0; $e2_in_id=0; $f2_in_id=0; $g2_in_id=0;
                    $a3_in_id=0; $b3_in_id=0; $c3_in_id=0; $d3_in_id=0; $e3_in_id=0; $f3_in_id=0; $g3_in_id=0;
                    $a4_in_id=0; $b4_in_id=0; $c4_in_id=0; $d4_in_id=0; $e4_in_id=0; $f4_in_id=0; $g4_in_id=0;
                    $a5_in_id=0; $b5_in_id=0; $c5_in_id=0; $d5_in_id=0; $e5_in_id=0; $f5_in_id=0; $g5_in_id=0;
                    $a6_in_id=0; $b6_in_id=0; $c6_in_id=0; $d6_in_id=0; $e6_in_id=0; $f6_in_id=1; $g6_in_id=0;
                    $a7_in_id=0; $b7_in_id=0; $c7_in_id=0; $d7_in_id=0; $e7_in_id=0; $f7_in_id=0; $g7_in_id=0;

                    $_SESSION["count"] = $_SESSION["count"] - 1;
                    if($_SESSION["count"]>=$numero_max_movimentos){$_SESSION["passou_de_max"] = $passou_de_max_mensagem;}

                    $_SESSION["g6_count"] = $_SESSION["g6_count"] - 1;

                    $_SESSION["a1_count"] = $_SESSION["a1_count"] + 0; $_SESSION["b1_count"] = $_SESSION["b1_count"] + 0;
                    $_SESSION["c1_count"] = $_SESSION["c1_count"] + 0; $_SESSION["d1_count"] = $_SESSION["d1_count"] + 0;
                    $_SESSION["e1_count"] = $_SESSION["e1_count"] + 0; $_SESSION["f1_count"] = $_SESSION["f1_count"] + 0;
                    $_SESSION["g1_count"] = $_SESSION["g1_count"] + 0; $_SESSION["a2_count"] = $_SESSION["a2_count"] + 0;
                    $_SESSION["b2_count"] = $_SESSION["b2_count"] + 0; $_SESSION["c2_count"] = $_SESSION["c2_count"] + 0;
                    $_SESSION["d2_count"] = $_SESSION["d2_count"] + 0; $_SESSION["e2_count"] = $_SESSION["e2_count"] + 0;
                    $_SESSION["f2_count"] = $_SESSION["f2_count"] + 0; $_SESSION["g2_count"] = $_SESSION["g2_count"] + 0;

                    $_SESSION["a3_count"] = $_SESSION["a3_count"] + 0; $_SESSION["b3_count"] = $_SESSION["b3_count"] + 0;
                    $_SESSION["c3_count"] = $_SESSION["c3_count"] + 0; $_SESSION["d3_count"] = $_SESSION["d3_count"] + 0;
                    $_SESSION["e3_count"] = $_SESSION["e3_count"] + 0; $_SESSION["f3_count"] = $_SESSION["f3_count"] + 0;
                    $_SESSION["g3_count"] = $_SESSION["g3_count"] + 0; $_SESSION["a4_count"] = $_SESSION["a4_count"] + 0;
                    $_SESSION["b4_count"] = $_SESSION["b4_count"] + 0; $_SESSION["c4_count"] = $_SESSION["c4_count"] + 0;
                    $_SESSION["d4_count"] = $_SESSION["d4_count"] + 0; $_SESSION["e4_count"] = $_SESSION["e4_count"] + 0;
                    $_SESSION["f4_count"] = $_SESSION["f4_count"] + 0; $_SESSION["g4_count"] = $_SESSION["g4_count"] + 0;

                    $_SESSION["a5_count"] = $_SESSION["a5_count"] + 0; $_SESSION["b5_count"] = $_SESSION["b5_count"] + 0;
                    $_SESSION["c5_count"] = $_SESSION["c5_count"] + 0; $_SESSION["d5_count"] = $_SESSION["d5_count"] + 0;
                    $_SESSION["e5_count"] = $_SESSION["e5_count"] + 0; $_SESSION["f5_count"] = $_SESSION["f5_count"] + 0;
                    $_SESSION["g5_count"] = $_SESSION["g5_count"] + 0; $_SESSION["a6_count"] = $_SESSION["a6_count"] + 0;
                    $_SESSION["b6_count"] = $_SESSION["b6_count"] + 0; $_SESSION["c6_count"] = $_SESSION["c6_count"] + 0;
                    $_SESSION["d6_count"] = $_SESSION["d6_count"] + 0; $_SESSION["e6_count"] = $_SESSION["e6_count"] + 0;
                    $_SESSION["f6_count"] = $_SESSION["f6_count"] + 0; $_SESSION["g6_count"] = $_SESSION["g6_count"] + 0;

                    array_pop($_SESSION['array_jogadas']);

                    }
                    }






//__________Padrão_de_Cores_______________________________________

  $cor_1_count = "background-color:rgb( 200 , 200 , 200);";
  $cor_2_count = "background-color:rgb( 0 , 110 , 160);";
  $cor_3_count = "background-color:rgb( 110 , 50 , 160);";
  $cor_4_count = "background-color:rgb( 200 , 0 , 90);";
  $cor_5_count = "background-color:rgb( 255 , 55 , 55);";
  $cor_6_count = "background-color:rgb( 120 , 0 , 0);";
  $cor_7_count = "background-color:rgb( 255 , 0 , 0);";
  $cor_8_count = "background-color:rgb( 255 , 50 , 0);";
  $cor_9_count = "background-color:rgb( 60 , 0 , 60);";
  $cor_10_count = "background-color:rgb( 0 , 30 , 100);";

 $a1_div = ""; $b1_div = ""; $c1_div = ""; $d1_div = ""; $e1_div = ""; $f1_div = ""; $g1_div = "";
 $a2_div = ""; $b2_div = ""; $c2_div = ""; $d2_div = ""; $e2_div = ""; $f2_div = ""; $g2_div = "";
 $a3_div = ""; $b3_div = ""; $c3_div = ""; $d3_div = ""; $e3_div = ""; $f3_div = ""; $g3_div = "";
 $a4_div = ""; $b4_div = ""; $c4_div = ""; $d4_div = ""; $e4_div = ""; $f4_div = ""; $g4_div = "";
 $a5_div = ""; $b5_div = ""; $c5_div = ""; $d5_div = ""; $e5_div = ""; $f5_div = ""; $g5_div = "";
 $a6_div = ""; $b6_div = ""; $c6_div = ""; $d6_div = ""; $e6_div = ""; $f6_div = ""; $g6_div = "";


 if($_SESSION["a1_count"] == 1){$a1_div = $cor_1_count;}    if($_SESSION["b1_count"] == 1){$b1_div = $cor_1_count;}
 if($_SESSION["a1_count"] == 2){$a1_div = $cor_2_count;}    if($_SESSION["b1_count"] == 2){$b1_div = $cor_2_count;}
 if($_SESSION["a1_count"] == 3){$a1_div = $cor_3_count;}    if($_SESSION["b1_count"] == 3){$b1_div = $cor_3_count;}
 if($_SESSION["a1_count"] == 4){$a1_div = $cor_4_count;}    if($_SESSION["b1_count"] == 4){$b1_div = $cor_4_count;}
 if($_SESSION["a1_count"] == 5){$a1_div = $cor_5_count;}    if($_SESSION["b1_count"] == 5){$b1_div = $cor_5_count;}
 if($_SESSION["a1_count"] == 6){$a1_div = $cor_6_count;}    if($_SESSION["b1_count"] == 6){$b1_div = $cor_6_count;}
 if($_SESSION["a1_count"] == 7){$a1_div = $cor_7_count;}    if($_SESSION["b1_count"] == 7){$b1_div = $cor_7_count;}
 if($_SESSION["a1_count"] == 8){$a1_div = $cor_8_count;}    if($_SESSION["b1_count"] == 8){$b1_div = $cor_8_count;}
 if($_SESSION["a1_count"] == 9){$a1_div = $cor_9_count;}    if($_SESSION["b1_count"] == 9){$b1_div = $cor_9_count;}
 if($_SESSION["a1_count"] >= 10){$a1_div = $cor_10_count;}  if($_SESSION["b1_count"] >= 10){$b1_div = $cor_10_count;}

 if($_SESSION["c1_count"] == 1){$c1_div = $cor_1_count;}    if($_SESSION["d1_count"] == 1){$d1_div = $cor_1_count;}
 if($_SESSION["c1_count"] == 2){$c1_div = $cor_2_count;}    if($_SESSION["d1_count"] == 2){$d1_div = $cor_2_count;}
 if($_SESSION["c1_count"] == 3){$c1_div = $cor_3_count;}    if($_SESSION["d1_count"] == 3){$d1_div = $cor_3_count;}
 if($_SESSION["c1_count"] == 4){$c1_div = $cor_4_count;}    if($_SESSION["d1_count"] == 4){$d1_div = $cor_4_count;}
 if($_SESSION["c1_count"] == 5){$c1_div = $cor_5_count;}    if($_SESSION["d1_count"] == 5){$d1_div = $cor_5_count;}
 if($_SESSION["c1_count"] == 6){$c1_div = $cor_6_count;}    if($_SESSION["d1_count"] == 6){$d1_div = $cor_6_count;}
 if($_SESSION["c1_count"] == 7){$c1_div = $cor_7_count;}    if($_SESSION["d1_count"] == 7){$d1_div = $cor_7_count;}
 if($_SESSION["c1_count"] == 8){$c1_div = $cor_8_count;}    if($_SESSION["d1_count"] == 8){$d1_div = $cor_8_count;}
 if($_SESSION["c1_count"] == 9){$c1_div = $cor_9_count;}    if($_SESSION["d1_count"] == 9){$d1_div = $cor_9_count;}
 if($_SESSION["c1_count"] >= 10){$c1_div = $cor_10_count;}  if($_SESSION["d1_count"] >= 10){$d1_div = $cor_10_count;}

 if($_SESSION["e1_count"] == 1){$e1_div = $cor_1_count;}    if($_SESSION["f1_count"] == 1){$f1_div = $cor_1_count;}
 if($_SESSION["e1_count"] == 2){$e1_div = $cor_2_count;}    if($_SESSION["f1_count"] == 2){$f1_div = $cor_2_count;}
 if($_SESSION["e1_count"] == 3){$e1_div = $cor_3_count;}    if($_SESSION["f1_count"] == 3){$f1_div = $cor_3_count;}
 if($_SESSION["e1_count"] == 4){$e1_div = $cor_4_count;}    if($_SESSION["f1_count"] == 4){$f1_div = $cor_4_count;}
 if($_SESSION["e1_count"] == 5){$e1_div = $cor_5_count;}    if($_SESSION["f1_count"] == 5){$f1_div = $cor_5_count;}
 if($_SESSION["e1_count"] == 6){$e1_div = $cor_6_count;}    if($_SESSION["f1_count"] == 6){$f1_div = $cor_6_count;}
 if($_SESSION["e1_count"] == 7){$e1_div = $cor_7_count;}    if($_SESSION["f1_count"] == 7){$f1_div = $cor_7_count;}
 if($_SESSION["e1_count"] == 8){$e1_div = $cor_8_count;}    if($_SESSION["f1_count"] == 8){$f1_div = $cor_8_count;}
 if($_SESSION["e1_count"] == 9){$e1_div = $cor_9_count;}    if($_SESSION["f1_count"] == 9){$f1_div = $cor_9_count;}
 if($_SESSION["e1_count"] >= 10){$e1_div = $cor_10_count;}  if($_SESSION["f1_count"] >= 10){$f1_div = $cor_10_count;}

 if($_SESSION["g1_count"] == 1){$g1_div = $cor_1_count;}    if($_SESSION["a2_count"] == 1){$a2_div = $cor_1_count;}
 if($_SESSION["g1_count"] == 2){$g1_div = $cor_2_count;}    if($_SESSION["a2_count"] == 2){$a2_div = $cor_2_count;}
 if($_SESSION["g1_count"] == 3){$g1_div = $cor_3_count;}    if($_SESSION["a2_count"] == 3){$a2_div = $cor_3_count;}
 if($_SESSION["g1_count"] == 4){$g1_div = $cor_4_count;}    if($_SESSION["a2_count"] == 4){$a2_div = $cor_4_count;}
 if($_SESSION["g1_count"] == 5){$g1_div = $cor_5_count;}    if($_SESSION["a2_count"] == 5){$a2_div = $cor_5_count;}
 if($_SESSION["g1_count"] == 6){$g1_div = $cor_6_count;}    if($_SESSION["a2_count"] == 6){$a2_div = $cor_6_count;}
 if($_SESSION["g1_count"] == 7){$g1_div = $cor_7_count;}    if($_SESSION["a2_count"] == 7){$a2_div = $cor_7_count;}
 if($_SESSION["g1_count"] == 8){$g1_div = $cor_8_count;}    if($_SESSION["a2_count"] == 8){$a2_div = $cor_8_count;}
 if($_SESSION["g1_count"] == 9){$g1_div = $cor_9_count;}    if($_SESSION["a2_count"] == 9){$a2_div = $cor_9_count;}
 if($_SESSION["g1_count"] >= 10){$g1_div = $cor_10_count;}  if($_SESSION["a2_count"] >= 10){$a2_div = $cor_10_count;}

 if($_SESSION["b2_count"] == 1){$b2_div = $cor_1_count;}    if($_SESSION["c2_count"] == 1){$c2_div = $cor_1_count;}
 if($_SESSION["b2_count"] == 2){$b2_div = $cor_2_count;}    if($_SESSION["c2_count"] == 2){$c2_div = $cor_2_count;}
 if($_SESSION["b2_count"] == 3){$b2_div = $cor_3_count;}    if($_SESSION["c2_count"] == 3){$c2_div = $cor_3_count;}
 if($_SESSION["b2_count"] == 4){$b2_div = $cor_4_count;}    if($_SESSION["c2_count"] == 4){$c2_div = $cor_4_count;}
 if($_SESSION["b2_count"] == 5){$b2_div = $cor_5_count;}    if($_SESSION["c2_count"] == 5){$c2_div = $cor_5_count;}
 if($_SESSION["b2_count"] == 6){$b2_div = $cor_6_count;}    if($_SESSION["c2_count"] == 6){$c2_div = $cor_6_count;}
 if($_SESSION["b2_count"] == 7){$b2_div = $cor_7_count;}    if($_SESSION["c2_count"] == 7){$c2_div = $cor_7_count;}
 if($_SESSION["b2_count"] == 8){$b2_div = $cor_8_count;}    if($_SESSION["c2_count"] == 8){$c2_div = $cor_8_count;}
 if($_SESSION["b2_count"] == 9){$b2_div = $cor_9_count;}    if($_SESSION["c2_count"] == 9){$c2_div = $cor_9_count;}
 if($_SESSION["b2_count"] >= 10){$b2_div = $cor_10_count;}  if($_SESSION["c2_count"] >= 10){$c2_div = $cor_10_count;}

 if($_SESSION["d2_count"] == 1){$d2_div = $cor_1_count;}    if($_SESSION["e2_count"] == 1){$e2_div = $cor_1_count;}
 if($_SESSION["d2_count"] == 2){$d2_div = $cor_2_count;}    if($_SESSION["e2_count"] == 2){$e2_div = $cor_2_count;}
 if($_SESSION["d2_count"] == 3){$d2_div = $cor_3_count;}    if($_SESSION["e2_count"] == 3){$e2_div = $cor_3_count;}
 if($_SESSION["d2_count"] == 4){$d2_div = $cor_4_count;}    if($_SESSION["e2_count"] == 4){$e2_div = $cor_4_count;}
 if($_SESSION["d2_count"] == 5){$d2_div = $cor_5_count;}    if($_SESSION["e2_count"] == 5){$e2_div = $cor_5_count;}
 if($_SESSION["d2_count"] == 6){$d2_div = $cor_6_count;}    if($_SESSION["e2_count"] == 6){$e2_div = $cor_6_count;}
 if($_SESSION["d2_count"] == 7){$d2_div = $cor_7_count;}    if($_SESSION["e2_count"] == 7){$e2_div = $cor_7_count;}
 if($_SESSION["d2_count"] == 8){$d2_div = $cor_8_count;}    if($_SESSION["e2_count"] == 8){$e2_div = $cor_8_count;}
 if($_SESSION["d2_count"] == 9){$d2_div = $cor_9_count;}    if($_SESSION["e2_count"] == 9){$e2_div = $cor_9_count;}
 if($_SESSION["d2_count"] >= 10){$d2_div = $cor_10_count;}  if($_SESSION["e2_count"] >= 10){$e2_div = $cor_10_count;}

 if($_SESSION["f2_count"] == 1){$f2_div = $cor_1_count;}    if($_SESSION["g2_count"] == 1){$g2_div = $cor_1_count;}
 if($_SESSION["f2_count"] == 2){$f2_div = $cor_2_count;}    if($_SESSION["g2_count"] == 2){$g2_div = $cor_2_count;}
 if($_SESSION["f2_count"] == 3){$f2_div = $cor_3_count;}    if($_SESSION["g2_count"] == 3){$g2_div = $cor_3_count;}
 if($_SESSION["f2_count"] == 4){$f2_div = $cor_4_count;}    if($_SESSION["g2_count"] == 4){$g2_div = $cor_4_count;}
 if($_SESSION["f2_count"] == 5){$f2_div = $cor_5_count;}    if($_SESSION["g2_count"] == 5){$g2_div = $cor_5_count;}
 if($_SESSION["f2_count"] == 6){$f2_div = $cor_6_count;}    if($_SESSION["g2_count"] == 6){$g2_div = $cor_6_count;}
 if($_SESSION["f2_count"] == 7){$f2_div = $cor_7_count;}    if($_SESSION["g2_count"] == 7){$g2_div = $cor_7_count;}
 if($_SESSION["f2_count"] == 8){$f2_div = $cor_8_count;}    if($_SESSION["g2_count"] == 8){$g2_div = $cor_8_count;}
 if($_SESSION["f2_count"] == 9){$f2_div = $cor_9_count;}    if($_SESSION["g2_count"] == 9){$g2_div = $cor_9_count;}
 if($_SESSION["f2_count"] >= 10){$f2_div = $cor_10_count;}  if($_SESSION["g2_count"] >= 10){$g2_div = $cor_10_count;}

 if($_SESSION["a3_count"] == 1){$a3_div = $cor_1_count;}    if($_SESSION["b3_count"] == 1){$b3_div = $cor_1_count;}
 if($_SESSION["a3_count"] == 2){$a3_div = $cor_2_count;}    if($_SESSION["b3_count"] == 2){$b3_div = $cor_2_count;}
 if($_SESSION["a3_count"] == 3){$a3_div = $cor_3_count;}    if($_SESSION["b3_count"] == 3){$b3_div = $cor_3_count;}
 if($_SESSION["a3_count"] == 4){$a3_div = $cor_4_count;}    if($_SESSION["b3_count"] == 4){$b3_div = $cor_4_count;}
 if($_SESSION["a3_count"] == 5){$a3_div = $cor_5_count;}    if($_SESSION["b3_count"] == 5){$b3_div = $cor_5_count;}
 if($_SESSION["a3_count"] == 6){$a3_div = $cor_6_count;}    if($_SESSION["b3_count"] == 6){$b3_div = $cor_6_count;}
 if($_SESSION["a3_count"] == 7){$a3_div = $cor_7_count;}    if($_SESSION["b3_count"] == 7){$b3_div = $cor_7_count;}
 if($_SESSION["a3_count"] == 8){$a3_div = $cor_8_count;}    if($_SESSION["b3_count"] == 8){$b3_div = $cor_8_count;}
 if($_SESSION["a3_count"] == 9){$a3_div = $cor_9_count;}    if($_SESSION["b3_count"] == 9){$b3_div = $cor_9_count;}
 if($_SESSION["a3_count"] >= 10){$a3_div = $cor_10_count;}  if($_SESSION["b3_count"] >= 10){$b3_div = $cor_10_count;}

 if($_SESSION["c3_count"] == 1){$c3_div = $cor_1_count;}    if($_SESSION["d3_count"] == 1){$d3_div = $cor_1_count;}
 if($_SESSION["c3_count"] == 2){$c3_div = $cor_2_count;}    if($_SESSION["d3_count"] == 2){$d3_div = $cor_2_count;}
 if($_SESSION["c3_count"] == 3){$c3_div = $cor_3_count;}    if($_SESSION["d3_count"] == 3){$d3_div = $cor_3_count;}
 if($_SESSION["c3_count"] == 4){$c3_div = $cor_4_count;}    if($_SESSION["d3_count"] == 4){$d3_div = $cor_4_count;}
 if($_SESSION["c3_count"] == 5){$c3_div = $cor_5_count;}    if($_SESSION["d3_count"] == 5){$d3_div = $cor_5_count;}
 if($_SESSION["c3_count"] == 6){$c3_div = $cor_6_count;}    if($_SESSION["d3_count"] == 6){$d3_div = $cor_6_count;}
 if($_SESSION["c3_count"] == 7){$c3_div = $cor_7_count;}    if($_SESSION["d3_count"] == 7){$d3_div = $cor_7_count;}
 if($_SESSION["c3_count"] == 8){$c3_div = $cor_8_count;}    if($_SESSION["d3_count"] == 8){$d3_div = $cor_8_count;}
 if($_SESSION["c3_count"] == 9){$c3_div = $cor_9_count;}    if($_SESSION["d3_count"] == 9){$d3_div = $cor_9_count;}
 if($_SESSION["c3_count"] >= 10){$c3_div = $cor_10_count;}  if($_SESSION["d3_count"] >= 10){$d3_div = $cor_10_count;}

 if($_SESSION["e3_count"] == 1){$e3_div = $cor_1_count;}    if($_SESSION["f3_count"] == 1){$f3_div = $cor_1_count;}
 if($_SESSION["e3_count"] == 2){$e3_div = $cor_2_count;}    if($_SESSION["f3_count"] == 2){$f3_div = $cor_2_count;}
 if($_SESSION["e3_count"] == 3){$e3_div = $cor_3_count;}    if($_SESSION["f3_count"] == 3){$f3_div = $cor_3_count;}
 if($_SESSION["e3_count"] == 4){$e3_div = $cor_4_count;}    if($_SESSION["f3_count"] == 4){$f3_div = $cor_4_count;}
 if($_SESSION["e3_count"] == 5){$e3_div = $cor_5_count;}    if($_SESSION["f3_count"] == 5){$f3_div = $cor_5_count;}
 if($_SESSION["e3_count"] == 6){$e3_div = $cor_6_count;}    if($_SESSION["f3_count"] == 6){$f3_div = $cor_6_count;}
 if($_SESSION["e3_count"] == 7){$e3_div = $cor_7_count;}    if($_SESSION["f3_count"] == 7){$f3_div = $cor_7_count;}
 if($_SESSION["e3_count"] == 8){$e3_div = $cor_8_count;}    if($_SESSION["f3_count"] == 8){$f3_div = $cor_8_count;}
 if($_SESSION["e3_count"] == 9){$e3_div = $cor_9_count;}    if($_SESSION["f3_count"] == 9){$f3_div = $cor_9_count;}
 if($_SESSION["e3_count"] >= 10){$e3_div = $cor_10_count;}  if($_SESSION["f3_count"] >= 10){$f3_div = $cor_10_count;}

 if($_SESSION["g3_count"] == 1){$g3_div = $cor_1_count;}    if($_SESSION["a4_count"] == 1){$a4_div = $cor_1_count;}
 if($_SESSION["g3_count"] == 2){$g3_div = $cor_2_count;}    if($_SESSION["a4_count"] == 2){$a4_div = $cor_2_count;}
 if($_SESSION["g3_count"] == 3){$g3_div = $cor_3_count;}    if($_SESSION["a4_count"] == 3){$a4_div = $cor_3_count;}
 if($_SESSION["g3_count"] == 4){$g3_div = $cor_4_count;}    if($_SESSION["a4_count"] == 4){$a4_div = $cor_4_count;}
 if($_SESSION["g3_count"] == 5){$g3_div = $cor_5_count;}    if($_SESSION["a4_count"] == 5){$a4_div = $cor_5_count;}
 if($_SESSION["g3_count"] == 6){$g3_div = $cor_6_count;}    if($_SESSION["a4_count"] == 6){$a4_div = $cor_6_count;}
 if($_SESSION["g3_count"] == 7){$g3_div = $cor_7_count;}    if($_SESSION["a4_count"] == 7){$a4_div = $cor_7_count;}
 if($_SESSION["g3_count"] == 8){$g3_div = $cor_8_count;}    if($_SESSION["a4_count"] == 8){$a4_div = $cor_8_count;}
 if($_SESSION["g3_count"] == 9){$g3_div = $cor_9_count;}    if($_SESSION["a4_count"] == 9){$a4_div = $cor_9_count;}
 if($_SESSION["g3_count"] >= 10){$g3_div = $cor_10_count;}  if($_SESSION["a4_count"] >= 10){$a4_div = $cor_10_count;}

 if($_SESSION["b4_count"] == 1){$b4_div = $cor_1_count;}    if($_SESSION["c4_count"] == 1){$c4_div = $cor_1_count;}
 if($_SESSION["b4_count"] == 2){$b4_div = $cor_2_count;}    if($_SESSION["c4_count"] == 2){$c4_div = $cor_2_count;}
 if($_SESSION["b4_count"] == 3){$b4_div = $cor_3_count;}    if($_SESSION["c4_count"] == 3){$c4_div = $cor_3_count;}
 if($_SESSION["b4_count"] == 4){$b4_div = $cor_4_count;}    if($_SESSION["c4_count"] == 4){$c4_div = $cor_4_count;}
 if($_SESSION["b4_count"] == 5){$b4_div = $cor_5_count;}    if($_SESSION["c4_count"] == 5){$c4_div = $cor_5_count;}
 if($_SESSION["b4_count"] == 6){$b4_div = $cor_6_count;}    if($_SESSION["c4_count"] == 6){$c4_div = $cor_6_count;}
 if($_SESSION["b4_count"] == 7){$b4_div = $cor_7_count;}    if($_SESSION["c4_count"] == 7){$c4_div = $cor_7_count;}
 if($_SESSION["b4_count"] == 8){$b4_div = $cor_8_count;}    if($_SESSION["c4_count"] == 8){$c4_div = $cor_8_count;}
 if($_SESSION["b4_count"] == 9){$b4_div = $cor_9_count;}    if($_SESSION["c4_count"] == 9){$c4_div = $cor_9_count;}
 if($_SESSION["b4_count"] >= 10){$b4_div = $cor_10_count;}  if($_SESSION["c4_count"] >= 10){$c4_div = $cor_10_count;}

 if($_SESSION["d4_count"] == 1){$d4_div = $cor_1_count;}    if($_SESSION["e4_count"] == 1){$e4_div = $cor_1_count;}
 if($_SESSION["d4_count"] == 2){$d4_div = $cor_2_count;}    if($_SESSION["e4_count"] == 2){$e4_div = $cor_2_count;}
 if($_SESSION["d4_count"] == 3){$d4_div = $cor_3_count;}    if($_SESSION["e4_count"] == 3){$e4_div = $cor_3_count;}
 if($_SESSION["d4_count"] == 4){$d4_div = $cor_4_count;}    if($_SESSION["e4_count"] == 4){$e4_div = $cor_4_count;}
 if($_SESSION["d4_count"] == 5){$d4_div = $cor_5_count;}    if($_SESSION["e4_count"] == 5){$e4_div = $cor_5_count;}
 if($_SESSION["d4_count"] == 6){$d4_div = $cor_6_count;}    if($_SESSION["e4_count"] == 6){$e4_div = $cor_6_count;}
 if($_SESSION["d4_count"] == 7){$d4_div = $cor_7_count;}    if($_SESSION["e4_count"] == 7){$e4_div = $cor_7_count;}
 if($_SESSION["d4_count"] == 8){$d4_div = $cor_8_count;}    if($_SESSION["e4_count"] == 8){$e4_div = $cor_8_count;}
 if($_SESSION["d4_count"] == 9){$d4_div = $cor_9_count;}    if($_SESSION["e4_count"] == 9){$e4_div = $cor_9_count;}
 if($_SESSION["d4_count"] >= 10){$d4_div = $cor_10_count;}  if($_SESSION["e4_count"] >= 10){$e4_div = $cor_10_count;}

 if($_SESSION["f4_count"] == 1){$f4_div = $cor_1_count;}    if($_SESSION["g4_count"] == 1){$g4_div = $cor_1_count;}
 if($_SESSION["f4_count"] == 2){$f4_div = $cor_2_count;}    if($_SESSION["g4_count"] == 2){$g4_div = $cor_2_count;}
 if($_SESSION["f4_count"] == 3){$f4_div = $cor_3_count;}    if($_SESSION["g4_count"] == 3){$g4_div = $cor_3_count;}
 if($_SESSION["f4_count"] == 4){$f4_div = $cor_4_count;}    if($_SESSION["g4_count"] == 4){$g4_div = $cor_4_count;}
 if($_SESSION["f4_count"] == 5){$f4_div = $cor_5_count;}    if($_SESSION["g4_count"] == 5){$g4_div = $cor_5_count;}
 if($_SESSION["f4_count"] == 6){$f4_div = $cor_6_count;}    if($_SESSION["g4_count"] == 6){$g4_div = $cor_6_count;}
 if($_SESSION["f4_count"] == 7){$f4_div = $cor_7_count;}    if($_SESSION["g4_count"] == 7){$g4_div = $cor_7_count;}
 if($_SESSION["f4_count"] == 8){$f4_div = $cor_8_count;}    if($_SESSION["g4_count"] == 8){$g4_div = $cor_8_count;}
 if($_SESSION["f4_count"] == 9){$f4_div = $cor_9_count;}    if($_SESSION["g4_count"] == 9){$g4_div = $cor_9_count;}
 if($_SESSION["f4_count"] >= 10){$f4_div = $cor_10_count;}  if($_SESSION["g4_count"] >= 10){$g4_div = $cor_10_count;}

 if($_SESSION["a5_count"] == 1){$a5_div = $cor_1_count;}    if($_SESSION["b5_count"] == 1){$b5_div = $cor_1_count;}
 if($_SESSION["a5_count"] == 2){$a5_div = $cor_2_count;}    if($_SESSION["b5_count"] == 2){$b5_div = $cor_2_count;}
 if($_SESSION["a5_count"] == 3){$a5_div = $cor_3_count;}    if($_SESSION["b5_count"] == 3){$b5_div = $cor_3_count;}
 if($_SESSION["a5_count"] == 4){$a5_div = $cor_4_count;}    if($_SESSION["b5_count"] == 4){$b5_div = $cor_4_count;}
 if($_SESSION["a5_count"] == 5){$a5_div = $cor_5_count;}    if($_SESSION["b5_count"] == 5){$b5_div = $cor_5_count;}
 if($_SESSION["a5_count"] == 6){$a5_div = $cor_6_count;}    if($_SESSION["b5_count"] == 6){$b5_div = $cor_6_count;}
 if($_SESSION["a5_count"] == 7){$a5_div = $cor_7_count;}    if($_SESSION["b5_count"] == 7){$b5_div = $cor_7_count;}
 if($_SESSION["a5_count"] == 8){$a5_div = $cor_8_count;}    if($_SESSION["b5_count"] == 8){$b5_div = $cor_8_count;}
 if($_SESSION["a5_count"] == 9){$a5_div = $cor_9_count;}    if($_SESSION["b5_count"] == 9){$b5_div = $cor_9_count;}
 if($_SESSION["a5_count"] >= 10){$a5_div = $cor_10_count;}  if($_SESSION["b5_count"] >= 10){$b5_div = $cor_10_count;}

 if($_SESSION["c5_count"] == 1){$c5_div = $cor_1_count;}    if($_SESSION["d5_count"] == 1){$d5_div = $cor_1_count;}
 if($_SESSION["c5_count"] == 2){$c5_div = $cor_2_count;}    if($_SESSION["d5_count"] == 2){$d5_div = $cor_2_count;}
 if($_SESSION["c5_count"] == 3){$c5_div = $cor_3_count;}    if($_SESSION["d5_count"] == 3){$d5_div = $cor_3_count;}
 if($_SESSION["c5_count"] == 4){$c5_div = $cor_4_count;}    if($_SESSION["d5_count"] == 4){$d5_div = $cor_4_count;}
 if($_SESSION["c5_count"] == 5){$c5_div = $cor_5_count;}    if($_SESSION["d5_count"] == 5){$d5_div = $cor_5_count;}
 if($_SESSION["c5_count"] == 6){$c5_div = $cor_6_count;}    if($_SESSION["d5_count"] == 6){$d5_div = $cor_6_count;}
 if($_SESSION["c5_count"] == 7){$c5_div = $cor_7_count;}    if($_SESSION["d5_count"] == 7){$d5_div = $cor_7_count;}
 if($_SESSION["c5_count"] == 8){$c5_div = $cor_8_count;}    if($_SESSION["d5_count"] == 8){$d5_div = $cor_8_count;}
 if($_SESSION["c5_count"] == 9){$c5_div = $cor_9_count;}    if($_SESSION["d5_count"] == 9){$d5_div = $cor_9_count;}
 if($_SESSION["c5_count"] >= 10){$c5_div = $cor_10_count;}  if($_SESSION["d5_count"] >= 10){$d5_div = $cor_10_count;}

 if($_SESSION["e5_count"] == 1){$e5_div = $cor_1_count;}    if($_SESSION["f5_count"] == 1){$f5_div = $cor_1_count;}
 if($_SESSION["e5_count"] == 2){$e5_div = $cor_2_count;}    if($_SESSION["f5_count"] == 2){$f5_div = $cor_2_count;}
 if($_SESSION["e5_count"] == 3){$e5_div = $cor_3_count;}    if($_SESSION["f5_count"] == 3){$f5_div = $cor_3_count;}
 if($_SESSION["e5_count"] == 4){$e5_div = $cor_4_count;}    if($_SESSION["f5_count"] == 4){$f5_div = $cor_4_count;}
 if($_SESSION["e5_count"] == 5){$e5_div = $cor_5_count;}    if($_SESSION["f5_count"] == 5){$f5_div = $cor_5_count;}
 if($_SESSION["e5_count"] == 6){$e5_div = $cor_6_count;}    if($_SESSION["f5_count"] == 6){$f5_div = $cor_6_count;}
 if($_SESSION["e5_count"] == 7){$e5_div = $cor_7_count;}    if($_SESSION["f5_count"] == 7){$f5_div = $cor_7_count;}
 if($_SESSION["e5_count"] == 8){$e5_div = $cor_8_count;}    if($_SESSION["f5_count"] == 8){$f5_div = $cor_8_count;}
 if($_SESSION["e5_count"] == 9){$e5_div = $cor_9_count;}    if($_SESSION["f5_count"] == 9){$f5_div = $cor_9_count;}
 if($_SESSION["e5_count"] >= 10){$e5_div = $cor_10_count;}  if($_SESSION["f5_count"] >= 10){$f5_div = $cor_10_count;}

 if($_SESSION["g5_count"] == 1){$g5_div = $cor_1_count;}    if($_SESSION["a6_count"] == 1){$a6_div = $cor_1_count;}
 if($_SESSION["g5_count"] == 2){$g5_div = $cor_2_count;}    if($_SESSION["a6_count"] == 2){$a6_div = $cor_2_count;}
 if($_SESSION["g5_count"] == 3){$g5_div = $cor_3_count;}    if($_SESSION["a6_count"] == 3){$a6_div = $cor_3_count;}
 if($_SESSION["g5_count"] == 4){$g5_div = $cor_4_count;}    if($_SESSION["a6_count"] == 4){$a6_div = $cor_4_count;}
 if($_SESSION["g5_count"] == 5){$g5_div = $cor_5_count;}    if($_SESSION["a6_count"] == 5){$a6_div = $cor_5_count;}
 if($_SESSION["g5_count"] == 6){$g5_div = $cor_6_count;}    if($_SESSION["a6_count"] == 6){$a6_div = $cor_6_count;}
 if($_SESSION["g5_count"] == 7){$g5_div = $cor_7_count;}    if($_SESSION["a6_count"] == 7){$a6_div = $cor_7_count;}
 if($_SESSION["g5_count"] == 8){$g5_div = $cor_8_count;}    if($_SESSION["a6_count"] == 8){$a6_div = $cor_8_count;}
 if($_SESSION["g5_count"] == 9){$g5_div = $cor_9_count;}    if($_SESSION["a6_count"] == 9){$a6_div = $cor_9_count;}
 if($_SESSION["g5_count"] >= 10){$g5_div = $cor_10_count;}  if($_SESSION["a6_count"] >= 10){$a6_div = $cor_10_count;}

 if($_SESSION["b6_count"] == 1){$b6_div = $cor_1_count;}    if($_SESSION["c6_count"] == 1){$c6_div = $cor_1_count;}
 if($_SESSION["b6_count"] == 2){$b6_div = $cor_2_count;}    if($_SESSION["c6_count"] == 2){$c6_div = $cor_2_count;}
 if($_SESSION["b6_count"] == 3){$b6_div = $cor_3_count;}    if($_SESSION["c6_count"] == 3){$c6_div = $cor_3_count;}
 if($_SESSION["b6_count"] == 4){$b6_div = $cor_4_count;}    if($_SESSION["c6_count"] == 4){$c6_div = $cor_4_count;}
 if($_SESSION["b6_count"] == 5){$b6_div = $cor_5_count;}    if($_SESSION["c6_count"] == 5){$c6_div = $cor_5_count;}
 if($_SESSION["b6_count"] == 6){$b6_div = $cor_6_count;}    if($_SESSION["c6_count"] == 6){$c6_div = $cor_6_count;}
 if($_SESSION["b6_count"] == 7){$b6_div = $cor_7_count;}    if($_SESSION["c6_count"] == 7){$c6_div = $cor_7_count;}
 if($_SESSION["b6_count"] == 8){$b6_div = $cor_8_count;}    if($_SESSION["c6_count"] == 8){$c6_div = $cor_8_count;}
 if($_SESSION["b6_count"] == 9){$b6_div = $cor_9_count;}    if($_SESSION["c6_count"] == 9){$c6_div = $cor_9_count;}
 if($_SESSION["b6_count"] >= 10){$b6_div = $cor_10_count;}  if($_SESSION["c6_count"] >= 10){$c6_div = $cor_10_count;}

 if($_SESSION["d6_count"] == 1){$d6_div = $cor_1_count;}    if($_SESSION["e6_count"] == 1){$e6_div = $cor_1_count;}
 if($_SESSION["d6_count"] == 2){$d6_div = $cor_2_count;}    if($_SESSION["e6_count"] == 2){$e6_div = $cor_2_count;}
 if($_SESSION["d6_count"] == 3){$d6_div = $cor_3_count;}    if($_SESSION["e6_count"] == 3){$e6_div = $cor_3_count;}
 if($_SESSION["d6_count"] == 4){$d6_div = $cor_4_count;}    if($_SESSION["e6_count"] == 4){$e6_div = $cor_4_count;}
 if($_SESSION["d6_count"] == 5){$d6_div = $cor_5_count;}    if($_SESSION["e6_count"] == 5){$e6_div = $cor_5_count;}
 if($_SESSION["d6_count"] == 6){$d6_div = $cor_6_count;}    if($_SESSION["e6_count"] == 6){$e6_div = $cor_6_count;}
 if($_SESSION["d6_count"] == 7){$d6_div = $cor_7_count;}    if($_SESSION["e6_count"] == 7){$e6_div = $cor_7_count;}
 if($_SESSION["d6_count"] == 8){$d6_div = $cor_8_count;}    if($_SESSION["e6_count"] == 8){$e6_div = $cor_8_count;}
 if($_SESSION["d6_count"] == 9){$d6_div = $cor_9_count;}    if($_SESSION["e6_count"] == 9){$e6_div = $cor_9_count;}
 if($_SESSION["d6_count"] >= 10){$d6_div = $cor_10_count;}  if($_SESSION["e6_count"] >= 10){$e6_div = $cor_10_count;}

 if($_SESSION["f6_count"] == 1){$f6_div = $cor_1_count;}    if($_SESSION["g6_count"] == 1){$g6_div = $cor_1_count;}
 if($_SESSION["f6_count"] == 2){$f6_div = $cor_2_count;}    if($_SESSION["g6_count"] == 2){$g6_div = $cor_2_count;}
 if($_SESSION["f6_count"] == 3){$f6_div = $cor_3_count;}    if($_SESSION["g6_count"] == 3){$g6_div = $cor_3_count;}
 if($_SESSION["f6_count"] == 4){$f6_div = $cor_4_count;}    if($_SESSION["g6_count"] == 4){$g6_div = $cor_4_count;}
 if($_SESSION["f6_count"] == 5){$f6_div = $cor_5_count;}    if($_SESSION["g6_count"] == 5){$g6_div = $cor_5_count;}
 if($_SESSION["f6_count"] == 6){$f6_div = $cor_6_count;}    if($_SESSION["g6_count"] == 6){$g6_div = $cor_6_count;}
 if($_SESSION["f6_count"] == 7){$f6_div = $cor_7_count;}    if($_SESSION["g6_count"] == 7){$g6_div = $cor_7_count;}
 if($_SESSION["f6_count"] == 8){$f6_div = $cor_8_count;}    if($_SESSION["g6_count"] == 8){$g6_div = $cor_8_count;}
 if($_SESSION["f6_count"] == 9){$f6_div = $cor_9_count;}    if($_SESSION["g6_count"] == 9){$g6_div = $cor_9_count;}
 if($_SESSION["f6_count"] >= 10){$f6_div = $cor_10_count;}  if($_SESSION["g6_count"] >= 10){$g6_div = $cor_10_count;}

 //_______________Linha_1________Botão_Submit_______________________________

 if($b1_td_id == 0){$b1_td = $b1_op_nu;} if($b1_td_id == 1){$b1_td = "<input type='submit' name='b1' value="."'".$b1_op_nu."'>";}
 if($c1_td_id == 0){$c1_td = $c1_op_nu;} if($c1_td_id == 1){$c1_td = "<input type='submit' name='c1' value="."'".$c1_op_nu."'>";}
 if($d1_td_id == 0){$d1_td = $d1_op_nu;} if($d1_td_id == 1){$d1_td = "<input type='submit' name='d1' value="."'".$d1_op_nu."'>";}
 if($e1_td_id == 0){$e1_td = $e1_op_nu;} if($e1_td_id == 1){$e1_td = "<input type='submit' name='e1' value="."'".$e1_op_nu."'>";}
 if($f1_td_id == 0){$f1_td = $f1_op_nu;} if($f1_td_id == 1){$f1_td = "<input type='submit' name='f1' value="."'".$f1_op_nu."'>";}

 //_______________Linha_2___________Botão_Submit___________________________________________

 if($a2_td_id == 0){$a2_td = $a2_op_nu;} if($a2_td_id == 1){$a2_td = "<input type='submit' name='a2' value="."'".$a2_op_nu."'>";}
 if($b2_td_id == 0){$b2_td = $b2_op_nu;} if($b2_td_id == 1){$b2_td = "<input type='submit' name='b2' value="."'".$b2_op_nu."'>";}
 if($c2_td_id == 0){$c2_td = $c2_op_nu;} if($c2_td_id == 1){$c2_td = "<input type='submit' name='c2' value="."'".$c2_op_nu."'>";}
 if($d2_td_id == 0){$d2_td = $d2_op_nu;} if($d2_td_id == 1){$d2_td = "<input type='submit' name='d2' value="."'".$d2_op_nu."'>";}
 if($e2_td_id == 0){$e2_td = $e2_op_nu;} if($e2_td_id == 1){$e2_td = "<input type='submit' name='e2' value="."'".$e2_op_nu."'>";}
 if($f2_td_id == 0){$f2_td = $f2_op_nu;} if($f2_td_id == 1){$f2_td = "<input type='submit' name='f2' value="."'".$f2_op_nu."'>";}
 if($g2_td_id == 0){$g2_td = $g2_op_nu;} if($g2_td_id == 1){$g2_td = "<input type='submit' name='g2' value="."'".$g2_op_nu."'>";}

 //_______________Linha_3____________Botão_Submit______________
  if($a3_td_id == 0){$a3_td = $a3_op_nu;} if($a3_td_id == 1){$a3_td = "<input type='submit' name='a3' value="."'".$a3_op_nu."'>";}
  if($b3_td_id == 0){$b3_td = $b3_op_nu;} if($b3_td_id == 1){$b3_td = "<input type='submit' name='b3' value="."'".$b3_op_nu."'>";}
  if($c3_td_id == 0){$c3_td = $c3_op_nu;} if($c3_td_id == 1){$c3_td = "<input type='submit' name='c3' value="."'".$c3_op_nu."'>";}
  if($d3_td_id == 0){$d3_td = $d3_op_nu;} if($d3_td_id == 1){$d3_td = "<input type='submit' name='d3' value="."'".$d3_op_nu."'>";}
  if($e3_td_id == 0){$e3_td = $e3_op_nu;} if($e3_td_id == 1){$e3_td = "<input type='submit' name='e3' value="."'".$e3_op_nu."'>";}
  if($f3_td_id == 0){$f3_td = $f3_op_nu;} if($f3_td_id == 1){$f3_td = "<input type='submit' name='f3' value="."'".$f3_op_nu."'>";}
  if($g3_td_id == 0){$g3_td = $g3_op_nu;} if($g3_td_id == 1){$g3_td = "<input type='submit' name='g3' value="."'".$g3_op_nu."'>";}

 //_______________Linha_4___________Botão_Submit___________________________________________

  if($a4_td_id == 0){$a4_td = $a4_op_nu;} if($a4_td_id == 1){$a4_td = "<input type='submit' name='a4' value="."'".$a4_op_nu."'>";}
  if($b4_td_id == 0){$b4_td = $b4_op_nu;} if($b4_td_id == 1){$b4_td = "<input type='submit' name='b4' value="."'".$b4_op_nu."'>";}
  if($c4_td_id == 0){$c4_td = $c4_op_nu;} if($c4_td_id == 1){$c4_td = "<input type='submit' name='c4' value="."'".$c4_op_nu."'>";}
  if($d4_td_id == 0){$d4_td = $d4_op_nu;} if($d4_td_id == 1){$d4_td = "<input type='submit' name='d4' value="."'".$d4_op_nu."'>";}
  if($e4_td_id == 0){$e4_td = $e4_op_nu;} if($e4_td_id == 1){$e4_td = "<input type='submit' name='e4' value="."'".$e4_op_nu."'>";}
  if($f4_td_id == 0){$f4_td = $f4_op_nu;} if($f4_td_id == 1){$f4_td = "<input type='submit' name='f4' value="."'".$f4_op_nu."'>";}
  if($g4_td_id == 0){$g4_td = $g4_op_nu;} if($g4_td_id == 1){$g4_td = "<input type='submit' name='g4' value="."'".$g4_op_nu."'>";}

 //_______________Linha_5__________Botão_Submit____________________________________________

  if($a5_td_id == 0){$a5_td = $a5_op_nu;} if($a5_td_id == 1){$a5_td = "<input type='submit' name='a5' value="."'".$a5_op_nu."'>";}
  if($b5_td_id == 0){$b5_td = $b5_op_nu;} if($b5_td_id == 1){$b5_td = "<input type='submit' name='b5' value="."'".$b5_op_nu."'>";}
  if($c5_td_id == 0){$c5_td = $c5_op_nu;} if($c5_td_id == 1){$c5_td = "<input type='submit' name='c5' value="."'".$c5_op_nu."'>";}
  if($d5_td_id == 0){$d5_td = $d5_op_nu;} if($d5_td_id == 1){$d5_td = "<input type='submit' name='d5' value="."'".$d5_op_nu."'>";}
  if($e5_td_id == 0){$e5_td = $e5_op_nu;} if($e5_td_id == 1){$e5_td = "<input type='submit' name='e5' value="."'".$e5_op_nu."'>";}
  if($f5_td_id == 0){$f5_td = $f5_op_nu;} if($f5_td_id == 1){$f5_td = "<input type='submit' name='f5' value="."'".$f5_op_nu."'>";}
  if($g5_td_id == 0){$g5_td = $g5_op_nu;} if($g5_td_id == 1){$g5_td = "<input type='submit' name='g5' value="."'".$g5_op_nu."'>";}

 //_______________Linha_6__________Botão_Submit____________________________________________

  if($a6_td_id == 0){$a6_td = $a6_op_nu;} if($a6_td_id == 1){$a6_td = "<input type='submit' name='a6' value="."'".$a6_op_nu."'>";}
  if($b6_td_id == 0){$b6_td = $b6_op_nu;} if($b6_td_id == 1){$b6_td = "<input type='submit' name='b6' value="."'".$b6_op_nu."'>";}
  if($c6_td_id == 0){$c6_td = $c6_op_nu;} if($c6_td_id == 1){$c6_td = "<input type='submit' name='c6' value="."'".$c6_op_nu."'>";}
  if($d6_td_id == 0){$d6_td = $d6_op_nu;} if($d6_td_id == 1){$d6_td = "<input type='submit' name='d6' value="."'".$d6_op_nu."'>";}
  if($e6_td_id == 0){$e6_td = $e6_op_nu;} if($e6_td_id == 1){$e6_td = "<input type='submit' name='e6' value="."'".$e6_op_nu."'>";}
  if($f6_td_id == 0){$f6_td = $f6_op_nu;} if($f6_td_id == 1){$f6_td = "<input type='submit' name='f6' value="."'".$f6_op_nu."'>";}
  if($g6_td_id == 0){$g6_td = $g6_op_nu;} if($g6_td_id == 1){$g6_td = "<input type='submit' name='g6' value="."'".$g6_op_nu."'>";}

  //_______________Linha_7____________Botão_Submit__________________________________________

  if($a7_td_id == 0){$a7_td = $a7_op_nu;} if($a7_td_id == 1 && $_SESSION["count"]==($numero_max_movimentos-1)){$a7_td = "<input type='submit' name='a7' value="."'".$a7_op_nu."'>";}else{$a7_td = $a7_op_nu;}
  if($b7_td_id == 0){$b7_td = $b7_op_nu;} if($b7_td_id == 1 && $_SESSION["count"]==($numero_max_movimentos-1)){$b7_td = "<input type='submit' name='b7' value="."'".$b7_op_nu."'>";}else{$b7_td = $b7_op_nu;}
  if($c7_td_id == 0){$c7_td = $c7_op_nu;} if($c7_td_id == 1 && $_SESSION["count"]==($numero_max_movimentos-1)){$c7_td = "<input type='submit' name='c7' value="."'".$c7_op_nu."'>";}else{$c7_td = $c7_op_nu;}
  if($d7_td_id == 0){$d7_td = $d7_op_nu;} if($d7_td_id == 1 && $_SESSION["count"]==($numero_max_movimentos-1)){$d7_td = "<input type='submit' name='d7' value="."'".$d7_op_nu."'>";}else{$d7_td = $d7_op_nu;}
  if($e7_td_id == 0){$e7_td = $e7_op_nu;} if($e7_td_id == 1 && $_SESSION["count"]==($numero_max_movimentos-1)){$e7_td = "<input type='submit' name='e7' value="."'".$e7_op_nu."'>";}else{$e7_td = $e7_op_nu;}
  if($f7_td_id == 0){$f7_td = $f7_op_nu;} if($f7_td_id == 1 && $_SESSION["count"]==($numero_max_movimentos-1)){$f7_td = "<input type='submit' name='f7' value="."'".$f7_op_nu."'>";}else{$f7_td = $f7_op_nu;}
  if($g7_td_id == 0){$g7_td = $g7_op_nu;} if($g7_td_id == 1 && $_SESSION["count"]==($numero_max_movimentos-1)){$g7_td = "<input type='submit' name='g7' value="."'".$g7_op_nu."'>";}else{$g7_td = $g7_op_nu;}

  //_______________Botão_Voltar_(if's)_______Linha_1________________________________

if($b1_in_id == 1){$submit_inverso = "<input type='submit' name='b1_inverso' value='Voltar'></input>";}
elseif($c1_in_id == 1){$submit_inverso = "<input type='submit' name='c1_inverso' value='Voltar'></input>";}
elseif($d1_in_id == 1){$submit_inverso = "<input type='submit' name='d1_inverso' value='Voltar'></input>";}
elseif($e1_in_id == 1){$submit_inverso = "<input type='submit' name='e1_inverso' value='Voltar'></input>";}
elseif($f1_in_id == 1){$submit_inverso = "<input type='submit' name='f1_inverso' value='Voltar'></input>";}

//_______________Botão_Voltar_(if's)_______Linha_2________________________________

elseif($a2_in_id == 1){$submit_inverso = "<input type='submit' name='a2_inverso' value='Voltar'></input>";}
elseif($b2_in_id == 1){$submit_inverso = "<input type='submit' name='b2_inverso' value='Voltar'></input>";}
elseif($c2_in_id == 1){$submit_inverso = "<input type='submit' name='c2_inverso' value='Voltar'></input>";}
elseif($d2_in_id == 1){$submit_inverso = "<input type='submit' name='d2_inverso' value='Voltar'></input>";}
elseif($e2_in_id == 1){$submit_inverso = "<input type='submit' name='e2_inverso' value='Voltar'></input>";}
elseif($f2_in_id == 1){$submit_inverso = "<input type='submit' name='f2_inverso' value='Voltar'></input>";}
elseif($g2_in_id == 1){$submit_inverso = "<input type='submit' name='g2_inverso' value='Voltar'></input>";}

//_______________Botão_Voltar_(if's)_______Linha_3________________________________

elseif($a3_in_id == 1){$submit_inverso = "<input type='submit' name='a3_inverso' value='Voltar'></input>";}
elseif($b3_in_id == 1){$submit_inverso = "<input type='submit' name='b3_inverso' value='Voltar'></input>";}
elseif($c3_in_id == 1){$submit_inverso = "<input type='submit' name='c3_inverso' value='Voltar'></input>";}
elseif($d3_in_id == 1){$submit_inverso = "<input type='submit' name='d3_inverso' value='Voltar'></input>";}
elseif($e3_in_id == 1){$submit_inverso = "<input type='submit' name='e3_inverso' value='Voltar'></input>";}
elseif($f3_in_id == 1){$submit_inverso = "<input type='submit' name='f3_inverso' value='Voltar'></input>";}
elseif($g3_in_id == 1){$submit_inverso = "<input type='submit' name='g3_inverso' value='Voltar'></input>";}

//_______________Botão_Voltar_(if's)_______Linha_4________________________________

elseif($a4_in_id == 1){$submit_inverso = "<input type='submit' name='a4_inverso' value='Voltar'></input>";}
elseif($b4_in_id == 1){$submit_inverso = "<input type='submit' name='b4_inverso' value='Voltar'></input>";}
elseif($c4_in_id == 1){$submit_inverso = "<input type='submit' name='c4_inverso' value='Voltar'></input>";}
elseif($d4_in_id == 1){$submit_inverso = "<input type='submit' name='d4_inverso' value='Voltar'></input>";}
elseif($e4_in_id == 1){$submit_inverso = "<input type='submit' name='e4_inverso' value='Voltar'></input>";}
elseif($f4_in_id == 1){$submit_inverso = "<input type='submit' name='f4_inverso' value='Voltar'></input>";}
elseif($g4_in_id == 1){$submit_inverso = "<input type='submit' name='g4_inverso' value='Voltar'></input>";}

//_______________Botão_Voltar_(if's)_______Linha_5________________________________

elseif($a5_in_id == 1){$submit_inverso = "<input type='submit' name='a5_inverso' value='Voltar'></input>";}
elseif($b5_in_id == 1){$submit_inverso = "<input type='submit' name='b5_inverso' value='Voltar'></input>";}
elseif($c5_in_id == 1){$submit_inverso = "<input type='submit' name='c5_inverso' value='Voltar'></input>";}
elseif($d5_in_id == 1){$submit_inverso = "<input type='submit' name='d5_inverso' value='Voltar'></input>";}
elseif($e5_in_id == 1){$submit_inverso = "<input type='submit' name='e5_inverso' value='Voltar'></input>";}
elseif($f5_in_id == 1){$submit_inverso = "<input type='submit' name='f5_inverso' value='Voltar'></input>";}
elseif($g5_in_id == 1){$submit_inverso = "<input type='submit' name='g5_inverso' value='Voltar'></input>";}

//_______________Botão_Voltar_(if's)_______Linha_6________________________________

elseif($a6_in_id == 1){$submit_inverso = "<input type='submit' name='a6_inverso' value='Voltar'></input>";}
elseif($b6_in_id == 1){$submit_inverso = "<input type='submit' name='b6_inverso' value='Voltar'></input>";}
elseif($c6_in_id == 1){$submit_inverso = "<input type='submit' name='c6_inverso' value='Voltar'></input>";}
elseif($d6_in_id == 1){$submit_inverso = "<input type='submit' name='d6_inverso' value='Voltar'></input>";}
elseif($e6_in_id == 1){$submit_inverso = "<input type='submit' name='e6_inverso' value='Voltar'></input>";}
elseif($f6_in_id == 1){$submit_inverso = "<input type='submit' name='f6_inverso' value='Voltar'></input>";}
elseif($g6_in_id == 1){$submit_inverso = "<input type='submit' name='g6_inverso' value='Voltar'></input>";}
else{$submit_inverso = "<input type='submit' name='reiniciar' value='Voltar'></input>";}







?>

<style media="screen">

.inverso{background-color: red;}

.a1_div{<?php echo $a1_div; ?>} .b1_div{<?php echo $b1_div; ?>} .c1_div{<?php echo $c1_div; ?>} .d1_div{<?php echo $d1_div; ?>} .e1_div{<?php echo $e1_div; ?>} .f1_div{<?php echo $f1_div; ?>} .g1_div{<?php echo $g1_div; ?>}
.a2_div{<?php echo $a2_div; ?>} .b2_div{<?php echo $b2_div; ?>} .c2_div{<?php echo $c2_div; ?>} .d2_div{<?php echo $d2_div; ?>} .e2_div{<?php echo $e2_div; ?>} .f2_div{<?php echo $f2_div; ?>} .g2_div{<?php echo $g2_div; ?>}
.a3_div{<?php echo $a3_div; ?>} .b3_div{<?php echo $b3_div; ?>} .c3_div{<?php echo $c3_div; ?>} .d3_div{<?php echo $d3_div; ?>} .e3_div{<?php echo $e3_div; ?>} .f3_div{<?php echo $f3_div; ?>} .g3_div{<?php echo $g3_div; ?>}
.a4_div{<?php echo $a4_div; ?>} .b4_div{<?php echo $b4_div; ?>} .c4_div{<?php echo $c4_div; ?>} .d4_div{<?php echo $d4_div; ?>} .e4_div{<?php echo $e4_div; ?>} .f4_div{<?php echo $f4_div; ?>} .g4_div{<?php echo $g4_div; ?>}
.a5_div{<?php echo $a5_div; ?>} .b5_div{<?php echo $b5_div; ?>} .c5_div{<?php echo $c5_div; ?>} .d5_div{<?php echo $d5_div; ?>} .e5_div{<?php echo $e5_div; ?>} .f5_div{<?php echo $f5_div; ?>} .g5_div{<?php echo $g5_div; ?>}
.a6_div{<?php echo $a6_div; ?>} .b6_div{<?php echo $b6_div; ?>} .c6_div{<?php echo $c6_div; ?>} .d6_div{<?php echo $d6_div; ?>} .e6_div{<?php echo $e6_div; ?>} .f6_div{<?php echo $f6_div; ?>} .g6_div{<?php echo $g6_div; ?>}


</style>
<div class="topo">
  <ul class="nav nav-pills">
  <li class="primeira_li"><a href="">Início</a></li>
  <li><a href="">Seu Status</a></li>
  <li><a href="">Jogos</a></li>
  <li><a href="">Descobertas</a></li>
  </ul></div>

</div>

<div class="geral">

<form class="" action="<?php echo $nome_arquivo ?>.php" method="post">
  <div class="reiniciar_botao"><input type="submit" name="reiniciar" value="Iniciar"></input></div>


  <div class="conteiner2">
    <p> <?php echo "Resultado: ".$_SESSION['resultado'];   ?> </p>
    <p> <?php echo "Jogadas: ".$_SESSION['count']." Max[".$numero_max_movimentos."]";   ?> </p>
    <p> <?php echo $_SESSION["ganhou"];   ?> </p>
    <p> <?php echo $_SESSION["perdeu"];  ?> </p>
    <p> <?php echo $_SESSION["passou_de_max"];  ?> </p>
    <p> <?php echo $tag_fechamento_ini; print_r ($_SESSION['array_jogadas']); echo $tag_fechamento_fin;  ?> </p>

  </div>

<div class="counteiner1">
  <table class="tabela">
  <tr>
  <td class="init_numero"><?php echo $numero_inicial ?></td>
  <td class="b1_div"><div ><?php echo $b1_td ?></div></td>
  <td class="c1_div"><div ><?php echo $c1_td ?></div></td>
  <td class="d1_div"><div ><?php echo $d1_td ?></div></td>
  <td class="e1_div"><div ><?php echo $e1_td ?></div></td>
  <td class="f1_div"><div ><?php echo $f1_td ?></div></td>
  <td class="init_numero"><?php echo $numero_inicial ?></td>
  </tr>

  <tr>
    <td class="a2_div"><div ><?php echo $a2_td ?></div></td>
    <td class="b2_div"><div ><?php echo $b2_td ?></div></td>
    <td class="c2_div"><div ><?php echo $c2_td ?></div></td>
    <td class="d2_div"><div ><?php echo $d2_td ?></div></td>
    <td class="e2_div"><div ><?php echo $e2_td ?></div></td>
    <td class="f2_div"><div ><?php echo $f2_td ?></div></td>
    <td class="g2_div"><div ><?php echo $g2_td ?></div></td>
  </tr>

  <tr>
    <td class="a3_div"><div ><?php echo $a3_td ?></div></td>
    <td class="b3_div"><div ><?php echo $b3_td ?></div></td>
    <td class="c3_div"><div ><?php echo $c3_td ?></div></td>
    <td class="d3_div"><div ><?php echo $d3_td ?></div></td>
    <td class="e3_div"><div ><?php echo $e3_td ?></div></td>
    <td class="f3_div"><div ><?php echo $f3_td ?></div></td>
    <td class="g3_div"><div ><?php echo $g3_td ?></div></td>
  </tr>

  <tr>
    <td class="a4_div"><div ><?php echo $a4_td ?></div></td>
    <td class="b4_div"><div ><?php echo $b4_td ?></div></td>
    <td class="c4_div"><div ><?php echo $c4_td ?></div></td>
    <td class="d4_div"><div ><?php echo $d4_td ?></div></td>
    <td class="e4_div"><div ><?php echo $e4_td ?></div></td>
    <td class="f4_div"><div ><?php echo $f4_td ?></div></td>
    <td class="g4_div"><div ><?php echo $g4_td ?></div></td>
  </tr>

  <tr>
    <td class="a5_div"><div ><?php echo $a5_td ?></div></td>
    <td class="b5_div"><div ><?php echo $b5_td ?></div></td>
    <td class="c5_div"><div ><?php echo $c5_td ?></div></td>
    <td class="d5_div"><div ><?php echo $d5_td ?></div></td>
    <td class="e5_div"><div ><?php echo $e5_td ?></div></td>
    <td class="f5_div"><div ><?php echo $f5_td ?></div></td>
    <td class="g5_div"><div ><?php echo $g5_td ?></div></td>
  </tr>

  <tr>
    <td class="a6_div"><div ><?php echo $a6_td ?></div></td>
    <td class="b6_div"><div ><?php echo $b6_td ?></div></td>
    <td class="c6_div"><div ><?php echo $c6_td ?></div></td>
    <td class="d6_div"><div ><?php echo $d6_td ?></div></td>
    <td class="e6_div"><div ><?php echo $e6_td ?></div></td>
    <td class="f6_div"><div ><?php echo $f6_td ?></div></td>
    <td class="g6_div"><div ><?php echo $g6_td ?></div></td>
  </tr>

  <tr>
    <td class="result_esperado"><div ><?php echo $a7_td ?></div></td>
    <td class="result_esperado"><div ><?php echo $b7_td ?></div></td>
    <td class="result_esperado"><div ><?php echo $c7_td ?></div></td>
    <td class="result_esperado"><div ><?php echo $d7_td ?></div></td>
    <td class="result_esperado"><div ><?php echo $e7_td ?></div></td>
    <td class="result_esperado"><div ><?php echo $f7_td ?></div></td>
    <td class="result_esperado"><div ><?php echo $g7_td ?></div></td>
  </tr>
</table>
</div>


  <div class="voltar_botao"><?php echo $submit_inverso ?></div>
</form>
  <div class="orientacao">
  <h3> Orientações:</h3>

  <h4><p> O seu objetivo é ir do <?php echo $numero_inicial ?> ao <?php echo "'=".$resultado_esperado."'" ?> em <?php echo $numero_max_movimentos ?> movimentos,
    executando a função aritimética para o dígito no quadrado selecionado enquanto prossegue.
    Você pode começar de qualquer canto.
    Os movimentos podem ser feitos horizontal e verticalmente, mas não em diagonal.
  </p></h4>
  </div>
  <div class="fases"></div>

</div>



  </body>
</html>
