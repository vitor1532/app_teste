<?php
	require "lib/PHPMailer/Exception.php";
	require "lib/PHPMailer/OAuth.php";
	require "lib/PHPMailer/PHPMailer.php";
	require "lib/PHPMailer/POP3.php";//recebimento de email
	require "lib/PHPMailer/SMTP.php";//envio de email


	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	class Mensagem {

		private $para = null;
		private $assunto = null;
		private $mensagem = null;
		public $status = ['codigo_status' => null, 'descricao_status' => ''];

		public function __get($attr) {

			return $this->$attr;

		}

		public function __set($atributo, $valor) {

			$this->$atributo = $valor;

		}

		public function mensagemValida() {
			if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
				return false;
			}
			return true;
		}

	}

	$mensagem = new Mensagem();

	$mensagem->__set('para', 'alcachofrafrederico@gmail.com');
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);
/*
	echo '<pre>';
	print_r($mensagem);
	echo '</pre>';
*/
	if(!$mensagem->mensagemValida()) {

		echo 'Mensagem é inválida';
		header('Location: contato.php?msg=erro');

	} 

	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = false;                      //Enable verbose debug output
	    $mail->isSMTP();                                            //Send using SMTP
	    $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = 'b16ab130b18401';                     //SMTP username
	    $mail->Password   = 'e339e2341ef805';                               //SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
	    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	    

	    //Recipients
	    $mail->setFrom('alcachofrafrederico@gmail.com', 'alcachofra remetente');
	    $mail->addAddress($mensagem->__get('para'));     //Add a recipient
	    //$mail->addReplyTo('alcachofrafrederico@gmail.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Attachments
	   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = $mensagem->__get('assunto');
	    $mail->Body    = $mensagem->__get('mensagem');
	    $mail->AltBody = 'É necessário utilizar um client que suporte HTML para ter acesso total ao conteúdo dessa mensagem';

	    $mail->send();

	    $mensagem->status['codigo_status'] = 1;
	    $mensagem->status['descricao_status'] = 'E-mail enviado com sucesso';

	} catch (Exception $e) {
		$mensagem->status['codigo_status'] = 2;
		$mensagem ->status['descricao_status'] = 'Falha ao enviar o e-mail, por favor tente novamente mais tarde. Detalhes do erro: ' . $mail->ErrorInfo;
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Help Desk</title>

    	<!--Boostrap-->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    	<!--Font Awesome-->
    	<script src="https://kit.fontawesome.com/6eef05c72f.js" crossorigin="anonymous"></script>

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
	        <div class="card-home">
	          <div class="card">
	            <div id="wrapper" class="col-md-12  justify-content-center">
					
					<? if($mensagem->status['codigo_status'] == 1) {?> 
						<div class="container"> 
							<h1 class="display-4 text-success"> Sucesso </h1> 
							<p> <?= $mensagem->status['descricao_status'] ?> </p>
							<a href="contato.php" class="btn btn-success btn-lg mt-5 mb-5 text-white">Voltar</a>
						</div>

					<?}?>

					<? if($mensagem->status['codigo_status'] == 2) {?> 
						<div class="container"> 
							<h1 class="display-4 text-danger"> Ops </h1> 
							<p> <?= $mensagem->status['descricao_status'] ?> </p>
							<a href="contato.php" class="btn btn-danger btn-lg mt-5 mb-5 text-white">Voltar</a>
						</div>
						
					<?}?>

					</div>			
				</div>
			</div>
		</div>
	</div>

		<footer class="fixed-bottom text-center text-white bg-dark">
    
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