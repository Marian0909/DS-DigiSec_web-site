<?php

	
	

	use PHPMailer\PHPMailer\PHPMailer;
	
	use PHPMailer\PHPMailer\Exception;

	require 'vendor/autoload.php';
	error_reporting(E_ERROR | E_PARSE);
	
	$mail = new PHPMailer(true);
	
	


	try {
		$firma = trim( $_POST['firma'] );
        $name = trim( $_POST['name'] );
        $vorname = trim( $_POST['vorname'] );
        $stadt = trim( $_POST['stadt'] );
        $contact = trim( $_POST['contact'] );
		
        $number = trim( $_POST['number'] );
		$email = trim( $_POST['email'] );
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
				$mail->Username   = 'kmm.200377@gmail.com'; 
				$mail->Password   = 'hgwrvppbvlvjkggz'; 
				$mail->SMTPSecure = 'tls';
				$mail->Port       = 587;
		
				$mail->setFrom('kmm.200377@gmail.com', 'DS-Digisec Web-site'); 
				$mail->addAddress('kmm.200377@gmail.com', ); 
				$mail->Subject = "Message";
				$mail->Body    = "Firma: $firma \n\nName: $name \n\nVorname: $vorname \n\nStadt: $stadt \n\nKontakt über: $contact \n\nTelefon: $number \n\n Email: $email \n\n \n\nNachricht: $message"; // повідомлення
		
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

 