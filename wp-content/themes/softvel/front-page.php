<?php get_header(); ?>
<?php get_header("home"); ?>
<div  id="go" class="service">
<div class="service_after"></div>
	<div class="service_wrapper">
		<div class="service_wrapper_one">
			<div class="service_block">
				<div class="service_block_defolte">
					<img src="<?php bloginfo('template_url'); ?>/img/icons/uslugi-copyrighting-white.svg" alt="">
					<h2>Копирайтинг</h2>
				</div>
				<div class="service_block_hover">
					<img src="<?php bloginfo('template_url'); ?>/img/icons/uslugi-copyrighting-yellow.svg" alt="">
					 <hr>
					 <nav class="service_menu">
					 	<?php
									wp_nav_menu( array(
										'theme_location' => 'Kopirayt_Menu',
										'menu_id'        => '',
										'menu_class'        => 'header_menu_ul',
										'container'      => '', 
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									) );
						?>
					 	<!-- <ul>
					 		<li><a href="#">Корпоративный сайт</a></li>
					 		<li><a href="#">Сайт "Визитка"</a></li>
					 		<li><a href="#">Landing Page</a></li>
					 		<li><a href="#">Интернет-магазин</a></li>
					 		<li><a href="#">Многостраничник</a></li>
					 	</ul> -->
					 </nav>
				</div>
			</div>
			<div class="service_block">
				<div class="service_block_defolte">
					<img src="<?php bloginfo('template_url'); ?>/img/icons/uslugi-design-white.svg" alt="">
					<h2>Дизайн</h2>
				</div>
				<div class="service_block_hover">
					<img src="<?php bloginfo('template_url'); ?>/img/icons/uslugi-design-yellow.svg" alt="">
					 <hr>
					 <nav class="service_menu">
					 	<?php
									wp_nav_menu( array(
										'theme_location' => 'WebDes_Menu',
										'menu_id'        => '',
										'menu_class'        => 'header_menu_ul',
										'container'      => '', 
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									) );
						?>
					 	<!-- <ul>
					 		<li><a href="#">Корпоративный сайт</a></li>
					 		<li><a href="#">Сайт "Визитка"</a></li>
					 		<li><a href="#">Landing Page</a></li>
					 		<li><a href="#">Интернет-магазин</a></li>
					 		<li><a href="#">Многостраничник</a></li>
					 	</ul> -->
					 </nav>
				</div>
			</div>
		</div>
		<div class="service_wrapper_two">
			<div class="service_block">
				<div class="service_block_defolte">
					<img src="<?php bloginfo('template_url'); ?>/img/icons/uslugi-ios-android-dev-white.svg" alt="">
					<h2>Android & IOS</h2>
				</div>
				<div class="service_block_hover">
					<img src="<?php bloginfo('template_url'); ?>/img/icons/uslugi-ios-android-dev-yellow.svg" alt="">
					 <hr>
					 <nav class="service_menu">
					 	<?php
									wp_nav_menu( array(
										'theme_location' => 'Kopirayt_Menu',
										'menu_id'        => '',
										'menu_class'        => 'header_menu_ul',
										'container'      => '', 
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									) );
						?>
					 	<!-- <ul>
					 		<li><a href="#">Корпоративный сайт</a></li>
					 		<li><a href="#">Сайт "Визитка"</a></li>
					 		<li><a href="#">Landing Page</a></li>
					 		<li><a href="#">Интернет-магазин</a></li>
					 		<li><a href="#">Многостраничник</a></li>
					 	</ul> -->
					 </nav>
				</div>
			</div>
		</div>
		<div class="service_wrapper_three">
			<div class="service_block">
				<div class="service_block_defolte">
					<img src="<?php bloginfo('template_url'); ?>/img/icons/uslugi-reklama-white.svg" alt="">
					<h2>Реклама</h2>
				</div>
				<div class="service_block_hover">
					<img src="<?php bloginfo('template_url'); ?>/img/icons/uslugi-reklama-yellow.svg" alt="">
					 <hr>
					 <nav class="service_menu">
					 	<?php
									wp_nav_menu( array(
										'theme_location' => 'Advertising_Menu',
										'menu_id'        => '',
										'menu_class'        => 'header_menu_ul',
										'container'      => '', 
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									) );
						?>
					 	<!-- <ul>
					 		<li><a href="#">Корпоративный сайт</a></li>
					 		<li><a href="#">Сайт "Визитка"</a></li>
					 		<li><a href="#">Landing Page</a></li>
					 		<li><a href="#">Интернет-магазин</a></li>
					 		<li><a href="#">Многостраничник</a></li>
					 	</ul> -->
					 </nav>
				</div>
			</div>
			<div class="service_block">
				<div class="service_block_defolte">
					<img src="<?php bloginfo('template_url'); ?>/img/icons/uslugi-sayti-white.svg" alt="">
					<h2>Разработка сайта</h2>
				</div>
				<div class="service_block_hover">
					<img src="<?php bloginfo('template_url'); ?>/img/icons/uslugi-sayti-yellow.svg" alt="">
					 <hr>
					 <nav class="service_menu">
					 	<?php
									wp_nav_menu( array(
										'theme_location' => 'WebDev_Menu',
										'menu_id'        => '',
										'menu_class'        => 'header_menu_ul',
										'container'      => '', 
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									) );
						?>
					 	<!-- <ul>
					 		<li><a href="#">Корпоративный сайт</a></li>
					 		<li><a href="#">Сайт "Визитка"</a></li>
					 		<li><a href="#">Landing Page</a></li>
					 		<li><a href="#">Интернет-магазин</a></li>
					 		<li><a href="#">Многостраничник</a></li>
					 	</ul> -->
					 </nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Портфолио -->
<div class="portfolio">
	<div class="portfolio_wrapper">
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php bloginfo('template_url'); ?>/img/portfolio/2048SteamPunkApp.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php bloginfo('template_url'); ?>/img/portfolio/VaperStore.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php bloginfo('template_url'); ?>/img/portfolio/GulfComUa.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php bloginfo('template_url'); ?>/img/portfolio/DaVinciApp.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php bloginfo('template_url'); ?>/img/portfolio/CompassSteamPunkApp.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php bloginfo('template_url'); ?>/img/portfolio/Cheshire Cat in Wanderland.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php bloginfo('template_url'); ?>/img/portfolio/aimcongress_uba_in_ua.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php bloginfo('template_url'); ?>/img/portfolio/Brand4Baby.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php bloginfo('template_url'); ?>/img/portfolio/AIK Group.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
    </div>
	</div>
</div>
<!-- Стек -->
<div class="steck">
	<div class="steck_block">
	<?php 
		$images = acf_photo_gallery('stek', $post->ID);
		if( count($images) ):
        foreach($images as $image):
            $id = $image['id'];
            $title = $image['title']; 
            $caption= $image['caption'];
            $full_image_url= $image['full_image_url']; 
            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); 
            $thumbnail_image_url= $image['thumbnail_image_url']; 
            $url= $image['url']; 
            $target= $image['target']; 
            $alt = get_field('photo_gallery_alt', $id); 
            $class = get_field('photo_gallery_class', $id);
	?>
		<?php if( !empty($url) ){ ?> <?php } ?>
           <img class="steck_img" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
        <?php if( !empty($url) ){ ?><?php } ?>
		<?php endforeach; endif; ?>
		<!-- <img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/ae.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/Bootstrap-logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/css3-logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/Git-logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/ai.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/gulp-logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/AJAX_logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/HTML5_logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/javascript-logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/jQuery-logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/less-logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/OpenCart-logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/PHP-logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/ps.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/sass-logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/SketchUp-Logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/Sony-Vegas-Pro-Logo.png" alt="">
		<img class="steck_img" src="<?php bloginfo('template_url'); ?>/img/steck/wordpress-logo.png" alt=""> -->
	</div>
		<div class="nda">
			<p class="text_big text_bold">NDA</p>
			<p class=""><?php the_field('content_nda'); ?></p>
		</div>
</div>
<?php get_footer(); ?>