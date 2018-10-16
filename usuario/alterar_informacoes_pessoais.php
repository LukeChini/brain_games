<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">




    <title>Brain Games - Alterar informações pessoais</title>
      <link rel='shortcut icon' href="../images/brain_icon.gif" />
  </head>
  <body>
    <?php if(!isset($_SESSION)){session_start();} ?>
    <?php require('../include/nav.php'); ?>
    </div>

</div>



      <div class="bg-light p-3">
      <div class="container bg-white border col-lg-8" >
        <div class="text-center font-weight-bold p-3" style="font-size:30px">
          <p>Alterar informações pessoais</p>
        </div>

        <div class="border-top mt-3 mb-3">
        <div class="row">
          <div class="col-lg-3 col-12">
            <div class="m-3 border"  style="height:150px; width:150px; margin: 0 auto; overflow:hidden; text-align:center;">
              <img id="src_img"  src="<?php echo '../'.$_SESSION['src_perfil'] ?>" alt="" style="height:150px;"></img>
            </div>
            </div>
            <div  class="col-lg-8 col-12 mt-3 ">
              <form enctype="multipart/form-data" action="../controller/tratar_alterar_informacoes_pessoais.php" method="post">
                <div  onclick="alterarParaLoad()" class="input-group">
                  <div class="custom-file">
                    <input type="file" name="imagem" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                    <label   class="custom-file-label" for="inputGroupFile04">Carregar nova foto</label>
                  </div>

                </div>

                <script type="text/javascript">
                const src_img = document.querySelector('#src_img')

                function alterarParaLoad(){
                  src_img.src = '../images/load.gif'
                  src_img.style.marginLeft = "-25px"
                }

                </script>

                <?php
                $id = $_SESSION['id_logado'];
                $src_perfil = $_SESSION['src_perfil'];
                include ('../include/conn.php');
                $verificação = $conn->query("SELECT * FROM usuarios WHERE id = '$id'");
                $n = $verificação->fetchAll();

                if(str_word_count($n[0]['src_perfil']) > 0 )
                {
                  echo '
                  <div  class="col-lg-8 col-12 mt-3 ">
                  <input type="submit" name="excluir_foto" value="Excluir Foto" class="btn btn-dark mt-2" >
                  </div>';
                }

                ?>



          </div>




          </div>


            <div class="input-group mt-3 mb-5">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="background-color:white"> <img  src="../images/usuario.png" alt="" style="height:20px"> </div>
                    </div>
                    <input type="text" required name="username" class="form-control form-control-lg" id="inlineFormInputGroup" placeholder="Username" value=<?php echo '"'.$_SESSION['username_logado'].'"'; ?>>
                  </div>





                              <div class="form-row">
                                <div class="form-group col-12 col-lg-3">
                                  <a href="#" class="btn btn-light border-0" style="background-color:white">Data de nascimento</a>
                                </div>

                                <?php
                                      $dia = substr ( $_SESSION['aniversario_logado'] , 8 , 2 );


$dia_01="";if('01' === $dia ){$dia_01="selected";} $dia_11="";if('11' === $dia ){$dia_11="selected";} $dia_21="";if('21' === $dia ){$dia_21="selected";}
$dia_02="";if('02' === $dia ){$dia_02="selected";} $dia_12="";if('12' === $dia ){$dia_12="selected";} $dia_22="";if('22' === $dia ){$dia_22="selected";}
$dia_03="";if('03' === $dia ){$dia_03="selected";} $dia_13="";if('13' === $dia ){$dia_13="selected";} $dia_23="";if('23' === $dia ){$dia_23="selected";}
$dia_04="";if('04' === $dia ){$dia_04="selected";} $dia_14="";if('14' === $dia ){$dia_14="selected";} $dia_24="";if('24' === $dia ){$dia_24="selected";}
$dia_05="";if('05' === $dia ){$dia_05="selected";} $dia_15="";if('15' === $dia ){$dia_15="selected";} $dia_25="";if('25' === $dia ){$dia_25="selected";}
$dia_06="";if('06' === $dia ){$dia_06="selected";} $dia_16="";if('16' === $dia ){$dia_16="selected";} $dia_26="";if('26' === $dia ){$dia_26="selected";}
$dia_07="";if('07' === $dia ){$dia_07="selected";} $dia_17="";if('17' === $dia ){$dia_17="selected";} $dia_27="";if('27' === $dia ){$dia_27="selected";}
$dia_08="";if('08' === $dia ){$dia_08="selected";} $dia_18="";if('18' === $dia ){$dia_18="selected";} $dia_28="";if('28' === $dia ){$dia_28="selected";}
$dia_09="";if('09' === $dia ){$dia_09="selected";} $dia_19="";if('19' === $dia ){$dia_19="selected";} $dia_29="";if('29' === $dia ){$dia_29="selected";}
$dia_10="";if('10' === $dia ){$dia_10="selected";} $dia_20="";if('20' === $dia ){$dia_20="selected";} $dia_30="";if('30' === $dia ){$dia_30="selected";}
                                                                                                      $dia_31="";if('31' === $dia ){$dia_31="selected";}

                                 ?>

                                <div class="form-group col-3 col-lg-3">
                                  <select required class="form-control form-control-sm" name="dia">
                                                     <option  value="">Dia</option>
<option  value="01" <?php echo $dia_01 ?>>1</option>  <option value="02" <?php echo $dia_02 ?>>2</option>   <option value="03" <?php echo $dia_03 ?>>3</option>
<option  value="04" <?php echo $dia_04 ?>>4</option>  <option value="05" <?php echo $dia_05 ?>>5</option>   <option value="06" <?php echo $dia_06 ?>>6</option>
<option  value="07" <?php echo $dia_07 ?>>7</option>  <option value="08" <?php echo $dia_08 ?>>8</option>   <option value="09" <?php echo $dia_09 ?>>9</option>
<option value="10" <?php echo $dia_10 ?>>10</option> <option value="11" <?php echo $dia_11 ?>>11</option> <option value="12" <?php echo $dia_12 ?>>12</option>
<option value="13" <?php echo $dia_13 ?>>13</option> <option value="14" <?php echo $dia_14 ?>>14</option> <option value="15" <?php echo $dia_15 ?>>15</option>
<option value="16" <?php echo $dia_16 ?>>16</option> <option value="17" <?php echo $dia_17 ?>>17</option> <option value="18" <?php echo $dia_18 ?>>18</option>
<option value="19" <?php echo $dia_19 ?>>19</option> <option value="20" <?php echo $dia_20 ?>>20</option> <option value="21" <?php echo $dia_21 ?>>21</option>
<option value="22" <?php echo $dia_22 ?>>22</option> <option value="23" <?php echo $dia_23 ?>>23</option> <option value="24" <?php echo $dia_24 ?>>24</option>
<option value="25" <?php echo $dia_25 ?>>25</option> <option value="26" <?php echo $dia_26 ?>>26</option> <option value="27" <?php echo $dia_27 ?>>27</option>
<option value="28" <?php echo $dia_28 ?>>28</option> <option value="29" <?php echo $dia_29 ?>>29</option> <option value="30" <?php echo $dia_30 ?>>30</option>
<option value="31" <?php echo $dia_31 ?>>31</option>
                                    </select>
                                </div>

<?php
                                $mes = substr ( $_SESSION['aniversario_logado'] , 5 , 2 );
$mes_01="";if('01' === $mes ){$mes_01="selected";} $mes_07="";if('07' === $mes ){$mes_07="selected";}
$mes_02="";if('02' === $mes ){$mes_02="selected";} $mes_08="";if('08' === $mes ){$mes_08="selected";}
$mes_03="";if('03' === $mes ){$mes_03="selected";} $mes_09="";if('09' === $mes ){$mes_09="selected";}
$mes_04="";if('04' === $mes ){$mes_04="selected";} $mes_10="";if('10' === $mes ){$mes_10="selected";}
$mes_05="";if('05' === $mes ){$mes_05="selected";} $mes_11="";if('11' === $mes ){$mes_11="selected";}
$mes_06="";if('06' === $mes ){$mes_06="selected";} $mes_12="";if('12' === $mes ){$mes_12="selected";}

 ?>

                                <div class="form-group col-6 col-lg-3">
                                  <select required class="form-control form-control-sm" name="mes">
                                    <option value="01" <?php echo $mes_01 ?>>Janeiro</option>  <option value="02" <?php echo $mes_02 ?>>Fevereiro</option> <option value="03" <?php echo $mes_03 ?>>Março</option>
                                    <option value="04" <?php echo $mes_04 ?>>Abril</option>    <option value="05" <?php echo $mes_05 ?>>Maio</option>      <option value="06" <?php echo $mes_06 ?>>Junho</option>
                                    <option value="07" <?php echo $mes_07 ?>>Julho</option>    <option value="08" <?php echo $mes_08 ?>>Agosto</option>    <option value="09" <?php echo $mes_09 ?>>Setembro</option>
                                    <option value="10" <?php echo $mes_10 ?>>Outubro</option> <option value="11" <?php echo $mes_11 ?>>Novembro</option> <option value="12" <?php echo $mes_12 ?>>Dezembro</option>
                                    </select>
                                </div>

                                <?php $ano = substr ( $_SESSION['aniversario_logado'] , 0 , 4 ); ?>

                                <div class="form-group col-3">
                                  <input required type="text" name="ano" value=<?php echo '"'.$ano.'"'?> class="form-control form-control-sm" placeholder="Ano">
                                </div>
                                </div>

                                <?php  $sexo = $_SESSION['sexo_logado'];  $m='';if($sexo === 'masculino'){$m='checked';} $f='';if($sexo === 'feminino'){$f='checked';}?>
                                <div class="form-check form-check-inline p-3">
                                  <a href="#" class="btn btn-light border-0 " style="background-color:white" >Sexo:</a>
                                  <input class="form-check-input " type="radio" name="sexo" value="masculino" <?php echo $m; ?>>Masculino</input>
                                  <input class="form-check-input ml-2" type="radio" name="sexo" value="feminino" <?php echo $f; ?>>Feminino</input>
                                </div>
                                <br />

                                <div class="col-12" style="margin: 0 auto;">
                                  <input type="submit" value="Salvar alterações" class="btn btn-danger mr-3 mt-2" style="-webkit-text-stroke-width: 0px;"></input>
                                </div>



                              </form>


        <div class="border-top mt-3 mb-3">
          <a href="conta.php" class="m-3 font-weight-bold">Voltar para conta</a>
        </div>






      <div class="col-12" >


        </div>












</div></div>

<?php require('../include/variaveis_php_echo.php'); echo $html_footer; ?>


                    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
