<div class="row">
	<div class="sayfaBaslik">
		<div class="container">
			Referanslarımız
		</div>
	</div>
	<div class="container">
		<?php
		$query = query("SELECT * FROM referanslar ORDER BY ref_id DESC");
		if (mysql_affected_rows()){
			while ($row = row($query)){
		?>
		
		<div class="refKutu col-lg-3" style="border-color:#03a9f5;">
			<h2><?php echo ss($row["ref_adi"]); ?></h2>
			<img class="img-thumbnail" src="<?php echo ss($row["ref_resim"]); ?>" alt="<?php echo ss($row["ref_adi"]); ?>"/>
			<a href="<?php echo ss($row["ref_site"]); ?>" title="<?php echo ss($row["ref_adi"]); ?>" target="_blank"><?php echo ss($row["ref_site"]); ?></a>
		</div>
		
		<?php 
				
			}
		}
		?>
	</div>
</div>