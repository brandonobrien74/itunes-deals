<section class="vertical_slider">
	<?php
	if( have_rows('slides') ) {
		$count = 1;
		while ( have_rows('slides') ) {
			the_row(); ?>
			<div class="slide<?php if ($count == 1) { echo ' slide_active'; } ?>" id="<?php echo $count; ?>slide">
				<div class="slide_background" style="background-image:url(<?php echo get_sub_field('background_image')['url']; ?>)"></div>
				<div class="slide_block">
					<div class="slide_copy">
						<p><?php the_sub_field('slide_content'); ?></p>
					</div>
				</div>
			</div>	
		<?
		$count += 1;
		}
	}
	?>
	<span class="line" style="height:100vh;"></span>
	<ul class="slide_indicators">
		<?php for ($i=0; $i < $count - 1; $i++) { ?>
			<li class="<?php if ($i == 0) { echo 'tab_active'; } ?>" id="slick-slide0<?php echo $i; ?>" data-index="<?php echo $i; ?>">
	          <button tabindex="<?php echo $i; ?>" type="button"><?php echo $i + 1; ?></button>
	        </li>
	     <?php } ?>
    </ul>
	<script>
		

	</script>
</section>