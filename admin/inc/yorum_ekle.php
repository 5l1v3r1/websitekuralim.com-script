<?php echo !defined("ADMIN") ? die("Hacking?") : null; ?>
<article class="module width_full">
	<header><h3>Müşteri Yorum Ekle</h3></header>
		<?php
		
			if ($_POST){
				
				$yorum_sahibi = p("yorum_sahibi");
				$yorum_icerik = p("yorum_icerik");
				$yorum_site = p("yorum_site");
				$yorum_onay = p("yorum_onay");;
				
				if (!$yorum_icerik || !$yorum_sahibi){
					echo '<h4 class="alert_error">Gerekli alanları boş bırakmayınız.</h4>';
				}else {
				
					$query = query("SELECT yorum_id FROM yorumlar WHERE yorum_icerik = '$yorum_icerik'");
					if (mysql_affected_rows()){
						echo '<h4 class="alert_error">Böyle yorum bulunuyor, başka bir mesaj yazmayı deneyin..</h4>';
					}else {
					
						$insert = query("INSERT INTO yorumlar SET
						yorum_icerik = '$yorum_icerik',
						yorum_sahibi = '$yorum_sahibi',
						yorum_site = '$yorum_site',
						yorum_onay = 2
						
						");
						
						if ($insert){
							echo '<h4 class="alert_success">Yorum başarıyla eklendi.. Yönlendiriliyorsunuz..</h4>';
							go(URL."/admin/index.php?do=yorumlar", 1);
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
					<label>Yorum Sahibi</label>
						<input type="text" name="yorum_sahibi" value=""/>				
					</fieldset>
				<fieldset>
					<label>Yorum İçerik</label>
					<textarea rows="6" name="yorum_icerik"></textarea>
				</fieldset>
				<fieldset>
					<label>Yorum Yapanın Sitesi</label>
						<input type="text" name="yorum_site" value=""/>				
					</fieldset>
				<fieldset>
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Mesajı Ekle" class="alt_btn">
				</div>
			</footer>
		</form>
</article>

<div class="spacer"></div>