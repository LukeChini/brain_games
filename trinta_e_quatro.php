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

    input[type="radio"]
    {
      width: 300%;
      height: 300%;
      opacity : 0;
      margin-left: -50px;

      /* display: none; */
    }

    input[type="radio"]:checked
    {
      width: 300%;
      height: 300%;
      opacity : 1;
      margin-left: -50px;
    }

    .numero_fixo
    {
      background-color: rgb(200,200,200);
    }


    .coluna_invisivel
    {
      width: 50px;
      height: 50px;
      border-width: 0px;
      border-style: solid;
      border-color: white;
      text-align: center;
      overflow: hidden;
    }

    .radio_css
    {
      background-color: white;
    }

    .box_principal
    {
      width: 90%;
      margin: 0 auto;

    }

    .box1
    {
      display: inline-block;
      width: 325px;
      float: left;


    }

    .box2
    {
      display: inline-block;
      width: 250px;
      float: left;


    }

    .box_parabens
    {
      text-align: center;
      margin-left: 30px;
      margin-top: -20px;

    }




    </style>


  </head>
  <body>

    <?php

    session_start();





    $_SESSION["x5_view_abertura"] = "";     $_SESSION["x5_view_fechamento"] = "";
    $_SESSION["x6_view_abertura"] = "";     $_SESSION["x6_view_fechamento"] = "";
    $_SESSION["x7_view_abertura"] = "";     $_SESSION["x7_view_fechamento"] = "";
    $_SESSION["x8_view_abertura"] = "";     $_SESSION["x8_view_fechamento"] = "";

    $_SESSION["x9_view_abertura"] = "";     $_SESSION["x9_view_fechamento"] = "";
    $_SESSION["x10_view_abertura"] = "";     $_SESSION["x10_view_fechamento"] = "";
    $_SESSION["x11_view_abertura"] = "";     $_SESSION["x11_view_fechamento"] = "";
    $_SESSION["x12_view_abertura"] = "";     $_SESSION["x12_view_fechamento"] = "";

    $_SESSION["x13_view_abertura"] = "";     $_SESSION["x13_view_fechamento"] = "";
    $_SESSION["x14_view_abertura"] = "";     $_SESSION["x14_view_fechamento"] = "";
    $_SESSION["x15_view_abertura"] = "";     $_SESSION["x15_view_fechamento"] = "";
    $_SESSION["x16_view_abertura"] = "";     $_SESSION["x16_view_fechamento"] = "";


    if (isset($_POST['reset'])){
    $_SESSION["x5_subimit_on"] = 0;      $_SESSION["x6_subimit_on"] = 0;      $_SESSION["x7_subimit_on"] = 0;      $_SESSION["x8_subimit_on"] = 0;
    $_SESSION["x9_subimit_on"] = 0;      $_SESSION["x10_subimit_on"] = 0;     $_SESSION["x11_subimit_on"] = 0;     $_SESSION["x12_subimit_on"] = 0;
    $_SESSION["x13_subimit_on"] = 0;     $_SESSION["x14_subimit_on"] = 0;     $_SESSION["x15_subimit_on"] = 0;     $_SESSION["x16_subimit_on"] = 0;

    $_SESSION['a1'] = 0;      $_SESSION['a2'] = 0;      $_SESSION['a3'] = 0;      $_SESSION['a4'] = 1;
    $_SESSION['b1'] = 0;      $_SESSION['b2'] = 3;      $_SESSION['b3'] = 0;      $_SESSION['b4'] = 0;
    $_SESSION['c1'] = 0;      $_SESSION['c2'] = 0;      $_SESSION['c3'] = 2;      $_SESSION['c4'] = 0;
    $_SESSION['d1'] = 4;      $_SESSION['d2'] = 0;      $_SESSION['d3'] = 0;      $_SESSION['d4'] = 0;

    $a1_input = "<input type='radio' name='chek' value='a1' checked>"; $b1_input = "<input type='radio' name='chek' value='b1'>"; $c1_input = "<input type='radio' name='chek' value='c1'>";
    $a2_input = "<input type='radio' name='chek' value='a2'>"; $c2_input = "<input type='radio' name='chek' value='c2'>"; $d2_input = "<input type='radio' name='chek' value='d2'>";
    $a3_input = "<input type='radio' name='chek' value='a3'>"; $b3_input = "<input type='radio' name='chek' value='b3'>"; $d3_input = "<input type='radio' name='chek' value='d3'>";
    $b4_input = "<input type='radio' name='chek' value='b4'>"; $c4_input = "<input type='radio' name='chek' value='c4'>"; $d4_input = "<input type='radio' name='chek' value='d4'>";

    }


    if (isset($_POST['x5'])){
      $_SESSION[$_POST["chek"]] = 5;
      $_SESSION["x5_subimit_on"] = true;
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
      if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
      if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
      if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
      if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
      if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
      if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
      if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

      if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1' checked>";}
      if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

      $b1_input = "<input type='radio' name='chek' value='b1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']==0 )
      {$b1_input = "<input type='radio' name='chek' value='b1' checked>";}
      if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

      $c1_input = "<input type='radio' name='chek' value='c1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']==0 )
      {$c1_input = "<input type='radio' name='chek' value='c1' checked>";}
      if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

      $a2_input = "<input type='radio' name='chek' value='a2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']==0 )
      {$a2_input = "<input type='radio' name='chek' value='a2' checked>";}
      if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

      $c2_input = "<input type='radio' name='chek' value='c2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']==0  )
      {$c2_input = "<input type='radio' name='chek' value='c2' checked>";}
      if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

      $d2_input = "<input type='radio' name='chek' value='d2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']==0 )
      {$d2_input = "<input type='radio' name='chek' value='d2' checked>";}
      if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

      $a3_input = "<input type='radio' name='chek' value='a3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']==0 )
      {$a3_input = "<input type='radio' name='chek' value='a3' checked>";}
      if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

      $b3_input = "<input type='radio' name='chek' value='b3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']==0 )
      {$b3_input = "<input type='radio' name='chek' value='b3' checked>";}
      if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

      $d3_input = "<input type='radio' name='chek' value='d3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']==0 )
      {$d3_input = "<input type='radio' name='chek' value='d3' checked>";}
      if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

      $b4_input = "<input type='radio' name='chek' value='b4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']==0 )
      {$b4_input = "<input type='radio' name='chek' value='b4' checked>";}
      if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

      $c4_input = "<input type='radio' name='chek' value='c4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']==0 )
      {$c4_input = "<input type='radio' name='chek' value='c4' checked>";}
      if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

      $d4_input = "<input type='radio' name='chek' value='d4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']!=0 && $_SESSION['d4']==0 )
      {$d4_input = "<input type='radio' name='chek' value='d4' checked>";}
      if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['x6'])){
      $_SESSION[$_POST["chek"]] = 6;
      $_SESSION["x6_subimit_on"] = true;
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
      if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
      if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
      if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
      if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
      if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
      if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
      if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

      if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1' checked>";}
      if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

      $b1_input = "<input type='radio' name='chek' value='b1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']==0 )
      {$b1_input = "<input type='radio' name='chek' value='b1' checked>";}
      if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

      $c1_input = "<input type='radio' name='chek' value='c1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']==0 )
      {$c1_input = "<input type='radio' name='chek' value='c1' checked>";}
      if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

      $a2_input = "<input type='radio' name='chek' value='a2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']==0 )
      {$a2_input = "<input type='radio' name='chek' value='a2' checked>";}
      if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

      $c2_input = "<input type='radio' name='chek' value='c2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']==0  )
      {$c2_input = "<input type='radio' name='chek' value='c2' checked>";}
      if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

      $d2_input = "<input type='radio' name='chek' value='d2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']==0 )
      {$d2_input = "<input type='radio' name='chek' value='d2' checked>";}
      if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

      $a3_input = "<input type='radio' name='chek' value='a3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']==0 )
      {$a3_input = "<input type='radio' name='chek' value='a3' checked>";}
      if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

      $b3_input = "<input type='radio' name='chek' value='b3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']==0 )
      {$b3_input = "<input type='radio' name='chek' value='b3' checked>";}
      if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

      $d3_input = "<input type='radio' name='chek' value='d3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']==0 )
      {$d3_input = "<input type='radio' name='chek' value='d3' checked>";}
      if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

      $b4_input = "<input type='radio' name='chek' value='b4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']==0 )
      {$b4_input = "<input type='radio' name='chek' value='b4' checked>";}
      if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

      $c4_input = "<input type='radio' name='chek' value='c4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']==0 )
      {$c4_input = "<input type='radio' name='chek' value='c4' checked>";}
      if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

      $d4_input = "<input type='radio' name='chek' value='d4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']!=0 && $_SESSION['d4']==0 )
      {$d4_input = "<input type='radio' name='chek' value='d4' checked>";}
      if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['x7'])){
      $_SESSION[$_POST["chek"]] = 7;
      $_SESSION["x7_subimit_on"] = 1;
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
      if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
      if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
      if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
      if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
      if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
      if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
      if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

      if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1' checked>";}
      if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

      $b1_input = "<input type='radio' name='chek' value='b1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']==0 )
      {$b1_input = "<input type='radio' name='chek' value='b1' checked>";}
      if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

      $c1_input = "<input type='radio' name='chek' value='c1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']==0 )
      {$c1_input = "<input type='radio' name='chek' value='c1' checked>";}
      if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

      $a2_input = "<input type='radio' name='chek' value='a2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']==0 )
      {$a2_input = "<input type='radio' name='chek' value='a2' checked>";}
      if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

      $c2_input = "<input type='radio' name='chek' value='c2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']==0  )
      {$c2_input = "<input type='radio' name='chek' value='c2' checked>";}
      if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

      $d2_input = "<input type='radio' name='chek' value='d2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']==0 )
      {$d2_input = "<input type='radio' name='chek' value='d2' checked>";}
      if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

      $a3_input = "<input type='radio' name='chek' value='a3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']==0 )
      {$a3_input = "<input type='radio' name='chek' value='a3' checked>";}
      if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

      $b3_input = "<input type='radio' name='chek' value='b3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']==0 )
      {$b3_input = "<input type='radio' name='chek' value='b3' checked>";}
      if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

      $d3_input = "<input type='radio' name='chek' value='d3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']==0 )
      {$d3_input = "<input type='radio' name='chek' value='d3' checked>";}
      if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

      $b4_input = "<input type='radio' name='chek' value='b4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']==0 )
      {$b4_input = "<input type='radio' name='chek' value='b4' checked>";}
      if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

      $c4_input = "<input type='radio' name='chek' value='c4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']==0 )
      {$c4_input = "<input type='radio' name='chek' value='c4' checked>";}
      if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

      $d4_input = "<input type='radio' name='chek' value='d4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']!=0 && $_SESSION['d4']==0 )
      {$d4_input = "<input type='radio' name='chek' value='d4' checked>";}
      if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['x8'])){
      $_SESSION[$_POST["chek"]] = 8;
      $_SESSION["x8_subimit_on"] = 1;
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
      if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
      if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
      if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
      if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
      if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
      if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
      if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

      if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1' checked>";}
      if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

      $b1_input = "<input type='radio' name='chek' value='b1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']==0 )
      {$b1_input = "<input type='radio' name='chek' value='b1' checked>";}
      if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

      $c1_input = "<input type='radio' name='chek' value='c1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']==0 )
      {$c1_input = "<input type='radio' name='chek' value='c1' checked>";}
      if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

      $a2_input = "<input type='radio' name='chek' value='a2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']==0 )
      {$a2_input = "<input type='radio' name='chek' value='a2' checked>";}
      if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

      $c2_input = "<input type='radio' name='chek' value='c2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']==0  )
      {$c2_input = "<input type='radio' name='chek' value='c2' checked>";}
      if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

      $d2_input = "<input type='radio' name='chek' value='d2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']==0 )
      {$d2_input = "<input type='radio' name='chek' value='d2' checked>";}
      if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

      $a3_input = "<input type='radio' name='chek' value='a3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']==0 )
      {$a3_input = "<input type='radio' name='chek' value='a3' checked>";}
      if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

      $b3_input = "<input type='radio' name='chek' value='b3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']==0 )
      {$b3_input = "<input type='radio' name='chek' value='b3' checked>";}
      if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

      $d3_input = "<input type='radio' name='chek' value='d3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']==0 )
      {$d3_input = "<input type='radio' name='chek' value='d3' checked>";}
      if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

      $b4_input = "<input type='radio' name='chek' value='b4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']==0 )
      {$b4_input = "<input type='radio' name='chek' value='b4' checked>";}
      if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

      $c4_input = "<input type='radio' name='chek' value='c4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']==0 )
      {$c4_input = "<input type='radio' name='chek' value='c4' checked>";}
      if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

      $d4_input = "<input type='radio' name='chek' value='d4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']!=0 && $_SESSION['d4']==0 )
      {$d4_input = "<input type='radio' name='chek' value='d4' checked>";}
      if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['x9'])){
      $_SESSION[$_POST["chek"]] = 9;
      $_SESSION["x9_subimit_on"] = 1;
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
      if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
      if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
      if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
      if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
      if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
      if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
      if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

      if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1' checked>";}
      if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

      $b1_input = "<input type='radio' name='chek' value='b1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']==0 )
      {$b1_input = "<input type='radio' name='chek' value='b1' checked>";}
      if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

      $c1_input = "<input type='radio' name='chek' value='c1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']==0 )
      {$c1_input = "<input type='radio' name='chek' value='c1' checked>";}
      if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

      $a2_input = "<input type='radio' name='chek' value='a2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']==0 )
      {$a2_input = "<input type='radio' name='chek' value='a2' checked>";}
      if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

      $c2_input = "<input type='radio' name='chek' value='c2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']==0  )
      {$c2_input = "<input type='radio' name='chek' value='c2' checked>";}
      if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

      $d2_input = "<input type='radio' name='chek' value='d2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']==0 )
      {$d2_input = "<input type='radio' name='chek' value='d2' checked>";}
      if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

      $a3_input = "<input type='radio' name='chek' value='a3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']==0 )
      {$a3_input = "<input type='radio' name='chek' value='a3' checked>";}
      if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

      $b3_input = "<input type='radio' name='chek' value='b3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']==0 )
      {$b3_input = "<input type='radio' name='chek' value='b3' checked>";}
      if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

      $d3_input = "<input type='radio' name='chek' value='d3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']==0 )
      {$d3_input = "<input type='radio' name='chek' value='d3' checked>";}
      if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

      $b4_input = "<input type='radio' name='chek' value='b4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']==0 )
      {$b4_input = "<input type='radio' name='chek' value='b4' checked>";}
      if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

      $c4_input = "<input type='radio' name='chek' value='c4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']==0 )
      {$c4_input = "<input type='radio' name='chek' value='c4' checked>";}
      if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

      $d4_input = "<input type='radio' name='chek' value='d4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']!=0 && $_SESSION['d4']==0 )
      {$d4_input = "<input type='radio' name='chek' value='d4' checked>";}
      if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['x10'])){
      $_SESSION[$_POST["chek"]] = 10;
      $_SESSION["x10_subimit_on"] = 1;
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
      if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
      if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
      if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
      if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
      if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
      if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
      if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

      if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1' checked>";}
      if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

      $b1_input = "<input type='radio' name='chek' value='b1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']==0 )
      {$b1_input = "<input type='radio' name='chek' value='b1' checked>";}
      if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

      $c1_input = "<input type='radio' name='chek' value='c1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']==0 )
      {$c1_input = "<input type='radio' name='chek' value='c1' checked>";}
      if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

      $a2_input = "<input type='radio' name='chek' value='a2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']==0 )
      {$a2_input = "<input type='radio' name='chek' value='a2' checked>";}
      if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

      $c2_input = "<input type='radio' name='chek' value='c2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']==0  )
      {$c2_input = "<input type='radio' name='chek' value='c2' checked>";}
      if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

      $d2_input = "<input type='radio' name='chek' value='d2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']==0 )
      {$d2_input = "<input type='radio' name='chek' value='d2' checked>";}
      if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

      $a3_input = "<input type='radio' name='chek' value='a3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']==0 )
      {$a3_input = "<input type='radio' name='chek' value='a3' checked>";}
      if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

      $b3_input = "<input type='radio' name='chek' value='b3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']==0 )
      {$b3_input = "<input type='radio' name='chek' value='b3' checked>";}
      if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

      $d3_input = "<input type='radio' name='chek' value='d3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']==0 )
      {$d3_input = "<input type='radio' name='chek' value='d3' checked>";}
      if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

      $b4_input = "<input type='radio' name='chek' value='b4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']==0 )
      {$b4_input = "<input type='radio' name='chek' value='b4' checked>";}
      if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

      $c4_input = "<input type='radio' name='chek' value='c4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']==0 )
      {$c4_input = "<input type='radio' name='chek' value='c4' checked>";}
      if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

      $d4_input = "<input type='radio' name='chek' value='d4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']!=0 && $_SESSION['d4']==0 )
      {$d4_input = "<input type='radio' name='chek' value='d4' checked>";}
      if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['x11'])){
      $_SESSION[$_POST["chek"]] = 11;
      $_SESSION["x11_subimit_on"] = 1;
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
      if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
      if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
      if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
      if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
      if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
      if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
      if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

      if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1' checked>";}
      if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

      $b1_input = "<input type='radio' name='chek' value='b1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']==0 )
      {$b1_input = "<input type='radio' name='chek' value='b1' checked>";}
      if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

      $c1_input = "<input type='radio' name='chek' value='c1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']==0 )
      {$c1_input = "<input type='radio' name='chek' value='c1' checked>";}
      if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

      $a2_input = "<input type='radio' name='chek' value='a2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']==0 )
      {$a2_input = "<input type='radio' name='chek' value='a2' checked>";}
      if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

      $c2_input = "<input type='radio' name='chek' value='c2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']==0  )
      {$c2_input = "<input type='radio' name='chek' value='c2' checked>";}
      if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

      $d2_input = "<input type='radio' name='chek' value='d2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']==0 )
      {$d2_input = "<input type='radio' name='chek' value='d2' checked>";}
      if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

      $a3_input = "<input type='radio' name='chek' value='a3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']==0 )
      {$a3_input = "<input type='radio' name='chek' value='a3' checked>";}
      if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

      $b3_input = "<input type='radio' name='chek' value='b3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']==0 )
      {$b3_input = "<input type='radio' name='chek' value='b3' checked>";}
      if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

      $d3_input = "<input type='radio' name='chek' value='d3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']==0 )
      {$d3_input = "<input type='radio' name='chek' value='d3' checked>";}
      if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

      $b4_input = "<input type='radio' name='chek' value='b4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']==0 )
      {$b4_input = "<input type='radio' name='chek' value='b4' checked>";}
      if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

      $c4_input = "<input type='radio' name='chek' value='c4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']==0 )
      {$c4_input = "<input type='radio' name='chek' value='c4' checked>";}
      if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

      $d4_input = "<input type='radio' name='chek' value='d4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']!=0 && $_SESSION['d4']==0 )
      {$d4_input = "<input type='radio' name='chek' value='d4' checked>";}
      if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['x12'])){
      $_SESSION[$_POST["chek"]] = 12;
      $_SESSION["x12_subimit_on"] = 1;
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
      if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
      if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
      if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
      if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
      if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
      if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
      if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

      if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1' checked>";}
      if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

      $b1_input = "<input type='radio' name='chek' value='b1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']==0 )
      {$b1_input = "<input type='radio' name='chek' value='b1' checked>";}
      if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

      $c1_input = "<input type='radio' name='chek' value='c1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']==0 )
      {$c1_input = "<input type='radio' name='chek' value='c1' checked>";}
      if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

      $a2_input = "<input type='radio' name='chek' value='a2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']==0 )
      {$a2_input = "<input type='radio' name='chek' value='a2' checked>";}
      if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

      $c2_input = "<input type='radio' name='chek' value='c2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']==0  )
      {$c2_input = "<input type='radio' name='chek' value='c2' checked>";}
      if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

      $d2_input = "<input type='radio' name='chek' value='d2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']==0 )
      {$d2_input = "<input type='radio' name='chek' value='d2' checked>";}
      if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

      $a3_input = "<input type='radio' name='chek' value='a3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']==0 )
      {$a3_input = "<input type='radio' name='chek' value='a3' checked>";}
      if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

      $b3_input = "<input type='radio' name='chek' value='b3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']==0 )
      {$b3_input = "<input type='radio' name='chek' value='b3' checked>";}
      if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

      $d3_input = "<input type='radio' name='chek' value='d3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']==0 )
      {$d3_input = "<input type='radio' name='chek' value='d3' checked>";}
      if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

      $b4_input = "<input type='radio' name='chek' value='b4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']==0 )
      {$b4_input = "<input type='radio' name='chek' value='b4' checked>";}
      if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

      $c4_input = "<input type='radio' name='chek' value='c4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']==0 )
      {$c4_input = "<input type='radio' name='chek' value='c4' checked>";}
      if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

      $d4_input = "<input type='radio' name='chek' value='d4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']!=0 && $_SESSION['d4']==0 )
      {$d4_input = "<input type='radio' name='chek' value='d4' checked>";}
      if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['x13'])){
      $_SESSION[$_POST["chek"]] = 13;
      $_SESSION["x13_subimit_on"] = 1;
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
      if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
      if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
      if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
      if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
      if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
      if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
      if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

      if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1' checked>";}
      if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

      $b1_input = "<input type='radio' name='chek' value='b1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']==0 )
      {$b1_input = "<input type='radio' name='chek' value='b1' checked>";}
      if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

      $c1_input = "<input type='radio' name='chek' value='c1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']==0 )
      {$c1_input = "<input type='radio' name='chek' value='c1' checked>";}
      if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

      $a2_input = "<input type='radio' name='chek' value='a2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']==0 )
      {$a2_input = "<input type='radio' name='chek' value='a2' checked>";}
      if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

      $c2_input = "<input type='radio' name='chek' value='c2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']==0  )
      {$c2_input = "<input type='radio' name='chek' value='c2' checked>";}
      if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

      $d2_input = "<input type='radio' name='chek' value='d2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']==0 )
      {$d2_input = "<input type='radio' name='chek' value='d2' checked>";}
      if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

      $a3_input = "<input type='radio' name='chek' value='a3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']==0 )
      {$a3_input = "<input type='radio' name='chek' value='a3' checked>";}
      if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

      $b3_input = "<input type='radio' name='chek' value='b3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']==0 )
      {$b3_input = "<input type='radio' name='chek' value='b3' checked>";}
      if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

      $d3_input = "<input type='radio' name='chek' value='d3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']==0 )
      {$d3_input = "<input type='radio' name='chek' value='d3' checked>";}
      if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

      $b4_input = "<input type='radio' name='chek' value='b4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']==0 )
      {$b4_input = "<input type='radio' name='chek' value='b4' checked>";}
      if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

      $c4_input = "<input type='radio' name='chek' value='c4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']==0 )
      {$c4_input = "<input type='radio' name='chek' value='c4' checked>";}
      if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

      $d4_input = "<input type='radio' name='chek' value='d4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']!=0 && $_SESSION['d4']==0 )
      {$d4_input = "<input type='radio' name='chek' value='d4' checked>";}
      if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['x14'])){
      $_SESSION[$_POST["chek"]] = 14;
      $_SESSION["x14_subimit_on"] = 1;
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
      if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
      if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
      if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
      if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
      if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
      if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
      if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

      if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1' checked>";}
      if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

      $b1_input = "<input type='radio' name='chek' value='b1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']==0 )
      {$b1_input = "<input type='radio' name='chek' value='b1' checked>";}
      if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

      $c1_input = "<input type='radio' name='chek' value='c1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']==0 )
      {$c1_input = "<input type='radio' name='chek' value='c1' checked>";}
      if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

      $a2_input = "<input type='radio' name='chek' value='a2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']==0 )
      {$a2_input = "<input type='radio' name='chek' value='a2' checked>";}
      if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

      $c2_input = "<input type='radio' name='chek' value='c2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']==0  )
      {$c2_input = "<input type='radio' name='chek' value='c2' checked>";}
      if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

      $d2_input = "<input type='radio' name='chek' value='d2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']==0 )
      {$d2_input = "<input type='radio' name='chek' value='d2' checked>";}
      if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

      $a3_input = "<input type='radio' name='chek' value='a3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']==0 )
      {$a3_input = "<input type='radio' name='chek' value='a3' checked>";}
      if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

      $b3_input = "<input type='radio' name='chek' value='b3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']==0 )
      {$b3_input = "<input type='radio' name='chek' value='b3' checked>";}
      if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

      $d3_input = "<input type='radio' name='chek' value='d3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']==0 )
      {$d3_input = "<input type='radio' name='chek' value='d3' checked>";}
      if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

      $b4_input = "<input type='radio' name='chek' value='b4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']==0 )
      {$b4_input = "<input type='radio' name='chek' value='b4' checked>";}
      if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

      $c4_input = "<input type='radio' name='chek' value='c4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']==0 )
      {$c4_input = "<input type='radio' name='chek' value='c4' checked>";}
      if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

      $d4_input = "<input type='radio' name='chek' value='d4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']!=0 && $_SESSION['d4']==0 )
      {$d4_input = "<input type='radio' name='chek' value='d4' checked>";}
      if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['x15'])){
      $_SESSION[$_POST["chek"]] = 15;
      $_SESSION["x15_subimit_on"] = 1;
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
      if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
      if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
      if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
      if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
      if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
      if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
      if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

      if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1' checked>";}
      if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

      $b1_input = "<input type='radio' name='chek' value='b1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']==0 )
      {$b1_input = "<input type='radio' name='chek' value='b1' checked>";}
      if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

      $c1_input = "<input type='radio' name='chek' value='c1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']==0 )
      {$c1_input = "<input type='radio' name='chek' value='c1' checked>";}
      if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

      $a2_input = "<input type='radio' name='chek' value='a2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']==0 )
      {$a2_input = "<input type='radio' name='chek' value='a2' checked>";}
      if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

      $c2_input = "<input type='radio' name='chek' value='c2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']==0  )
      {$c2_input = "<input type='radio' name='chek' value='c2' checked>";}
      if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

      $d2_input = "<input type='radio' name='chek' value='d2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']==0 )
      {$d2_input = "<input type='radio' name='chek' value='d2' checked>";}
      if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

      $a3_input = "<input type='radio' name='chek' value='a3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']==0 )
      {$a3_input = "<input type='radio' name='chek' value='a3' checked>";}
      if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

      $b3_input = "<input type='radio' name='chek' value='b3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']==0 )
      {$b3_input = "<input type='radio' name='chek' value='b3' checked>";}
      if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

      $d3_input = "<input type='radio' name='chek' value='d3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']==0 )
      {$d3_input = "<input type='radio' name='chek' value='d3' checked>";}
      if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

      $b4_input = "<input type='radio' name='chek' value='b4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']==0 )
      {$b4_input = "<input type='radio' name='chek' value='b4' checked>";}
      if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

      $c4_input = "<input type='radio' name='chek' value='c4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']==0 )
      {$c4_input = "<input type='radio' name='chek' value='c4' checked>";}
      if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

      $d4_input = "<input type='radio' name='chek' value='d4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']!=0 && $_SESSION['d4']==0 )
      {$d4_input = "<input type='radio' name='chek' value='d4' checked>";}
      if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['x16'])){
      $_SESSION[$_POST["chek"]] = 16;
      $_SESSION["x16_subimit_on"] = 1;
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
      if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
      if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
      if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
      if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
      if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
      if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
      if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

      if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1' checked>";}
      if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

      $b1_input = "<input type='radio' name='chek' value='b1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']==0 )
      {$b1_input = "<input type='radio' name='chek' value='b1' checked>";}
      if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

      $c1_input = "<input type='radio' name='chek' value='c1'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']==0 )
      {$c1_input = "<input type='radio' name='chek' value='c1' checked>";}
      if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

      $a2_input = "<input type='radio' name='chek' value='a2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']==0 )
      {$a2_input = "<input type='radio' name='chek' value='a2' checked>";}
      if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

      $c2_input = "<input type='radio' name='chek' value='c2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']==0  )
      {$c2_input = "<input type='radio' name='chek' value='c2' checked>";}
      if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

      $d2_input = "<input type='radio' name='chek' value='d2'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']==0 )
      {$d2_input = "<input type='radio' name='chek' value='d2' checked>";}
      if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

      $a3_input = "<input type='radio' name='chek' value='a3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']==0 )
      {$a3_input = "<input type='radio' name='chek' value='a3' checked>";}
      if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

      $b3_input = "<input type='radio' name='chek' value='b3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']==0 )
      {$b3_input = "<input type='radio' name='chek' value='b3' checked>";}
      if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

      $d3_input = "<input type='radio' name='chek' value='d3'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']==0 )
      {$d3_input = "<input type='radio' name='chek' value='d3' checked>";}
      if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

      $b4_input = "<input type='radio' name='chek' value='b4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']==0 )
      {$b4_input = "<input type='radio' name='chek' value='b4' checked>";}
      if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

      $c4_input = "<input type='radio' name='chek' value='c4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']==0 )
      {$c4_input = "<input type='radio' name='chek' value='c4' checked>";}
      if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

      $d4_input = "<input type='radio' name='chek' value='d4'>";
      if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
      && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']!=0 && $_SESSION['d4']==0 )
      {$d4_input = "<input type='radio' name='chek' value='d4' checked>";}
      if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }



    // $_SESSION['a1'] = 0;      $_SESSION['a2'] = 0;      $_SESSION['a3'] = 0;      $_SESSION['a4'] = 1;
    // $_SESSION['b1'] = 0;      $_SESSION['b2'] = 3;      $_SESSION['b3'] = 0;      $_SESSION['b4'] = 0;
    // $_SESSION['c1'] = 0;      $_SESSION['c2'] = 0;      $_SESSION['c3'] = 2;      $_SESSION['c4'] = 0;
    // $_SESSION['d1'] = 4;      $_SESSION['d2'] = 0;      $_SESSION['d3'] = 0;      $_SESSION['d4'] = 0;

    // echo 'a1 ='. $_SESSION['a1'].'<br/>';     echo 'b1 ='. $_SESSION['b1'].'<br/>';     echo 'c1 ='. $_SESSION['c1'].'<br/>';
    // echo 'a2 ='. $_SESSION['a2'].'<br/>';     echo 'c2 ='. $_SESSION['c2'].'<br/>';     echo 'd2 ='. $_SESSION['d2'].'<br/>';
    // echo 'a3 ='. $_SESSION['a3'].'<br/>';     echo 'b3 ='. $_SESSION['b3'].'<br/>';     echo 'd3 ='. $_SESSION['d3'].'<br/>';
    // echo 'b4 ='. $_SESSION['b4'].'<br/>';     echo 'c4 ='. $_SESSION['c4'].'<br/>';     echo 'd4 ='. $_SESSION['d4'].'<br/>';

    if (isset($_POST['a1_valor'])){
    if($_SESSION['a1'] == 5){$_SESSION['x5_subimit_on'] = 0; $_SESSION['a1'] = 0;}
    if($_SESSION['a1'] == 6){$_SESSION['x6_subimit_on'] = 0; $_SESSION['a1'] = 0;}
    if($_SESSION['a1'] == 7){$_SESSION['x7_subimit_on'] = 0; $_SESSION['a1'] = 0;}
    if($_SESSION['a1'] == 8){$_SESSION['x8_subimit_on'] = 0; $_SESSION['a1'] = 0;}
    if($_SESSION['a1'] == 9){$_SESSION['x9_subimit_on'] = 0; $_SESSION['a1'] = 0;}
    if($_SESSION['a1'] == 10){$_SESSION['x10_subimit_on'] = 0; $_SESSION['a1'] = 0;}
    if($_SESSION['a1'] == 11){$_SESSION['x11_subimit_on'] = 0; $_SESSION['a1'] = 0;}
    if($_SESSION['a1'] == 12){$_SESSION['x12_subimit_on'] = 0; $_SESSION['a1'] = 0;}
    if($_SESSION['a1'] == 13){$_SESSION['x13_subimit_on'] = 0; $_SESSION['a1'] = 0;}
    if($_SESSION['a1'] == 14){$_SESSION['x14_subimit_on'] = 0; $_SESSION['a1'] = 0;}
    if($_SESSION['a1'] == 15){$_SESSION['x15_subimit_on'] = 0; $_SESSION['a1'] = 0;}
    if($_SESSION['a1'] == 16){$_SESSION['x16_subimit_on'] = 0; $_SESSION['a1'] = 0;}

    if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
    if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
    if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
    if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
    if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
    if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
    if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
    if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
    if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
    if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
    if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

    $a1_input = "<input type='radio' name='chek' value='a1' checked>";

    // if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1'>";}
    // if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

    if($_SESSION['b1']==0){$b1_input = "<input type='radio' name='chek' value='b1'>";}
    if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

    if($_SESSION['c1']==0){$c1_input = "<input type='radio' name='chek' value='c1'>";}
    if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

    if($_SESSION['a2']==0){$a2_input = "<input type='radio' name='chek' value='a2'>";}
    if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

    if($_SESSION['c2']==0){$c2_input = "<input type='radio' name='chek' value='c2'>";}
    if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

    if($_SESSION['d2']==0){$d2_input = "<input type='radio' name='chek' value='d2'>";}
    if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

    if($_SESSION['a3']==0){$a3_input = "<input type='radio' name='chek' value='a3'>";}
    if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

    if($_SESSION['b3']==0){$b3_input = "<input type='radio' name='chek' value='b3'>";}
    if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

    if($_SESSION['d3']==0){$d3_input = "<input type='radio' name='chek' value='d3'>";}
    if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

    if($_SESSION['b4']==0){$b4_input = "<input type='radio' name='chek' value='b4'>";}
    if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

    if($_SESSION['c4']==0){$c4_input = "<input type='radio' name='chek' value='c4'>";}
    if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

    if($_SESSION['d4']==0){$d4_input = "<input type='radio' name='chek' value='d4'>";}
    if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['b1_valor'])){
    if($_SESSION['b1'] == 5){$_SESSION['x5_subimit_on'] = 0; $_SESSION['b1'] = 0;}
    if($_SESSION['b1'] == 6){$_SESSION['x6_subimit_on'] = 0; $_SESSION['b1'] = 0;}
    if($_SESSION['b1'] == 7){$_SESSION['x7_subimit_on'] = 0; $_SESSION['b1'] = 0;}
    if($_SESSION['b1'] == 8){$_SESSION['x8_subimit_on'] = 0; $_SESSION['b1'] = 0;}
    if($_SESSION['b1'] == 9){$_SESSION['x9_subimit_on'] = 0; $_SESSION['b1'] = 0;}
    if($_SESSION['b1'] == 10){$_SESSION['x10_subimit_on'] = 0; $_SESSION['b1'] = 0;}
    if($_SESSION['b1'] == 11){$_SESSION['x11_subimit_on'] = 0; $_SESSION['b1'] = 0;}
    if($_SESSION['b1'] == 12){$_SESSION['x12_subimit_on'] = 0; $_SESSION['b1'] = 0;}
    if($_SESSION['b1'] == 13){$_SESSION['x13_subimit_on'] = 0; $_SESSION['b1'] = 0;}
    if($_SESSION['b1'] == 14){$_SESSION['x14_subimit_on'] = 0; $_SESSION['b1'] = 0;}
    if($_SESSION['b1'] == 15){$_SESSION['x15_subimit_on'] = 0; $_SESSION['b1'] = 0;}
    if($_SESSION['b1'] == 16){$_SESSION['x16_subimit_on'] = 0; $_SESSION['b1'] = 0;}

    if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
    if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
    if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
    if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
    if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
    if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
    if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
    if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
    if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
    if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
    if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

    $b1_input = "<input type='radio' name='chek' value='b1' checked>";

    if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1'>";}
    if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

    // if($_SESSION['b1']==0){$b1_input = "<input type='radio' name='chek' value='b1'>";}
    // if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

    if($_SESSION['c1']==0){$c1_input = "<input type='radio' name='chek' value='c1'>";}
    if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

    if($_SESSION['a2']==0){$a2_input = "<input type='radio' name='chek' value='a2'>";}
    if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

    if($_SESSION['c2']==0){$c2_input = "<input type='radio' name='chek' value='c2'>";}
    if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

    if($_SESSION['d2']==0){$d2_input = "<input type='radio' name='chek' value='d2'>";}
    if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

    if($_SESSION['a3']==0){$a3_input = "<input type='radio' name='chek' value='a3'>";}
    if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

    if($_SESSION['b3']==0){$b3_input = "<input type='radio' name='chek' value='b3'>";}
    if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

    if($_SESSION['d3']==0){$d3_input = "<input type='radio' name='chek' value='d3'>";}
    if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

    if($_SESSION['b4']==0){$b4_input = "<input type='radio' name='chek' value='b4'>";}
    if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

    if($_SESSION['c4']==0){$c4_input = "<input type='radio' name='chek' value='c4'>";}
    if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

    if($_SESSION['d4']==0){$d4_input = "<input type='radio' name='chek' value='d4'>";}
    if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['c1_valor'])){
    if($_SESSION['c1'] == 5){$_SESSION['x5_subimit_on'] = 0; $_SESSION['c1'] = 0;}
    if($_SESSION['c1'] == 6){$_SESSION['x6_subimit_on'] = 0; $_SESSION['c1'] = 0;}
    if($_SESSION['c1'] == 7){$_SESSION['x7_subimit_on'] = 0; $_SESSION['c1'] = 0;}
    if($_SESSION['c1'] == 8){$_SESSION['x8_subimit_on'] = 0; $_SESSION['c1'] = 0;}
    if($_SESSION['c1'] == 9){$_SESSION['x9_subimit_on'] = 0; $_SESSION['c1'] = 0;}
    if($_SESSION['c1'] == 10){$_SESSION['x10_subimit_on'] = 0; $_SESSION['c1'] = 0;}
    if($_SESSION['c1'] == 11){$_SESSION['x11_subimit_on'] = 0; $_SESSION['c1'] = 0;}
    if($_SESSION['c1'] == 12){$_SESSION['x12_subimit_on'] = 0; $_SESSION['c1'] = 0;}
    if($_SESSION['c1'] == 13){$_SESSION['x13_subimit_on'] = 0; $_SESSION['c1'] = 0;}
    if($_SESSION['c1'] == 14){$_SESSION['x14_subimit_on'] = 0; $_SESSION['c1'] = 0;}
    if($_SESSION['c1'] == 15){$_SESSION['x15_subimit_on'] = 0; $_SESSION['c1'] = 0;}
    if($_SESSION['c1'] == 16){$_SESSION['x16_subimit_on'] = 0; $_SESSION['c1'] = 0;}

    if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
    if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
    if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
    if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
    if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
    if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
    if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
    if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
    if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
    if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
    if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

    $c1_input = "<input type='radio' name='chek' value='c1' checked>";

    if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1'>";}
    if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

    if($_SESSION['b1']==0){$b1_input = "<input type='radio' name='chek' value='b1'>";}
    if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

    // if($_SESSION['c1']==0){$c1_input = "<input type='radio' name='chek' value='c1'>";}
    // if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

    if($_SESSION['a2']==0){$a2_input = "<input type='radio' name='chek' value='a2'>";}
    if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

    if($_SESSION['c2']==0){$c2_input = "<input type='radio' name='chek' value='c2'>";}
    if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

    if($_SESSION['d2']==0){$d2_input = "<input type='radio' name='chek' value='d2'>";}
    if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

    if($_SESSION['a3']==0){$a3_input = "<input type='radio' name='chek' value='a3'>";}
    if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

    if($_SESSION['b3']==0){$b3_input = "<input type='radio' name='chek' value='b3'>";}
    if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

    if($_SESSION['d3']==0){$d3_input = "<input type='radio' name='chek' value='d3'>";}
    if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

    if($_SESSION['b4']==0){$b4_input = "<input type='radio' name='chek' value='b4'>";}
    if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

    if($_SESSION['c4']==0){$c4_input = "<input type='radio' name='chek' value='c4'>";}
    if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

    if($_SESSION['d4']==0){$d4_input = "<input type='radio' name='chek' value='d4'>";}
    if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['a2_valor'])){
    if($_SESSION['a2'] == 5){$_SESSION['x5_subimit_on'] = 0; $_SESSION['a2'] = 0;}
    if($_SESSION['a2'] == 6){$_SESSION['x6_subimit_on'] = 0; $_SESSION['a2'] = 0;}
    if($_SESSION['a2'] == 7){$_SESSION['x7_subimit_on'] = 0; $_SESSION['a2'] = 0;}
    if($_SESSION['a2'] == 8){$_SESSION['x8_subimit_on'] = 0; $_SESSION['a2'] = 0;}
    if($_SESSION['a2'] == 9){$_SESSION['x9_subimit_on'] = 0; $_SESSION['a2'] = 0;}
    if($_SESSION['a2'] == 10){$_SESSION['x10_subimit_on'] = 0; $_SESSION['a2'] = 0;}
    if($_SESSION['a2'] == 11){$_SESSION['x11_subimit_on'] = 0; $_SESSION['a2'] = 0;}
    if($_SESSION['a2'] == 12){$_SESSION['x12_subimit_on'] = 0; $_SESSION['a2'] = 0;}
    if($_SESSION['a2'] == 13){$_SESSION['x13_subimit_on'] = 0; $_SESSION['a2'] = 0;}
    if($_SESSION['a2'] == 14){$_SESSION['x14_subimit_on'] = 0; $_SESSION['a2'] = 0;}
    if($_SESSION['a2'] == 15){$_SESSION['x15_subimit_on'] = 0; $_SESSION['a2'] = 0;}
    if($_SESSION['a2'] == 16){$_SESSION['x16_subimit_on'] = 0; $_SESSION['a2'] = 0;}

    if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
    if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
    if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
    if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
    if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
    if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
    if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
    if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
    if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
    if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
    if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

    $a2_input = "<input type='radio' name='chek' value='a2' checked>";

    if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1'>";}
    if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

    if($_SESSION['b1']==0){$b1_input = "<input type='radio' name='chek' value='b1'>";}
    if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

    if($_SESSION['c1']==0){$c1_input = "<input type='radio' name='chek' value='c1'>";}
    if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

    // if($_SESSION['a2']==0){$a2_input = "<input type='radio' name='chek' value='a2'>";}
    // if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

    if($_SESSION['c2']==0){$c2_input = "<input type='radio' name='chek' value='c2'>";}
    if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

    if($_SESSION['d2']==0){$d2_input = "<input type='radio' name='chek' value='d2'>";}
    if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

    if($_SESSION['a3']==0){$a3_input = "<input type='radio' name='chek' value='a3'>";}
    if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

    if($_SESSION['b3']==0){$b3_input = "<input type='radio' name='chek' value='b3'>";}
    if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

    if($_SESSION['d3']==0){$d3_input = "<input type='radio' name='chek' value='d3'>";}
    if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

    if($_SESSION['b4']==0){$b4_input = "<input type='radio' name='chek' value='b4'>";}
    if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

    if($_SESSION['c4']==0){$c4_input = "<input type='radio' name='chek' value='c4'>";}
    if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

    if($_SESSION['d4']==0){$d4_input = "<input type='radio' name='chek' value='d4'>";}
    if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['c2_valor'])){
    if($_SESSION['c2'] == 5){$_SESSION['x5_subimit_on'] = 0; $_SESSION['c2'] = 0;}
    if($_SESSION['c2'] == 6){$_SESSION['x6_subimit_on'] = 0; $_SESSION['c2'] = 0;}
    if($_SESSION['c2'] == 7){$_SESSION['x7_subimit_on'] = 0; $_SESSION['c2'] = 0;}
    if($_SESSION['c2'] == 8){$_SESSION['x8_subimit_on'] = 0; $_SESSION['c2'] = 0;}
    if($_SESSION['c2'] == 9){$_SESSION['x9_subimit_on'] = 0; $_SESSION['c2'] = 0;}
    if($_SESSION['c2'] == 10){$_SESSION['x10_subimit_on'] = 0; $_SESSION['c2'] = 0;}
    if($_SESSION['c2'] == 11){$_SESSION['x11_subimit_on'] = 0; $_SESSION['c2'] = 0;}
    if($_SESSION['c2'] == 12){$_SESSION['x12_subimit_on'] = 0; $_SESSION['c2'] = 0;}
    if($_SESSION['c2'] == 13){$_SESSION['x13_subimit_on'] = 0; $_SESSION['c2'] = 0;}
    if($_SESSION['c2'] == 14){$_SESSION['x14_subimit_on'] = 0; $_SESSION['c2'] = 0;}
    if($_SESSION['c2'] == 15){$_SESSION['x15_subimit_on'] = 0; $_SESSION['c2'] = 0;}
    if($_SESSION['c2'] == 16){$_SESSION['x16_subimit_on'] = 0; $_SESSION['c2'] = 0;}

    if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
    if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
    if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
    if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
    if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
    if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
    if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
    if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
    if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
    if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
    if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

    $c2_input = "<input type='radio' name='chek' value='c2' checked>";

    if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1'>";}
    if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

    if($_SESSION['b1']==0){$b1_input = "<input type='radio' name='chek' value='b1'>";}
    if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

    if($_SESSION['c1']==0){$c1_input = "<input type='radio' name='chek' value='c1'>";}
    if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

    if($_SESSION['a2']==0){$a2_input = "<input type='radio' name='chek' value='a2'>";}
    if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

    // if($_SESSION['c2']==0){$c2_input = "<input type='radio' name='chek' value='c2'>";}
    // if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

    if($_SESSION['d2']==0){$d2_input = "<input type='radio' name='chek' value='d2'>";}
    if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

    if($_SESSION['a3']==0){$a3_input = "<input type='radio' name='chek' value='a3'>";}
    if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

    if($_SESSION['b3']==0){$b3_input = "<input type='radio' name='chek' value='b3'>";}
    if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

    if($_SESSION['d3']==0){$d3_input = "<input type='radio' name='chek' value='d3'>";}
    if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

    if($_SESSION['b4']==0){$b4_input = "<input type='radio' name='chek' value='b4'>";}
    if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

    if($_SESSION['c4']==0){$c4_input = "<input type='radio' name='chek' value='c4'>";}
    if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

    if($_SESSION['d4']==0){$d4_input = "<input type='radio' name='chek' value='d4'>";}
    if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['d2_valor'])){
    if($_SESSION['d2'] == 5){$_SESSION['x5_subimit_on'] = 0; $_SESSION['d2'] = 0;}
    if($_SESSION['d2'] == 6){$_SESSION['x6_subimit_on'] = 0; $_SESSION['d2'] = 0;}
    if($_SESSION['d2'] == 7){$_SESSION['x7_subimit_on'] = 0; $_SESSION['d2'] = 0;}
    if($_SESSION['d2'] == 8){$_SESSION['x8_subimit_on'] = 0; $_SESSION['d2'] = 0;}
    if($_SESSION['d2'] == 9){$_SESSION['x9_subimit_on'] = 0; $_SESSION['d2'] = 0;}
    if($_SESSION['d2'] == 10){$_SESSION['x10_subimit_on'] = 0; $_SESSION['d2'] = 0;}
    if($_SESSION['d2'] == 11){$_SESSION['x11_subimit_on'] = 0; $_SESSION['d2'] = 0;}
    if($_SESSION['d2'] == 12){$_SESSION['x12_subimit_on'] = 0; $_SESSION['d2'] = 0;}
    if($_SESSION['d2'] == 13){$_SESSION['x13_subimit_on'] = 0; $_SESSION['d2'] = 0;}
    if($_SESSION['d2'] == 14){$_SESSION['x14_subimit_on'] = 0; $_SESSION['d2'] = 0;}
    if($_SESSION['d2'] == 15){$_SESSION['x15_subimit_on'] = 0; $_SESSION['d2'] = 0;}
    if($_SESSION['d2'] == 16){$_SESSION['x16_subimit_on'] = 0; $_SESSION['d2'] = 0;}

    if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
    if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
    if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
    if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
    if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
    if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
    if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
    if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
    if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
    if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
    if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

    $d2_input = "<input type='radio' name='chek' value='d2' checked>";

    if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1'>";}
    if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

    if($_SESSION['b1']==0){$b1_input = "<input type='radio' name='chek' value='b1'>";}
    if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

    if($_SESSION['c1']==0){$c1_input = "<input type='radio' name='chek' value='c1'>";}
    if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

    if($_SESSION['a2']==0){$a2_input = "<input type='radio' name='chek' value='a2'>";}
    if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

    if($_SESSION['c2']==0){$c2_input = "<input type='radio' name='chek' value='c2'>";}
    if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

    // if($_SESSION['d2']==0){$d2_input = "<input type='radio' name='chek' value='d2'>";}
    // if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

    if($_SESSION['a3']==0){$a3_input = "<input type='radio' name='chek' value='a3'>";}
    if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

    if($_SESSION['b3']==0){$b3_input = "<input type='radio' name='chek' value='b3'>";}
    if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

    if($_SESSION['d3']==0){$d3_input = "<input type='radio' name='chek' value='d3'>";}
    if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

    if($_SESSION['b4']==0){$b4_input = "<input type='radio' name='chek' value='b4'>";}
    if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

    if($_SESSION['c4']==0){$c4_input = "<input type='radio' name='chek' value='c4'>";}
    if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

    if($_SESSION['d4']==0){$d4_input = "<input type='radio' name='chek' value='d4'>";}
    if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['a3_valor'])){
    if($_SESSION['a3'] == 5){$_SESSION['x5_subimit_on'] = 0; $_SESSION['a3'] = 0;}
    if($_SESSION['a3'] == 6){$_SESSION['x6_subimit_on'] = 0; $_SESSION['a3'] = 0;}
    if($_SESSION['a3'] == 7){$_SESSION['x7_subimit_on'] = 0; $_SESSION['a3'] = 0;}
    if($_SESSION['a3'] == 8){$_SESSION['x8_subimit_on'] = 0; $_SESSION['a3'] = 0;}
    if($_SESSION['a3'] == 9){$_SESSION['x9_subimit_on'] = 0; $_SESSION['a3'] = 0;}
    if($_SESSION['a3'] == 10){$_SESSION['x10_subimit_on'] = 0; $_SESSION['a3'] = 0;}
    if($_SESSION['a3'] == 11){$_SESSION['x11_subimit_on'] = 0; $_SESSION['a3'] = 0;}
    if($_SESSION['a3'] == 12){$_SESSION['x12_subimit_on'] = 0; $_SESSION['a3'] = 0;}
    if($_SESSION['a3'] == 13){$_SESSION['x13_subimit_on'] = 0; $_SESSION['a3'] = 0;}
    if($_SESSION['a3'] == 14){$_SESSION['x14_subimit_on'] = 0; $_SESSION['a3'] = 0;}
    if($_SESSION['a3'] == 15){$_SESSION['x15_subimit_on'] = 0; $_SESSION['a3'] = 0;}
    if($_SESSION['a3'] == 16){$_SESSION['x16_subimit_on'] = 0; $_SESSION['a3'] = 0;}

    if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
    if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
    if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
    if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
    if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
    if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
    if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
    if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
    if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
    if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
    if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

    $a3_input = "<input type='radio' name='chek' value='a3' checked>";

    if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1'>";}
    if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

    if($_SESSION['b1']==0){$b1_input = "<input type='radio' name='chek' value='b1'>";}
    if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

    if($_SESSION['c1']==0){$c1_input = "<input type='radio' name='chek' value='c1'>";}
    if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

    if($_SESSION['a2']==0){$a2_input = "<input type='radio' name='chek' value='a2'>";}
    if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

    if($_SESSION['c2']==0){$c2_input = "<input type='radio' name='chek' value='c2'>";}
    if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

    if($_SESSION['d2']==0){$d2_input = "<input type='radio' name='chek' value='d2'>";}
    if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

    // if($_SESSION['a3']==0){$a3_input = "<input type='radio' name='chek' value='a3'>";}
    // if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

    if($_SESSION['b3']==0){$b3_input = "<input type='radio' name='chek' value='b3'>";}
    if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

    if($_SESSION['d3']==0){$d3_input = "<input type='radio' name='chek' value='d3'>";}
    if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

    if($_SESSION['b4']==0){$b4_input = "<input type='radio' name='chek' value='b4'>";}
    if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

    if($_SESSION['c4']==0){$c4_input = "<input type='radio' name='chek' value='c4'>";}
    if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

    if($_SESSION['d4']==0){$d4_input = "<input type='radio' name='chek' value='d4'>";}
    if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['b3_valor'])){
    if($_SESSION['b3'] == 5){$_SESSION['x5_subimit_on'] = 0; $_SESSION['b3'] = 0;}
    if($_SESSION['b3'] == 6){$_SESSION['x6_subimit_on'] = 0; $_SESSION['b3'] = 0;}
    if($_SESSION['b3'] == 7){$_SESSION['x7_subimit_on'] = 0; $_SESSION['b3'] = 0;}
    if($_SESSION['b3'] == 8){$_SESSION['x8_subimit_on'] = 0; $_SESSION['b3'] = 0;}
    if($_SESSION['b3'] == 9){$_SESSION['x9_subimit_on'] = 0; $_SESSION['b3'] = 0;}
    if($_SESSION['b3'] == 10){$_SESSION['x10_subimit_on'] = 0; $_SESSION['b3'] = 0;}
    if($_SESSION['b3'] == 11){$_SESSION['x11_subimit_on'] = 0; $_SESSION['b3'] = 0;}
    if($_SESSION['b3'] == 12){$_SESSION['x12_subimit_on'] = 0; $_SESSION['b3'] = 0;}
    if($_SESSION['b3'] == 13){$_SESSION['x13_subimit_on'] = 0; $_SESSION['b3'] = 0;}
    if($_SESSION['b3'] == 14){$_SESSION['x14_subimit_on'] = 0; $_SESSION['b3'] = 0;}
    if($_SESSION['b3'] == 15){$_SESSION['x15_subimit_on'] = 0; $_SESSION['b3'] = 0;}
    if($_SESSION['b3'] == 16){$_SESSION['x16_subimit_on'] = 0; $_SESSION['b3'] = 0;}

    if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
    if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
    if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
    if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
    if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
    if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
    if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
    if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
    if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
    if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
    if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

    $b3_input = "<input type='radio' name='chek' value='b3' checked>";

    if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1'>";}
    if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

    if($_SESSION['b1']==0){$b1_input = "<input type='radio' name='chek' value='b1'>";}
    if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

    if($_SESSION['c1']==0){$c1_input = "<input type='radio' name='chek' value='c1'>";}
    if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

    if($_SESSION['a2']==0){$a2_input = "<input type='radio' name='chek' value='a2'>";}
    if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

    if($_SESSION['c2']==0){$c2_input = "<input type='radio' name='chek' value='c2'>";}
    if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

    if($_SESSION['d2']==0){$d2_input = "<input type='radio' name='chek' value='d2'>";}
    if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

    if($_SESSION['a3']==0){$a3_input = "<input type='radio' name='chek' value='a3'>";}
    if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

    // if($_SESSION['b3']==0){$b3_input = "<input type='radio' name='chek' value='b3'>";}
    // if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

    if($_SESSION['d3']==0){$d3_input = "<input type='radio' name='chek' value='d3'>";}
    if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

    if($_SESSION['b4']==0){$b4_input = "<input type='radio' name='chek' value='b4'>";}
    if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

    if($_SESSION['c4']==0){$c4_input = "<input type='radio' name='chek' value='c4'>";}
    if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

    if($_SESSION['d4']==0){$d4_input = "<input type='radio' name='chek' value='d4'>";}
    if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['d3_valor'])){
    if($_SESSION['d3'] == 5){$_SESSION['x5_subimit_on'] = 0; $_SESSION['d3'] = 0;}
    if($_SESSION['d3'] == 6){$_SESSION['x6_subimit_on'] = 0; $_SESSION['d3'] = 0;}
    if($_SESSION['d3'] == 7){$_SESSION['x7_subimit_on'] = 0; $_SESSION['d3'] = 0;}
    if($_SESSION['d3'] == 8){$_SESSION['x8_subimit_on'] = 0; $_SESSION['d3'] = 0;}
    if($_SESSION['d3'] == 9){$_SESSION['x9_subimit_on'] = 0; $_SESSION['d3'] = 0;}
    if($_SESSION['d3'] == 10){$_SESSION['x10_subimit_on'] = 0; $_SESSION['d3'] = 0;}
    if($_SESSION['d3'] == 11){$_SESSION['x11_subimit_on'] = 0; $_SESSION['d3'] = 0;}
    if($_SESSION['d3'] == 12){$_SESSION['x12_subimit_on'] = 0; $_SESSION['d3'] = 0;}
    if($_SESSION['d3'] == 13){$_SESSION['x13_subimit_on'] = 0; $_SESSION['d3'] = 0;}
    if($_SESSION['d3'] == 14){$_SESSION['x14_subimit_on'] = 0; $_SESSION['d3'] = 0;}
    if($_SESSION['d3'] == 15){$_SESSION['x15_subimit_on'] = 0; $_SESSION['d3'] = 0;}
    if($_SESSION['d3'] == 16){$_SESSION['x16_subimit_on'] = 0; $_SESSION['d3'] = 0;}

    if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
    if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
    if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
    if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
    if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
    if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
    if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
    if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
    if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
    if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
    if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

    $d3_input = "<input type='radio' name='chek' value='d3' checked>";

    if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1'>";}
    if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

    if($_SESSION['b1']==0){$b1_input = "<input type='radio' name='chek' value='b1'>";}
    if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

    if($_SESSION['c1']==0){$c1_input = "<input type='radio' name='chek' value='c1'>";}
    if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

    if($_SESSION['a2']==0){$a2_input = "<input type='radio' name='chek' value='a2'>";}
    if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

    if($_SESSION['c2']==0){$c2_input = "<input type='radio' name='chek' value='c2'>";}
    if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

    if($_SESSION['d2']==0){$d2_input = "<input type='radio' name='chek' value='d2'>";}
    if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

    if($_SESSION['a3']==0){$a3_input = "<input type='radio' name='chek' value='a3'>";}
    if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

    if($_SESSION['b3']==0){$b3_input = "<input type='radio' name='chek' value='b3'>";}
    if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

    // if($_SESSION['d3']==0){$d3_input = "<input type='radio' name='chek' value='d3'>";}
    // if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

    if($_SESSION['b4']==0){$b4_input = "<input type='radio' name='chek' value='b4'>";}
    if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

    if($_SESSION['c4']==0){$c4_input = "<input type='radio' name='chek' value='c4'>";}
    if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

    if($_SESSION['d4']==0){$d4_input = "<input type='radio' name='chek' value='d4'>";}
    if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['b4_valor'])){
    if($_SESSION['b4'] == 5){$_SESSION['x5_subimit_on'] = 0; $_SESSION['b4'] = 0;}
    if($_SESSION['b4'] == 6){$_SESSION['x6_subimit_on'] = 0; $_SESSION['b4'] = 0;}
    if($_SESSION['b4'] == 7){$_SESSION['x7_subimit_on'] = 0; $_SESSION['b4'] = 0;}
    if($_SESSION['b4'] == 8){$_SESSION['x8_subimit_on'] = 0; $_SESSION['b4'] = 0;}
    if($_SESSION['b4'] == 9){$_SESSION['x9_subimit_on'] = 0; $_SESSION['b4'] = 0;}
    if($_SESSION['b4'] == 10){$_SESSION['x10_subimit_on'] = 0; $_SESSION['b4'] = 0;}
    if($_SESSION['b4'] == 11){$_SESSION['x11_subimit_on'] = 0; $_SESSION['b4'] = 0;}
    if($_SESSION['b4'] == 12){$_SESSION['x12_subimit_on'] = 0; $_SESSION['b4'] = 0;}
    if($_SESSION['b4'] == 13){$_SESSION['x13_subimit_on'] = 0; $_SESSION['b4'] = 0;}
    if($_SESSION['b4'] == 14){$_SESSION['x14_subimit_on'] = 0; $_SESSION['b4'] = 0;}
    if($_SESSION['b4'] == 15){$_SESSION['x15_subimit_on'] = 0; $_SESSION['b4'] = 0;}
    if($_SESSION['b4'] == 16){$_SESSION['x16_subimit_on'] = 0; $_SESSION['b4'] = 0;}

    if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
    if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
    if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
    if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
    if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
    if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
    if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
    if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
    if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
    if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
    if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

    $b4_input = "<input type='radio' name='chek' value='b4' checked>";

    if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1'>";}
    if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

    if($_SESSION['b1']==0){$b1_input = "<input type='radio' name='chek' value='b1'>";}
    if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

    if($_SESSION['c1']==0){$c1_input = "<input type='radio' name='chek' value='c1'>";}
    if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

    if($_SESSION['a2']==0){$a2_input = "<input type='radio' name='chek' value='a2'>";}
    if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

    if($_SESSION['c2']==0){$c2_input = "<input type='radio' name='chek' value='c2'>";}
    if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

    if($_SESSION['d2']==0){$d2_input = "<input type='radio' name='chek' value='d2'>";}
    if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

    if($_SESSION['a3']==0){$a3_input = "<input type='radio' name='chek' value='a3'>";}
    if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

    if($_SESSION['b3']==0){$b3_input = "<input type='radio' name='chek' value='b3'>";}
    if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

    if($_SESSION['d3']==0){$d3_input = "<input type='radio' name='chek' value='d3'>";}
    if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

    // if($_SESSION['b4']==0){$b4_input = "<input type='radio' name='chek' value='b4'>";}
    // if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

    if($_SESSION['c4']==0){$c4_input = "<input type='radio' name='chek' value='c4'>";}
    if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

    if($_SESSION['d4']==0){$d4_input = "<input type='radio' name='chek' value='d4'>";}
    if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['c4_valor'])){
    if($_SESSION['c4'] == 5){$_SESSION['x5_subimit_on'] = 0; $_SESSION['c4'] = 0;}
    if($_SESSION['c4'] == 6){$_SESSION['x6_subimit_on'] = 0; $_SESSION['c4'] = 0;}
    if($_SESSION['c4'] == 7){$_SESSION['x7_subimit_on'] = 0; $_SESSION['c4'] = 0;}
    if($_SESSION['c4'] == 8){$_SESSION['x8_subimit_on'] = 0; $_SESSION['c4'] = 0;}
    if($_SESSION['c4'] == 9){$_SESSION['x9_subimit_on'] = 0; $_SESSION['c4'] = 0;}
    if($_SESSION['c4'] == 10){$_SESSION['x10_subimit_on'] = 0; $_SESSION['c4'] = 0;}
    if($_SESSION['c4'] == 11){$_SESSION['x11_subimit_on'] = 0; $_SESSION['c4'] = 0;}
    if($_SESSION['c4'] == 12){$_SESSION['x12_subimit_on'] = 0; $_SESSION['c4'] = 0;}
    if($_SESSION['c4'] == 13){$_SESSION['x13_subimit_on'] = 0; $_SESSION['c4'] = 0;}
    if($_SESSION['c4'] == 14){$_SESSION['x14_subimit_on'] = 0; $_SESSION['c4'] = 0;}
    if($_SESSION['c4'] == 15){$_SESSION['x15_subimit_on'] = 0; $_SESSION['c4'] = 0;}
    if($_SESSION['c4'] == 16){$_SESSION['x16_subimit_on'] = 0; $_SESSION['c4'] = 0;}

    if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
    if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
    if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
    if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
    if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
    if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
    if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
    if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
    if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
    if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
    if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

    $c4_input = "<input type='radio' name='chek' value='c4' checked>";

    if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1'>";}
    if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

    if($_SESSION['b1']==0){$b1_input = "<input type='radio' name='chek' value='b1'>";}
    if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

    if($_SESSION['c1']==0){$c1_input = "<input type='radio' name='chek' value='c1'>";}
    if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

    if($_SESSION['a2']==0){$a2_input = "<input type='radio' name='chek' value='a2'>";}
    if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

    if($_SESSION['c2']==0){$c2_input = "<input type='radio' name='chek' value='c2'>";}
    if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

    if($_SESSION['d2']==0){$d2_input = "<input type='radio' name='chek' value='d2'>";}
    if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

    if($_SESSION['a3']==0){$a3_input = "<input type='radio' name='chek' value='a3'>";}
    if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

    if($_SESSION['b3']==0){$b3_input = "<input type='radio' name='chek' value='b3'>";}
    if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

    if($_SESSION['d3']==0){$d3_input = "<input type='radio' name='chek' value='d3'>";}
    if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

    if($_SESSION['b4']==0){$b4_input = "<input type='radio' name='chek' value='b4'>";}
    if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

    // if($_SESSION['c4']==0){$c4_input = "<input type='radio' name='chek' value='c4'>";}
    // if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

    if($_SESSION['d4']==0){$d4_input = "<input type='radio' name='chek' value='d4'>";}
    if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}
    }

    if (isset($_POST['d4_valor'])){
    if($_SESSION['d4'] == 5){$_SESSION['x5_subimit_on'] = 0; $_SESSION['d4'] = 0;}
    if($_SESSION['d4'] == 6){$_SESSION['x6_subimit_on'] = 0; $_SESSION['d4'] = 0;}
    if($_SESSION['d4'] == 7){$_SESSION['x7_subimit_on'] = 0; $_SESSION['d4'] = 0;}
    if($_SESSION['d4'] == 8){$_SESSION['x8_subimit_on'] = 0; $_SESSION['d4'] = 0;}
    if($_SESSION['d4'] == 9){$_SESSION['x9_subimit_on'] = 0; $_SESSION['d4'] = 0;}
    if($_SESSION['d4'] == 10){$_SESSION['x10_subimit_on'] = 0; $_SESSION['d4'] = 0;}
    if($_SESSION['d4'] == 11){$_SESSION['x11_subimit_on'] = 0; $_SESSION['d4'] = 0;}
    if($_SESSION['d4'] == 12){$_SESSION['x12_subimit_on'] = 0; $_SESSION['d4'] = 0;}
    if($_SESSION['d4'] == 13){$_SESSION['x13_subimit_on'] = 0; $_SESSION['d4'] = 0;}
    if($_SESSION['d4'] == 14){$_SESSION['x14_subimit_on'] = 0; $_SESSION['d4'] = 0;}
    if($_SESSION['d4'] == 15){$_SESSION['x15_subimit_on'] = 0; $_SESSION['d4'] = 0;}
    if($_SESSION['d4'] == 16){$_SESSION['x16_subimit_on'] = 0; $_SESSION['d4'] = 0;}

    if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
    if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
    if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
    if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
    if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    if($_SESSION["x10_subimit_on"]){$_SESSION["x10_view_abertura"] = "<!--";     $_SESSION["x10_view_fechamento"] = "--> 10";}
    if($_SESSION["x11_subimit_on"]){$_SESSION["x11_view_abertura"] = "<!--";     $_SESSION["x11_view_fechamento"] = "--> 11";}
    if($_SESSION["x12_subimit_on"]){$_SESSION["x12_view_abertura"] = "<!--";     $_SESSION["x12_view_fechamento"] = "--> 12";}
    if($_SESSION["x13_subimit_on"]){$_SESSION["x13_view_abertura"] = "<!--";     $_SESSION["x13_view_fechamento"] = "--> 13";}
    if($_SESSION["x14_subimit_on"]){$_SESSION["x14_view_abertura"] = "<!--";     $_SESSION["x14_view_fechamento"] = "--> 14";}
    if($_SESSION["x15_subimit_on"]){$_SESSION["x15_view_abertura"] = "<!--";     $_SESSION["x15_view_fechamento"] = "--> 15";}
    if($_SESSION["x16_subimit_on"]){$_SESSION["x16_view_abertura"] = "<!--";     $_SESSION["x16_view_fechamento"] = "--> 16";}

    $d4_input = "<input type='radio' name='chek' value='d4' checked>";

    if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1'>";}
    if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}

    if($_SESSION['b1']==0){$b1_input = "<input type='radio' name='chek' value='b1'>";}
    if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}

    if($_SESSION['c1']==0){$c1_input = "<input type='radio' name='chek' value='c1'>";}
    if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}

    if($_SESSION['a2']==0){$a2_input = "<input type='radio' name='chek' value='a2'>";}
    if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}

    if($_SESSION['c2']==0){$c2_input = "<input type='radio' name='chek' value='c2'>";}
    if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}

    if($_SESSION['d2']==0){$d2_input = "<input type='radio' name='chek' value='d2'>";}
    if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}

    if($_SESSION['a3']==0){$a3_input = "<input type='radio' name='chek' value='a3'>";}
    if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}

    if($_SESSION['b3']==0){$b3_input = "<input type='radio' name='chek' value='b3'>";}
    if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}

    if($_SESSION['d3']==0){$d3_input = "<input type='radio' name='chek' value='d3'>";}
    if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}

    if($_SESSION['b4']==0){$b4_input = "<input type='radio' name='chek' value='b4'>";}
    if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}

    if($_SESSION['c4']==0){$c4_input = "<input type='radio' name='chek' value='c4'>";}
    if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}

    // if($_SESSION['d4']==0){$d4_input = "<input type='radio' name='chek' value='d4'>";}
    // if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}


    }



    // if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value='a1' checked>";}
    // if($_SESSION['a1']!=0){$a1_input = "<input type='submit' name='a1_valor' value='".$_SESSION['a1']."'";}
    //
    // $b1_input = "<input type='radio' name='chek' value='b1'>";
    // if($_SESSION['a1']!=0 && $_SESSION['b1']==0 )
    // {$b1_input = "<input type='radio' name='chek' value='b1' checked>";}
    // if($_SESSION['b1']!=0){$b1_input = "<input type='submit' name='b1_valor' value='".$_SESSION['b1']."'";}
    //
    // $c1_input = "<input type='radio' name='chek' value='c1'>";
    // if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']==0 )
    // {$c1_input = "<input type='radio' name='chek' value='c1' checked>";}
    // if($_SESSION['c1']!=0){$c1_input = "<input type='submit' name='c1_valor' value='".$_SESSION['c1']."'";}
    //
    // $a2_input = "<input type='radio' name='chek' value='a2'>";
    // if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']==0 )
    // {$a2_input = "<input type='radio' name='chek' value='a2' checked>";}
    // if($_SESSION['a2']!=0){$a2_input = "<input type='submit' name='a2_valor' value='".$_SESSION['a2']."'";}
    //
    // $c2_input = "<input type='radio' name='chek' value='c2'>";
    // if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']==0  )
    // {$c2_input = "<input type='radio' name='chek' value='c2' checked>";}
    // if($_SESSION['c2']!=0){$c2_input = "<input type='submit' name='c2_valor' value='".$_SESSION['c2']."'";}
    //
    // $d2_input = "<input type='radio' name='chek' value='d2'>";
    // if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']==0 )
    // {$d2_input = "<input type='radio' name='chek' value='d2' checked>";}
    // if($_SESSION['d2']!=0){$d2_input = "<input type='submit' name='d2_valor' value='".$_SESSION['d2']."'";}
    //
    // $a3_input = "<input type='radio' name='chek' value='a3'>";
    // if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
    // && $_SESSION['a3']==0 )
    // {$a3_input = "<input type='radio' name='chek' value='a3' checked>";}
    // if($_SESSION['a3']!=0){$a3_input = "<input type='submit' name='a3_valor' value='".$_SESSION['a3']."'";}
    //
    // $b3_input = "<input type='radio' name='chek' value='b3'>";
    // if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
    // && $_SESSION['a3']!=0 && $_SESSION['b3']==0 )
    // {$b3_input = "<input type='radio' name='chek' value='b3' checked>";}
    // if($_SESSION['b3']!=0){$b3_input = "<input type='submit' name='b3_valor' value='".$_SESSION['b3']."'";}
    //
    // $d3_input = "<input type='radio' name='chek' value='d3'>";
    // if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
    // && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']==0 )
    // {$d3_input = "<input type='radio' name='chek' value='d3' checked>";}
    // if($_SESSION['d3']!=0){$d3_input = "<input type='submit' name='d3_valor' value='".$_SESSION['d3']."'";}
    //
    // $b4_input = "<input type='radio' name='chek' value='b4'>";
    // if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
    // && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']==0 )
    // {$b4_input = "<input type='radio' name='chek' value='b4' checked>";}
    // if($_SESSION['b4']!=0){$b4_input = "<input type='submit' name='b4_valor' value='".$_SESSION['b4']."'";}
    //
    // $c4_input = "<input type='radio' name='chek' value='c4'>";
    // if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
    // && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']==0 )
    // {$c4_input = "<input type='radio' name='chek' value='c4' checked>";}
    // if($_SESSION['c4']!=0){$c4_input = "<input type='submit' name='c4_valor' value='".$_SESSION['c4']."'";}
    //
    // $d4_input = "<input type='radio' name='chek' value='d4'>";
    // if($_SESSION['a1']!=0 && $_SESSION['b1']!=0 && $_SESSION['c1']!=0 && $_SESSION['a2']!=0 && $_SESSION['c2']!=0 && $_SESSION['d2']!=0
    // && $_SESSION['a3']!=0 && $_SESSION['b3']!=0 && $_SESSION['d3']!=0 && $_SESSION['b4']!=0 && $_SESSION['c4']!=0 && $_SESSION['d4']==0 )
    // {$d4_input = "<input type='radio' name='chek' value='d4' checked>";}
    // if($_SESSION['d4']!=0){$d4_input = "<input type='submit' name='d4_valor' value='".$_SESSION['d4']."'";}

    $soma_linha1 = $_SESSION['a1'] + $_SESSION['b1'] + $_SESSION['c1'] + $_SESSION['d1'];
    $soma_linha2 = $_SESSION['a2'] + $_SESSION['b2'] + $_SESSION['c2'] + $_SESSION['d2'];
    $soma_linha3 = $_SESSION['a3'] + $_SESSION['b3'] + $_SESSION['c3'] + $_SESSION['d3'];
    $soma_linha4 = $_SESSION['a4'] + $_SESSION['b4'] + $_SESSION['c4'] + $_SESSION['d4'];

    $soma_coluna1 = $_SESSION['a1'] + $_SESSION['a2'] + $_SESSION['a3'] + $_SESSION['a4'];
    $soma_coluna2 = $_SESSION['b1'] + $_SESSION['b2'] + $_SESSION['b3'] + $_SESSION['b4'];
    $soma_coluna3 = $_SESSION['c1'] + $_SESSION['c2'] + $_SESSION['c3'] + $_SESSION['c4'];
    $soma_coluna4 = $_SESSION['d1'] + $_SESSION['d2'] + $_SESSION['d3'] + $_SESSION['d4'];

    $soma_diagonal_d = $_SESSION['a1'] + $_SESSION['b2'] + $_SESSION['c3'] + $_SESSION['d4'];
    $soma_diagonal_e = $_SESSION['a4'] + $_SESSION['b3'] + $_SESSION['c2'] + $_SESSION['d1'];

    $parabens = "";
    if($soma_linha1==34 && $soma_linha2==34 && $soma_linha3==34 && $soma_linha4==34 &&
       $soma_coluna1==34 && $soma_coluna2==34 && $soma_coluna3==34 && $soma_coluna4==34 &&
       $soma_diagonal_d==34 && $soma_diagonal_e == 34){$parabens = "PARABÉNS você conseguiu!";}



       $soma_vertical_horizontal = "class='soma_horizontal_vertical'"; $soma_diagonal = "class='soma_diagonal'"; $soma_34 = "class='soma_34'";

       $cor_soma34 = "background-color: rgb(0,176,240); color: white;";
       $cor_linha_coluna = "background-color: rgb(179,136,96);";
       $cor_linha1 = $cor_linha_coluna; $cor_linha2 = $cor_linha_coluna; $cor_linha3 = $cor_linha_coluna; $cor_linha4 = $cor_linha_coluna;
       $cor_coluna1= $cor_linha_coluna; $cor_coluna2= $cor_linha_coluna; $cor_coluna3= $cor_linha_coluna; $cor_coluna4= $cor_linha_coluna;

       // $cor_linha1 = "background-color: rgb(179,136,96);"; $cor_linha2 = "background-color: rgb(179,136,96);"; $cor_linha3 = "background-color: rgb(179,136,96);"; $cor_linha4 = "background-color: rgb(179,136,96);";
       // $cor_coluna1= "background-color: rgb(179,136,96);"; $cor_coluna2= "background-color: rgb(179,136,96);"; $cor_coluna3= "background-color: rgb(179,136,96);"; $cor_coluna4= "background-color: rgb(179,136,96);";
       $cor_diagonal_e = "background-color: rgb(214,189,167);"; $cor_diagonal_d = "background-color: rgb(214,189,167);";

       if($soma_linha1==34){$cor_linha1=$cor_soma34;} if($soma_coluna1==34){$cor_coluna1=$cor_soma34;} if($soma_diagonal_e==34){$cor_diagonal_e=$cor_soma34;}
       if($soma_linha2==34){$cor_linha2=$cor_soma34;} if($soma_coluna2==34){$cor_coluna2=$cor_soma34;} if($soma_diagonal_d==34){$cor_diagonal_d=$cor_soma34;}
       if($soma_linha3==34){$cor_linha3=$cor_soma34;} if($soma_coluna3==34){$cor_coluna3=$cor_soma34;}
       if($soma_linha4==34){$cor_linha4=$cor_soma34;} if($soma_coluna4==34){$cor_coluna4=$cor_soma34;}




     ?>

     <style>
     .soma_linha1{<?php echo $cor_linha1 ?>} .soma_coluna1{<?php echo $cor_coluna1 ?>} .soma_diagonal_e{<?php echo $cor_diagonal_e ?>}
     .soma_linha2{<?php echo $cor_linha2 ?>} .soma_coluna2{<?php echo $cor_coluna2 ?>} .soma_diagonal_d{<?php echo $cor_diagonal_d ?>}
     .soma_linha3{<?php echo $cor_linha3 ?>} .soma_coluna3{<?php echo $cor_coluna3 ?>}
     .soma_linha4{<?php echo $cor_linha4 ?>} .soma_coluna4{<?php echo $cor_coluna4 ?>}

     </style>


<form action="trinta_e_quatro.php" method="post">

<div class="box_principal">


<div class="box1">

  <table class="tabela">
    <tr>
      <td class="coluna_invisivel"></td>
      <td><?php echo $a1_input ?></td>
      <td> <?php echo $b1_input ?> </td>
      <td> <?php echo $c1_input ?> </td>
      <td class="numero_fixo">4</td>
      <td class="soma_linha1"><?php echo $soma_linha1 ?></td>
    </tr>

    <tr>
      <td class="coluna_invisivel"></td>
      <td>  <?php echo $a2_input ?>  </td>
      <td class="numero_fixo">3</td>
      <td> <?php echo $c2_input ?> </td>
      <td> <?php echo $d2_input ?> </td>
      <td class="soma_linha2"><?php echo $soma_linha2 ?></td>
    </tr>

    <tr>
      <td class="coluna_invisivel"></td>
      <td> <?php echo $a3_input ?> </td>
      <td> <?php echo $b3_input ?> </td>
      <td class="numero_fixo">2</td>
      <td> <?php echo $d3_input ?> </td>
      <td class="soma_linha3"><?php echo $soma_linha3 ?></td>
    </tr>

    <tr>
      <td class="coluna_invisivel"></td>
      <td class="numero_fixo">1</td>
      <td> <?php echo $b4_input ?> </td>
      <td> <?php echo $c4_input ?> </td>
      <td> <?php echo $d4_input ?> </td>
      <td class="soma_linha4"><?php echo $soma_linha4 ?></td>
    </tr>

    <tr>
      <td class="soma_diagonal_e"><?php echo $soma_diagonal_e ?></td>
      <td class="soma_coluna1"><?php echo $soma_coluna1 ?></td>
      <td class="soma_coluna2"><?php echo $soma_coluna2 ?></td>
      <td class="soma_coluna3"><?php echo $soma_coluna3 ?></td>
      <td class="soma_coluna4"><?php echo $soma_coluna4 ?></td>
      <td class="soma_diagonal_d"><?php echo $soma_diagonal_d ?></td>
    </tr>

  </table>
  </div>

  <div class="box2">


  <table class="tabela">
  <tr>
    <td class="coluna_invisivel"></td>
    <td> <?php echo $_SESSION["x5_view_abertura"] ?> <input type="submit" name="x5" value="5"></input> <?php echo $_SESSION["x5_view_fechamento"] ?> </td>
    <td> <?php echo $_SESSION["x6_view_abertura"] ?> <input type="submit" name="x6" value="6"></input> <?php echo $_SESSION["x6_view_fechamento"] ?></td>
    <td> <?php echo $_SESSION["x7_view_abertura"] ?> <input type="submit" name="x7" value="7"></input> <?php echo $_SESSION["x7_view_fechamento"] ?></td>
    <td> <?php echo $_SESSION["x8_view_abertura"] ?> <input type="submit" name="x8" value="8"></input> </input><?php echo $_SESSION["x8_view_fechamento"] ?></td>
  </tr>

  <tr>
    <td class="coluna_invisivel"></td>
    <td> <?php echo $_SESSION["x9_view_abertura"] ?> <input type="submit" name="x9" value="9"> </input><?php echo $_SESSION["x9_view_fechamento"] ?></td>
    <td> <?php echo $_SESSION["x10_view_abertura"] ?> <input type="submit" name="x10" value="10"> </input><?php echo $_SESSION["x10_view_fechamento"] ?></td>
    <td> <?php echo $_SESSION["x11_view_abertura"] ?> <input type="submit" name="x11" value="11"> </input><?php echo $_SESSION["x11_view_fechamento"] ?></td>
    <td> <?php echo $_SESSION["x12_view_abertura"] ?> <input type="submit" name="x12" value="12"> </input><?php echo $_SESSION["x12_view_fechamento"] ?></td>
  </tr>

  <tr>
    <td class="coluna_invisivel"></td>
    <td> <?php echo $_SESSION["x13_view_abertura"] ?> <input type="submit" name="x13" value="13"></input> <?php echo $_SESSION["x13_view_fechamento"] ?></td>
    <td> <?php echo $_SESSION["x14_view_abertura"] ?> <input type="submit" name="x14" value="14"></input> <?php echo $_SESSION["x14_view_fechamento"] ?></td>
    <td> <?php echo $_SESSION["x15_view_abertura"] ?> <input type="submit" name="x15" value="15"></input> <?php echo $_SESSION["x15_view_fechamento"] ?></td>
    <td> <?php echo $_SESSION["x16_view_abertura"] ?> <input type="submit" name="x16" value="16"></input> <?php echo $_SESSION["x16_view_fechamento"] ?></td>
  </tr>
  </table>



  </table>

  <br />
  <table class="tabela">
  <tr>
    <td class="coluna_invisivel"></td>
    <td> <input type="submit" name="reset" value="reset"></input></td>
  </table>
<div class="box_parabens">
  <h1><?php echo $parabens ?></h1>
</div>
  </div>
  </form>
</div>


  </body>
</html>
