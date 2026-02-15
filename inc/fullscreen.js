	
	function loadgrafik(current,pos){
		array=current.split(",");
		if(!pos){pos=0;}
		bild=new Image();
		bild.src=array[pos];
		
		
		if(!bild.width){
			window.setTimeout("loadgrafik('"+current+"',"+pos+")", 200);
		}
		else {
			fullscreen(current,pos,bild);
		}
	}
	
	function finblend(e,id){
		current=document.getElementById(id).style.opacity;
		document.getElementById(id).style.display="block";
		if(e<11){
			news=e/10;
			document.getElementById(id).style.opacity=news;
			e++;
			setTimeout("finblend('"+e+"','"+id+"')",15);	
		}
	}
	 
	function foublend(e,id){
		current=document.getElementById(id).style.opacity;
		
		if(e>0){
			news=e/10;
			document.getElementById(id).style.opacity=news;
			e--;
			setTimeout("foublend('"+e+"','"+id+"')",15);	
		}
		else {
			display = document.getElementById(id).style.display="none";
		}
	}
	
	
	function fullscreen(current,pos,bild){
		array=current.split(",");
		left=pos-1;
		if(left<0){left=array.length-1;}
		right=pos+1;
		if(right>=array.length){right=0;}
			
		document.getElementById('fs_left').innerHTML="<a onclick='loadgrafik(\""+current+"\","+left+")'>&lsaquo;</a>";
		document.getElementById('fs_right').innerHTML="<a onclick='loadgrafik(\""+current+"\","+right+")'>&rsaquo;</a>";

		fw=window.innerWidth-100;
		fh=window.innerHeight-200;
		fhf=window.innerHeight-40;

		bw = bild.width;
		bh = bild.height;
			if(bw > fw || bh > fh){

				difw=bw-fw;
				difh=bh-fh;
				
				if(difw>difh){
					
					dif=bw-difw;
					difp=dif/bw*100;

					nh=bh/100*difp;
					
					newwidth=dif;
					newheight=nh;
				}
				else {
					
					dif=bh-difh;
					difp=dif/bh*100;

					nh=bw/100*difp;
					
					newwidth=nh;
					newheight=dif;
				}
			}
			else {
				newwidth=bw;
				newheight=bh;
			}
			
			newtop=(fhf-newheight)/2;
			document.getElementById('switch').style.marginTop=newtop+'px';
			document.getElementById('switch').style.width=newwidth+'px';
			document.getElementById('switch').style.height=newheight+'px';
			document.getElementById('switch').style.backgroundSize=newwidth+'px'+" "+newheight+'px';
			document.getElementById('switch').style.backgroundImage="url("+bild.src+")";
			
			
			
			if(document.getElementById('fs').style.display!="block"){
				
			
				document.getElementById('fs').style.opacity="0";
				finblend('0',"fs");
			}
	}
	
	function fullscreen_out(){
		foublend('10',"fs");
	}