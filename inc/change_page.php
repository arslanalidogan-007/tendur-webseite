<?php
	

	function pfadCheck($page,$content){
		$file="pag/".$content."$page.php";
		if(file_exists($file)){
			return $file;
		}
		return 0;
	}
	

	if(!empty($_GET["s"])){
		$_GET["s"]=trim($_GET["s"]);
		$found=0;
		$path=pfadCheck($_GET["s"],"sys/");
		if(!empty($path)){
			if(file_exists("lib/class_$_GET[s].php")){include_once "lib/class_$_GET[s].php";}
			$daten=file($path);
			echo "<section class='color2'><div class='center'></div></section>";

			echo "<section><div class='center'><table><tr><td class='align_top'>";
			include($path);
			echo "</td>";
				
			echo "<td class='sidebar align_top'>";
				base::sidebar($db,$user);
			echo "</td>";
			echo "</tr></table></div></section>";
			
			$found++;
		}
		
		if(empty($found)){
			$path=pfadCheck($_GET["s"],"");
			if(!empty($path)){
				if(file_exists("lib/lib_$_GET[s].php")){include_once "lib/lib_$_GET[s].php";}
				include($path);
				$found++;
			}
		}
		
		
		if(empty($found)){echo "<section class='content'><div class='center'><h1>404 Error</h1><p class='info'>Die gewünschte Seite konnte nicht gefunden werden. Bitte prüfe ob der Link auch korrekt ist, anderfalls wurde die Seite wohl gelöscht.</p></div></section>";}
		
	}
	else {
		header("Location:Start.htm");
	}


?>