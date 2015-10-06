
<?php // dsm($rows); ?>

<div class="front-page-slider" id="slideShow">
	<div id="slideShowItems">
		<?php // dsm($rows); ?>
		<?php foreach ($rows as $row_count => $row): ?>
			<div class="slides_container">
				<a href="<?php print $row['field_link_banner']; ?>">
					<?php print $row['field_imagine_banner'] ?>
				</a>
			</div>
		<?php endforeach; ?>
	</div>
</div><!-- /.front-page-slider-->