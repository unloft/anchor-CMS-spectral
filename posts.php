<?php theme_include('header'); ?>

<!-- Banner -->
		<section id="banner">
						<div class="inner">
							<h2> <?php echo site_name(); ?> </h2>
							
							<p><?php echo site_description(); ?></p>

							<ul class="actions">
								<li><a href="<?php echo page_custom_field('banner_button_link')?>" class="button special"><?php echo page_custom_field('banner_button_text')?></a></li>
							</ul>
						</div>
						<a href="#<?php echo page_custom_field('more_scroll_position')?>" class="more scrolly"><?php echo page_custom_field('lear_more_text')?></a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2><?php echo page_custom_field('inner_title')?></h2>
								<p><?php echo page_custom_field('inner_caption')?></p>
							</header>
							<ul class="icons major">
								<li><span class="icon fa-<?php echo page_custom_field('inner_icon1')?> major style1"><span class="label"><?php echo page_custom_field('inner_icon1')?></span></span></li>
								<li><span class="icon fa-<?php echo page_custom_field('inner_icon2')?> major style1"><span class="label"><?php echo page_custom_field('inner_icon2')?></span></span></li>
								<li><span class="icon fa-<?php echo page_custom_field('inner_icon3')?> major style2"><span class="label"><?php echo page_custom_field('inner_icon3')?></span></span></li>
								<li><span class="icon fa-<?php echo page_custom_field('inner_icon4')?> major style3"><span class="label"><?php echo page_custom_field('inner_icon4')?></span></span></li>
							</ul>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="<?php echo theme_url('images/pic01.jpg'); ?>" alt="" /></div><div class="content">
								<h2><?php echo page_custom_field('spotlight_title1')?></h2>
								<p><?php echo page_custom_field('spotlight_caption1')?></p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="<?php echo theme_url('images/pic02.jpg'); ?>" alt="" /></div><div class="content">
								<h2><?php echo page_custom_field('spotlight_title2')?></h2>
								<p><?php echo page_custom_field('spotlight_caption2')?></p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="<?php echo theme_url('images/pic03.jpg'); ?>" alt="" /></div><div class="content">
								<h2><?php echo page_custom_field('spotlight_title3')?></h2>
								<p><?php echo page_custom_field('spotlight_caption3')?></p>
							</div>
						</section>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2><?php echo page_custom_field('inner_title2')?></h2>
								<p><?php echo page_custom_field('inner_caption2')?></p>
							</header>
							<ul class="features">
								<li class="icon fa-<?php echo page_custom_field('features_icon1')?>">
									<h3><?php echo page_custom_field('features_title1')?></h3>
									<p><?php echo page_custom_field('features_caption1')?></p>
								</li>
								<li class="icon fa-<?php echo page_custom_field('features_icon2')?>">
									<h3><?php echo page_custom_field('features_title2')?></h3>
									<p><?php echo page_custom_field('features_caption2')?></p>
								</li>
								<li class="icon fa-<?php echo page_custom_field('features_icon3')?>">
									<h3><?php echo page_custom_field('features_title3')?></h3>
									<p><?php echo page_custom_field('features_caption3')?></p>
								</li>
								<li class="icon fa-<?php echo page_custom_field('features_icon4')?>">
									<h3><?php echo page_custom_field('features_title4')?></h3>
									<p><?php echo page_custom_field('features_caption4')?></p>
								</li>
								<li class="icon fa-<?php echo page_custom_field('features_icon5')?>">
									<h3><?php echo page_custom_field('features_title5')?></h3>
									<p><?php echo page_custom_field('features_caption5')?></p>
								</li>
								<li class="icon fa-<?php echo page_custom_field('features_icon6')?>">
									<h3><?php echo page_custom_field('features_title6')?></h3>
									<p><?php echo page_custom_field('features_caption6')?></p>
								</li>
							</ul>
						</div>
					</section>

				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2><?php echo page_custom_field('cta_title')?></h2>
								<p><?php echo page_custom_field('cta_caption')?></p>
							</header>
							<ul class="actions vertical">
								<li><a href="<?php echo page_custom_field('cta_linkbutton1')?>" class="button fit special"><?php echo page_custom_field('cta_button_txt1')?></a></li>
								<li><a href="<?php echo page_custom_field('cta_link_button2')?>" class="button fit"><?php echo page_custom_field('cta_button_txt2')?></a></li>
							</ul>
						</div>
					</section>
<?php theme_include('footer'); ?>		