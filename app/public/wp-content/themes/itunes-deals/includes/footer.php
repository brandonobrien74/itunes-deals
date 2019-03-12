<?php if (get_field('subscribe_bar_text', 'option')) { ?>
<div class="signup_banner">
	<div class="wrap">
		<span><?php the_field('subscribe_bar_text', 'option'); ?></span><?php echo do_shortcode(get_field('subscribe_bar_contact_form', 'option')); ?>
	</div>
</div>
<?php } ?>

