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
      border-bottom-width: 1px;
      border-bottom-style: solid;
      border-bottom-color: black;
      text-align:center;
      overflow: hidden;
    }

    input[type="submit"]
    {
      width: 50px;
      height: 50px;
    }

    .box_principal
    {
      width: 90%;
      margin: 0 auto;
    }

    .box_enigmas
    {
      width: 50%;
      background-color: yellow;
      display: inline-block;
      float: left;
    }

    .box_resultados
    {
      width: 50%;
      background-color: red;
      display: inline-block;
      float: left;
    }

    .box_var1
    {
      width: 33%;
      display: inline-block;
      float: left;

    }
    .box_var2
    {
      width: 33%;
      display: inline-block;
      float: left;

    }
    .box_var3
    {
      width: 33%;
      display: inline-block;
      float: left;

    }

    .box_numeros
    {
      width: 100%;
      display: inline-block;
      margin: 0 auto;
      background-color: green;
    }


    </style>
  </head>
  <body>

    <?php
    session_start();

    $_SESSION["x1_view_abertura"] = "";     $_SESSION["x1_view_fechamento"] = "";
    $_SESSION["x2_view_abertura"] = "";     $_SESSION["x2_view_fechamento"] = "";
    $_SESSION["x3_view_abertura"] = "";     $_SESSION["x3_view_fechamento"] = "";

    $_SESSION["x4_view_abertura"] = "";     $_SESSION["x4_view_fechamento"] = "";
    $_SESSION["x5_view_abertura"] = "";     $_SESSION["x5_view_fechamento"] = "";
    $_SESSION["x6_view_abertura"] = "";     $_SESSION["x6_view_fechamento"] = "";

    $_SESSION["x7_view_abertura"] = "";     $_SESSION["x7_view_fechamento"] = "";
    $_SESSION["x8_view_abertura"] = "";     $_SESSION["x8_view_fechamento"] = "";
    $_SESSION["x9_view_abertura"] = "";     $_SESSION["x9_view_fechamento"] = "";

    if (isset($_POST['reset'])){
    $_SESSION["x1_subimit_on"] = 0;      $_SESSION["x2_subimit_on"] = 0;      $_SESSION["x3_subimit_on"] = 0;
    $_SESSION["x4_subimit_on"] = 0;      $_SESSION["x5_subimit_on"] = 0;      $_SESSION["x6_subimit_on"] = 0;
    $_SESSION["x7_subimit_on"] = 0;      $_SESSION["x8_subimit_on"] = 0;      $_SESSION["x9_subimit_on"] = 0;


    $_SESSION['a1'] = 0;      $_SESSION['a2'] = 0;      $_SESSION['a3'] = 0;      $_SESSION['a4'] = 1;
    $_SESSION['b1'] = 0;      $_SESSION['b2'] = 3;      $_SESSION['b3'] = 0;      $_SESSION['b4'] = 0;
    $_SESSION['c1'] = 0;      $_SESSION['c2'] = 0;      $_SESSION['c3'] = 2;      $_SESSION['c4'] = 0;
    $_SESSION['d1'] = 4;      $_SESSION['d2'] = 0;      $_SESSION['d3'] = 0;      $_SESSION['d4'] = 0;
    }



    if (isset($_POST['x1'])){
      $_SESSION[$_POST["chek"]] = 1;
      $_SESSION["x1_subimit_on"] = true;
      if($_SESSION["x1_subimit_on"]){$_SESSION["x1_view_abertura"] = "<!--";     $_SESSION["x1_view_fechamento"] = "--> 1";}
      if($_SESSION["x2_subimit_on"]){$_SESSION["x2_view_abertura"] = "<!--";     $_SESSION["x2_view_fechamento"] = "--> 2";}
      if($_SESSION["x3_subimit_on"]){$_SESSION["x3_view_abertura"] = "<!--";     $_SESSION["x3_view_fechamento"] = "--> 3";}
      if($_SESSION["x4_subimit_on"]){$_SESSION["x4_view_abertura"] = "<!--";     $_SESSION["x4_view_fechamento"] = "--> 4";}
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    }

    if (isset($_POST['x2'])){
      $_SESSION[$_POST["chek"]] = 2;
      $_SESSION["x2_subimit_on"] = true;
      if($_SESSION["x1_subimit_on"]){$_SESSION["x1_view_abertura"] = "<!--";     $_SESSION["x1_view_fechamento"] = "--> 1";}
      if($_SESSION["x2_subimit_on"]){$_SESSION["x2_view_abertura"] = "<!--";     $_SESSION["x2_view_fechamento"] = "--> 2";}
      if($_SESSION["x3_subimit_on"]){$_SESSION["x3_view_abertura"] = "<!--";     $_SESSION["x3_view_fechamento"] = "--> 3";}
      if($_SESSION["x4_subimit_on"]){$_SESSION["x4_view_abertura"] = "<!--";     $_SESSION["x4_view_fechamento"] = "--> 4";}
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    }

    if (isset($_POST['x3'])){
      $_SESSION[$_POST["chek"]] = 3;
      $_SESSION["x3_subimit_on"] = true;
      if($_SESSION["x1_subimit_on"]){$_SESSION["x1_view_abertura"] = "<!--";     $_SESSION["x1_view_fechamento"] = "--> 1";}
      if($_SESSION["x2_subimit_on"]){$_SESSION["x2_view_abertura"] = "<!--";     $_SESSION["x2_view_fechamento"] = "--> 2";}
      if($_SESSION["x3_subimit_on"]){$_SESSION["x3_view_abertura"] = "<!--";     $_SESSION["x3_view_fechamento"] = "--> 3";}
      if($_SESSION["x4_subimit_on"]){$_SESSION["x4_view_abertura"] = "<!--";     $_SESSION["x4_view_fechamento"] = "--> 4";}
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    }

    if (isset($_POST['x4'])){
      $_SESSION[$_POST["chek"]] = 4;
      $_SESSION["x4_subimit_on"] = true;
      if($_SESSION["x1_subimit_on"]){$_SESSION["x1_view_abertura"] = "<!--";     $_SESSION["x1_view_fechamento"] = "--> 1";}
      if($_SESSION["x2_subimit_on"]){$_SESSION["x2_view_abertura"] = "<!--";     $_SESSION["x2_view_fechamento"] = "--> 2";}
      if($_SESSION["x3_subimit_on"]){$_SESSION["x3_view_abertura"] = "<!--";     $_SESSION["x3_view_fechamento"] = "--> 3";}
      if($_SESSION["x4_subimit_on"]){$_SESSION["x4_view_abertura"] = "<!--";     $_SESSION["x4_view_fechamento"] = "--> 4";}
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    }

    if (isset($_POST['x5'])){
      $_SESSION[$_POST["chek"]] = 5;
      $_SESSION["x5_subimit_on"] = true;
      if($_SESSION["x1_subimit_on"]){$_SESSION["x1_view_abertura"] = "<!--";     $_SESSION["x1_view_fechamento"] = "--> 1";}
      if($_SESSION["x2_subimit_on"]){$_SESSION["x2_view_abertura"] = "<!--";     $_SESSION["x2_view_fechamento"] = "--> 2";}
      if($_SESSION["x3_subimit_on"]){$_SESSION["x3_view_abertura"] = "<!--";     $_SESSION["x3_view_fechamento"] = "--> 3";}
      if($_SESSION["x4_subimit_on"]){$_SESSION["x4_view_abertura"] = "<!--";     $_SESSION["x4_view_fechamento"] = "--> 4";}
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    }

    if (isset($_POST['x6'])){
      $_SESSION[$_POST["chek"]] = 6;
      $_SESSION["x6_subimit_on"] = true;
      if($_SESSION["x1_subimit_on"]){$_SESSION["x1_view_abertura"] = "<!--";     $_SESSION["x1_view_fechamento"] = "--> 1";}
      if($_SESSION["x2_subimit_on"]){$_SESSION["x2_view_abertura"] = "<!--";     $_SESSION["x2_view_fechamento"] = "--> 2";}
      if($_SESSION["x3_subimit_on"]){$_SESSION["x3_view_abertura"] = "<!--";     $_SESSION["x3_view_fechamento"] = "--> 3";}
      if($_SESSION["x4_subimit_on"]){$_SESSION["x4_view_abertura"] = "<!--";     $_SESSION["x4_view_fechamento"] = "--> 4";}
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    }

    if (isset($_POST['x7'])){
      $_SESSION[$_POST["chek"]] = 7;
      $_SESSION["x7_subimit_on"] = true;
      if($_SESSION["x1_subimit_on"]){$_SESSION["x1_view_abertura"] = "<!--";     $_SESSION["x1_view_fechamento"] = "--> 1";}
      if($_SESSION["x2_subimit_on"]){$_SESSION["x2_view_abertura"] = "<!--";     $_SESSION["x2_view_fechamento"] = "--> 2";}
      if($_SESSION["x3_subimit_on"]){$_SESSION["x3_view_abertura"] = "<!--";     $_SESSION["x3_view_fechamento"] = "--> 3";}
      if($_SESSION["x4_subimit_on"]){$_SESSION["x4_view_abertura"] = "<!--";     $_SESSION["x4_view_fechamento"] = "--> 4";}
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    }

    if (isset($_POST['x8'])){
      $_SESSION[$_POST["chek"]] = 8;
      $_SESSION["x8_subimit_on"] = true;
      if($_SESSION["x1_subimit_on"]){$_SESSION["x1_view_abertura"] = "<!--";     $_SESSION["x1_view_fechamento"] = "--> 1";}
      if($_SESSION["x2_subimit_on"]){$_SESSION["x2_view_abertura"] = "<!--";     $_SESSION["x2_view_fechamento"] = "--> 2";}
      if($_SESSION["x3_subimit_on"]){$_SESSION["x3_view_abertura"] = "<!--";     $_SESSION["x3_view_fechamento"] = "--> 3";}
      if($_SESSION["x4_subimit_on"]){$_SESSION["x4_view_abertura"] = "<!--";     $_SESSION["x4_view_fechamento"] = "--> 4";}
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    }

    if (isset($_POST['x9'])){
      $_SESSION[$_POST["chek"]] = 9;
      $_SESSION["x9_subimit_on"] = true;
      if($_SESSION["x1_subimit_on"]){$_SESSION["x1_view_abertura"] = "<!--";     $_SESSION["x1_view_fechamento"] = "--> 1";}
      if($_SESSION["x2_subimit_on"]){$_SESSION["x2_view_abertura"] = "<!--";     $_SESSION["x2_view_fechamento"] = "--> 2";}
      if($_SESSION["x3_subimit_on"]){$_SESSION["x3_view_abertura"] = "<!--";     $_SESSION["x3_view_fechamento"] = "--> 3";}
      if($_SESSION["x4_subimit_on"]){$_SESSION["x4_view_abertura"] = "<!--";     $_SESSION["x4_view_fechamento"] = "--> 4";}
      if($_SESSION["x5_subimit_on"]){$_SESSION["x5_view_abertura"] = "<!--";     $_SESSION["x5_view_fechamento"] = "--> 5";}
      if($_SESSION["x6_subimit_on"]){$_SESSION["x6_view_abertura"] = "<!--";     $_SESSION["x6_view_fechamento"] = "--> 6";}
      if($_SESSION["x7_subimit_on"]){$_SESSION["x7_view_abertura"] = "<!--";     $_SESSION["x7_view_fechamento"] = "--> 7";}
      if($_SESSION["x8_subimit_on"]){$_SESSION["x8_view_abertura"] = "<!--";     $_SESSION["x8_view_fechamento"] = "--> 8";}
      if($_SESSION["x9_subimit_on"]){$_SESSION["x9_view_abertura"] = "<!--";     $_SESSION["x9_view_fechamento"] = "--> 9";}
    }

    echo $_POST["chek"];
    echo " = ";
    echo $_SESSION[$_POST["chek"]];

    if($_SESSION['a1']==0){$a1_input = "<input type='radio' name='chek' value=''&''' checked>";}
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


     ?>

<div class="box_principal">

<form class="" action="pagina15.php" method="post">
<!-- //______________Linha_1___________&_+_[_+_*_=_!(_____________________________ -->
<div class="box_enigmas">
    <table>
      <tr>
        <td></td>
        <td></td>
        <td>&</td>
        <td>+</td>
        <td>[</td>
        <td>+</td>
        <td>*</td>
        <td>=</td>
        <td>!</td>
        <td>(</td>
      </tr>
<!-- //______________Linha_2___________$_+_c_+_*_=_!(_____________________________ -->
      <tr>
        <td></td>
        <td></td>
        <td>$</td>
        <td>+</td>
        <td>c</td>
        <td>+</td>
        <td>*</td>
        <td>=</td>
        <td>!</td>
        <td>(</td>
      </tr>
<!-- //______________Linha_3___________#_+_c_+_[_=_!(_____________________________ -->
    <tr>
      <td></td>
      <td></td>
      <td>#</td>
      <td>+</td>
      <td>c</td>
      <td>+</td>
      <td>*</td>
      <td>=</td>
      <td>!</td>
      <td>(</td>
    </tr>
<!-- //______________Linha_4__________%_+_*_+_[_+_(_=_!(_____________________________ -->
  <tr>
    <td>%</td>
    <td>+</td>
    <td>*</td>
    <td>+</td>
    <td>[</td>
    <td>+</td>
    <td>(</td>
    <td>=</td>
    <td>!</td>
    <td>(</td>
  </tr>

<!-- //______________Linha_5__________!_+_c_+_%_+_*_=_!(_____________________________ -->

<tr>
  <td>!</td>
  <td>+</td>
  <td>c</td>
  <td>+</td>
  <td>%</td>
  <td>+</td>
  <td>*</td>
  <td>=</td>
  <td>!</td>
  <td>(</td>
</tr>

<!-- //______________Linha_6__________%_+_&_+_*_+_$_=_!(_____________________________ -->

<tr>
  <td>%</td>
  <td>+</td>
  <td>&</td>
  <td>+</td>
  <td>*</td>
  <td>+</td>
  <td>$</td>
  <td>=</td>
  <td>!</td>
  <td>(</td>
</tr>

<!-- //______________Linha_7__________c_+_$_+_%_+_#_=_!(_____________________________ -->

<tr>
  <td>c</td>
  <td>+</td>
  <td>$</td>
  <td>+</td>
  <td>%</td>
  <td>+</td>
  <td>#</td>
  <td>=</td>
  <td>!</td>
  <td>(</td>
</tr>
</table>
</div>
<div class="box_resultados">

<div class="box_var1">
<table>
  <tr>
    <td> & </td>
    <td> = </td>
    <td> <input type="radio" name="chek" value="'&'"> </td>
  </tr>

  <tr>
    <td> [ </td>
    <td> = </td>
    <td> <input type="radio" name="chek" value="'['"> </td>
  </tr>

  <tr>
    <td> * </td>
    <td> = </td>
    <td> <input type="radio" name="chek" value="'*'"> </td>
  </tr>

</table>
</div>
<div class="box_var2">
<table>
  <tr>
    <td> $ </td>
    <td> = </td>
    <td> <input type="radio" name="chek" value="'$'"> </td>
  </tr>

  <tr>
    <td> ! </td>
    <td> = </td>
    <td> <input type="radio" name="chek" value="'!'"> </td>
  </tr>

  <tr>
    <td> ( </td>
    <td> = </td>
    <td> <input type="radio" name="chek" value="'('"> </td>
  </tr>
</table>
</div>
<div class="box_var3">

  <table>
    <tr>
      <td> c </td>
      <td> = </td>
      <td> <input type="radio" name="chek" value="'c'"> </td>
    </tr>

    <tr>
      <td> % </td>
      <td> = </td>
      <td> <input type="radio" name="chek" value="'%'"> </td>
    </tr>

    <tr>
      <td> # </td>
      <td> = </td>
      <td> <input type="radio" name="chek" value="'#'"> </td>
    </tr>

</table>
</div>
<div class="box_numeros">
<table>
  <tr>
    <td> <?php echo $_SESSION["x1_view_abertura"] ?> <input type="submit" name="x1" value="1"> <?php echo $_SESSION["x1_view_fechamento"] ?> </td>
    <td> <?php echo $_SESSION["x2_view_abertura"] ?> <input type="submit" name="x2" value="2"> <?php echo $_SESSION["x2_view_fechamento"] ?> </td>
    <td> <?php echo $_SESSION["x3_view_abertura"] ?> <input type="submit" name="x3" value="3"> <?php echo $_SESSION["x3_view_fechamento"] ?> </td>
  </tr>

  <tr>
    <td> <?php echo $_SESSION["x4_view_abertura"] ?> <input type="submit" name="x4" value="4"> <?php echo $_SESSION["x4_view_fechamento"] ?> </td>
    <td> <?php echo $_SESSION["x5_view_abertura"] ?> <input type="submit" name="x5" value="5"> <?php echo $_SESSION["x5_view_fechamento"] ?> </td>
    <td> <?php echo $_SESSION["x6_view_abertura"] ?> <input type="submit" name="x6" value="6"> <?php echo $_SESSION["x6_view_fechamento"] ?> </td>
  </tr>

  <tr>
    <td> <?php echo $_SESSION["x7_view_abertura"] ?> <input type="submit" name="x7" value="7"> <?php echo $_SESSION["x7_view_fechamento"] ?> </td>
    <td> <?php echo $_SESSION["x8_view_abertura"] ?> <input type="submit" name="x8" value="8"> <?php echo $_SESSION["x8_view_fechamento"] ?> </td>
    <td> <?php echo $_SESSION["x9_view_abertura"] ?> <input type="submit" name="x9" value="9"> <?php echo $_SESSION["x9_view_fechamento"] ?> </td>
    <td></td>
    <td> <input type="submit" name="reset" value="Reset"> </td>
  </tr>

</table>
</div>
</form>
</div>

</div>
  </body>
</html>
