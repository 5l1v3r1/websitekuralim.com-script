<?php echo !defined("ADMIN") ? die("Hacking?") : null; ?>

<?php

	$id = g("id");
	$query = query("SELECT * FROM referanslar WHERE ref_id = '$id'");
	if (mysql_affected_rows() < 1){
		go(URL."/admin/index.php?do=referanslar");
		exit;
	}
	
	$row = row($query);

?>
<article class="module width_full">
	<header><h3>Referans Duzenle</h3></header>
		<?php
		
			if ($_POST){
				
				$ref_adi = p("ref_adi");
				$ref_resim = p("ref_resim");
				$ref_site = p("ref_site");
				$ref_onay = p("ref_onay");
				
				if (!$ref_resim){
					echo '<h4 class="alert_error">Gerekli alanları doldurmalısınız..</h4>';
				}else {
				
					$query = query("SELECT ref_id FROM referanslar WHERE ref_resim = '$ref_resim' && ref_id != '$id'");
					if (mysql_affected_rows()){
						echo '<h4 class="alert_error">Böyle bir referans bulunuyor, başka bir mesaj yazmayı deneyin..</h4>';
					}else {
					
						$insert = query("UPDATE referanslar SET
						ref_adi = '$ref_adi',
						ref_resim = '$ref_resim',
						ref_site = '$ref_site',
						ref_onay = '$ref_onay'
						WHERE ref_id = '$id'");
						
						if ($insert){
							echo '<h4 class="alert_success">Referans başarıyla güncellendi.. Yönlendiriliyorsunuz..</h4>';
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
					<label>Referans Adı</label>
						<input type="text" name="ref_adi" value="<?php echo ss($row["ref_adi"]) ?>"/>				
					</fieldset>
				<fieldset>
					<label>Referans Resim</label>
					<textarea rows="6" name="ref_resim"><?php echo ss($row["ref_resim"]) ?></textarea>
				</fieldset>
				<fieldset>
					<label>Referans Site</label>
						<input type="text" name="ref_site" value="<?php echo ss($row["ref_site"]) ?>"/>				
					</fieldset>
				<fieldset>
				<fieldset>
					<label>Referans Tarihi</label>
						<input type="text" name="ref_tarih" value="<?php echo ss($row["ref_tarih"]) ?>"/>				
				</fieldset>
				<fieldset>
						<select name="ref_onay" >
							<option value="1" <?php echo $row["ref_onay"] == 1 ? 'selected' : null; ?>>Onaylı</option>
							<option value="2" <?php echo $row["ref_onay"] == 2 ? 'selected' : null; ?>>Onaylı Değil</option>
						</select>
				</fieldset>
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Yorumu Güncelle" class="alt_btn">
				</div>
			</footer>
		</form>
</article>

<div class="spacer"></div>