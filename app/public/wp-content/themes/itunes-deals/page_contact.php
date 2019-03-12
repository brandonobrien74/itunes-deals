<?php /* Template Name: Contact */

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'custom_loop');
function custom_loop() {
?>
<div class="fw-googlemap"><?php the_field('google_map');?></div>
<div class="wrap">
	<div class="first one-half">
		<h1><?php the_field('main_heading'); ?></h1>
		<div class="contact_details">
			<div class="contact_icon">
				<i class="fa fa-phone"></i> 
			</div>
			<div class="contact_information">
				<a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a>
			</div>
		</div>
		<div class="contact_details">
			<div class="contact_icon">
				<i class="fa fa-envelope"></i>
			</div>
			<div class="contact_information">
				<?php the_field('email_address', 'option'); ?>
			</div>
		</div>
		<div class="contact_details">
			<div class="contact_icon">
				<i class="fa fa-map-marker"></i>
			</div>
			<div class="contact_information">
				<?php the_field('location', 'option'); ?>	
			</div>
		</div>
	</div>

	<div class="one-half">
		<div class="form_intro"><?php the_field('intro_content');?></div>
		<?php echo do_shortcode('[contact-form-7 id="86" title="Contact Form"]'); ?>
	</div>
</div>

<?php
}
remove_action('genesis_before_post_content', 'genesis_post_info');

genesis(); ?>