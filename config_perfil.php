<?require_once "validador_acesso.php"?>
<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Help Desk</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    	<!--Font Awesome-->
    	<script src="https://kit.fontawesome.com/6eef05c72f.js" crossorigin="anonymous"></script>

    	<style>
      		.card-login {
        	padding: 30px 0 0 0;
        	width: 350px;
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

        		<div class="card-login">
         			<div class="card">
            			<div class="card-header text-light bg-dark">
              				Mudar sua senha:
            			</div>
            			<div class="card-body">
							<form method="POST" action="mudar.php" class="form" id="form_criar" >

								<div class="form-group">
									<input class="form-control" type="password" name="senhaAtual" id="senhaAtual" placeholder="Digite sua senha atual" minlength="5"><br>
								</div>

								<div class="form-group">
									<input class="form-control" type="password" name="senhaNova" id="senhaNova" placeholder="Digite sua nova senha" minlength="5"><br>
								</div>
								 <div class="form-group">
									<input class="form-control" type="password" name="senhaConfirma" id="senhaConfirma" placeholder="Confirme sua nova senha" minlength="5"><br>
								</div>

								<? if (isset($_GET['mudar']) && $_GET['mudar'] == 'pronto') {?>

                      				<div class="text-success">Senha alterada com sucesso!</div>

                  				<? } ?>

                  				<? if (isset($_GET['mudar']) && $_GET['mudar'] == 'erro') {?>

                      				<div class="text-danger">Erro na mudança de senhas, por favor digite as credenciais corretas</div>

                  				<? } ?>

								<input  class="btn btn-lg btn-info btn-block" type="submit" value="Confirma" id="cadastrar" name="cadastrar">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class=" fixed-bottom text-center text-white bg-dark">
    
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