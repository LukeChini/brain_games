<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">




    <title>Criar Conta</title>
  </head>

      <div class="bg-light" >
      <div class=" bg-light"  >
        <div class="text-center font-weight-bold p-3" style="font-size:30px">
          <p>Criar conta gratuita</p>
        </div>

        <div class="row container" style="margin: 0 auto">


        <div class="col-12 col-lg-5 bg-info">
          <div class="text-center p-3" ><img src="images/brain-areas-cards-fundo-info.png" alt="" class="col-12"></img></div>
          <div class="text-center font-weight-bold text-white col-12" style="width:360px;font-size:30px;"> <p style="">Crie uma conta para:</p>
            <p class="ml-5" style="font-size:25px; text-align:left"> - Experimentar 2 execícios cerebrais</p>
            <p class="ml-5" style="font-size:25px; text-align:left"> - Garantir um alto desempenho no trabalho</p>
            <p class="ml-5 mb-5" style="font-size:25px; text-align:left"> - Reduzir a perda de atividades dos neurônios</p>


          </div>


        </div>

        <div class="col-12 col-lg-7 " style="background-color:rgb(238,238,238);margin: 0 auto">


      <form action="salvando_usuarios.php" method="post">


        <div class="input-group mt-3 mb-5">
                <div class="input-group-prepend">
                  <div class="input-group-text" style="background-color:white"> <img src="images/usuario.png" alt="" style="height:20px"> </div>
                </div>
                <input type="text" required class="form-control form-control-lg" id="inlineFormInputGroup" placeholder="Username" name="user_name">
              </div>

              <div class="input-group mb-5">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="background-color:white"> <img src="images/email.png" alt="" style="height:20px"> </div>
                      </div>
                      <input type="email" required class="form-control form-control-lg" id="inlineFormInputGroup" placeholder="E-mail" name="email">
                    </div>

                    <div class="input-group mb-5">
                            <div class="input-group-prepend">
                              <div class="input-group-text" style="background-color:white"> <img src="images/senha.png" alt="" style="height:20px"> </div>
                            </div>
                            <input type="password" required class="form-control form-control-lg senha" id="inlineFormInputGroup" placeholder="Senha" name="senha">
                          </div>

                          <div class="input-group mb-5" style="margin-top:-40px">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text" style="background-color:white"> <img src="images/senha.png" alt="" style="height:20px"> </div>
                                  </div>
                                  <input type="password" required class="form-control form-control-lg confirmar_senha" id="inlineFormInputGroup" placeholder="Confirmar Senha" name="confirmar_senha">
                                </div>


                          <div class="form-row">
                            <div class="form-group col-12 col-lg-3">
                              <a href="#" class="btn btn-light border-0" style="background-color:rgb(238,238,238)">Data de nascimento</a>
                            </div>

                            <div class="form-group col-3 col-lg-3">
                              <select required class="form-control dorm-control-lg" name="dia_nascimento">
                                <option  value="">Dia</option>
                                <option  value="01">1</option>  <option value="02">2</option>   <option value="03">3</option>
                                <option  value="04">4</option>  <option value="05">5</option>   <option value="06">6</option>
                                <option  value="07">7</option>  <option value="08">8</option>   <option value="09">9</option>
                                <option value="10">10</option> <option value="11">11</option> <option value="12">12</option>
                                <option value="13">13</option> <option value="14">14</option> <option value="15">15</option>
                                <option value="16">16</option> <option value="17">17</option> <option value="18">18</option>
                                <option value="19">19</option> <option value="20">20</option> <option value="21">21</option>
                                <option value="22">22</option> <option value="23">23</option> <option value="24">24</option>
                                <option value="25">25</option> <option value="26">26</option> <option value="27">27</option>
                                <option value="28">28</option> <option value="29">29</option> <option value="30">30</option>
                                <option value="31">31</option>
                                </select>
                            </div>

                            <div class="form-group col-6 col-lg-3">
                              <select required class="form-control dorm-control-lg" name="mes_nascimento">
                                <option value="">Mês</option>
                                <option value="01">Janeiro</option>  <option value="02">Fevereiro</option> <option value="03">Março</option>
                                <option value="04">Abril</option>    <option value="05">Maio</option>      <option value="06">Junho</option>
                                <option value="07">Julho</option>    <option value="08">Agosto</option>    <option value="09">Setembro</option>
                                <option value="10">Outubro</option> <option value="11">Novembro</option> <option value="12">Dezembro</option>
                                </select>
                            </div>




                            <div class="form-group col-3">
                              <input type="text" required name="ano_nascimento" value="" class="form-control dorm-control-lg" placeholder="Ano">
                            </div>
                            </div>

                            <div class="form-check form-check-inline p-3">
                              <a href="#" class="btn btn-light border-0 " style="background-color:rgb(238,238,238)">Sexo:</a>
                              <input class="form-check-input" checked type="radio" name="sexo" value="masculino">Masculino</input>
                              <input class="form-check-input ml-5" type="radio" name="sexo" value="feminino">Feminino</input>
                            </div>


                            <div class="form-row">
                              <div class="form-group col-1 mr-2">
                                <input required type="checkbox" name="termos" value="">
                              </div>

                              <div class="form-group col-10">
                                <p>Ao inscrever-me, concordo com os
                                Termos de Serviço e a Política de Privacidade.
                                Também confirmo que desejo registrar-me gratuitamente e receber e-mails sobre produtos da Brain Games.
                                Eu posso cancelar a assinatura destes e-mails a qualquer momento.</p>
                              </div>



                              <div class="text-center" style="margin: 0 auto">
                              <input type="submit" class="btn btn-danger mr-3 mt-2 mb-3" style="width:300px; height:50px; font-size:20px" value="Inscrever-se"></input>
                              </div>

                            </div>

                          </form>



                          </div>



        </div>
        </div>

        <div class="text-center mt-3">
          <p>Já tem uma conta? <a href="entrar.php">Clique aqui para entrar</a> </p>
        </div>










            <footer class="container mt-3">
                <ul class="nav border-top border-bottom col-12">
                <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="#">Sobre Nós</a></li>
                <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="#">Contato</a></li>
                <li class="nav-item col-12 col-lg-3 text-center"><a class="nav-link text-secondary" href="#">Termos de Serviço</a></li>
                <li class="nav-item col-12 col-lg-3 text-center"><a class="nav-link text-secondary" href="#">Política de Privacidade</a></li>
                <li class="nav-item col-12 col-lg-2 text-center"><a class="nav-link text-secondary" href="#">Ajuda</a></li>
                </ul>
            </footer>

            </div>
                    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
