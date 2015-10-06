
<?php // dsm($rows); ?>
<div class="lista-proiecte">
	<?php foreach ($rows as $row_count => $row): ?>
		<div class="proiect-unit">
			<div class="proiect-title">
				<?php print $row['title'] ?>
			</div>
			<div class="proiect-address">
				<?php print $row['field_address_locality'] ?>, <?php print $row['field_address_thoroughfare'] ?>
			</div>
			<div class="proiect-nid">
				<?php print $row['nid'] ?>
				<?php print $row['field_incadrare_proiect_axa_1'] ?>
				<?php print $row['field_incadrare_proiect_axa_2'] ?>
				<?php print $row['field_incadrare_proiect_axa_3'] ?>
				<?php print $row['field_incadrare_proiect_axa_4'] ?>
				<?php print $row['field_incadrare_proiect_axa_5'] ?>
				<?php print $row['field_incadrare_proiect_axa_6'] ?>
				<?php print $row['field_judetul_pentru_selector'] ?>
				<?php print $row['field_valoare_proiect'] ?>
				<?php print $row['field_stadiul_proiectului'] ?>
			</div>
		</div><!-- /proiect-unit-->
	<?php endforeach; ?>
</div><!-- /.front-teasers-->