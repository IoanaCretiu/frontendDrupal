
<?php // dsm($rows); ?>
<div class="news-list">
	<?php foreach ($rows as $row_count => $row): ?>
		<div class="news-listing">
			<div h="news-title">
				<div class="date"><?php echo $row['created'] ?></div>
                <h2><?php print $row['title'] ?></h2>

			</div>
			<div class="news-descrition">
				<?php //print $row['body'] ?>
			</div>
			<div class="btn-more"><?php echo $row['title'] ?></div>
            <div style="background-image: <?php asdasda sd?>"></div>
		</div>
	<?php endforeach; ?>
</div><!-- /.front-teasers-->