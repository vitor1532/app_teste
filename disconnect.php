<?php
	
	session_start();

	session_destroy();

	header('Location: http://localhost/app_teste/index.php');

?>