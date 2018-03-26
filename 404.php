<?php theme_include('header'); ?>

	<article id="main">
						<header style="background:url(<?php echo page_custom_field('page_banner')?>);">
							<h2>OPS  :(  - PAGE NOT FOUND!</h2>
							<p><?php echo page_custom_field('page_sub')?></p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
								<h1>Page not found</h1>

		<p>Unfortunately, the page <code>/<?php echo htmlspecialchars(current_url()); ?></code> could not be found. Your best bet is either to try the <a href="<?php echo base_url(); ?>">homepage</a> or go and cry in a corner (although I don’t recommend the latter).</p>
							</div>
						</section>
					</article>

<?php theme_include('footer'); ?>
