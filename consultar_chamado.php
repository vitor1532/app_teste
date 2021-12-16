<?require_once "validador_acesso.php"?>

<?php
  /*
  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';
  */

  $chamados = [];
  $arquivo = fopen('arquivo.txt', 'r');

  while(!feof($arquivo)) {

    $registro = explode('#', fgets($arquivo));

    if($_SESSION['perfil_id'] == 2 && $registro[0] == $_SESSION['id'] || $_SESSION['perfil_id'] == 1) {

      $chamados[] = $registro;

    } else {
      continue;
    }

  }


  fclose($arquivo);

?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/6eef05c72f.js" crossorigin="anonymous"></script>

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="config_perfil.php" class="nav-link"><img src="config.png" width="30" height="30" class="d-inline-block align-top"></a>
        </li>
      </ul> 
      <ul class="navbar-nav ml-4">
        <li class="nav-item">
          <a href="disconnect.php" class="nav-link">Sair</a>
        </li>
      </ul> 
      
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <? foreach($chamados as $chamado) { ?>

                <?php

                  if(count($chamado) < 3) {
                    continue;
                  }

                ?>


              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado[0] . ' - ' . $chamado[1] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado[2] ?></h6>
                  <p class="card-text"><?= $chamado[3] ?></p>

                </div>
              </div>
              
              <? } ?>

              </div>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <footer class="text-center text-white bg-dark">
    
    <!--grid container-->
    <div class="container pt-1">
      <!--social media-->
      <section class="mb-1">
        <!--Facebook-->
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
        class="btn btn-link btn-floating btn-lg text-light p-1 ml-2" 
        role="button"
        ><i class="fab fa-facebook"></i></a>

        <!--Twitter-->
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
        class="btn btn-link btn-floating btn-lg text-light p-1 ml-2"
        role="button"
        ><i class="fab fa-twitter"></i></a>

        <!--instagram-->
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
        class="btn btn-link btn-floating btn-lg text-light p-1 ml-2"
        role="button"
        ><i class="fab fa-instagram"></i></a>
      </section>
        
    </div>

    <div class="text-center text-light bg-dark p-1">
      @footer
      <a href="contato.php" text-light>Fale Conosco</a>
      
    </div>

    </footer>
  </body>
</html>