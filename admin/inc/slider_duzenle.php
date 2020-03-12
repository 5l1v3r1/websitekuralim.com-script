<?php echo !defined("ADMIN") ? die("Hacking?") : null; ?>

<?php

	$id = g("id");
	$query = query("SELECT * FROM sliderlar WHERE slider_id = '$id'");
	if (mysql_affected_rows() < 1){
		go(URL."/admin/index.php?do=sliderlar");
		exit;
	}
	
	$row = row($query);

?>
<article class="module width_full">
	<header><h3>Slider Duzenle</h3></header>
		<?php
		
			if ($_POST){
				
				$slider_resim = p("slider_resim");
				$slider_onay = p("slider_onay");
				
				if (!$slider_resim){
					echo '<h4 class="alert_error">Gerekli alanları doldurmalısınız..</h4>';
				}else {
				
					$query = query("SELECT slider_id FROM sliderlar WHERE slider_resim = '$slider_resim' && slider_id != '$id'");
					if (mysql_affected_rows()){
						echo '<h4 class="alert_error">Böyle bir slider bulunuyor, başka bir mesaj yazmayı deneyin..</h4>';
					}else {
					
						$insert = query("UPDATE sliderlar SET
						slider_resim = '$slider_resim',
						slider_onay = '$slider_onay'
						WHERE slider_id = '$id'");
						
						if ($insert){
							echo '<h4 class="alert_success">Slider başarıyla güncellendi.. Yönlendiriliyorsunuz..</h4>';
							go(URL."/admin/index.php?do=sliderlar", 1);
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
					<label>Slider Resim</label>
						<input type="text" name="slider_resim" value="<?php echo ss($row["slider_resim"]) ?>"/>				
				</fieldset>
				<fieldset>
					<label>Slider Tarih</label>
						<input type="text" name="slider_tarih" value="<?php echo ss($row["slider_tarih"]) ?>"/>				
				</fieldset>
				<fieldset>
						<select name="slider_onay" >
							<option value="1" <?php echo $row["slider_onay"] == 1 ? 'selected' : null; ?>>Onaylı</option>
							<option value="2" <?php echo $row["slider_onay"] == 2 ? 'selected' : null; ?>>Onaylı Değil</option>
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