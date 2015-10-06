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

				</div><!-- /.header-socials-->
			</div><!-- /.header-->

			<div class="menu">
				<?php  print render($page['menu']); ?>
			</div><!-- /.menu-->
			
			<div class="banner" id="front-page-banner">
				<?php  print render($page['banner']); ?>
			</div><!-- /.banner-->
			
			<div class="front-page-shadow"></div><!-- /.shadow-->
			<div class="main-content front-page">
				<div class="content-area">
					<div class="system-messages front-error-message">
						<?php print $messages; ?>
					</div>
					<?php if ($tabs): ?>
				        <div class="tabs">
				          <?php print render($tabs); ?>
				        </div>
				      <?php endif; ?>
				      <div class="sidebar newsletter-block">
						<?php  print render($page['sidebar']); ?>
					</div><!-- /.sidebar-->
					<?php print render($page['content']); ?>

				</div><!-- /.content-area-->
				
			</div><!-- /.main-content-->
		</div><!-- /.inner-wrapper-->
	</div><!-- /.main-wrapper-->
	<div class="footer">
		<div class="inner-footer">
			<?php // print render($page['footer']); ?>
			
			</div><!-- /.new-text-->
		</div><!-- /.inner-footer-->
	</div><!-- /.footer-->