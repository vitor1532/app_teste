<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css" />

  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header text-light bg-dark">
              Login
            </div>
            <div class="card-body">
              <? if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'sucesso') {?>

                <div class="text-success">Email cadastrado com sucesso no banco de dados</div>

              <? } ?>
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="usuario" class="form-control" placeholder="Insira seu e-mail ou nome de usuário">
                </div>

                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                  <? if (isset($_GET['login']) && $_GET['login'] == 'erro') {?>

                      <div class="text-danger">Erro ao autenticar o login, tente novamente</div>

                  <? } ?>


                  <? if (isset($_GET['login']) && $_GET['login'] == 'erro2') {?>

                      <div class="text-danger">antes de tentar acesso a paginas reestritas, faça o login</div>

                  <? } ?>


                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>

              <a href="cadastroPrincipal.php" class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</a>
            </div>
          </div>
        </div>
    </div>
  </div>
  </body>
</html>