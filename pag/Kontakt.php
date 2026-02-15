
<h1>Kontakt</h1>
<p class='info'>Um mit uns direkt per E-Mail in Kontakt zu treten, nutzen Sie dieses Formular. In der Regel werden Sie innerhalb der nächsten 48h eine Antwort auf Ihre Anfrage erhalten.</p>


	<?php
	// Kontakt EMail zusammenfassen
	if(isset($_POST["send_ko"])){
		if(!empty($_POST["k01"]) && !empty($_POST["k05"]) && !empty($_POST["k03"]) && !empty($_POST["k04"]) && !empty($_POST["k06"]) && empty($_POST["k02"])){
		  $kontact->SendMail($_POST);
		  echo "<p class='sys_msg3'><br><br>Ihre Nachricht wurde gesendet</p>";	
		}
		if(empty($_POST["k01"]) or empty($_POST["k05"]) or empty($_POST["k03"]) or empty($_POST["k04"])){
		  echo "<p class='sys_msg3'><br><br>Deine Nachricht konnte leider nicht versendet werden. Fülle bitte alle Felder aus.</p>";	
		}
	}
	

	?>

	<form method="post">
	<p><br><span class='info'>Kontakt Daten</span></p>
		<p><select class='_max' name='k06'><option>Herr</option><option>Frau</option></select></p>
		<p><input name="k01" placeholder='Ihr vollständiger Name'></p>

		<p><input name="k03" type='email' placeholder='Ihre E-Mail Adresse'></p>
		<p><input name="k05" placeholder='Telefonnummer'></p>
	<p><br></p>


	<p><textarea class='new' name="k04" style='height:500px;' placeholder='Wie können wir weiter helfen ? '></textarea></p>
	<input name="k02" class='_none' name='tel' value='' placeholder="Telefon nummer" autocomplete="off">

	<p><input type="submit" value="Senden" name='send_ko'></p>
	</form>

