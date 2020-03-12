<div class="row">
	<div class="sayfaBaslik">
		<div class="container">
			Hakkımızda
		</div>
	</div>
	<div class="container">
		<div class="hakkimizda">
			<?php 
				$query = query("SELECT * FROM ayarlar");
				if(mysql_affected_rows()){
					$row = row($query);
			?>
			<p>
				<?php echo ss($row["site_hakkimizda"]); ?>
			</p>
			<?php } ?>
		</div>
	</div>
</div>