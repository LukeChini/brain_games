

 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <title>Hello, world!</title>
   </head>
   <body>
<?php require('nav.php'); ?>
   </div>


<?php
include ('conn.php');

$verificação = $conn->query('SELECT * FROM jogos ORDER BY id DESC');

$array = [];

$n = $verificação->fetchAll();
$c = count($n);

 ?>

    <div class="bg-light text-center">

      <div class="col-12 text-center">

        <a href="inserir_jogos.php" class="btn btn-danger m-3" style="-webkit-text-stroke-width: 0px;">Inserir Novo Jogo</a>

      </div>


      <table class="table table-hover">
        <thead class="bg-secondary text-white">
          <tr class="">
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Função</th>
            <th scope="col">Gratuito?</th>
            <th scope="col">Imagem</th>
          </tr>
        </thead>
        <tbody>

          <?php
          for ($i=0; $i < $c; $i++)
          {
            if($n[$i]['gratuito']){$gratuito = 'Sim';}else{$gratuito = 'Não';}
            echo "
            <tr>
            <th scope='row'>" .$n[$i]['id']."</th>"
            ."<td>".$n[$i]['nome']."</td>"
            ."<td>".ucfirst($n[$i]['funcao'])."</td>"
            ."<td>".$gratuito."</td>"
            ."<td> <div class='border text-center' style='height:50px;width:50px; margin-left:50px; overflow:hidden;';><img src='".$n[$i]['src_perfil']."' style='height:50px'></img></div></td>
            </tr>";
          }
          ?>





        </tbody>
      </table>


</div>

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



 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </body>
 </html>
