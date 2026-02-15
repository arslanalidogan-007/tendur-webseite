<?php

	$galerie = new galerie;
	
	
	class galerie {
		public function returnUrlString($data,$max){
			$pics=array();
			$count=0;
			foreach($data as $pic => $url){
				array_push($pics,$url["DAT"]);
				$count++;
				
				if(!empty($max) && $max==$count){
					break;
				}
			}
			
			$pics=implode(",",$pics);
			return $pics;
		}
		
		static function CreateArray($order){
			
			// Lese Ordner aus
			$dir="gal/";
			// Erzeuge array mit Bildern
			$pictures=array();
			
			$handle=opendir($dir);
			while($file=readdir($handle)){
				if($file!="." && $file!=".."){

					$filename=$dir."".$file;
					$filedate=filemtime($filename);
					$pictures[]=array("DAT"=>$filename,"TIME"=>$filedate);
				}
			}
			// Sortieren Nach erstellungsdatum
			$sort=array();
			foreach($pictures as $key=>$val){
				$sort[]=$val["TIME"];
			}	
					
			array_multisort($sort,SORT_ASC,$pictures);
			
			if(!empty($order)){
				krsort($pictures);
			}
			
			return $pictures;
		}
		
		static function ShowGalerie($data,$max){
			
			// URL String
			$string=galerie::returnUrlString($data,$max);
			$count=0;
			echo "<div class='gala_frame'>";
			
			foreach($data as $key => $picture){
				echo "<div class='show' onclick='javascript:loadgrafik(\"$string\",$count)' style='background-image:url($picture[DAT])'></div>";
				$count++;
				
				if(!empty($max) && $count==$max){
					break;
				}
			}
			
			echo "</div>";
			
		}
		
	}
?>