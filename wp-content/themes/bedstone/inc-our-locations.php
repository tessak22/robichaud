<hr>
<div class="our-locations">
	<h2>Our Locations</h2>
	<?php

	    $mypages = new WP_Query( array( 'post_type' => 'page', 'post_parent' => $post->ID, 'orderby' => 'menu_order', 'order' => 'asc' ) );

	    while ($mypages->have_posts()) {
	        $mypages->the_post();
	        ?>
		        <div class="col-sm-12 location post-id-<?php the_ID(); ?>">
		            <h3 class="partial-rule partial-rule--bottom partial-rule--left"><?php the_title(); ?></h3>
		            <p class="call-to-action"><a href="<?php echo get_permalink(); ?>">Learn More</a></p>
		        </div>
	        <?php
	    }
	    wp_reset_postdata();
	?>
</div>
