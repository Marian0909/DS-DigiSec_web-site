<?php

	
	

	use PHPMailer\PHPMailer\PHPMailer;
	
	use PHPMailer\PHPMailer\Exception;

	require 'vendor/autoload.php';
	error_reporting(E_ERROR | E_PARSE);
	
	$mail = new PHPMailer(true);
	
	


	try {
		$vorname = trim( $_POST['vorname'] );
        $nachname = trim( $_POST['nachname'] );
		$email = trim( $_POST['email'] );
		// $subject = trim( $_POST['subject'] );
        $number = trim( $_POST['number'] );
		$interesies = trim( $_POST['interesies'] );
        $anstellungF = trim( $_POST['anstellung-1']);
        $anstellungS = trim( $_POST['anstellung-2']);
		$message = trim($_POST['message'] );

		
		// check for error
		$error = false;
		// if ( $vorname === "" ) { $error = true; }
        // if ( $nachname === "" ) { $error = true; }
		// if ( $email === "" ) { $error = true; }
        // if ( $number === "" ) { $error = true; }
        // // if ( $interesies === "" ) { $error = true; }
        // // if ( $anstellung === "" ) { $error = true; }
		// if ( $message === "" ) { $error = true; }

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
		
				$mail->setFrom('kmm.200377@gmail.com', 'DS-Digisec Web-site'); // пошта з якої відправлено
				$mail->addAddress('kmm.200377@gmail.com', ); // пошта на яку прийде смс (можна вказати самого себе)
				$mail->Subject = "Job candidate";
				$mail->Body    = "Vorname: $vorname \n\nNachname: $nachname \n\nEmail: $email \n\nNumber: $number \n\nIch interessiere mich für eine Anstellung als: $interesies \n\nAnstellung: $anstellungF $anstellungS \n\nNachricht: $message"; // повідомлення
		
				if($mail->send()){
					header('Location: http://ds-digisec.infinityfreeapp.com/');
				}
				else{
					echo'error.';
				};
				
			}
			else 
			{
				echo 'error,';
			}
		}
		

	} catch (Exception $e) {
		echo "unsuccess";
	}


?>

 