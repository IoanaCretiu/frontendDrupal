
<?php // dsm($rows); ?>
<div class="front-teasers">
	<?php foreach ($rows as $row_count => $row): ?>
		<div class="teaser-unit">
			<a href="<?php print $row['field_small_banner_link']; ?>">
				<?php print $row['field_small_banner_image'] ?>
			</a>
		</div>
	<?php endforeach; ?>
</div><!-- /.front-teasers-->