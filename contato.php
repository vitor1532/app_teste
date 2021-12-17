<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/6eef05c72f.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css" />

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
        <div class="card-home">
          <div class="card">
            <div id="wrapper" class="col-md-12 d-flex justify-content-center">
                
              <div class="card-body font-weight-bold">
                <form action="processa_envio.php" method="post">

                  <div class="form-group ">
                    <label for="assunto">Assunto</label>
                    <input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assunto do e-mail">
                  </div>

                  <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea name="mensagem" class="form-control" id="mensagem"></textarea>
                  </div>

                    <?if (isset($_GET['msg']) && $_GET['msg'] == 'erro') {?>

                      <div class="text-danger">Ops, parece que voce deixou de preencher um campo! Por favor, preencha todos antes de enviar o e-mail.</div>

                    <?}?>

                    <button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

    
    <footer class="fixed-bottom text-center text-white bg-dark">
    
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