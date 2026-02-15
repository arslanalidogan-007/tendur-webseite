<?php
	
	$kontact= new kontact;

	class kontact {
		
		public function send_mail($data){
			require_once("mail/class.phpmailer.php");
			//Instanz von PHPMailer bilden
		  $mail = new PHPMailer();
		  // Parameter setzen
			$mail->IsSMTP(); //Versand SMTP festlegen
			$mail->Host = "mail.dextrue.de"; //SMTP-Server setzen
			$mail->SMTPAuth = true;     //Authentifizierung aktivieren
		  $mail->Username = "no-reply@dextrue.de";  // SMTP Benutzername
			$mail->Password = "----"; // SMTP Passwort
		  $mail->IsHTML(true);
		  //$mail->AddEmbeddedImage('logo.jpg', 'logoimg', 'logo.jpg'); // attach file logo.jpg, and later link to it using identfier logoimg
		  $mail->AltBody='';
			// Return Path setzen
			$mail->Sender = "noreply@tendur.de";
			//Absenderadresse der Email setzen
			$mail->From = "noreply@tendur.de";
			//Name des Abenders setzen
			$mail->FromName = "[Website Kontakt-formular]";
			//Betreff der Email setzen
			$mail->Subject = "Online Anfrage";
			//Text der EMail setzen
			$mail->Body = "Test";
			//Empfaengeradresse setzen (mehrere Empfaenger durch Komma trennen, soll jede E-Mail separat verschickt werden so muss ein Array uebergeben werden)
			$mail->AddAddress("info@tendur.de");
			$mail->Send();
		}
		
		public function SendMail($data){
				$empfaenger = 'info@tendur.de';
				$header  = 'MIME-Version: 1.0' . "\r\n";
				$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$header .= "From: $data[k01] <$data[k03]>" . "\r\n";
				
				$content = "<h3>Kontakt-Daten</h3>";
				$content.= "$data[k06] $data[k01]<br>";
				$content.= "E-Mail: $data[k03]<br>";
				$content.= "Tel: $data[k05]<br>";
				$content.= "<br><b>Anliegen:<br></b> $data[k04]";
				$content.= "<br><br>";

				mail($empfaenger, "[Website Kontakt-formular]", $content, $header);
				return true;
			
		}
		
	}
?>