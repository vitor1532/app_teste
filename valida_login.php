<?require_once "validador_acesso.php"?>

<?php

	//iniciar o recurso de sessão
	session_start();

	$nomeUsuario = $_POST['usuario'];
	$email = $_POST['usuario'];
	$senha = $_POST['senha'];

	print_r($_POST);

	//SQL
	$connect = mysqli_connect("localhost", "root");
	$db = mysqli_select_db($connect, 'app_teste_usuario');
	$SQL = "
		SELECT id, email, senha, perfil_id
		FROM usuarios
		WHERE email = '$email'
		AND  senha = '$senha'
		OR nomeUsuario = '$nomeUsuario'
		AND senha = '$senha'
	";
	$result = @mysqli_query($connect, $SQL) or die("erro no result");
	$total = @mysqli_num_rows($result);
	$row = mysqli_fetch_row($result);
	
	//variavel que verifica se a autenticação foi realizada
	$usuario_autenticado = false;
	//variavel de id do usuario
	$usuario_id = $row[0];
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
		header('Location: home.php');

	}else {
		$_SESSION['autenticado'] = 'NAO';
		echo "usuario nao autenticado";
		header('Location: index.php?login=erro');
	}

?>