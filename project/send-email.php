<?php

	
	

	use PHPMailer\PHPMailer\PHPMailer;
	
	use PHPMailer\PHPMailer\Exception;

	require 'vendor/autoload.php';
	error_reporting(E_ERROR | E_PARSE);
	
	$mail = new PHPMailer(true);
	
	


	try {
		$name = trim( $_POST['name'] );
		$email = trim( $_POST['email'] );
		// $subject = trim( $_POST['subject'] );
		$message = trim( $_POST['message'] );
		
		// check for error
		$error = false;
		if ( $name === "" ) { $error = true; }
		if ( $email === "" ) { $error = true; }
		// if ( $subject === "" ) { $error = true; } 
		if ( $message === "" ) { $error = true; }

		if(true)//isset($_POST['url']) && $_POST['url'] == '')
		{
			if ( $error == false )
			{
				$mail->isSMTP();
				$mail->Host       = 'smtp.gmail.com';
				$mail->SMTPAuth   = true;
				$mail->Username   = 'kmm.200377@gmail.com'; // пошта з якої відправляти
				$mail->Password   = 'hgwrvppbvlvjkggz'; // 16-ти значний пароль
				$mail->SMTPSecure = 'tls';
				$mail->Port       = 587;
		
				$mail->setFrom('kmm.200377@gmail.com', 'Kwodan'); // пошта з якої відправлено
				$mail->addAddress('kmm.200377@gmail.com', 'Denis'); // пошта на яку прийде смс (можна вказати самого себе)
				$mail->Subject = $subject;
				$mail->Body    = "Name: $name \n\nEmail: $email \n\nMessage: $message"; // повідомлення
		
				if($mail->send()){
					header('Location: http://ds-digisec.infinityfreeapp.com/');
				}
				else{
					echo'erroe';
				};
				
			}
			else 
			{
				echo 'error';
			}
		}
		else //BOT DETECTED
		{
			echo 'success.';
		}

	} catch (Exception $e) {
		echo "unsuccess";
	}


?>

 