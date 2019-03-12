<?php

$content = get_sub_field('content_block');
$cardOne = get_sub_field('card_one');
$cardTwo = get_sub_field('card_two');
$cardThree = get_sub_field('card_three');
$cardOneLink = get_sub_field('card_one_link');
$cardTwoLink = get_sub_field('card_two_link');
$cardThreeLink = get_sub_field('card_three_link');
$background = get_sub_field('background_image');


$position = get_sub_field('content_position');
if( $position == 'top' ):
	$contentPosition = 'v_aligntop';
elseif($position == 'middle'):
	$contentPosition = 'v_alignmiddle';  
elseif($position == 'bottom'):
	$contentPosition = 'v_alignbottom';
endif;

?>

<section class="tri_card_section" style="background-image:url(<?php echo $background; ?>);">
	<div class="wrap <?php echo $contentPosition; ?>">
		
		<div class="tri_content_block">
			<?php echo $content; ?>
		</div>
		
		<div class="card_holder">
			<div class="card_column">
				<a href="<?php echo $cardOneLink; ?>" class="card_slot">
					<?php echo $cardOne; ?>
				</a>
			</div>
			<div class="card_column">
				<a href="<?php echo $cardTwoLink; ?>" class="card_slot">
					<?php echo $cardTwo; ?>
				</a>
				<a href="<?php echo $cardThreeLink; ?>" class="card_slot">
					<?php echo $cardThree; ?>
				</a>
			</div>
		</div>
		
	</div>
</section>