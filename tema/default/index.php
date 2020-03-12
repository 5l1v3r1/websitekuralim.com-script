<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo TEMA_URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo TEMA_URL; ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo TEMA_URL; ?>/assets/css/style.css" rel="stylesheet">
	<?php tdk(); ?>
</head>
<body>
	
	<!-- Header -->
	<header>
	
		<!-- Üst Bilgi -->
		
		<div class="row ustBilgi">
			<div class="cizgi"></div>
			<?php 
				$query = query("SELECT * FROM anasayfa_mesaj WHERE mesaj_onay = 1 ORDER BY id DESC LIMIT 1");
				if(mysql_affected_rows()){
					$row = row($query);
			?>
			<div class="container">
				<p><?php echo $row["icerik"]; ?></p>	
			</div>
			<?php } ?>
		</div>
		
		<!-- Logo -->
		<div class="logo">
			<h1>
				<center>				
					<a title="<?php echo SITE_BASLIK; ?>" href="<?php echo SITE_URL; ?>"><img class="img-responsive" src="<?php echo SITE_LOGO;?>" alt=""/></a>
				</center>
			</h1>
		</div>
		
		<!-- Menü -->
		<div class="row menu">
			<div class="container">
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<a class="navbar-brand visible-xs" href="#"><?php echo SITE_BASLIK; ?></a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
						<li class="<?php echo !g("do") ? 'active' : null; ?>"><a href="<?php echo SITE_URL; ?>"><span class="fa fa-home"></span> <span class="ana">Anasayfa</span></a></li>
						<li class="<?php echo g("do") == "satin-al" ? 'active' : null; ?>"><a href="<?php echo SITE_URL; ?>/satin-al">Ürünlerimiz</a></li>
						<li class="<?php echo g("do") == "referanslar" ? 'active' : null; ?>"><a href="<?php echo SITE_URL; ?>/referanslar">Referanslar</a></li>
						<li class="<?php echo g("do") == "neden-biz" ? 'active' : null; ?>"><a href="<?php echo SITE_URL; ?>/neden-biz">Neden Biz</a></li>
						<li class="<?php echo g("do") == "hakkimizda" ? 'active' : null; ?>"><a href="<?php echo SITE_URL; ?>/hakkimizda">Hakkımızda</a></li>
						<li class="<?php echo g("do") == "iletisim" ? 'active' : null; ?>"><a href="<?php echo SITE_URL; ?>/iletisim">İletişim</a></li>
					  </ul>
					</div>
				  </div>
				</nav>					
			</div>
		</div>	
		
		
		<div class="clear"></div>
	</header>
	
	<?php tema_icerik(); ?>
	
		<!-- Müşteri Yorumları -->
	<div class="musteriYorum">
		<div class="container">
			<h1>Müşterilerimizin Yorumları</h1>
				<div id="slider2">
				<?php
					$query = query("SELECT * FROM yorumlar ORDER BY RAND()");
					if (mysql_affected_rows()){
						
					?>
					<ul>
						<?php
							while ($row = row($query)){
								
						?>
						<li>
							<div class="slider-container">
								<p>"<?php echo ss($row["yorum_icerik"]); ?>"</p>
								<h4>#<?php echo ss($row["yorum_sahibi"]); ?></h4>
							</div>
						</li>
						<?php } ?>
					</ul>
				<?php } ?>
				</div>
		</div>
	</div>
	
	
	<!-- Footer -->
	<footer>
		
		<div class="row footer">
			<div class="container">
				<div class="col-md-4 left">
					<span>Bağlantılar</span>
					<ul>
						<li><a href="<?php echo SITE_URL; ?>" title="Anasayfa">Anasayfa</a></li>
						<li><a href="<?php echo SITE_URL; ?>/satin-al" title="Satın Al">Satın Al</a></li>
						<li><a href="<?php echo SITE_URL; ?>/referanslar" title="Referanslar">Referanslar</a></li>
						<li><a href="<?php echo SITE_URL; ?>/neden-biz" title="Neden Biz">Neden Biz</a></li>
						<li><a href="<?php echo SITE_URL; ?>/hakkimizda" title="Hakkımızda">Hakkımızda</a></li>
						<li><a href="<?php echo SITE_URL; ?>/iletisim" title="İletişim">İletişim</a></li>
					</ul>
				</div>
				<div class="col-md-4 mid">
					<span>İletişim Bilgilerimiz</span>
					<ul>
						<li><strong>Telefon:</strong> <?php echo SITE_TELEFON; ?></li>
						<li><strong>E-Posta:</strong> <?php echo SITE_MAIL; ?></li>
					</ul>
				</div>
				<div class="col-md-4">
					<!--<img src="" alt="Resim" width="300" height="250"/>-->
				</div>
			</div>
		</div>	
		
		<div class="container">
			<!-- Copyright -->
			<div class="col-md-10 copyright">
				<?php echo SITE_FOOTER_ICERIK; ?> - <a title="<?php echo SITE_BASLIK; ?>" href="<?php echo SITE_URL; ?>">WebSiteKuralim.com</a>
			</div>
			<!-- Sosyal -->
			<div class="col-md-2 sosyal">
				<ul>
					<li><a href="<?php echo FB; ?>"><span class="fa fa-facebook-official"></span></a></li>
					<li><a href="<?php echo GP; ?>"><span class="fa fa-google-plus-square"></a></span></li>
					<li><a href="<?php echo TW; ?>"><span class="fa fa-twitter-square"></span></a></li>
					<li><a href="<?php echo YT; ?>"><span class="fa fa-youtube-square"></a></span></li>
				</ul>
			</div>
		</div>
	</footer>
	

    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo TEMA_URL; ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo TEMA_URL; ?>/assets/js/bootstrap-hover-dropdown.js"></script>
    <script src="<?php echo TEMA_URL; ?>/assets/js/script.js"></script>
</body>
</html>