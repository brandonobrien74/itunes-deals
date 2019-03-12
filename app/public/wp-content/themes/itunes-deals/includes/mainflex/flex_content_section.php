<?php
$hTag = get_sub_field('heading_type');
$header = get_sub_field('repeater_header');
$headerAlign = get_sub_field('heading_align');
$height = get_sub_field('content_height');
$imageAlign = get_sub_field('image_align');
$wrap = get_sub_field('has_wrap');
$content = get_sub_field('repeater_content');
$image = get_sub_field('repeater_image');


if( get_sub_field('background_colour') != 'custom'):
		$backgroundColour = get_sub_field('background_colour');
	else:
		$backgroundColour = get_sub_field('custom_colour');
endif;
if( get_sub_field('content_colour') != 'custom'):
		$textColour = get_sub_field('content_colour');
	else:
		$textColour = get_sub_field('custom_content_colour');
endif;

?>
<section style="background-color:<?php echo $backgroundColour;?>; color: <?php echo $textColour; ?>" class="content_<?php echo $height; ?>">	
	
	<div <?php if( $wrap && in_array('yes', $wrap) ): ?> class="wrap" <?php endif; ?> >
		
		<?php if( $image ): ?>
		<div class="content_image image_<?php echo $imageAlign; ?>">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</div>
		<?php 
		endif;
		?>
		<div class="content_block align<?php echo $headerAlign; ?>">
			<?php 
				if( $header ): ?>
					<<?php echo $hTag; ?> class="section_title"><?php echo $header; ?></<?php echo $hTag; ?>>
				<?php 
				endif;
				echo $content; ?>
		</div>
	</div>	
	
</section>

