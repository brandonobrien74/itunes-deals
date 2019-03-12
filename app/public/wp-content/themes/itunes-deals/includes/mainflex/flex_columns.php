<?php 
$hTag = get_sub_field('heading_type');
$header = get_sub_field('repeater_header');
$columnOne = get_sub_field('column_one');
$columnTwo = get_sub_field('column_two');
$columnThree = get_sub_field('column_three');
$columnFour = get_sub_field('column_four');
$wrap = get_sub_field('has_wrap');
if( get_sub_field('background_colour') != 'custom'):
		$backgroundColour = get_sub_field('background_colour');
	else:
		$backgroundColour = get_sub_field('custom_colour');
endif;
?>


<section class="content_repeater" style="background-color:<?php echo $backgroundColour; ?>;">
	<div <?php if( $wrap && in_array('yes', $wrap) ): ?> class="wrap" <?php endif; ?> >	
	
	<?php 
	if( $header ): ?>
		<<?php echo $hTag; ?> class="section_title aligncenter">
			<?php echo $header; ?>
		</<?php echo $hTag; ?>>
	<?php 
	endif;
	?>
	
	
	<?php if( get_sub_field('column_count') == 'two' ): ?>
		
		<div class="first one-half">
			<?php echo $columnOne; ?>
		</div>
		<div class="one-half">
			<?php echo $columnTwo; ?>
		</div>
			
	<?php elseif( get_sub_field('column_count' ) == 'three'):?>
		
		<div class="first one-third">
			<?php echo $columnOne; ?>
		</div>
		<div class="one-third">
			<?php echo $columnTwo; ?>
		</div>
		<div class="one-third">
			<?php echo $columnThree; ?>
		</div>
		
	<?php elseif( get_sub_field('column_count' ) == 'four'):?>

		<div class="first one-fourth">
			<?php echo $columnOne; ?>
		</div>
		<div class="one-fourth">
			<?php echo $columnTwo; ?>
		</div>
		<div class="one-fourth">
			<?php echo $columnThree; ?>
		</div>
		<div class="one-fourth">
			<?php echo $columnFour; ?>
		</div>

	<?php endif; ?>

		
	</div>
</section>