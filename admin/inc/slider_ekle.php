<?php echo !defined("ADMIN") ? die("Hacking?") : null; ?>
<article class="module width_full">
	<header><h3>sliderlar Ekle</h3></header>
		<?php
		
			if ($_POST){
				
				$slider_resim = p("slider_resim");
				
				if (!$slider_resim){
					echo '<h4 class="alert_error">Gerekli alanları boş bırakmayınız.</h4>';
				}else {
				
					$query = query("SELECT slider_id FROM sliderlar WHERE slider_resim = '$slider_resim'");
					if (mysql_affected_rows()){
						echo '<h4 class="alert_error">Böyle slider bulunuyor, başka bir mesaj yazmayı deneyin..</h4>';
					}else {
					
						$insert = query("INSERT INTO sliderlar SET
						slider_resim = '$slider_resim',
						slider_onay = 2
						
						");
						
						if ($insert){
							echo '<h4 class="alert_success">Slider başarıyla eklendi.. Yönlendiriliyorsunuz..</h4>';
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
						<input type="text" name="slider_resim" value=""/>				
					</fieldset>
				</fieldset>
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Slider Ekle" class="alt_btn">
				</div>
			</footer>
		</form>
</article>

<div class="spacer"></div>