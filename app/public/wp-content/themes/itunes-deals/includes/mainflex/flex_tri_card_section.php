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
			<a href="#" class="card_slot btn_4-99">
				<span>$4.99</span> Deals
			</a>
			<a href="#" class="card_slot btn_6-99">
				<span>$6.99</span> Deals
			</a>
			<a href="#" class="card_slot btn_9-99">
				<span>$9.99</span> Deals
			</a>
			<a href="#" class="card_slot btn_12-99">
				<span>$12.99</span> Deals
			</a>
			<a href="#" class="card_slot btn_14-99">
				<span>$14.99</span> Deals
			</a>
			<a href="#" class="card_slot">
				<span>Past</span> Deals
			</a>
		</div>
		
	</div>
</section>