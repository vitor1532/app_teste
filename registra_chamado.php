<?require_once "validador_acesso.php"?>

<?php
			
	session_start();

	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	echo '<br>';
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	$texto = $_SESSION['id'] . '#' . $_SESSION['nomeUsuario'] . '#' . implode('#', str_replace('#', '-', $_POST)) . PHP_EOL;

	$arquivo = fopen('arquivo.txt', 'a');

	fwrite($arquivo, $texto);
	fclose($arquivo);

	header('Location: home.php');

?>