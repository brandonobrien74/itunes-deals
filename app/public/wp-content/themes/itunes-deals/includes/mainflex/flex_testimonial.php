<section class="dynamic_block">
	
	<div class="testimonial_block full_testimonial testimonial_slider">
		<div class="slider">
			<strong class="section_title">What Our Clients Are Saying</strong>
			<!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
					<?php
					if( have_rows('testimonial_repeater') ) {
						while ( have_rows('testimonial_repeater') ) { the_row(); ?>
							<div class="slide swiper-slide"><blockquote><?php the_sub_field('testimonial'); ?></blockquote></div>      
						<?php }
					} ?>
				</div>
				<button class="swiper-button-prev"></button>
				<button class="swiper-button-next"></button>
				<ul class="slide-nav"></ul>
			</div>
		</div>
	</div>
</section>
