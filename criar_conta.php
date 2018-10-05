<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Criar Conta</title>
  </head>
  <body>
    <div class="bg-light d-flex flex-wrap">
      <div class="text-center p-3 col-12 ">
        <h1 class="h2">Criar conta gratuita</h1>
      </div>
      
      <section class="col-12 col-lg-6 bg-info font-weight-bold text-white px-0 py-4">
        <img src="images/brain-areas-cards-fundo-info.png" class="col-12 mb-5 mx-auto">
        <h3 class="ml-3">Crie uma conta para:</h3>
        <p class="ml-3 text-left"> - Experimentar 2 execícios cerebrais</p>
        <p class="ml-3 text-left"> - Garantir um alto desempenho no trabalho</p>
        <p class="ml-3 text-left"> - Reduzir a perda de atividades dos neurônios</p>
      </section>
        
      <section class="col-12 col-lg-6">
        <form action="salvando_usuarios.php" method="post">
          <div class="input-group mt-2 mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            <input type="text" required class="form-control form-control-lg" id="inlineFormInputGroup" placeholder="Username" name="user_name">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-envelope"></i></div>
            </div>
            <input type="email" required class="form-control form-control-lg" id="inlineFormInputGroup" placeholder="E-mail" name="email">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
            <input type="password" required class="form-control form-control-lg senha" id="inlineFormInputGroup" placeholder="Senha" name="senha">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
            <input type="password" required class="form-control form-control-lg confirmar_senha" id="inlineFormInputGroup" placeholder="Confirmar Senha" name="confirmar_senha">
          </div>

          <div class="col-12 col-lg-3 mb-3 p-0">
            <span>Data de nascimento</span>
          </div>

          <div class="row">
            <div class="form-group col-4 col-lg-3">
              <select required class="form-control dorm-control-lg" name="dia_nascimento">
                <option disabled selected>Dia</option>
                <?php
                  for($i = 1; $i <= 31; $i++){
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                  }
                ?>
              </select>
            </div>

            <div class="form-group col-4 col-lg-3">
              <select required class="form-control dorm-control-lg" name="mes_nascimento">
                <option disabled selected>Mês</option>

                <?php 
                $mes = [
                  'Janeiro', 
                  'Fevereiro', 
                  'Março',
                  'Abril',
                  'Maio',
                  'Junho',
                  'Julho',
                  'Agosto',
                  'Setembro',
                  'Outubro',
                  'Novembro',
                  'Dezembro'
                ]; 
                foreach ($mes as $key => $value) {
                  echo "<option value='" . ($key+1) . "'>" . $value . "</option>";
                }
                ?>
              </select>
            </div>

            <div class="form-group col-4">
              <input type="text" required name="ano_nascimento" value="" class="form-control dorm-control-lg" placeholder="Ano">
            </div>
          </div>

          <div class="form-group">
            <select required class="form-control dorm-control-lg" name="sexo">
              <option disabled selected>Sexo</option>
              <option value="feminino">Feminino</option>
              <option value="masculino">Masculino</option>
              <option value="outro">Outro</option>
            </select>
          </div>

          <div class="form-row">
            <div class="form-group col-1 mr-2">
              <input required type="checkbox" name="termos">
            </div>

            <div class="form-group col-10">
              <p>Concordo com os
              Termos de Serviço e a Política de Privacidade.</p>
            </div>
          </div>

          <div class="text-center">
            <input type="submit" class="btn btn-info mr-3 mt-2 mb-3" value="Inscreva-se">
          </div>

          <div class="text-center mt-3">
            <p>Já tem uma conta? 
              <a href="entrar.php">Clique aqui para entrar</a> 
            </p>
          </div>

        </form>
      </section>
    </div>
  </body>
<?php include "footer.php"; ?>