<section class="accordion_repeater">
	
	<div class="wrap">
		
		<?php

		if( have_rows('accordion') ):
		
		    while ( have_rows('accordion') ) : the_row();
		
		        ?>
		        
		        <div class="accordion">
					<strong><?php the_sub_field('tab_title'); ?></strong>
					<div class="accordion_plus">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
				</div>
				<div class="panel">
					<?php the_sub_field('tab_content'); ?>
				</div>
		        
		        <?php
		
		    endwhile;
		endif;
		
		?>
		
	</div>	
	
</section>

<script type="text/javascript" defer>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    panel.classList.toggle("active");
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}
</script>