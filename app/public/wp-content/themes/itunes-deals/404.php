<?php /* Template Name: 404 */

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'custom_loop');
function custom_loop() {
?>

<section class="herolayout hero_size_half hero_parallax " style="background-image:url('/wp-content/uploads/2016/05/heroimage.jpg');">
		
	<div class="hero_center">
		<h1>404 No Page Found</h1>
		<p>This is not the page you're looking for. Below is a helpful list of pages that may help.</p>

	</div>
</section>
<section class="content_repeater">
		
	<div class="wrap">
		<?php echo do_shortcode('[wp_sitemap_page]'); ?>
	</div>	

</section>
					
	
</section>

<style>
	
.search {
  width: 100%;
  position: relative
}

.searchTerm {
  float: left;
  width: 100%;
  padding: 15px;
  border-radius: 5px;
  outline: none;
  color: #000;
}

.searchTerm:focus{
  color: #000;
}

.searchButton {
  position: absolute;  
  padding: 10px;
  text-align: center;
  color: #fff;
  cursor: pointer;
  font-size: 20px;
  right: 5px;
  color: tomato!important;
  background: none!important;
}

	
</style>

<?php
}
remove_action('genesis_before_post_content', 'genesis_post_info');

genesis(); ?>