<?php get_header(); ?>
<?php get_header("service"); 
/*
Template Name: Услуга
*/
 ?>

<div class="service_info">
	<h1 class="service_name"><?php the_field('name_service'); ?></h1>
	<p class="service_info_text"><?php the_field('description_service'); ?></p>
	<div class="comparison_services">
		<div class="comparison_services_block">
			<h2><?php the_field('name_block_vs1'); ?></h2>
			<?php the_field('content_block_vs1'); ?>
			<!-- <ol>
    			<li>создание пунктуальности (никогда не будете никуда опаздывать);</li>
    			<li>излечение от пунктуальности (никогда никуда не будете торопиться);</li>
    			<li>изменение восприятия времени и часов.</li>
    			<li>изменение восприятия времени и часов.</li>
    			<li>изменение восприятия времени и часов.</li>
    			<li>изменение восприятия времени и часов.</li>
    			<li>изменение восприятия времени и часов.</li>
    			<li>изменение восприятия времени и часов.</li>
    			<li>изменение восприятия времени и часов.</li>
  			</ol> -->
		</div>
		<div class="comparison_services_block">
			<h2><?php the_field('name_block_vs2'); ?></h2>
			<?php the_field('content_block_vs2'); ?>
			<!-- <ol>
    			<li>создание пунктуальности (никогда не будете никуда опаздывать);</li>
    			<li>излечение от пунктуальности (никогда никуда не будете торопиться);</li>
    			<li>изменение восприятия времени и часов.</li>
    			<li>изменение восприятия времени и часов.</li>
    			<li>изменение восприятия времени и часов.</li>
    			<li>изменение восприятия времени и часов.</li>
  			</ol> -->
		</div>
	</div>
</div>
<!-- service_price -->
<div class="service_price">
	<p class="text_big text_big_bold text_center text_upper">Стоимость</p>
	<div class="service_price_wrapper">
		<div class="service_price_block">
			<div class="service_price_on">
				<img src="<?php bloginfo('template_url'); ?>/img/service/price.svg" alt="">
				<p class="text_upper">Стоимость <br>от <?php the_field('cost_from'); ?>.</p>
			</div>
			<div class="service_price_term">
				<img src="<?php bloginfo('template_url'); ?>/img/service/terms.svg" alt="">
				<p class="text_upper">Сроки выполнения <br>от <?php the_field('sroki_ot'); ?>.</p>
			</div>
		</div>
		<div class="service_price_block">
			<?php the_field('content_block_price'); ?>
			<!-- <p class="text_bold">Стоимость и сроки выполнения заказа зависят от таких факторов:</p>
			<ol>
    			<li>Сложность дизайна - индивидуальный, комбинированый, шаблонный.</li>
    			<li>Количество страниц.</li>
    			<li>Сложность графических элементов на сайте, наличие анимации.</li>
    			<li>Мобильная адаптация</li>
    			<li>Количество уникальных задач, которые должен выполнять сайт.</li>
    			<li>Рандомно</li>
    			<li>Рандомно</li>
  			</ol> -->
		</div>
	</div>
</div>
<!-- cms/этапы работы -->
<div class="cms_stages_work">
	<p class="text_big text_big_bold text_center text_upper">CMS</p>
	<div class="cms_wrapper">
		<div class="three_block">
			<div class="three_block_left">
				<img src="<?php bloginfo('template_url'); ?>/img/service/uslugi-WordPress.svg" alt="">
			</div>
			<div class="three_block_right">
				<p class="text_big_bold text_upper"><?php the_field('name_cms1'); ?></p>
				<?php the_field('content_cms1'); ?>
				<!-- <ul>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.Rgdgfg dser</li>
				</ul> -->
			</div>
		</div>
		<div class="three_block">
			<div class="three_block_left">
				<img src="<?php bloginfo('template_url'); ?>/img/service/uslugi-opencart.svg" alt="">
			</div>
			<div class="three_block_right">
				<p class="text_big_bold text_upper"><?php the_field('name_cms2'); ?></p>
				<?php the_field('content_cms2'); ?>
				<!-- <ul>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.Rgdgfg dser</li>
				</ul> -->
			</div>
		</div>
		<div class="three_block">
			<div class="three_block_left">
				<img src="<?php bloginfo('template_url'); ?>/img/service/uslugi-php.svg" alt="">
			</div>
			<div class="three_block_right">
				<p class="text_big_bold text_upper"><?php the_field('name_cms3'); ?></p>
				<?php the_field('content_cms3'); ?>
				<!-- <ul>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.Rgdgfg dser</li>
				</ul> -->
			</div>
		</div>

	</div>
	<p class="text_big text_big_bold text_center text_upper">Этапы работы</p>
	<div class="stages_work_wrapper">
		<div class="three_block stages_work_block">
			<div class="three_block_left stages_work_img">
				<img src="<?php bloginfo('template_url'); ?>/img/service/uslugi-etap-1-white.svg" alt="">
			</div>
			<div class="three_block_right stages_work_content">
			<p class="name_stage text_big_bold text_upper"><?php the_field('name_stage'); ?></p>
			<?php the_field('content_stage1'); ?>
				<!-- <ul>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.Rgdgfg dser</li>
				</ul> -->
			</div>
		</div>
		<div class="three_block stages_work_block">
			<div class="three_block_left stages_work_img">
				<img src="<?php bloginfo('template_url'); ?>/img/service/uslugi-etap-2-white.svg" alt="">
			</div>
			<div class="three_block_right stages_work_content">
			<p class="name_stage text_big_bold text_upper"><?php the_field('name_stage2'); ?></p>
			<?php the_field('content_stage2'); ?>
				<!-- <ul>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.Rgdgfg dser</li>
				</ul> -->
			</div>
		</div>
		<div class="three_block stages_work_block">
			<div class="three_block_left stages_work_img">
				<img src="<?php bloginfo('template_url'); ?>/img/service/uslugi-etap-3-white.svg" alt="">
			</div>
			<div class="three_block_right stages_work_content">
			<p class="name_stage text_big_bold text_upper"><?php the_field('name_stage3'); ?></p>
			<?php the_field('content_stage3'); ?>
				<!-- <ul>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.</li>
					<li>Random text text lorem ipsum amit random.Rgdgfg dser</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
<!-- Портфолио -->
<div class="portfolio">
	<div class="portfolio_wrapper">
<?php 
	$args = array( 'posts_per_page' => 3, 'post_type' => 'portfolio' );
$query = new WP_Query( $args );
while ( $query->have_posts() ) {
	$query->the_post();?>

	<div class="portfolio_block">
	<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');  ?>
		<div class="portfolio_block_hover" style="background-image: url(<?php  echo $image_url[0];?>);"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name"><?php the_title(); ?></p>
			<p class="portfolio_block_category"><?php the_field('category_portfolio'); ?></p>
		</a>
	</div>
	<?php  
}
wp_reset_postdata();
 ?>
	<!--  -->
	<!-- <div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php //bloginfo('template_url'); ?>/img/portfolio/2048SteamPunkApp.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php //bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php //bloginfo('template_url'); ?>/img/portfolio/VaperStore.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php //bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php //bloginfo('template_url'); ?>/img/portfolio/GulfComUa.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php //bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php //bloginfo('template_url'); ?>/img/portfolio/DaVinciApp.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php //bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php //bloginfo('template_url'); ?>/img/portfolio/CompassSteamPunkApp.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php //bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php //bloginfo('template_url'); ?>/img/portfolio/Cheshire Cat in Wanderland.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php //bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php //bloginfo('template_url'); ?>/img/portfolio/aimcongress_uba_in_ua.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php //bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php //bloginfo('template_url'); ?>/img/portfolio/Brand4Baby.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php //bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
	</div>
	<div class="portfolio_block">
		<div class="portfolio_block_hover" style="background-image: url('<?php //bloginfo('template_url'); ?>/img/portfolio/AIK Group.jpg');"></div>
		<a href="#" class="portfolio_block_info">
			<img src="<?php //bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">
			<p class="portfolio_block_name">"White Gallery"</p>
			<p class="portfolio_block_category">Web Design</p>
		</a>
    </div> -->
	</div>
</div>
<!-- why_we -->
<div class="why_we">
	<p class="text_big text_big_bold text_center text_upper">Почему мы</p>
	<div class="description_block">
		<p><?php the_field('discription_why_we'); ?></p>
	</div>
	<div class="four_block_wrapper">
		<div class="four_block">
			<div class="four_block_img">
				<img src="<?php bloginfo('template_url'); ?>/img/service/po4emu-my-1.svg" alt="">
			</div>
			<div class="four_block_content">
				<p><?php the_field('why_we1'); ?></p>
			</div>
		</div>
		<div class="four_block">
			<div class="four_block_img">
				<img src="<?php bloginfo('template_url'); ?>/img/service/po4emu-my-2.svg" alt="">
			</div>
			<div class="four_block_content">
				<p><?php the_field('why_we2'); ?></p>
			</div>
		</div>
		<div class="four_block">
			<div class="four_block_img">
				<img src="<?php bloginfo('template_url'); ?>/img/service/po4emu-my-3.svg" alt="">
			</div>
			<div class="four_block_content">
				<p><?php the_field('why_we3'); ?></p>
			</div>
		</div>
		<div class="four_block">
			<div class="four_block_img">
				<img src="<?php bloginfo('template_url'); ?>/img/service/po4emu-my-4.svg" alt="">
			</div>
			<div class="four_block_content">
				<p><?php the_field('why_we4'); ?></p>
			</div>
		</div>
	</div>
</div>
<!-- faq -->
<div class="faq">
	<p class="text_big text_big_bold text_center text_upper">Часто задаваемые вопросы</p>
	<div class="faq_wrapper">
	<?php 
		$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$params = array(
	'posts_per_page' => 7, // количество постов на странице
	'post_type'       => 'faq', // тип постов
	'paged'           => $current_page // текущая страница
);
query_posts($params);
 
$wp_query->is_archive = true;
$wp_query->is_home = false;
 
while(have_posts()): the_post();?>
	<div class="faq_block">
			<div class="faq_title">
				<p><?php the_title(); ?></p>
			</div>
			<div class="faq_content">
				<p class="faq_content_text"><?php the_content(); ?></p>
			</div>
		</div>
<?php endwhile;?>

<!-- 		<div class="faq_block">
			<div class="faq_title">
				<p>Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа.</p>
			</div>
			<div class="faq_content">
				<p class="faq_content_text">Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос</p>
			</div>
		</div>
		<div class="faq_block">
			<div class="faq_title">
				<p>Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа.</p>
			</div>
			<div class="faq_content">
				<p class="faq_content_text">Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос</p>
			</div>
		</div>
		<div class="faq_block">
			<div class="faq_title">
				<p>Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа.</p>
			</div>
			<div class="faq_content">
				<p class="faq_content_text">Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос</p>
			</div>
		</div>
		<div class="faq_block">
			<div class="faq_title">
				<p>Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа.</p>
			</div>
			<div class="faq_content">
				<p class="faq_content_text">Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос</p>
			</div>
		</div>
		<div class="faq_block">
			<div class="faq_title">
				<p>Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа Вопрос без ответа.</p>
			</div>
			<div class="faq_content">
				<p class="faq_content_text">Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос Ответ на Вам вопрос Ответ на Ваш вопрос Ответ на Ваш вопрос</p>
			</div>
		</div> -->
	</div>	
</div>

<?php get_footer(); ?>