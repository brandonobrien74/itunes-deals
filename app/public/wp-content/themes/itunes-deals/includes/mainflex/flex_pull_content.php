<?php
$sectionTitle = get_sub_field('section_title');
$sectionPrice = get_sub_field('sale_price');
$sectionClass = get_sub_field('section_class');
?>

<section class="movie_deals section_<?php echo $sectionPrice; ?>">
	<div class="wrap">
		<h2><?php echo $sectionTitle; ?></h2>
		<?php
			$args = array( 'post_type' =>  'movie',
						   'posts_per_page' =>  '500',
						   'orderby' => 'title',
						   'order'   => 'ASC',
						   'tax_query' => array(
								array(
									'taxonomy' => 'price',
									'field'    => 'slug',
									'terms' => $sectionPrice,
								),
							)
						);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			
			?>
			
			<a href="<?php the_permalink(); ?>" class="movie_snippet">
				<?php the_post_thumbnail(); ?>
				<h3><?php the_title(); ?></h3>
				<span><?php foreach((get_the_category()) as $category) { 
   			 		echo $category->cat_name . ' '; 
				} ?></span>
			</a>
			
			<?php
			endwhile;
			wp_reset_postdata();
			?>
		</ul>
	</div>
</section>