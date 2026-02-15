<?php ob_start();?>

<!DOCTYPE html>
<html>
	<head>
		<title>TENDUR Restaurant | Wesseling - <?php echo $_GET["s"];?></title>
		
		<meta charset="iso-8859-1" />
		<meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no" />
		<meta name="author" content="tendur.de, info@tendur.de" /> 
		<meta name="publisher" content="dextrue.de" /> 
		<meta name="copyright" content="(c)<?php echo date("Y");?> Tendur Restaurant" />
		<meta name="language" content="DE" />
		<meta name="keywords" content="Restaurant, Koeln, Wesseling, Tendur, Traditionsküche, Gastronomie, Essvergnügen, Spezialitäten" />
		<meta name="description" content="Wir möchten Ihnen mit ausgesuchten Spezialitäten aus der Traditionsreichen Küche Anatoliens und Mesopotamiens ein besonderes Essvergnügen bereiten. Lassen Sie sich zum Beispiel von unseren Grillspezialitäten aus unserem Holzkohlegrill verwöhnen. Unsere hausgemachten und stets frisch zubereiteten Gerichte treffen ganz bestimmt Ihren Geschmack." />
		<meta name="robots" content="index,follow" />
		<meta name="audience" content="alle" />
		<meta name="page-topic" content="Restaurant, Lifestyle, Gastronomie" />
		<meta name="revisit-after" CONTENT="7 days" />

		<link rel="icon" href="favicon.ico" type="image/x-icon" /> 
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120-precomposed.png" /> 
		<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152-precomposed.png" />

		<link rel="stylesheet" href="design.css" />
		
	</head>
	<body>
		
		<div class='back_foot'></div>
		<div class='fullscreen' id='fs2'></div>
		<div class='fullscreen' id='fs'><div class='fs_grafik' id='switch'><div id='fs_left'></div><div id='fs_right'></div><div class='out_fs' onclick='fullscreen_out()'>&times;</div></div></div>
	
		<div class='mobil_open' onclick='window.location="#footer"'>
			<p>Öffnungszeiten<br>
			<img src='img/ors.png'>		
			</p>
		</div>
		
		<header>
			<div class='c'>
				<table>
					<tr>
						<td><img class='logo' src='img/logo3.png'></td>
					</tr>
				</table>
				<a class='anker' name='content'></a>
				<div class='block'>
					<a href='Kontakt.htm#content'>Kontakt</a>
					<a href='Impressum.htm#content'>Impressum</a>
					<a href='Datenschutz.htm#content'>Datenschutz</a>
				</div>

			</div>
			
		</header>
		
		<nav>
			<div class='c'>
				
					<?php 
					echo "<a "; if($_GET["s"]=="Start"){echo " class='focus'";} echo " href='Start.htm#content'>Startseite</a>";
					echo "<a "; if($_GET["s"]=="Galerie"){echo " class='focus'";} echo " href='Galerie.htm#content'>Galerie</a>";
					echo "<a href='Speisekarte.pdf' target='_blank'>Speisekarte</a>";
					echo "<a "; if($_GET["s"]=="Anfahrt"){echo " class='focus'";} echo " href='Anfahrt.htm#content'>Anfahrt</a>";
					?>
					<div class='network'>
					<div class='button' onclick='window.open("https://www.facebook.com/tendur.wesseling/");'><img src='img/f_fb.png'></div>
					<div class='button' onclick='window.open("https://www.instagram.com/tendur2010/?hl=de");'><img src='img/f_in.png'></div>
					<span style='float:right;'>Besuche uns auf: </span>
					</div>
			</div>
		</nav>
		
		<section>
			<div class='c'>
			<?php include("inc/change_page.php");?>
			</div>
		</section>
		
		<section class=' footer'>
			<div class='c'><p class='rights'>© <?php echo date("Y");?> Tendur Restaurant. Webdesign by <a href='https://dextrue.de' target='_blank' class='_color_blue'>Dextrue.de</a>. <br>All rights reserved.</p></div>
		</section>
		
		
		<footer>
			<div class='c'>
				<fieldset>
					<a name='footer'></a>
					<h2>Reservieren unter:</h2>	
					<p class='_info'>02236 / 33 12 160</p>
				</fieldset>
				
				<fieldset>
					<h2 class='_tcenter'>Öffnungszeiten:</h2>
					<p class='_info _tcenter'>Täglich von 10:30 - 23:00 Uhr</p>
				</fieldset>
				
				<fieldset>
					<h2 class='_tright'>Unsere Adresse:</h2>
					<p class='_tright'>Flach-Fengler-Str. 78<br>50389 Wesseling</p>
				</fieldset>

			</div>
		</footer>
	</body>
</html>


<?php ob_flush();?>