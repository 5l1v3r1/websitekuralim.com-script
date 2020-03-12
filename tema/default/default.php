<!-- Slider 1200x400 -->
	<div class="slider">
		<div id="slider" class="carousel slide" data-ride="carousel" data-interval="4000">
		<?php
		$query = query("SELECT * FROM sliderlar ORDER BY slider_id ASC");
		if (mysql_affected_rows()){
		?>
			
		  
		  <div class="carousel-inner" role="listbox">
			<?php
				while ($row = row($query)){
			?>
			<div class="item active">
				<img src="<?php echo SITE_URL; ?>/uploads/slider1.png" alt="<?php echo SITE_BASLIK; ?> - Slider">		
			</div>

			<div class="item">
			  <img src="<?php echo ss($row["slider_resim"]); ?>"  alt="<?php echo SITE_BASLIK; ?> - Slider">
			</div>
				<?php } ?>
		  </div>
		   <!-- Controls -->
		  <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" style="color:gold"></span>
		  </a>
		  <a class="right carousel-control" href="#slider" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" style="color:gold"></span>
		  </a>
		<?php } ?>
		</div>
	</div>	
	
	
	<div class="bilgi">
		<div class="container">
			<h3>Türk Ticaret Kanununa uygun web sitesine hemen sahip olun!</h3>
			<p>Ulaşmak istediğiniz kitlelere sürekli olarak sadece web sitenizle ulaşabilirsiniz. <br/> 
			Bu da ürün ve hizmetlerinizin daha çok satılmasını ve yeni müşterilere ulaşmanızı sağlar. <br/> 
			Niçin böyle bir sitenin sahibi olmayasınız? Aynı zamanda da yasal zorunluluklarınızı yerine getirmiş olursunuz.<br/> 
			Daha fazla geç kalmayın. Hemen bir web sayfası siparişi verin.</p>
		</div>
	</div>
	
	<!-- İçerik -->
	<div class="icerik">
	
		<div class="container visible-lg">
			<!-- Kutu -->
			<div class="kutu col-lg-3" style="border-color:#03a9f5;">
				<a href="<?php echo SITE_URL; ?>/satin-al"><h2>Ürünlerimiz</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/urunlerimiz.png" alt=""/>
				<p>
					Bir Web sitesinde olması gereken tüm özellikleri size sunuyoruz.
					Son teknolojileri barındıran mobil uyumlı hazır web siteleri.
				</p>
			</div>
			<!-- Kutu -->
			<div class="kutu col-lg-3" style="border-color:#D45D06;">
				<a href="<?php echo SITE_URL; ?>/hakkimizda"><h2>Hakkımızda</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/hakkimizda.png" alt=""/>
				<p>
					WebSiteKuralım ailesi olarak sizlere herhangi bir teknik bilgiye ve yazılıma gerek kalmadan yönetebileceğiniz bir site kuruyoruz.
				</p>
			</div>
			<!-- Kutu -->
			<div class="kutu col-lg-3" style="border-color:#94C03A;">
				<a href="<?php echo SITE_URL; ?>/referanslar"><h2>Referanslar</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/referanslar.jpg" alt=""/>
				<p>
					Müşterilerimize yaptığımız siteleri Referanslar sayfamızdan inceleyebilirsiniz.
				</p>
			</div>
			<!-- Kutu -->
			<div class="kutu col-lg-3" style="border-color:#DC0202;">
				<a href="<?php echo SITE_URL; ?>/iletisim"><h2>İletişim</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/iletisim.png" alt=""/>
				<p>
					Her türlü soru ve taleplerinizi bize hızlı bir şekilde yazabilirsiniz.
				</p>
			</div>
		</div>
		
		<div class="container visible-md">
			<!-- Kutu -->
			<div class="kutu col-md-3" style="border-color:#03a9f5;">
				<a href="#"><h2>Ürünlerimiz</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/urunlerimiz.png" alt=""/>
				<p>
					Bir Web sitesinde olması gereken tüm özellikler bizde!
					Son teknolojileri barındıran hazır web sitesi uygulaması 
				</p>
			</div>
			<!-- Kutu -->
			<div class="kutu col-md-3" style="border-color:#D45D06;">
				<a href="#"><h2>Hakkımızda</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/hakkimizda.png" alt=""/>
				<p>
					Bir Web sitesinde olması gereken tüm özellikler bizde!
					Son teknolojileri barındıran hazır web sitesi uygulaması 
				</p>
			</div>
			<!-- Kutu -->
			<div class="kutu col-md-3" style="border-color:#94C03A;">
				<a href="#"><h2>Referanslar</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/referanslar.jpg" alt=""/>
				<p>
					Bir Web sitesinde olması gereken tüm özellikler bizde!
					Son teknolojileri barındıran hazır web sitesi uygulaması 
				</p>
			</div>
			<!-- Kutu -->
			<div class="kutu col-md-3" style="border-color:#DC0202;">
				<a href="#"><h2>İletişim</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/iletisim.png" alt=""/>
				<p>
					Bir Web sitesinde olması gereken tüm özellikler bizde!
					Son teknolojileri barındıran hazır web sitesi uygulaması 
				</p>
			</div>
		</div>
		
		<div class="container visible-sm">
			<!-- Kutu -->
			<div class="kutu col-sm-4" style="border-color:#03a9f5;">
				<a href="#"><h2>Ürünlerimiz</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/urunlerimiz.png" alt=""/>
				<p>
					Bir Web sitesinde olması gereken tüm özellikler bizde!
					Son teknolojileri barındıran hazır web sitesi uygulaması 
				</p>
			</div>
			<!-- Kutu -->
			<div class="kutu col-sm-4" style="border-color:#D45D06;">
				<a href="#"><h2>Hakkımızda</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/hakkimizda.png" alt=""/>
				<p>
					Bir Web sitesinde olması gereken tüm özellikler bizde!
					Son teknolojileri barındıran hazır web sitesi uygulaması 
				</p>
			</div>
			<!-- Kutu -->
			<div class="kutu col-sm-4" style="border-color:#94C03A;">
				<a href="#"><h2>Referanslar</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/referanslar.jpg" alt=""/>
				<p>
					Bir Web sitesinde olması gereken tüm özellikler bizde!
					Son teknolojileri barındıran hazır web sitesi uygulaması 
				</p>
			</div>
			<!-- Kutu -->
			<div class="kutu col-sm-4" style="border-color:#DC0202;">
				<a href="#"><h2>İletişim</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/iletisim.png" alt=""/>
				<p>
					Bir Web sitesinde olması gereken tüm özellikler bizde!
					Son teknolojileri barındıran hazır web sitesi uygulaması 
				</p>
			</div>
		</div>
		
		<div class="container visible-xs">
			<!-- Kutu -->
			<div class="kutu col-xs-4" style="border-color:#03a9f5;">
				<a href="#"><h2>Ürünlerimiz</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/urunlerimiz.png" alt=""/>
				<p>
					Bir Web sitesinde olması gereken tüm özellikler bizde!
					Son teknolojileri barındıran hazır web sitesi uygulaması 
				</p>
			</div>
			<!-- Kutu -->
			<div class="kutu col-xs-4" style="border-color:#D45D06;">
				<a href="#"><h2>Hakkımızda</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/hakkimizda.png" alt=""/>
				<p>
					Bir Web sitesinde olması gereken tüm özellikler bizde!
					Son teknolojileri barındıran hazır web sitesi uygulaması 
				</p>
			</div>
			<!-- Kutu -->
			<div class="kutu col-xs-4" style="border-color:#94C03A;">
				<a href="#"><h2>Referanslar</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/referanslar.jpg" alt=""/>
				<p>
					Bir Web sitesinde olması gereken tüm özellikler bizde!
					Son teknolojileri barındıran hazır web sitesi uygulaması 
				</p>
			</div>
			<!-- Kutu -->
			<div class="kutu col-xs-4" style="border-color:#DC0202;">
				<a href="#"><h2>İletişim</h2></a>
				<img class="img-circle img-thumbnail" width="130" height="130" src="<?php echo TEMA_URL;?>/assets/img/iletisim.png" alt=""/>
				<p>
					Bir Web sitesinde olması gereken tüm özellikler bizde!
					Son teknolojileri barındıran hazır web sitesi uygulaması 
				</p>
			</div>
		</div>
		
	</div>
	