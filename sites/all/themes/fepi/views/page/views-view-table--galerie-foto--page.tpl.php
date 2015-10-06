
<?php  // dsm($rows); ?>
<div class="lista-galerie">
	<?php foreach ($rows as $row_count => $row): ?>
		<div class="galerie-unit">
			<div class="galerie-title">
				<?php print $row['title'] ?>
			</div>
			<div class="galerie-item">
				<?php print $row['field_galerie_foto'] ?>
			</div>
		</div><!-- /proiect-unit-->
	<?php endforeach; ?>
</div><!-- /.front-teasers-->