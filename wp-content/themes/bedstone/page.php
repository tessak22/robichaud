<?php
/**
 * page
 *
 * @package Bedstone
 */

// $top_page_title = empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );

if ($post->post_parent) {
    $top_page_title = get_the_title($post->post_parent);
} else {
    $top_page_title = get_the_title( $post->ID );
}

get_header(); ?>

<header class="document-header document-header--page">
    <div class="container--main">
        <h1><?php echo $top_page_title; ?></h1>
        <div class="document-header--page__bg-img rand-<?php echo rand(1,6); ?>"></div>
    </div>
</header>

<div class="container--main">

    <div class="container-columns row">
        <div class="content col-md-8" role="main">
            <?php
            while (have_posts()) : the_post();
                get_template_part('content');
            endwhile;
            wp_reset_postdata();


            $ancestors = get_post_ancestors($post->ID);
            if ( is_page(PAGE_PRACTICE_AREAS) && count($ancestors) <= 0 ) {

                $args = array(
                    'post_parent' => $post->ID,
                    'post_type' => 'page',
                    'depth' => 1
                );

                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();

                        echo '<div class="content-list">';
                        get_template_part('content', 'list');
                        echo '</div>';
                    endwhile;
                endif;
                wp_reset_postdata();

            }
            ?>
        </div>
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>
