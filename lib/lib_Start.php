<?php

	$start=new start;

	class start {
		public function loadShortGal(){
			include("lib_Galerie.php");
			
			$return=$galerie->CreateArray(1); 
			$galerie->ShowGalerie($return,4);
			
		}
	}
?>