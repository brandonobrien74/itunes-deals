<?php 
if( have_rows('repeater_field') ):
	while ( have_rows('repeater_field') ) : the_row();
	
		if( get_row_layout() == 'basic_section' ):
		
			require('mainflex/flex_basic.php');
			
		elseif( get_row_layout() == 'content_section' ):
		
			require('mainflex/flex_content_section.php'); 
		
		elseif( get_row_layout() == 'repeater_columns' ): 
		
			require('mainflex/flex_columns.php');
						
		elseif( get_row_layout() == 'hero_layout' ):
		
			require('mainflex/flex_hero.php');  
		
		elseif( get_row_layout() == 'callout_box' ):
			
			require('mainflex/flex_callout.php');  
			
		elseif( get_row_layout() == 'testimonial_block' ):
			
			require('mainflex/flex_testimonial.php');  
			
		elseif( get_row_layout() == 'pull_content' ):
			
			require('mainflex/flex_pull_content.php');  
			
		elseif( get_row_layout() == 'accordion_section' ):
			
			require('mainflex/flex_accordion.php');  
								
		elseif( get_row_layout() == 'boxes_section' ):
			
			require('mainflex/flex_boxes.php');  
								
		elseif( get_row_layout() == 'vertical_slider' ):
			
			require('mainflex/flex_vertical_slider.php');  
			
		elseif( get_row_layout() == 'tri_card_section' ):
			
			require('mainflex/flex_tri_card_section.php');  
								
		endif;
		
	endwhile;

endif;