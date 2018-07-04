<?php get_header(); ?>
<?php get_header("service"); 
/*
Template Name: Контакты
*/
 ?>
<div class="service_info page_contact">
<p class="text_big text_center text_bold text_white">КОНТАКТЫ</p>
	<form class="form_send_contact" action="" method="post">
					<input class="send_request_name" type="text" name="name" placeholder="Ф.И.О">					
					<input class="send_request_email" type="email" name="mail" placeholder ="E-mail">
					<input class="send_request_subject" type="text" name="subject" placeholder="Тема">
					<textarea class="send_request_message" name="message" id="" cols="" rows="6" placeholder="Собщение..."></textarea>
					<input class="send_request_submit" type="submit" value="Отправить">
				</form>
</div>

 <?php get_footer(); ?>