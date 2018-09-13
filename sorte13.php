<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    table
    {
      border-collapse: collapse;
    }

    td
    {
      width: 50px;
      height: 50px;
      border-width: 1px;
      border-style: solid;
      border-color: black;
      text-align: center;
      overflow: hidden;
    }

    input[type="submit"]
    {
      width: 50px;
      height: 50px;
    }

    .counteiner1
    {
      width: 30%;
      height: 400px;
      float: left;
      display: block;

    }

    .conteiner2
    {
      width: 70%;
      height: 400px;
      display: inline-block;
      float: right;
      font-size: 30px;
    }

    .init_13
    {
      background-color: yellow;
    }

    .result_181
    {
      background-color: yellow;
    }


    </style>


  </head>
  <body>

<h2> Orientações: </h2>

<h3><p> O seu objetivo é ir do 13 ao "=181" em 11 movimentos,
  executando a função aritimética para o dígito no quadrado selecionado enquanto prossegue.
  Você pode começar de qualquer canto, mas - aqui está o truque - só um canto é o certo.
  Os movimentos podem ser feitos horizontal e verticalmente, mas não em diagonal.
</p></h3>


<?php

session_start();

$_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = ""; $_SESSION["passou_de_10"] = "";

$_SESSION["b1_view_abertura"] = ""; $_SESSION["b1_view_fechamento"] = "";
$_SESSION["c1_view_abertura"] = ""; $_SESSION["c1_view_fechamento"] = "";
$_SESSION["d1_view_abertura"] = ""; $_SESSION["d1_view_fechamento"] = "";
$_SESSION["e1_view_abertura"] = ""; $_SESSION["e1_view_fechamento"] = "";
$_SESSION["f1_view_abertura"] = ""; $_SESSION["f1_view_fechamento"] = "";

$_SESSION["a2_view_abertura"] = ""; $_SESSION["a2_view_fechamento"] = "";
$_SESSION["b2_view_abertura"] = ""; $_SESSION["b2_view_fechamento"] = "";
$_SESSION["c2_view_abertura"] = ""; $_SESSION["c2_view_fechamento"] = "";
$_SESSION["d2_view_abertura"] = ""; $_SESSION["d2_view_fechamento"] = "";
$_SESSION["e2_view_abertura"] = ""; $_SESSION["e2_view_fechamento"] = "";
$_SESSION["f2_view_abertura"] = ""; $_SESSION["f2_view_fechamento"] = "";
$_SESSION["g2_view_abertura"] = ""; $_SESSION["g2_view_fechamento"] = "";

$_SESSION["a3_view_abertura"] = ""; $_SESSION["a3_view_fechamento"] = "";
$_SESSION["b3_view_abertura"] = ""; $_SESSION["b3_view_fechamento"] = "";
$_SESSION["c3_view_abertura"] = ""; $_SESSION["c3_view_fechamento"] = "";
$_SESSION["d3_view_abertura"] = ""; $_SESSION["d3_view_fechamento"] = "";
$_SESSION["e3_view_abertura"] = ""; $_SESSION["e3_view_fechamento"] = "";
$_SESSION["f3_view_abertura"] = ""; $_SESSION["f3_view_fechamento"] = "";
$_SESSION["g3_view_abertura"] = ""; $_SESSION["g3_view_fechamento"] = "";

$_SESSION["a4_view_abertura"] = ""; $_SESSION["a4_view_fechamento"] = "";
$_SESSION["b4_view_abertura"] = ""; $_SESSION["b4_view_fechamento"] = "";
$_SESSION["c4_view_abertura"] = ""; $_SESSION["c4_view_fechamento"] = "";
$_SESSION["d4_view_abertura"] = ""; $_SESSION["d4_view_fechamento"] = "";
$_SESSION["e4_view_abertura"] = ""; $_SESSION["e4_view_fechamento"] = "";
$_SESSION["f4_view_abertura"] = ""; $_SESSION["f4_view_fechamento"] = "";
$_SESSION["g4_view_abertura"] = ""; $_SESSION["g4_view_fechamento"] = "";

$_SESSION["a5_view_abertura"] = ""; $_SESSION["a5_view_fechamento"] = "";
$_SESSION["b5_view_abertura"] = ""; $_SESSION["b5_view_fechamento"] = "";
$_SESSION["c5_view_abertura"] = ""; $_SESSION["c5_view_fechamento"] = "";
$_SESSION["d5_view_abertura"] = ""; $_SESSION["d5_view_fechamento"] = "";
$_SESSION["e5_view_abertura"] = ""; $_SESSION["e5_view_fechamento"] = "";
$_SESSION["f5_view_abertura"] = ""; $_SESSION["f5_view_fechamento"] = "";
$_SESSION["g5_view_abertura"] = ""; $_SESSION["g5_view_fechamento"] = "";

$_SESSION["a6_view_abertura"] = ""; $_SESSION["a6_view_fechamento"] = "";
$_SESSION["b6_view_abertura"] = ""; $_SESSION["b6_view_fechamento"] = "";
$_SESSION["c6_view_abertura"] = ""; $_SESSION["c6_view_fechamento"] = "";
$_SESSION["d6_view_abertura"] = ""; $_SESSION["d6_view_fechamento"] = "";
$_SESSION["e6_view_abertura"] = ""; $_SESSION["e6_view_fechamento"] = "";
$_SESSION["f6_view_abertura"] = ""; $_SESSION["f6_view_fechamento"] = "";
$_SESSION["g6_view_abertura"] = ""; $_SESSION["g6_view_fechamento"] = "";

$_SESSION["a7_view_abertura"] = ""; $_SESSION["a7_view_fechamento"] = "";
$_SESSION["b7_view_abertura"] = ""; $_SESSION["b7_view_fechamento"] = "";
$_SESSION["c7_view_abertura"] = ""; $_SESSION["c7_view_fechamento"] = "";
$_SESSION["d7_view_abertura"] = ""; $_SESSION["d7_view_fechamento"] = "";
$_SESSION["e7_view_abertura"] = ""; $_SESSION["e7_view_fechamento"] = "";
$_SESSION["f7_view_abertura"] = ""; $_SESSION["f7_view_fechamento"] = "";
$_SESSION["g7_view_abertura"] = ""; $_SESSION["g7_view_fechamento"] = "";


//_______________Linha_1_______________________________________

  if (isset($_POST['reiniciar'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  }


  if (isset($_POST['b1'])){
  $_SESSION['resultado'] = $_SESSION['resultado'] * 3;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  // $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  // $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}


  }


  if (isset($_POST['c1'])){
  $_SESSION['resultado'] = $_SESSION['resultado']-4;
  // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  // $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  // $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  if (isset($_POST['d1'])){
  $_SESSION['resultado'] = $_SESSION['resultado']*4;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  // $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  // $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  // $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";



  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  if (isset($_POST['e1'])){
  $_SESSION['resultado'] = $_SESSION['resultado']+5;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  // $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  // $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  if (isset($_POST['f1'])){
  $_SESSION['resultado'] = $_SESSION['resultado']*4;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  // $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  // $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  //_______________Linha_2_______________________________________

  if (isset($_POST['a2'])){
  $_SESSION['resultado'] = $_SESSION['resultado'] * 7;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  // $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  // $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  if (isset($_POST['b2'])){
  $_SESSION['resultado'] = $_SESSION['resultado'] - 41;
  // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  // $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  // $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }


  if (isset($_POST['c2'])){
  $_SESSION['resultado'] = $_SESSION['resultado']/2;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  // $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  // $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  // $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  // $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  if (isset($_POST['d2'])){
  $_SESSION['resultado'] = $_SESSION['resultado']+7;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  // $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  // $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  // $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  // $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  if (isset($_POST['e2'])){
  $_SESSION['resultado'] = $_SESSION['resultado']/3;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  // $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  // $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  // $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  // $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  if (isset($_POST['f2'])){
  $_SESSION['resultado'] = $_SESSION['resultado']+11;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  // $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  // $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  if (isset($_POST['g2'])){
  $_SESSION['resultado'] = $_SESSION['resultado']*8;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  // $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  // $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  //______________Linha_3________________________________________

  if (isset($_POST['a3'])){
  $_SESSION['resultado'] = $_SESSION['resultado'] + 14;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  // $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  // $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  if (isset($_POST['b3'])){
  $_SESSION['resultado'] = $_SESSION['resultado'] /6;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  // $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  // $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  // $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  // $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }


  if (isset($_POST['c3'])){
  $_SESSION['resultado'] = $_SESSION['resultado']*2;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  // $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  // $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  // $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  // $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  if (isset($_POST['d3'])){
  $_SESSION['resultado'] = $_SESSION['resultado']-4;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  // $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  // $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  // $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  // $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  if (isset($_POST['e3'])){
  $_SESSION['resultado'] = $_SESSION['resultado']*17;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  // $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  // $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  // $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  // $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  if (isset($_POST['f3'])){
  $_SESSION['resultado'] = $_SESSION['resultado']/4;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  // $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  // $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  // $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  // $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

  if (isset($_POST['g3'])){
  $_SESSION['resultado'] = $_SESSION['resultado']+3;
  $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
  $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
  $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
  $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
  $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

  $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
  $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
  $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
  $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
  $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
  $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
  // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

  $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
  $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
  $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
  $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
  $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
  // $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
  $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

  $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
  $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
  $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
  $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
  $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
  $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
  // $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

  $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
  $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
  $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
  $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
  $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
  $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
  $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

  $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
  $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
  $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
  $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
  $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
  $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
  $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

  $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
  $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
  $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
  $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
  $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
  $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
  $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

  $_SESSION["count"] = $_SESSION["count"] + 1;
  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
  }

    //______________Linha_4________________________________________

    if (isset($_POST['a4'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] /5;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    // $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    // $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    // $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['b4'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] -33;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    // $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    // $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    // $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    // $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }


    if (isset($_POST['c4'])){
    $_SESSION['resultado'] = $_SESSION['resultado']/5;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    // $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    // $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    // $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    // $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['d4'])){
    $_SESSION['resultado'] = $_SESSION['resultado']+7;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    // $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    // $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    // $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    // $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['e4'])){
    $_SESSION['resultado'] = $_SESSION['resultado']/8;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    // $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    // $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    // $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    // $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['f4'])){
    $_SESSION['resultado'] = $_SESSION['resultado']*6;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    // $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    // $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    // $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    // $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['g4'])){
    $_SESSION['resultado'] = $_SESSION['resultado']-41;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    // $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    // $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    // $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }



    //______________Linha_5________________________________________

    if (isset($_POST['a5'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] *21;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    // $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    // $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    // $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['b5'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] +123;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    // $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    // $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    // $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    // $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }


    if (isset($_POST['c5'])){
    $_SESSION['resultado'] = $_SESSION['resultado']-8;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    // $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    // $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    // $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    // $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['d5'])){
    $_SESSION['resultado'] = $_SESSION['resultado']/14;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    // $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    // $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    // $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    // $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['e5'])){
    $_SESSION['resultado'] = $_SESSION['resultado']-2;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    // $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    // $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    // $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    // $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['f5'])){
    $_SESSION['resultado'] = $_SESSION['resultado']/3;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    // $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    // $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    // $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    // $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['g5'])){
    $_SESSION['resultado'] = $_SESSION['resultado']*71;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    // $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    // $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    // $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["count"] = $_SESSION["count"] + 1;
    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }



    //______________Linha_6________________________________________

    if (isset($_POST['a6'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] -14;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    // $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    // $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["count"] = $_SESSION["count"] + 1;

    $abertura = "<!--"; $fechamento_7 = "--> = 181";
    $abertura_a7 = "<!--"; $fechamento_a7 = "--> = 181";
    if($_SESSION["count"]==10){$abertura_a7 = ""; $fechamento_a7 = "";}

    $_SESSION["a7_view_abertura"] = $abertura_a7; $_SESSION["a7_view_fechamento"] = $fechamento_a7;
    $_SESSION["b7_view_abertura"] = $abertura; $_SESSION["b7_view_fechamento"] = $fechamento_7;
    $_SESSION["c7_view_abertura"] = $abertura; $_SESSION["c7_view_fechamento"] = $fechamento_7;
    $_SESSION["d7_view_abertura"] = $abertura; $_SESSION["d7_view_fechamento"] = $fechamento_7;
    $_SESSION["e7_view_abertura"] = $abertura; $_SESSION["e7_view_fechamento"] = $fechamento_7;
    $_SESSION["f7_view_abertura"] = $abertura; $_SESSION["f7_view_fechamento"] = $fechamento_7;
    $_SESSION["g7_view_abertura"] = $abertura; $_SESSION["g7_view_fechamento"] = $fechamento_7;

    if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['b6'])){
    $_SESSION['resultado'] = $_SESSION['resultado'] -6;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    // $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    // $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    // $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["count"] = $_SESSION["count"] + 1;

    $abertura = "<!--"; $fechamento_7 = "--> = 181";
    $abertura_b7 = "<!--"; $fechamento_b7 = "--> = 181";
    if($_SESSION["count"]==10){$abertura_b7 = ""; $fechamento_b7 = "";}

    $_SESSION["a7_view_abertura"] = $abertura; $_SESSION["a7_view_fechamento"] = $fechamento_7;
    $_SESSION["b7_view_abertura"] = $abertura_b7; $_SESSION["b7_view_fechamento"] = $fechamento_b7;
    $_SESSION["c7_view_abertura"] = $abertura; $_SESSION["c7_view_fechamento"] = $fechamento_7;
    $_SESSION["d7_view_abertura"] = $abertura; $_SESSION["d7_view_fechamento"] = $fechamento_7;
    $_SESSION["e7_view_abertura"] = $abertura; $_SESSION["e7_view_fechamento"] = $fechamento_7;
    $_SESSION["f7_view_abertura"] = $abertura; $_SESSION["f7_view_fechamento"] = $fechamento_7;
    $_SESSION["g7_view_abertura"] = $abertura; $_SESSION["g7_view_fechamento"] = $fechamento_7;


  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }


    if (isset($_POST['c6'])){
    $_SESSION['resultado'] = $_SESSION['resultado']+12;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    // $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    // $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    // $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["count"] = $_SESSION["count"] + 1;

    $abertura = "<!--"; $fechamento_7 = "--> = 181";
    $abertura_c7 = "<!--"; $fechamento_c7 = "--> = 181";
    if($_SESSION["count"]==10){$abertura_c7 = ""; $fechamento_c7 = "";}

    $_SESSION["a7_view_abertura"] = $abertura; $_SESSION["a7_view_fechamento"] = $fechamento_7;
    $_SESSION["b7_view_abertura"] = $abertura; $_SESSION["b7_view_fechamento"] = $fechamento_7;
    $_SESSION["c7_view_abertura"] = $abertura_c7; $_SESSION["c7_view_fechamento"] = $fechamento_c7;
    $_SESSION["d7_view_abertura"] = $abertura; $_SESSION["d7_view_fechamento"] = $fechamento_7;
    $_SESSION["e7_view_abertura"] = $abertura; $_SESSION["e7_view_fechamento"] = $fechamento_7;
    $_SESSION["f7_view_abertura"] = $abertura; $_SESSION["f7_view_fechamento"] = $fechamento_7;
    $_SESSION["g7_view_abertura"] = $abertura; $_SESSION["g7_view_fechamento"] = $fechamento_7;


  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['d6'])){
    $_SESSION['resultado'] = $_SESSION['resultado']*93;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    // $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    // $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    // $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["count"] = $_SESSION["count"] + 1;

    $abertura = "<!--"; $fechamento_7 = "--> = 181";
    $abertura_d7 = "<!--"; $fechamento_d7 = "--> = 181";
    if($_SESSION["count"]==10){$abertura_d7 = ""; $fechamento_d7 = "";}

    $_SESSION["a7_view_abertura"] = $abertura; $_SESSION["a7_view_fechamento"] = $fechamento_7;
    $_SESSION["b7_view_abertura"] = $abertura; $_SESSION["b7_view_fechamento"] = $fechamento_7;
    $_SESSION["c7_view_abertura"] = $abertura; $_SESSION["c7_view_fechamento"] = $fechamento_7;
    $_SESSION["d7_view_abertura"] = $abertura_d7; $_SESSION["d7_view_fechamento"] = $fechamento_d7;
    $_SESSION["e7_view_abertura"] = $abertura; $_SESSION["e7_view_fechamento"] = $fechamento_7;
    $_SESSION["f7_view_abertura"] = $abertura; $_SESSION["f7_view_fechamento"] = $fechamento_7;
    $_SESSION["g7_view_abertura"] = $abertura; $_SESSION["g7_view_fechamento"] = $fechamento_7;


  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['e6'])){
    $_SESSION['resultado'] = $_SESSION['resultado']+4;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    // $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    // $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    // $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["count"] = $_SESSION["count"] + 1;

    $abertura = "<!--"; $fechamento_7 = "--> = 181";
    $abertura_e7 = "<!--"; $fechamento_e7 = "--> = 181";
    if($_SESSION["count"]==10){$abertura_e7 = ""; $fechamento_e7 = "";}

    $_SESSION["a7_view_abertura"] = $abertura; $_SESSION["a7_view_fechamento"] = $fechamento_7;
    $_SESSION["b7_view_abertura"] = $abertura; $_SESSION["b7_view_fechamento"] = $fechamento_7;
    $_SESSION["c7_view_abertura"] = $abertura; $_SESSION["c7_view_fechamento"] = $fechamento_7;
    $_SESSION["d7_view_abertura"] = $abertura; $_SESSION["d7_view_fechamento"] = $fechamento_7;
    $_SESSION["e7_view_abertura"] = $abertura_e7; $_SESSION["e7_view_fechamento"] = $fechamento_e7;
    $_SESSION["f7_view_abertura"] = $abertura; $_SESSION["f7_view_fechamento"] = $fechamento_7;
    $_SESSION["g7_view_abertura"] = $abertura; $_SESSION["g7_view_fechamento"] = $fechamento_7;


  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['f6'])){
    $_SESSION['resultado'] = $_SESSION['resultado']-72;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    // $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    // $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    // $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["count"] = $_SESSION["count"] + 1;

    $abertura = "<!--"; $fechamento_7 = "--> = 181";
    $abertura_f7 = "<!--"; $fechamento_f7 = "--> = 181";
    if($_SESSION["count"]==10){$abertura_f7 = ""; $fechamento_f7 = "";}

    $_SESSION["a7_view_abertura"] = $abertura; $_SESSION["a7_view_fechamento"] = $fechamento_7;
    $_SESSION["b7_view_abertura"] = $abertura; $_SESSION["b7_view_fechamento"] = $fechamento_7;
    $_SESSION["c7_view_abertura"] = $abertura; $_SESSION["c7_view_fechamento"] = $fechamento_7;
    $_SESSION["d7_view_abertura"] = $abertura; $_SESSION["d7_view_fechamento"] = $fechamento_7;
    $_SESSION["e7_view_abertura"] = $abertura; $_SESSION["e7_view_fechamento"] = $fechamento_7;
    $_SESSION["f7_view_abertura"] = $abertura_f7; $_SESSION["f7_view_fechamento"] = $fechamento_f7;
    $_SESSION["g7_view_abertura"] = $abertura; $_SESSION["g7_view_fechamento"] = $fechamento_7;


  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}
    }

    if (isset($_POST['g6'])){
    $_SESSION['resultado'] = $_SESSION['resultado']/10;
    $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    // $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    // $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["count"] = $_SESSION["count"] + 1;

    $abertura = "<!--"; $fechamento_7 = "--> = 181";
    $abertura_g7 = "<!--"; $fechamento_g7 = "--> = 181";
    if($_SESSION["count"]==10){$abertura_g7 = ""; $fechamento_g7 = "";}

    $_SESSION["a7_view_abertura"] = $abertura; $_SESSION["a7_view_fechamento"] = $fechamento_7;
    $_SESSION["b7_view_abertura"] = $abertura; $_SESSION["b7_view_fechamento"] = $fechamento_7;
    $_SESSION["c7_view_abertura"] = $abertura; $_SESSION["c7_view_fechamento"] = $fechamento_7;
    $_SESSION["d7_view_abertura"] = $abertura; $_SESSION["d7_view_fechamento"] = $fechamento_7;
    $_SESSION["e7_view_abertura"] = $abertura; $_SESSION["e7_view_fechamento"] = $fechamento_7;
    $_SESSION["f7_view_abertura"] = $abertura; $_SESSION["f7_view_fechamento"] = $fechamento_7;
    $_SESSION["g7_view_abertura"] = $abertura_g7; $_SESSION["g7_view_fechamento"] = $fechamento_g7;


  if($_SESSION["count"]>10){$_SESSION["passou_de_10"] = "Reinicie o jogo, infelizmente você não tem mais possibilidades de ganhar.";}

    }

  //______________Linha_7________________________________________

  if (isset($_POST['a7'])){
  $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
  $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION['resultado']==181 && $_SESSION["count"]==11)
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["ganhou"] = "Parabéns você é um gênio!"; $_SESSION["perdeu"] = "";
  }


  else
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = "Tente novamente!";
  }
  }

  if (isset($_POST['b7'])){
  $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
  $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION['resultado']==181 && $_SESSION["count"]==11)
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["ganhou"] = "Parabéns você é um gênio!"; $_SESSION["perdeu"] = "";
  }


  else
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = "Tente novamente!";
  }
  }

  if (isset($_POST['c7'])){
  $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
  $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION['resultado']==181 && $_SESSION["count"]==11)
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["ganhou"] = "Parabéns você é um gênio!"; $_SESSION["perdeu"] = "";
  }


  else
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = "Tente novamente!";
  }
  }

  if (isset($_POST['d7'])){
  $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
  $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION['resultado']==181 && $_SESSION["count"]==11)
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["ganhou"] = "Parabéns você é um gênio!"; $_SESSION["perdeu"] = "";
  }


  else
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = "Tente novamente!";
  }
  }

  if (isset($_POST['e7'])){
  $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
  $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION['resultado']==181 && $_SESSION["count"]==11)
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["ganhou"] = "Parabéns você é um gênio!"; $_SESSION["perdeu"] = "";
  }


  else
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = "Tente novamente!";
  }
  }

  if (isset($_POST['f7'])){
  $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
  $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION['resultado']==181 && $_SESSION["count"]==11)
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["ganhou"] = "Parabéns você é um gênio!"; $_SESSION["perdeu"] = "";
  }


  else
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = "Tente novamente!";
  }
  }

  if (isset($_POST['g7'])){
  $_SESSION['resultado'] = $_SESSION['resultado'] + 0;
  $_SESSION["count"] = $_SESSION["count"] + 1;

  if($_SESSION['resultado']==181 && $_SESSION["count"]==11)
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";

    $_SESSION["ganhou"] = "Parabéns você é um gênio!"; $_SESSION["perdeu"] = "";
  }


  else
  {
    $_SESSION['resultado'] = $_SESSION['resultado'] *0 +13;
    $_SESSION["count"] = $_SESSION["count"] *0;

    // $_SESSION["b1_view_abertura"] = "<!--"; $_SESSION["b1_view_fechamento"] = "--> x3";
    $_SESSION["c1_view_abertura"] = "<!--"; $_SESSION["c1_view_fechamento"] = "--> -4";
    $_SESSION["d1_view_abertura"] = "<!--"; $_SESSION["d1_view_fechamento"] = "--> x4";
    $_SESSION["e1_view_abertura"] = "<!--"; $_SESSION["e1_view_fechamento"] = "--> +5";
    // $_SESSION["f1_view_abertura"] = "<!--"; $_SESSION["f1_view_fechamento"] = "--> x4";

    // $_SESSION["a2_view_abertura"] = "<!--"; $_SESSION["a2_view_fechamento"] = "--> x7";
    $_SESSION["b2_view_abertura"] = "<!--"; $_SESSION["b2_view_fechamento"] = "--> -41";
    $_SESSION["c2_view_abertura"] = "<!--"; $_SESSION["c2_view_fechamento"] = "--> ÷2";
    $_SESSION["d2_view_abertura"] = "<!--"; $_SESSION["d2_view_fechamento"] = "--> +7";
    $_SESSION["e2_view_abertura"] = "<!--"; $_SESSION["e2_view_fechamento"] = "--> ÷3";
    $_SESSION["f2_view_abertura"] = "<!--"; $_SESSION["f2_view_fechamento"] = "--> +11";
    // $_SESSION["g2_view_abertura"] = "<!--"; $_SESSION["g2_view_fechamento"] = "--> x8";

    $_SESSION["a3_view_abertura"] = "<!--"; $_SESSION["a3_view_fechamento"] = "--> +14";
    $_SESSION["b3_view_abertura"] = "<!--"; $_SESSION["b3_view_fechamento"] = "--> ÷6";
    $_SESSION["c3_view_abertura"] = "<!--"; $_SESSION["c3_view_fechamento"] = "--> x2";
    $_SESSION["d3_view_abertura"] = "<!--"; $_SESSION["d3_view_fechamento"] = "--> -4";
    $_SESSION["e3_view_abertura"] = "<!--"; $_SESSION["e3_view_fechamento"] = "--> x17";
    $_SESSION["f3_view_abertura"] = "<!--"; $_SESSION["f3_view_fechamento"] = "--> ÷4";
    $_SESSION["g3_view_abertura"] = "<!--"; $_SESSION["g3_view_fechamento"] = "--> +3";

    $_SESSION["a4_view_abertura"] = "<!--"; $_SESSION["a4_view_fechamento"] = "--> ÷5";
    $_SESSION["b4_view_abertura"] = "<!--"; $_SESSION["b4_view_fechamento"] = "--> -33";
    $_SESSION["c4_view_abertura"] = "<!--"; $_SESSION["c4_view_fechamento"] = "--> ÷5";
    $_SESSION["d4_view_abertura"] = "<!--"; $_SESSION["d4_view_fechamento"] = "--> +7";
    $_SESSION["e4_view_abertura"] = "<!--"; $_SESSION["e4_view_fechamento"] = "--> ÷8";
    $_SESSION["f4_view_abertura"] = "<!--"; $_SESSION["f4_view_fechamento"] = "--> x6";
    $_SESSION["g4_view_abertura"] = "<!--"; $_SESSION["g4_view_fechamento"] = "--> -41";

    $_SESSION["a5_view_abertura"] = "<!--"; $_SESSION["a5_view_fechamento"] = "--> x21";
    $_SESSION["b5_view_abertura"] = "<!--"; $_SESSION["b5_view_fechamento"] = "--> +123";
    $_SESSION["c5_view_abertura"] = "<!--"; $_SESSION["c5_view_fechamento"] = "--> -8";
    $_SESSION["d5_view_abertura"] = "<!--"; $_SESSION["d5_view_fechamento"] = "--> ÷14";
    $_SESSION["e5_view_abertura"] = "<!--"; $_SESSION["e5_view_fechamento"] = "--> -2";
    $_SESSION["f5_view_abertura"] = "<!--"; $_SESSION["f5_view_fechamento"] = "--> ÷3";
    $_SESSION["g5_view_abertura"] = "<!--"; $_SESSION["g5_view_fechamento"] = "--> x71";

    $_SESSION["a6_view_abertura"] = "<!--"; $_SESSION["a6_view_fechamento"] = "--> -14";
    $_SESSION["b6_view_abertura"] = "<!--"; $_SESSION["b6_view_fechamento"] = "--> -6";
    $_SESSION["c6_view_abertura"] = "<!--"; $_SESSION["c6_view_fechamento"] = "--> +12";
    $_SESSION["d6_view_abertura"] = "<!--"; $_SESSION["d6_view_fechamento"] = "--> x93";
    $_SESSION["e6_view_abertura"] = "<!--"; $_SESSION["e6_view_fechamento"] = "--> +4";
    $_SESSION["f6_view_abertura"] = "<!--"; $_SESSION["f6_view_fechamento"] = "--> -72";
    $_SESSION["g6_view_abertura"] = "<!--"; $_SESSION["g6_view_fechamento"] = "--> ÷10";

    $_SESSION["a7_view_abertura"] = "<!--"; $_SESSION["a7_view_fechamento"] = "--> = 181";
    $_SESSION["b7_view_abertura"] = "<!--"; $_SESSION["b7_view_fechamento"] = "--> = 181";
    $_SESSION["c7_view_abertura"] = "<!--"; $_SESSION["c7_view_fechamento"] = "--> = 181";
    $_SESSION["d7_view_abertura"] = "<!--"; $_SESSION["d7_view_fechamento"] = "--> = 181";
    $_SESSION["e7_view_abertura"] = "<!--"; $_SESSION["e7_view_fechamento"] = "--> = 181";
    $_SESSION["f7_view_abertura"] = "<!--"; $_SESSION["f7_view_fechamento"] = "--> = 181";
    $_SESSION["g7_view_abertura"] = "<!--"; $_SESSION["g7_view_fechamento"] = "--> = 181";


    $_SESSION["ganhou"] = ""; $_SESSION["perdeu"] = "Tente novamente!";

  }
  }

 ?>


<form class="" action="sorte13.php" method="post">
  <div class="reiniciar_botao"><input type="submit" name="reiniciar" value="Iniciar / Reiniciar"><div>
  <br /><br />

  <div class="conteiner2">
    <p> <?php echo "Resultado: ".$_SESSION['resultado'];   ?> </p>
    <p> <?php echo "Jogadas: ".$_SESSION['count'];   ?> </p>
    <p> <?php echo $_SESSION["ganhou"];   ?> </p>
    <p> <?php echo $_SESSION["perdeu"];  ?> </p>
    <p> <?php echo $_SESSION["passou_de_10"];  ?> </p>
  </div>

<div class="counteiner1">
  <table class="tabela">
  <tr>
  <td class="init_13">13</td>
  <td><div class="b1_div"><?php echo $_SESSION["b1_view_abertura"] ?><input type="submit" name="b1" value="x3"><?php echo $_SESSION["b1_view_fechamento"] ?></div></td>
  <td><div class="c1_div"><?php echo $_SESSION["c1_view_abertura"] ?><input type="submit" name="c1" value="-4"><?php echo $_SESSION["c1_view_fechamento"] ?></div></td>
  <td><div class="d1_div"><?php echo $_SESSION["d1_view_abertura"] ?><input type="submit" name="d1" value="x4"><?php echo $_SESSION["d1_view_fechamento"] ?></div></td>
  <td><div class="e1_div"><?php echo $_SESSION["e1_view_abertura"] ?><input type="submit" name="e1" value="+5"><?php echo $_SESSION["e1_view_fechamento"] ?></div></td>
  <td><div class="f1_div"><?php echo $_SESSION["f1_view_abertura"] ?><input type="submit" name="f1" value="x4"><?php echo $_SESSION["f1_view_fechamento"] ?></div></td>
  <td class="init_13">13</td>
  </tr>

  <tr>
    <td><div class="a2_div"><?php echo $_SESSION["a2_view_abertura"] ?><input type="submit" name="a2" value="x7"><?php echo $_SESSION["a2_view_fechamento"] ?></div></td>
    <td><div class="b2_div"><?php echo $_SESSION["b2_view_abertura"] ?><input type="submit" name="b2" value="-41"><?php echo $_SESSION["b2_view_fechamento"] ?></div></td>
    <td><div class="c2_div"><?php echo $_SESSION["c2_view_abertura"] ?><input type="submit" name="c2" value="÷2"><?php echo $_SESSION["c2_view_fechamento"] ?></div></td>
    <td><div class="d2_div"><?php echo $_SESSION["d2_view_abertura"] ?><input type="submit" name="d2" value="+7"><?php echo $_SESSION["d2_view_fechamento"] ?></div></td>
    <td><div class="e2_div"><?php echo $_SESSION["e2_view_abertura"] ?><input type="submit" name="e2" value="÷3"><?php echo $_SESSION["e2_view_fechamento"] ?></div></td>
    <td><div class="f2_div"><?php echo $_SESSION["f2_view_abertura"] ?><input type="submit" name="f2" value="+11"><?php echo $_SESSION["f2_view_fechamento"] ?></div></td>
    <td><div class="g2_div"><?php echo $_SESSION["g2_view_abertura"] ?><input type="submit" name="g2" value="x8"><?php echo $_SESSION["g2_view_fechamento"] ?></div></td>
  </tr>

  <tr>
    <td><div class="a3_div"><?php echo $_SESSION["a3_view_abertura"] ?><input type="submit" name="a3" value="+14"><?php echo $_SESSION["a3_view_fechamento"] ?></div></td>
    <td><div class="b3_div"><?php echo $_SESSION["b3_view_abertura"] ?><input type="submit" name="b3" value="÷6"><?php echo $_SESSION["b3_view_fechamento"] ?></div></td>
    <td><div class="c3_div"><?php echo $_SESSION["c3_view_abertura"] ?><input type="submit" name="c3" value="x2"><?php echo $_SESSION["c3_view_fechamento"] ?></div></td>
    <td><div class="d3_div"><?php echo $_SESSION["d3_view_abertura"] ?><input type="submit" name="d3" value="-4"><?php echo $_SESSION["d3_view_fechamento"] ?></div></td>
    <td><div class="e3_div"><?php echo $_SESSION["e3_view_abertura"] ?><input type="submit" name="e3" value="x17"><?php echo $_SESSION["e3_view_fechamento"] ?></div></td>
    <td><div class="f3_div"><?php echo $_SESSION["f3_view_abertura"] ?><input type="submit" name="f3" value="÷4"><?php echo $_SESSION["f3_view_fechamento"] ?></div></td>
    <td><div class="g3_div"><?php echo $_SESSION["g3_view_abertura"] ?><input type="submit" name="g3" value="+3"><?php echo $_SESSION["g3_view_fechamento"] ?></div></td>
  </tr>

  <tr>
    <td><div class="a4_div"><?php echo $_SESSION["a4_view_abertura"] ?><input type="submit" name="a4" value="÷5"><?php echo $_SESSION["a4_view_fechamento"] ?></div></td>
    <td><div class="b4_div"><?php echo $_SESSION["b4_view_abertura"] ?><input type="submit" name="b4" value="-33"><?php echo $_SESSION["b4_view_fechamento"] ?></div></td>
    <td><div class="c4_div"><?php echo $_SESSION["c4_view_abertura"] ?><input type="submit" name="c4" value="÷5"><?php echo $_SESSION["c4_view_fechamento"] ?></div></td>
    <td><div class="d4_div"><?php echo $_SESSION["d4_view_abertura"] ?><input type="submit" name="d4" value="+7"><?php echo $_SESSION["d4_view_fechamento"] ?></div></td>
    <td><div class="e4_div"><?php echo $_SESSION["e4_view_abertura"] ?><input type="submit" name="e4" value="÷8"><?php echo $_SESSION["e4_view_fechamento"] ?></div></td>
    <td><div class="f4_div"><?php echo $_SESSION["f4_view_abertura"] ?><input type="submit" name="f4" value="x6"><?php echo $_SESSION["f4_view_fechamento"] ?></div></td>
    <td><div class="g4_div"><?php echo $_SESSION["g4_view_abertura"] ?><input type="submit" name="g4" value="-41"><?php echo $_SESSION["g4_view_fechamento"] ?></div></td>
  </tr>

  <tr>
    <td><div class="a5_div"><?php echo $_SESSION["a5_view_abertura"] ?><input type="submit" name="a5" value="x21"><?php echo $_SESSION["a5_view_fechamento"] ?></div></td>
    <td><div class="b5_div"><?php echo $_SESSION["b5_view_abertura"] ?><input type="submit" name="b5" value="+123"><?php echo $_SESSION["b5_view_fechamento"] ?></div></td>
    <td><div class="c5_div"><?php echo $_SESSION["c5_view_abertura"] ?><input type="submit" name="c5" value="-8"><?php echo $_SESSION["c5_view_fechamento"] ?></div></td>
    <td><div class="d5_div"><?php echo $_SESSION["d5_view_abertura"] ?><input type="submit" name="d5" value="÷14"><?php echo $_SESSION["d5_view_fechamento"] ?></div></td>
    <td><div class="e5_div"><?php echo $_SESSION["e5_view_abertura"] ?><input type="submit" name="e5" value="-2"><?php echo $_SESSION["e5_view_fechamento"] ?></div></td>
    <td><div class="f5_div"><?php echo $_SESSION["f5_view_abertura"] ?><input type="submit" name="f5" value="÷3"><?php echo $_SESSION["f5_view_fechamento"] ?></div></td>
    <td><div class="g5_div"><?php echo $_SESSION["g5_view_abertura"] ?><input type="submit" name="g5" value="x71"><?php echo $_SESSION["g5_view_fechamento"] ?></div></td>
  </tr>

  <tr>
    <td><div class="a6_div"><?php echo $_SESSION["a6_view_abertura"] ?><input type="submit" name="a6" value="-14"><?php echo $_SESSION["a6_view_fechamento"] ?></div></td>
    <td><div class="b6_div"><?php echo $_SESSION["b6_view_abertura"] ?><input type="submit" name="b6" value="-6"><?php echo $_SESSION["b6_view_fechamento"] ?></div></td>
    <td><div class="c6_div"><?php echo $_SESSION["c6_view_abertura"] ?><input type="submit" name="c6" value="+12"><?php echo $_SESSION["c6_view_fechamento"] ?></div></td>
    <td><div class="d6_div"><?php echo $_SESSION["d6_view_abertura"] ?><input type="submit" name="d6" value="x93"><?php echo $_SESSION["d6_view_fechamento"] ?></div></td>
    <td><div class="e6_div"><?php echo $_SESSION["e6_view_abertura"] ?><input type="submit" name="e6" value="+4"><?php echo $_SESSION["e6_view_fechamento"] ?></div></td>
    <td><div class="f6_div"><?php echo $_SESSION["f6_view_abertura"] ?><input type="submit" name="f6" value="-72"><?php echo $_SESSION["f6_view_fechamento"] ?></div></td>
    <td><div class="g6_div"><?php echo $_SESSION["g6_view_abertura"] ?><input type="submit" name="g6" value="÷10"><?php echo $_SESSION["g6_view_fechamento"] ?></div></td>
  </tr>

  <tr>
    <td class="result_181"><div><?php echo $_SESSION["a7_view_abertura"] ?><input type="submit" name="a7" value="= 181"><?php echo $_SESSION["a7_view_fechamento"] ?></div></td>
    <td class="result_181"><div><?php echo $_SESSION["b7_view_abertura"] ?><input type="submit" name="b7" value="= 181"><?php echo $_SESSION["b7_view_fechamento"] ?></div></td>
    <td class="result_181"><div><?php echo $_SESSION["c7_view_abertura"] ?><input type="submit" name="c7" value="= 181"><?php echo $_SESSION["c7_view_fechamento"] ?></div></td>
    <td class="result_181"><div><?php echo $_SESSION["d7_view_abertura"] ?><input type="submit" name="d7" value="= 181"><?php echo $_SESSION["d7_view_fechamento"] ?></div></td>
    <td class="result_181"><div><?php echo $_SESSION["e7_view_abertura"] ?><input type="submit" name="e7" value="= 181"><?php echo $_SESSION["e7_view_fechamento"] ?></div></td>
    <td class="result_181"><div><?php echo $_SESSION["f7_view_abertura"] ?><input type="submit" name="f7" value="= 181"><?php echo $_SESSION["f7_view_fechamento"] ?></div></td>
    <td class="result_181"><div><?php echo $_SESSION["g7_view_abertura"] ?><input type="submit" name="g7" value="= 181"><?php echo $_SESSION["g7_view_fechamento"] ?></div></td>
  </tr>
</div>










</form>



  </body>
</html>
