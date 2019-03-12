<?php 
$backgroundClass = get_sub_field('background_class');
?>
<section class="faq_snippet_container <?php if( !empty($backgroundClass) ): echo $backgroundClass; endif; ?>">
	<div class="wrap">
		<strong class="faq_header">What People Are Asking</strong>
		<ul>
			<?php
			$postType = get_sub_field('post_type'); 
			$postCat = get_sub_field('post_category'); 
			$postAmount = get_sub_field('post_amount'); 
			$args = array( 'post_type' => $postType,
						   'posts_per_page' =>  $postAmount ,
						   'orderby' => 'date',
						   'order'   => 'ASC',
						   'tax_query' => array(
								array(
									'taxonomy' => 'faq_type',
									'field'    => 'slug',
									'terms'    => $postCat,
								),
							)
							);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();

			?>
			
			<li>
				<strong><?php the_field('question'); ?></strong>
				<br />
				<span class="feat_answer"><?php the_field('small_answer'); ?></span>
			</li>
			
			<?php
			endwhile;
			wp_reset_postdata();
			?>
		</ul>
		<a href="/faqs/" class="button">Read More Frequently Asked Questions</a>
	</div>
</section>