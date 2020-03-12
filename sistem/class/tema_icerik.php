<?php

	## Tema İçerik Fonksiyonu ##
	function tema_icerik(){
	
		$do = g("do");
		Switch ($do){
		
			
			
			
			case "neden-biz":
				require_once TEMA."/neden-biz.php";
			break;
			
			
			case "satin-al":
				require_once TEMA."/satin-al.php";
			break;
			
			case "hakkimizda":
				require_once TEMA."/hakkimizda.php";
			break;	
			
			case "referanslar":
				require_once TEMA."/referanslar.php";
			break;	
			
			case "iletisim":
				require_once TEMA."/iletisim.php";
			break;	
			
			default:
			if (!g("do")){
				require_once TEMA."/default.php";
			}else {
				$hata = "Böyle bir sayfa bulunmuyor!";
				require_once TEMA."/hata.php";
			}
			break;
		
		}
	
	}
	
 ?>