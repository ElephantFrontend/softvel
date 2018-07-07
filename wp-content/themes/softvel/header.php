<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softvel
 */
?>
<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title><?php wp_title(); ?></title>
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="application_window_wrapper"></div>
		<div class="application_window">
				<p class="text_big text_bold">ОТПРАВИТЬ ЗАЯВКУ</p>
				<?php echo do_shortcode( '[contact-form-7 id="144" title="Application form"]' ); ?> 
				<!-- <form class="form_send_request" action="" method="post">
					<input class="send_request_name" type="text" name="name" placeholder="Ф.И.О">
					<p>
						<input class="send_request_tel" type="tel" name="phone" placeholder ="Телефон">
						<input class="send_request_email" type="email" name="mail" placeholder ="E-mail">
					</p>
					<input class="send_request_subject" type="text" name="subject" placeholder="Тема">
					<textarea class="send_request_message" name="message" id="" cols="" rows="6" placeholder="Собщение..."></textarea>
					<input class="send_request_submit" type="submit" value="Отправить">
				</form> -->
				<p class="intermediate_text">или позвоните нам:</p>
				<p class="text_big text_bold">+38 (063) 602-45-28</p>
				<p class="text_big text_bold">+38 (094) 821-62-54</p>
		</div>
	<div class="fidback_window">
		<p class="text_big text_bold">ОБРАТНАЯ СВЯЗЬ</p>
				<?php echo do_shortcode( '[contact-form-7 id="144" title="Application form"]' ); ?>
				<!-- <form class="form_send_request" action="" method="post">
					<input class="send_request_name" type="text" name="name" placeholder="Ф.И.О">
					<p>
						<input class="send_request_tel" type="tel" name="phone" placeholder ="Телефон">
						<input class="send_request_email" type="email" name="mail" placeholder ="E-mail">
					</p>
					<input class="send_request_subject" type="text" name="subject" placeholder="Тема">
					<textarea class="send_request_message" name="message" id="" cols="" rows="6" placeholder="Собщение..."></textarea>
					<input class="send_request_submit" type="submit" value="Отправить">
				</form> -->
	</div>
