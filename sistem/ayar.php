<?php
	
	## Güvenlik ##
	echo !defined("GUVENLIK") ? die("Erisim Engellendi") : null;

	## Hataları Gizle ##
	error_reporting(0);
	
	## Session Başlatma ##
	session_start();
	
	## OB Sıkıştırma ##
	if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'],'gzip')){
		ob_end_clean();
        ob_start('ob_gzhandler');
	}else{
		ob_start();
	} 
	
	## Bağlantı Değişkenleri ##
	$host 	= "localhost";
	$user 	= "root";
	$pass 	= "";
	$db		= "site_db";
	
	## Mysql Bağlantısı ##
	$baglan = mysql_connect($host, $user, $pass) or die (mysql_Error());
	
	## Veritabanı Seçimi ##
	mysql_select_db($db, $baglan) or die (mysql_Error());
	
	## Karakter Sorunu ##
	mysql_query("SET CHARACTER SET 'utf8'");
	mysql_query("SET NAMES 'utf8'");
	
	## Tarih ve Saat Ayarı ##
	date_default_timezone_set('Europe/Istanbul');
	putenv("TZ=Europe/Istanbul");
	setlocale(LC_TIME, 'tr_TR.UTF-8');
	@setlocale(LC_ALL, 'turkish'); 
	
	## Genel Ayarları ##
	$query = mysql_query("SELECT * FROM ayarlar");
	$ayar = mysql_fetch_array($query);
	
		## Sabitler ##
		define("PATH", realpath("."));
		define("TEMA_URL", $ayar["site_url"]."/tema/".$ayar["site_tema"]);
		define("TEMA", PATH."/tema/".$ayar["site_tema"]);
		
		define("SITE_URL", $ayar["site_url"]);
		define("URL", $ayar["site_url"]);
		define("SITE_BASLIK", $ayar["site_baslik"]);
		define("SITE_SAAT",date("H:i d/m/y"));
		
		define("SITE_TITLE", $ayar["site_baslik"]);
		define("SITE_DESC", $ayar["site_desc"]);
		define("SITE_KEYW", $ayar["site_keyw"]);
		define("SITE_LOGO", $ayar["site_logo_url"]);
		define("SITE_FAVICON", $ayar["site_favicon_url"]);
		define("SITE_AUTHOR", $ayar["site_author"]);
		define("SITE_PUBLISHER", $ayar["site_publisher"]);
		define("SITE_GOOGLE_WEBMASTER", $ayar["site_google_kod"]);
		define("SITE_ALEXA_KOD", $ayar["site_alexa_kod"]);
		define("SITE_FOOTER_ICERIK", $ayar["site_footer_icerik"]);
		define("SITE_BAKIM_MESAJ", $ayar["site_bakim_mesaj"]);
		define("SITE_TELEFON", $ayar["site_telefon"]);
		define("SITE_MAIL", $ayar["site_mail"]);
	
	## Sosyal ##
	$query2 = mysql_query("SELECT * FROM bilgiler");
	$sosyal = mysql_fetch_array($query2);
		
		define("FB", $sosyal["site_facebook"]);
		define("TW", $sosyal["site_twitter"]);
		define("YT", $sosyal["site_youtube"]);
		define("GP", $sosyal["site_google"]);
?>