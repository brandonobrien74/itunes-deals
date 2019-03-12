<?php if (get_field('subscribe_bar_text', 'option')) { ?>
<div class="signup_banner">
	<div class="wrap">
		<span><?php the_field('subscribe_bar_text', 'option'); ?></span><?php echo do_shortcode(get_field('subscribe_bar_contact_form', 'option')); ?>
	</div>
</div>
<?php } ?>

<footer class="footer_content">
	<div class="wrap">
		<div class="footer_col">
			<?php $footerlogo = get_field('footer_logo', 'option'); ?>
			<img src="<?php echo $footerlogo['url']; ?>" alt="<?php echo $footerlogo['alt']; ?>" />
		</div>
		<div class="footer_col">
			<?php

			if( have_rows('footer_quick_links', 'option') ):
				?>
				<ul>
				<?php
			    while ( have_rows('footer_quick_links', 'option') ) : the_row();
					?>
			        <li>
			        	<a href="<?php the_sub_field('link_destination', 'option'); ?>"><?php the_sub_field('link_label', 'option'); ?></a>
			        </li>
					<?php
			    endwhile;
				?>
				</ul>
				<?php
			endif;
			
			?>
		</div>
		<div class="footer_col">
			<strong>Location</strong>
			<?php the_field('location', 'option'); ?><br />
			<a target="_blank" href="#">Get Directions</a>
		</div>
		<div class="footer_col">
			<strong>Contact</strong>
			<ul>
				<li>
					Call: 
					<a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a>
				</li>
				<li>
					Email: 
					<a href="sms:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a>
				</li>
			</ul>
		</div>
		<div class="footer_col">
			<?php 
			$facebook = get_field('facebook_link', 'option');
			$twitter = get_field('twitter_link', 'option');
			$youtube = get_field('youtube_link', 'option');
			$yellowpages = get_field('yellow_pages_link', 'option');
			$ratemd = get_field('rate_mds_link', 'option'); 
			?>
			<div class="social_links">
				<?php
				if( !empty($facebook) ): ?>
					<a title="facebook link" target="_blank" href="<?php echo $facebook; ?>"><span aria-hidden="true" class="fab fa-facebook-f"></span></a>
				<?php endif;
				if( !empty($twitter) ): ?>
					<a title="twitter link" target="_blank" href="<?php echo $twitter; ?>"><span aria-hidden="true" class="fab fa-twitter"></span></a>
				<?php endif;
				if( !empty($youtube) ): ?>
					<a title="youtube link" target="_blank" href="<?php echo $youtube; ?>"><span aria-hidden="true" class="fab fa-youtube"></span></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</footer>