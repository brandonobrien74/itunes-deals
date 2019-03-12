<?php 
 
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'custom_loop');
function custom_loop() { ?>

<article>
	<div class="wrap">
		
		<div class="movie_poster">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="movie_sale_info">
			<h1><?php the_title(); ?></h1>
			<h2>This Movie Is Currently On Sale For:</h2>
		</div>
		<section class="past_sale_info">
			<h2>Sale History</h2>
		</section>
		
	</div>
</article>

<?php }
remove_action('genesis_before_post_content', 'genesis_post_info');
genesis(); ?>



