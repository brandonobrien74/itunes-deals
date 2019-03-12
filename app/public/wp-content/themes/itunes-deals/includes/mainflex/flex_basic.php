<?php
$content = get_sub_field('basic');
$wrap = get_sub_field('has_wrap');
if( get_sub_field('background_colour') != 'custom'):
	$backgroundColour = get_sub_field('background_colour');
else:
	$backgroundColour = get_sub_field('custom_colour');
endif;
?>

<section class="content_repeater" style="background-color:<?php echo $backgroundColour; ?>;">
	
	<div class="wrap">
		<?php echo $content; ?>
	</div>	
	
</section>