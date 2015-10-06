<div class="main-wrapper">

		<div class="inner-wrapper">	
			<div class="header">
				<?php  print render($page['header']); ?>

				<?php if ($site_name || $site_slogan): ?>

				 	<div class="logo">
						 <?php if ($logo) { ?>
							<a href="<?php print $base_path ?>" title="<?php print t('Home') ?>">
							<img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a>
						<?php } ?>
					</div>
						<div class="website-message">
							<?php print $site_slogan ?>
						</div>

				<?php endif; ?>
				

				<div class="header-socials">
					<!--
					<a href="#" class="header-add-to-favorites-link jQueryBookmark" id="bookmarkme" title="poscce.nord-vest.ro">Adauga la favorite</a>
				-->

				</div><!-- /.header-socials-->
			</div><!-- /.header-->

			<div class="menu">
				<?php  print render($page['menu']); ?>
			</div><!-- /.menu-->
		
			<div class="main-content inner-page">
				<div class="content-area">
					
					<div class="system-messages content-error-message">
						<?php print $messages; ?>
					</div>
					<?php if ($tabs): ?>
				        <div class="tabs">
				          <?php print render($tabs); ?>
				        </div>
				      <?php endif; ?>
				      <?php if ($title): ?><h1 class="title page-top-title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
					<?php print render($page['content']); ?>
				</div><!-- /.content-area-->
				<div class="sidebar">
					<?php  print render($page['sidebar']); ?>
				</div><!-- /.sidebar-->

				

				
			</div><!-- /.main-content-->
		</div><!-- /.inner-wrapper-->
	</div><!-- /.main-wrapper-->
		<div class="footer">
		<div class="inner-footer">
			<?php print render($page['footer']); ?>
			

			</div><!-- /.new-text-->
		</div><!-- /.inner-footer-->
	</div><!-- /.footer-->