<?php echo !defined("ADMIN") ? die("Hacking?") : null; ?>

<?php

	$id = g("id");
	$query = query("SELECT * FROM yorumlar WHERE yorum_id = '$id'");
	if (mysql_affected_rows() < 1){
		go(URL."/admin/index.php?do=yorumlar");
		exit;
	}
	
	$row = row($query);

?>
<article class="module width_full">
	<header><h3>Müşteri Yorum Duzenle</h3></header>
		<?php
		
			if ($_POST){
				
				$yorum_sahibi = p("yorum_sahibi");
				$yorum_icerik = p("yorum_icerik");
				$yorum_site = p("yorum_site");
				$yorum_onay = p("yorum_onay");
				
				if (!$yorum_icerik || !$yorum_sahibi){
					echo '<h4 class="alert_error">Gerekli alanları doldurmalısınız..</h4>';
				}else {
				
					$query = query("SELECT yorum_id FROM yorumlar WHERE yorum_icerik = '$yorum_icerik' && yorum_id != '$id'");
					if (mysql_affected_rows()){
						echo '<h4 class="alert_error">Böyle bir mesaj bulunuyor, başka bir mesaj yazmayı deneyin..</h4>';
					}else {
					
						$insert = query("UPDATE yorumlar SET
						yorum_sahibi = '$yorum_sahibi',
						yorum_icerik = '$yorum_icerik',
						yorum_site = '$yorum_site',
						yorum_onay = '$yorum_onay'
						WHERE yorum_id = '$id'");
						
						if ($insert){
							echo '<h4 class="alert_success">Yorum başarıyla güncellendi.. Yönlendiriliyorsunuz..</h4>';
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
						<input type="text" name="yorum_sahibi" value="<?php echo ss($row["yorum_sahibi"]) ?>"/>				
					</fieldset>
				<fieldset>
					<label>Yorum İçerik</label>
					<textarea rows="6" name="yorum_icerik"><?php echo ss($row["yorum_icerik"]) ?></textarea>
				</fieldset>
				<fieldset>
					<label>Yorum Yapanın Sitesi</label>
						<input type="text" name="yorum_site" value="<?php echo ss($row["yorum_site"]) ?>"/>				
					</fieldset>
				<fieldset>
				<fieldset>
					<label>Yorum Tarihi</label>
						<input type="text" name="yorum_tarih" value="<?php echo ss($row["yorum_tarih"]) ?>"/>				
				</fieldset>
				<fieldset>
						<select name="yorum_onay" >
							<option value="1" <?php echo $row["yorum_onay"] == 1 ? 'selected' : null; ?>>Onaylı</option>
							<option value="2" <?php echo $row["yorum_onay"] == 2 ? 'selected' : null; ?>>Onaylı Değil</option>
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