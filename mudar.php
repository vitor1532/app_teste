<?require_once "validador_acesso.php"?>

<?php
	
	$nomeUsuario = $_SESSION['nomeUsuario'];
	$senhaAntiga = $_POST['senhaAtual'];
	$senhaNova = $_POST['senhaNova'];
	$senhaConfirma = $_POST['senhaConfirma'];
	
	//SQL
	$connect = mysqli_connect("localhost", "root");
	$db = mysqli_select_db($connect, 'app_teste_usuario');
	$usuario_db = "
		SELECT * 
		FROM usuarios
		WHERE nomeUsuario = '$nomeUsuario'
		AND senha = '$senhaAntiga'
	";
	$result = @mysqli_query($connect, $usuario_db) or die("erro no result");
	$total = @mysqli_num_rows($result);

	$trocar = "
		UPDATE usuarios
		
		SET senha = REPLACE(senha, '$senhaAntiga', '$senhaNova')
		WHERE nomeUsuario = '$nomeUsuario'
	";
	$update = @mysqli_query($connect, $trocar) or die("erro na troca");

	if($total){//se a senha for igual à senha da conta 

		//continuar
		if($senhaNova == $senhaConfirma){//se a senhaNova for igual à senhaConfirma

			$update;
			header('Location: config_perfil.php?mudar=pronto');

		}
	}else {
		header('Location: config_perfil.php?mudar=erro');
	}
?>