<div class="attorney-lander">
	<?php

	    $mypages = new WP_Query( array( 'post_type' => 'page', 'post_parent' => $post->ID, 'orderby' => 'menu_order', 'order' => 'asc' ) );

	    while ($mypages->have_posts()) {
	        $mypages->the_post();
	        ?>
	        <div class="row">
		        <div class="col-sm-3 attorney-image">
		            <?php if (has_post_thumbnail()) : ?>
		                <figure>
		                    <?php the_post_thumbnail(); ?>
		                </figure>
		            <?php endif; ?>
		        </div>
		        <div class="col-sm-9 attorney-detail">
		            <h2><?php the_title(); ?></h2>
		            <?php the_excerpt(); ?>
		            <p class="call-to-action"><a href="<?php echo get_permalink(); ?>">Learn More</a></p>
		        </div>
	        </div>
	        <?php
	    }
	    wp_reset_postdata();
	?>
</div>
