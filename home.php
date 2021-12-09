<?require_once "validador_acesso.php"?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

      <ul class="navbar-nav">
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
  </body>
</html>