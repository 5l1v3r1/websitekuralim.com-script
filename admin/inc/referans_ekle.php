<?php echo !defined("ADMIN") ? die("Hacking?") : null; ?>
<article class="module width_full">
	<header><h3>Referanslar Ekle</h3></header>
		<?php
		
			if ($_POST){
				
				$ref_adi = p("ref_adi");
				$ref_resim = p("ref_resim");
				$ref_site = p("ref_site");
				$ref_onay = p("ref_onay");;
				
				if (!$ref_resim){
					echo '<h4 class="alert_error">Gerekli alanları boş bırakmayınız.</h4>';
				}else {
				
					$query = query("SELECT ref_id FROM referanslar WHERE ref_resim = '$ref_resim'");
					if (mysql_affected_rows()){
						echo '<h4 class="alert_error">Böyle referans bulunuyor, başka bir mesaj yazmayı deneyin..</h4>';
					}else {
					
						$insert = query("INSERT INTO referanslar SET
						ref_resim = '$ref_resim',
						ref_adi = '$ref_adi',
						ref_site = '$ref_site',
						ref_onay = 2
						
						");
						
						if ($insert){
							echo '<h4 class="alert_success">Referans başarıyla eklendi.. Yönlendiriliyorsunuz..</h4>';
							go(URL."/admin/index.php?do=referanslar", 1);
						}else {
							echo '<h4 class="alert_error">Mysql Hatası: '.mysql_Error().'</h4>';
						}
					
					}
				
				}
				
			}
		
		?>
		<form action="" method="post">
			<div class="module_content">
				<fieldset>
					<label>Referans Sahibi</label>
						<input type="text" name="ref_adi" value=""/>				
					</fieldset>
				<fieldset>
					<label>Referans Resim</label>
					<textarea rows="6" name="ref_resim"></textarea>
				</fieldset>
				<fieldset>
					<label>Referans Site</label>
						<input type="text" name="ref_site" value=""/>				
					</fieldset>
				<fieldset>
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Referans Ekle" class="alt_btn">
				</div>
			</footer>
		</form>
</article>

<div class="spacer"></div>