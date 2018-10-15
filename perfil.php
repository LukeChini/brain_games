<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>

    <style>

    .fig
    {
      background-color: rgb(150,150,150);
      height: 200px;
      width: 200px;
      overflow: hidden;

    }

    figcaption
    {
      margin-left: 40px;
    }

    .img
    {
      height: 200px;
      display: block;
      margin: 0 auto;
    }

    </style>

  </head>
  <body>
    <h1> Inserir imagem com upload </h1>

    <form enctype="multipart/form-data" action="perfil.php" method="post">
          <input type="file" name="imagem" value=""></input>
          <input type="submit" name="enviar" value="Enviar"></input>
    </form>

    <?php


    if(isset($_POST['enviar']))
    {
      print_r($_FILES['imagem']);
      move_uploaded_file($_FILES['imagem']['tmp_name'], 'upload/'.$_FILES['imagem']['name']);
    }


     ?>

    <br /><br/>

      <figure class="fig">
        <img class="img" src="<?php echo 'upload/'.$_FILES['imagem']['name'] ?>" >
        <br />
    </figure>
            <figcaption> <?php echo $_FILES['imagem']['name'] ?> </figcaption>





  </body>
</html>
