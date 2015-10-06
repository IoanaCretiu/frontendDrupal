
<div class="news-roller" id="front-page-news">
	<div class="news-item">
		<ul id="mycarousel" class="jcarousel jcarousel-skin-tango">
			<?php foreach ($rows as $row_count => $row): ?>
				<li class="news-item">

					<div class="date"><?php echo $row['created'] ?></div>
					<?php echo $row['title'] ?>
					<!-- <span class="description">
						<?php echo $row['body'] ?>					
					</span> -->
					<div class="btn-more"><?php echo $row['title'] ?></div>
				</li>
				<? // dsm($rows); ?>
			<?php endforeach; ?>		
		</ul>
	</div><!-- news-item-->						
</div><!-- /.news-roller-->