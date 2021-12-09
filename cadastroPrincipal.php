<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Help Desk</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
              				Cadastro
            			</div>
            			<div class="card-body">
							<form method="POST" action="cadastro.php" class="form" id="form_criar" >

								<div class="form-group">
									<input class="form-control" type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome de usuário" required minlength="5"><br>
								</div>

								<div class="form-group">
									<input class="form-control" type="email" name="login" id="login" placeholder="E-mail" required><br>
								</div>
								 <div class="form-group">
									<input class="form-control" type="password" name="senha" id="senha" placeholder="Senha" required><br>
								</div>

								<? if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro2') {?>

									<div class="text-danger mb-2">Erro ao cadastrar, favor inserir credenciais válidas.</div>

								<? } ?>

								<? if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro') {?>

									<div class="text-danger mb-2">Email já cadastrado</div>

								<? } ?>
									
								<input  class="btn btn-lg btn-info btn-block" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="jquery-2.1.4.min.js"></script>
       <script src="jquery.validate.min.js"></script>
       <script>
             $(function(){
                    $("#form_criar").validate();
             });
       </script>

	</body>
</html>