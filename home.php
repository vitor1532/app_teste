<?require_once "validador_acesso.php"?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <!--Boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/6eef05c72f.js" crossorigin="anonymous"></script>

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }

      .text {
        height: 22px;
        margin-top: 30px;
      
      }

      #wrapper .text {
        position: relative;
        top: auto;
        left: auto;
        font-size: small;
        background-color: #FFFFCC;
        background-position: center;
        background-size: auto;
        /*padding: 17px;
        margin: 5px;*/
        border-radius: 25%;
        text-align: center;
        visibility: hidden;
      }

      #wrapper:hover .text{
        visibility: visible;
        
      }

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
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
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div id="wrapper" class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php"><img src="formulario_abrir_chamado.png" class="hover" width="70" height="70">
                  </a>
                  <br>
                  <span class="text">Abrir chamados</span>
                  
                </div>
                <div id="wrapper" class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php"><img src="formulario_consultar_chamado.png" class="hover" width="70" height="70">
                  </a>
                  <br>
                  <span class="text">Consultar chamados </span>
                  
                </div>
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