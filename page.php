<?php theme_include('header'); ?>

				<!-- Main -->
					<article id="main">
						<header style="background:url(<?php echo page_custom_field('page_banner')?>);">
							<h2><?php echo page_title(); ?></h2>
							<p><?php echo page_custom_field('page_sub')?></p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
								<?php echo page_content(); ?>
							</div>
						</section>
					</article>

<?php theme_include('footer'); ?>
