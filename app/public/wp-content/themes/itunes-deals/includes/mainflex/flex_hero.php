<?php
$content = get_sub_field('content_block');
$image = get_sub_field('hero_image');
$heroSize = get_sub_field('hero_size');
$heroVideoURL = get_sub_field('hero_video_url');
$heroParallax = 'hero_parallax';
if( get_sub_field('hero_video') == 'yes' ):
	$heroVideo = 'herovideo';
endif;
if( get_sub_field('hero_position') == 'left' ):
	$heroPosition = 'hero_left';
elseif( get_sub_field('hero_position' ) == 'right'):
	$heroPosition = 'hero_right';
	elseif( get_sub_field('hero_position' ) == 'center'):
	$heroPosition = 'hero_center';
endif;
if( get_sub_field('content_colour') != 'custom'):
		$textColour = get_sub_field('content_colour');
	else:
		$textColour = get_sub_field('custom_content_colour');
endif;
?>
<script defer src="https://www.youtube.com/player_api"></script>

<section class="herolayout hero_size_<?php echo $heroSize; ?> <?php if( get_sub_field('hero_parallax') == 'yes' ): echo $heroParallax; endif; ?> <?php echo $heroVideo; ?>" style="background-image:url(<?php echo $image['url']; ?>);">
	<div id="player"></div>
	<div style="width: 100%;">
	<div class="<?php echo $heroPosition ?>" style="color: <?php echo $textColour; ?>">
		<?php echo $content; ?>
	</div>
	</div>
					
	
</section>



<?php if( get_sub_field('hero_video') == 'yes' ): ?>
<script type="text/javascript">	
var player;
function onYouTubePlayerAPIReady() {
    player = new YT.Player('player', {
        playerVars: {
            'autoplay': 1,
            'controls': 0,
            'autohide': 1,
            'wmode': 'opaque',
            'showinfo': 0,
            'loop': 1,
            'mute': 0,
            //'start': 15,
            //'end': 110,
            'playlist': '<?php echo $heroVideoURL; ?>'
        },
        videoId: '<?php echo $heroVideoURL; ?>',
        events: {
            'onReady': onPlayerReady
        }
    });
}
function onPlayerReady(event) {
    event.target.mute();
}	
</script>
<?php endif; ?>