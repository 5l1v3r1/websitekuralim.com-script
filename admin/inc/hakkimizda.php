<?php
	
	echo !defined("ADMIN") ? die("Hacking?") : null;
	$query = query("SELECT * FROM ayarlar");
	$row = row($query);
	
?>

<article class="module width_full">
	<header><h3>Hakkımızda</h3></header>
		<?php
		
			if ($_POST){
				
				$site_hakkimizda = p("site_hakkimizda");
				
				
				if (!$site_hakkimizda){
					echo '<h4 class="alert_error">Gerekli alanları doldurmanız gerekiyor..</h4>';
				}else {
				
					$update = query("UPDATE ayarlar SET
					site_hakkimizda = '$site_hakkimizda' WHERE site_id = 1
					");
					
					if ($update){
						echo '<h4 class="alert_success">Yeni ayarlar başarıyla kaydedildi.. Yönlendiriliyorsunuz..</h4>';
						go(URL."/admin/index.php?do=".g("do"), 1);
					}else {
						echo '<h4 class="alert_error">Mysql Hatası: '.mysql_Error().'</h4>';
					}
				
				}
				
			}
		
		?>
		<form action="" method="post">
			<div class="module_content">
					<fieldset>
						<label>Hakkımızda</label>
						<textarea rows="20" name="site_hakkimizda"><?php echo ss($row["site_hakkimizda"]); ?></textarea>
					</fieldset>
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Güncelle" class="alt_btn">
				</div>
			</footer>
		</form>
</article>

<div class="spacer"></div>