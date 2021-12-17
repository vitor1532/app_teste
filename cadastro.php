<?php

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$user = $_POST['nomeUsuario'];
	$connect = mysqli_connect('localhost', 'root');
	$db = mysqli_select_db($connect, 'app_teste_usuario');
	$insert = "INSERT INTO usuarios (email, senha, nomeUsuario) VALUES ('$login', '$senha', '$user')";

	$SQL = "
		SELECT id, email, senha, perfil_id
		FROM usuarios
		WHERE email = '$login'
	";
	$result = @mysqli_query($connect, $SQL) or die("erro no result");
	$total = @mysqli_num_rows($result);

	if($total) {
		header("Location: cadastroPrincipal.php?cadastro=erro");
	}else if(mysqli_query($connect, $insert) && $senha != '' && $senha != null && $login != '' && $login != null && $user != null && $user != '') {
		header("Location: index.php?cadastro=sucesso");
	}else {
		header('Location: cadastroPrincipal.php?cadastro=erro2');
	}

	mysqli_close($connect);

?>