<?php 

	if($_POST){
		
		$adSoyad = p("adSoyad");
		$eposta = p("eposta");
		$telefon = p("telefon");
		$konu = p("konu");
		$icerik = p("icerik");
		
		
			if(!$adSoyad || !$telefon || !$eposta || !$konu || !$icerik){
				$sonuc = '<div class="alert alert-danger" role="alert">(*) olan tüm alanları doldurmanız gerekiyor..</div>';
			}else{
				if(strpos($eposta,"@")){
					$ip_adresi = IP();
					
					$query = query("INSERT INTO iletisim_kutusu SET
					iletisim_adsoyad = '$adSoyad',
					iletisim_telefon = '$telefon',
					iletisim_eposta = '$eposta',
					iletisim_konu = '$konu',
					iletisim_icerik = '$icerik',
					iletisim_ip = '$ip_adresi'
					");
					
					if(mysql_affected_rows()){
						$sonuc = '<div class="alert alert-success" role="alert">Mesajınız başarıyla gönderildi.. İlginiz için teşekkür ederiz.</div>';
					}else{
						$sonuc = '<div class="alert alert-warning" role="alert">Mesajınız gönderilemedi..</div>';
					}
				
				}else{
					$sonuc = '<div class="alert alert-danger" role="alert">Eposta biçiminiz doğru değildir..</div>';
				}	
			}
	}

?>
<div class="sayfaBaslik">
	<div class="container">
		İletişim
	</div>
</div>
<div class="container">
	<div class="col-md-7">
	<div class="contact">
		<div class="alert alert-info text-center" role="alert" style="font-size:15px">
			Size, bildiriminizle ilgili geri dönüş yapabilmemiz için aşağıdaki alanları eksiksiz olarak doldurmanızı rica ediyoruz.
		</div>
		<form action="" method="POST">
			
				<div class="col-md-6 alan">
					<strong>Ad Soyad</strong>(*)
					<input type="text" name="adSoyad" class="form-control textbox" placeholder="Adınız ve Soyadınız" aria-describedby="basic-addon1">
				</div>
				<div class="col-md-6 alan">
					<strong>Telefon</strong>(*)
					<input type="text" name="telefon" class="form-control textbox" placeholder="Telefon Numaranız" aria-describedby="basic-addon1">
				</div>
				<div class="col-md-6 alan">
					<strong>Eposta</strong>(*)
					<input type="text" name="eposta" class="form-control textbox" placeholder="Eposta Adresiniz" aria-describedby="basic-addon1">
				</div>
				<div class="col-md-6 alan">
					<strong>Konu</strong>(*)
					<select name="konu" class="form-control textbox">
						<option value="Yeni başlıyorum ve başlangıç sorularım var.">Yeni başlıyorum ve başlangıç sorularım var.</option>
						<option value="Değerlendiriyorum ve özel sorularım var.">Değerlendiriyorum ve özel sorularım var.</option>
						<option value="Diğer">Diğer</option>
					</select>
				</div>
				<div class="col-md-12 alan">
					<strong>Mesaj</strong>(*)
					<textarea style="width:100%" name="icerik" class="form-control textbox" rows="6" placeholder="Mesaj İçeriğiniz"></textarea>
				</div>
				<div class="clear"></div>
				<div class="col-md-2 alan">
					<button type="submit" class="btn btn-primary">Gönder</button>
				</div>
				<div class="col-md-10 alan">
					<?php echo $sonuc; ?>
				</div>
		</form>
	</div>
</div>
	<div class="col-md-5 contact2">
		<h2>Bize Ulaşın</h2>
		<div><?php echo SITE_MAIL; ?></div>
		<div><?php echo SITE_TELEFON; ?></div>
		<div class="sosyal2">
			<h3>Siz neredeyseniz, biz de oradayız.</h3>
			<ul>
				<li><a href="<?php echo FB; ?>"><span class="fa fa-facebook-official"></span></a></li>
				<li><a href="<?php echo GP; ?>"><span class="fa fa-google-plus-square"></a></span></li>
				<li><a href="<?php echo TW; ?>"><span class="fa fa-twitter-square"></span></a></li>
				<li><a href="<?php echo YT; ?>"><span class="fa fa-youtube-square"></a></span></li>
			</ul>
		</div>
	</div>
	
		
</div>	