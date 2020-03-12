<?php 

	## Tema BAŞLIK - DESC - KEYW Fonksiyonu ##
	function tdk(){
	
		$do = g("do");
		Switch ($do){
			
			
			case "neden-biz":
			$title = "Neden Biz - ".SITE_TITLE;
			$desc = ss(SITE_DESC);
			$keyw = ss(SITE_KEYW);
			$canonical = ss(URL)."/neden-biz";
			break;
			
			case "satin-al":
			$title = "Satın Al - ".SITE_TITLE;
			$desc = ss(SITE_DESC);
			$keyw = ss(SITE_KEYW);
			$canonical = ss(URL)."/satin-al";
			break;
			
			case "hakkimizda":
			$title = "Hakkımızda - ".SITE_TITLE;
			$desc = ss(SITE_DESC);
			$keyw = ss(SITE_KEYW);
			$canonical = ss(URL)."/hakkimizda";
			break;
			
			case "referanslar":
			$title = "Referanslar - ".SITE_TITLE;
			$desc = ss(SITE_DESC);
			$keyw = ss(SITE_KEYW);
			$canonical = ss(URL)."/referanslar";
			break;
			
			case "iletisim":
			$title = "İletişim - ".SITE_TITLE;
			$desc = ss(SITE_DESC);
			$keyw = ss(SITE_KEYW);
			$canonical = ss(URL)."/iletisim";
			break;
			
			default:
			$title = ss(SITE_TITLE);
			$desc = ss(SITE_DESC);
			$keyw = ss(SITE_KEYW);
			$canonical = ss(URL);
			break;
		
		}
		
		echo '<title>'.$title.'</title>'."\n";
		echo '<meta name="description" content="'.$desc.'"/>';
		echo "\n";
		echo '<meta name="keywords" content="'.$keyw.'"/>';
		echo "\n";
		echo '<link rel="canonical" href="'.$canonical.'"/>';
		if(empty(SITE_AUTHOR) == false){
			echo "\n";
			echo '<link rel="author" href="'.SITE_AUTHOR.'"/>';
		}
		if(empty(SITE_PUBLISHER) == false){
			echo "\n";
			echo '<link rel="publisher" href="'.SITE_PUBLISHER.'"/>';
		}
		if(empty(SITE_GOOGLE_WEBMASTER) == false){
			echo "\n";
			echo '<meta name="google-site-verification" content="'.SITE_GOOGLE_WEBMASTER.'" />';
		}
		if(empty(SITE_ALEXA_KOD) == false){
			echo "\n";
			echo '<meta name="alexaVerifyID" content="'.SITE_ALEXA_KOD.'"/>';
		}
		if(empty(SITE_FAVICON) == false){
			echo "\n";
			echo '<link rel="shortcut icon" href="'.SITE_FAVICON.'" type="image/x-icon">';
			echo "\n";
			echo '<link rel="icon" href="'.SITE_FAVICON.'" type="image/x-icon">';
		}
	}

?>