<header class="header_home" id="bg">
	<div class="top_header">
		<div class="application_window_button">
			<img src="<?php bloginfo('template_url'); ?>/img/icons/mail-kontur-yellow.svg" alt="">Отправить заявку
		</div>
			<div class="menu_block">
				<span class="menu_block_gamburger"><img src="<?php bloginfo('template_url'); ?>/img/icons/burger-yellow.svg" alt="">Меню</span>
			</div>
			
	</div>
	<menu class="top_menu">

				<nav>
				<?php
									wp_nav_menu( array(
										'theme_location' => 'Main_Menu',
										'menu_id'        => '',
										'menu_class'        => 'header_menu_ul',
										'container'      => '', 
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									) );
				?>
					<!-- <ul>
						<li><a href="#">Номер №1</a></li>
						<li><a href="#">Номер №2</a></li>
						<li><a href="#">Номер №3</a></li>
						<li><a href="#">Номер №4</a></li>
						<li><a href="#">Номер №5</a></li>
					</ul> -->
				</nav>
			</menu>
	<div class="logo_header">
		<h1 class="logo_header_h1"><?php the_field('title_header'); ?></h1>
		<hr class="logo_header_hr">
		<h2 class="logo_header_h2"><?php the_field('description_header'); ?></h2>
	</div>
	<div class="curve_block">
		<a href="#go">
		<img src="<?php bloginfo('template_url'); ?>/img/icons/Arrow-down-white.svg" alt="">
		<p>more</p>
		</a>
	</div>
</header>	