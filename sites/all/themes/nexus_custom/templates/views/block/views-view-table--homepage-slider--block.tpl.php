<div class="f_newsSlideshow">
	<?php foreach ($rows as $row_count => $row): ?>
		<div>
			<div class="news-title"><?php print $row['title']; ?> </div>
			<div class="news-desc">
				<?php print $row['field_image']; ?>
				<?php print $row['body']; ?>
			</div>
		</div>
	<?php endforeach; ?>
</div><!-- /.front-page-slider-->