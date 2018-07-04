<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softvel
 */

?>
<!-- Контакты -->
<div class="contackts">
	<div class="contackts_wrapper">
		<div class="contackts_block contackts_block_toggle">
			<p>АДРЕСС ЦЕНТРАЛЬНОГО ОФИСА:</p>
			<hr>
			<p class="contackts_block_info"><img src="<?php bloginfo('template_url'); ?>/img/icons/adress-yellow.svg" alt="">ул.Большая Васильковская 9/2</p>
			<p class="contackts_block_info"><img src="<?php bloginfo('template_url'); ?>/img/icons/mail-zalivka-yellow.svg" alt="">info@softvel.com</p>
			<p class="contackts_block_info"><img src="<?php bloginfo('template_url'); ?>/img/icons/phone-yellow.svg" alt="">+38 063 602 45 28</p>
			<p class="contackts_block_info"><img src="<?php bloginfo('template_url'); ?>/img/icons/phone-yellow.svg" alt="">+38 063 602 45 28</p>
			<p class="soc_icons">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/icons/icon-fb.svg" alt=""></a> 
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/icons/icons-linkedin.svg" alt=""></a>
			</p>
			<p class="fidback_button">Обратная связь</p>
		</div>
		<div class="map">
			<iframe class="map_google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d635.2575142833881!2d30.520470129251493!3d50.44054079871714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ceff05ec5a03%3A0xa1b1cdd88000a3ad!2z0LLRg9C70LjRhtGPINCS0LXQu9C40LrQsCDQktCw0YHQuNC70YzQutGW0LLRgdGM0LrQsCwgOS8yLCDQmtC40ZfQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1527665735855" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>
<!-- footer -->
<footer>
	<p class="context">2018 все права защищены</p>
</footer>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
<!-- <script src="src/js/scripts.js"></script> -->
</body>
</html>
<?php wp_footer(); ?>
