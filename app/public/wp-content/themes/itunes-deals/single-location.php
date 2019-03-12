<?php 
 
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'custom_loop');
function custom_loop() {
	
?>
<article>
	<header class="pageheadings">
		<div class="wrap">
			<h1><?php the_title(); ?></h1>
		</div>
	</header>
	
<section class="content-repeater whitebck">
	<div class="wrap">
		<div class="first two-thirds">
			<div class="container">
		  		<div id="map_wrapper">
		  	  		<div id="map_canvas" class="mapping"></div>
		  	  	</div>
	  	  	</div>
		</div>
		<div class="one-third">
	  	  	<div class="locationscontainer">
	  	  	<?php
	  	  	
			if( have_rows('service_area', 'option') ):
			
			    while ( have_rows('service_area', 'option') ) : the_row();
				?>
				<a class="locationlist" href="#">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
			 <?php the_sub_field('location_name', 'option'); ?>
			 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
				</a>	
				<?php       
			    endwhile;
			    
			endif;	
			?>    	
	  	  	</div>
  	  	</div>
  	  	
	</div>

	
</section>

<?php
if( have_rows('repeater_field') ):
		
		     // loop through the rows of data
		    while ( have_rows('repeater_field') ) : the_row();
		
		        if( get_row_layout() == 'text_and_image' ):
		
		        	?>
		        	
		        	<section class="content-repeater">
				        	<div class="wrap">
							<?php
								$strongtitle = get_sub_field('repeater_header');
								if( !empty($strongtitle) ): ?>
								<strong><?php echo $strongtitle; ?></strong>
							<?php endif; ?>
				        	
				        	<div class="content-text"><?php the_sub_field('repeater_content'); ?></div>
			        		<div class="content-image">
				        		<?php 
								$image = get_sub_field('repeater_image');
								if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
			        		</div>
			        	</div>
		        	</section>
		        	
		        	<?php
		
		        elseif( get_row_layout() == 'repeater_columns' ): 
		
		        	?>
		        	
		        	<section class="content-repeater">
			        	<div class="wrap">
				        	<?php
								$strongtitle = get_sub_field('repeater_header');
								if( !empty($strongtitle) ): ?>
								<strong><?php echo $strongtitle; ?></strong>
							<?php endif; ?>
				        	<div class="first one-half">
					        	<?php the_sub_field('repeater_left_content');?>
				        	</div>
				        	<div class="one-half">
					        	<?php the_sub_field('repeater_right_content');?>
				        	</div>
			        	</div>
		        	</section>
		        	
		        	<?php
		
		        endif;
		        
		        if( get_row_layout() == 'service_blocks' ): 
		
		        	?>
		        	
		        	<section class="content-repeater grid">
			        	<div class="wrap">
				        	<?php
							if( have_rows('service_block') ):
								while( have_rows('service_block') ): the_row();
									?>
									<a href="#" class="gridbox">
										<i class="fa fa-search" aria-hidden="true"></i>
										<strong><?php the_sub_field('box_heading');?></strong>
										<?php the_sub_field('box_list'); ?>
									
									</a>
								<?php endwhile; ?>
		
							<?php endif; ?>
			        	</div>
		        	</section>
		        	
		        	<?php
		
					elseif( get_row_layout() == 'menu_layout' ): 
				?>
					<section class="content-repeater menu-section">
						<div class="wrap">
							<div class="first one-third">
								<strong><?php the_sub_field('menu_title');?></strong>
								<?php if( have_rows('side_menu') ): ?>
				
									<ul class="sidebar_menu">
								
									<?php while( have_rows('side_menu') ): the_row(); ?>
								
										<li>
											<a href="<?php the_sub_field('menu_link'); ?>">
												<?php the_sub_field('menu_item'); ?>
												<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
											</a>
				
											<?php
											// check for rows (sub repeater)
											if( have_rows('sub_menu') ): ?>
												<ul class="subside">
												<?php 
				
												// loop through rows (sub repeater)
												while( have_rows('sub_menu') ): the_row();
				
													// display each item as a list - with a class of completed ( if completed )
													?>
													<li><a href="<?php the_sub_field('sub_menu_link'); ?>"><?php the_sub_field('sub_menu_item'); ?></a></li>
												<?php endwhile; ?>
												</ul>
											<?php endif; //if( get_sub_field('items') ): ?>
				
										</li>
									<?php endwhile; ?>
									</ul>	
								<?php endif; ?>
							</div>
							<div class="two-thirds">
								<?php $image = get_sub_field('image_banner'); ?>
								<div class="featured-banner" style="background-image: url(<?php echo $image['url']; ?>);">
									
									
								</div>
								<div>
									<?php the_sub_field('content_block'); ?>
								</div>
							</div>
						</div>
					</section>
					
				<?php
						
				 
		        elseif( get_row_layout() == 'featured_block' ):
					?>
					
					<div class="content-repeater featured-block">	
						<div class="wrap">
							<h2><?php the_sub_field('feature_heading'); ?></h2>
			    			<div class="first one-half">
				    			<?php 
								$image = get_sub_field('feat_image');
								
								if( !empty($image) ): ?>
								
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								
								<?php endif; ?>
			    			</div>
			    			<div class="one-half">
				    			
				    			<div class="feat-block">
					    			<?php the_sub_field('feat_content');?>
					    			<a href="<?php the_sub_field('feat_cta_link'); ?>" class="button"><?php the_sub_field('feat_cta');?></a>
				    			</div>
			    			</div>
						</div>	
					</div>
					<?php	
						
				elseif( get_row_layout() == 'tripple_columns' ):
					?>
					
					<div class="content-repeater">	
						<div class="wrap">
							<div class="first one-third">
								<?php the_sub_field('repeater_content_first');?>
							</div>
							<div class="one-third">
								<?php the_sub_field('repeater_content_first');?>
							</div>
							<div class="one-third">
								<?php the_sub_field('repeater_content_first');?>
							</div>
						</div>	
					</div>
					<?php		
				
				
				 elseif( get_row_layout() == 'hero_layout' ):
					?>
					
					<section class="herolayout">
						
						<?php 

						$image = get_sub_field('background_image');
						
						if( !empty($image) ): ?>
						
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
						<?php endif; ?>
						<div class="wrap">
							<div class="herocontent">
							<?php the_sub_field('hero_heading'); ?>
							<?php the_sub_field('hero_content');?>
							</div>
						</div>
					</section>
					
					<?php		
				
		
		        elseif( get_row_layout() == 'testimonial_form' ): 
		
		        	?>
					<div class="sales-cta">	
		    			<div class="wrap">
			    			<strong><?php the_sub_field('sales_title'); ?></strong>
			    			<p><?php the_sub_field('sales_instruction'); ?></p>
			    			<div class="first one-half">
			        			<blockquote>
				        			<?php the_sub_field('testimonial'); ?>
			        			</blockquote>
			    			</div>
			    			<div class="one-half">
								<div class="testimonial-form">
									<?php echo do_shortcode('[contact-form-7 id="86" title="Contact Form"]'); ?>
								</div>
			    			</div>
							<div class="smallfont">
								<p><?php the_sub_field('sales_disclaimer'); ?></p>
							</div>
		    			</div>
					</div>
					<?php
		
		
		        endif;
		
		
		    endwhile;
		
		else :
		
		    // no layouts found
		
		endif;

?>

</article>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">
    
jQuery(function($) {
	// Asynchronously Load the map API 
	var script = document.createElement('script');
	script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
	document.body.appendChild(script);
});

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };               
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);
    
    	<?php
	    	
	    	$markers = "";
	    	  $infoWindowContent = "";
	
	if( have_rows('service_area', 'option') ):

    while ( have_rows('service_area', 'option') ) : the_row();

      $locationName = get_sub_field('location_name', 'option');
      $locationLong =  get_sub_field('location_longitude', 'option');
      $locationLat =  get_sub_field('location_latitude', 'option');
      $locationHead =  get_sub_field('location_bubble_heading', 'option');
      $locationContent =  get_sub_field('location_bubble_content', 'option');

      $markers .= "['" . $locationName . "', " . $locationLong . "," . $locationLat . "],";
   
      $infoWindowContent .= "['<div class=\"info_content\">' +
        '<h3>" . $locationHead . "</h3>' +
        '" . trim($locationContent) . "' +
        '</div>'],";
        
    endwhile;
    
    endif;	    	
?>        
    // Markers Go Here
    var markers = [<?php=$markers?>];
                        
    // Info Window Content
    var infoWindowContent = [<?php=$infoWindowContent?>];
       
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(5);
        google.maps.event.removeListener(boundsListener);
    });
}
</script>
<?php
}
remove_action('genesis_before_post_content', 'genesis_post_info');
genesis(); ?>



