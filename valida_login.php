<?require_once "validador_acesso.php"?>

<?php

	//iniciar o recurso de sessão
	session_start();

	print_r($_POST);

	//SQL
	$connect = mysqli_connect("localhost", "root");
	$nomeUsuario = mysqli_real_escape_string($connect, $_POST['usuario']);
	$email = mysqli_real_escape_string($connect, $_POST['usuario']);
	$senha = mysqli_real_escape_string($connect, $_POST['senha']);
	$db = mysqli_select_db($connect, 'app_teste_usuario');
	$SQL = "
		SELECT *
		FROM usuarios
		WHERE email = '$email'
		AND  senha = '$senha'
		OR nomeUsuario = '$nomeUsuario'
		AND senha = '$senha'
	";
	//sql injection for tests: ' or ''='
	$result = @mysqli_query($connect, $SQL) or die("erro no result");
	$total = @mysqli_num_rows($result);
	$row = mysqli_fetch_row($result);
	
	//variavel que verifica se a autenticação foi realizada
	$usuario_autenticado = false;
	//variavel de id do usuario
	$usuario_id = $row[4];
	$usuario_perfil_id = $row[3];
	//array dos perfis
	$perfis = [1 => 'Administrativo', 2 => 'Usuário'];

	//se a query retornar o valor correto:
	if($total) {

		$usuario_autenticado = true;
		echo 'usuário autenticado';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] =$usuario_perfil_id;
		$_SESSION['nomeUsuario'] = $nomeUsuario;
		header('Location: home.php');

	}else {
		$_SESSION['autenticado'] = 'NAO';
		echo "usuario nao autenticado";
		header('Location: index.php?login=erro');
	}

?>