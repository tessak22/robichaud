<?php
/**
 * sidebar
 *
 * @package Bedstone
 */


if ($post->post_parent) {
    // if $post has parent than it is "Second level" and show its children.
    $children = wp_list_pages(array(
        'child_of' => $post->post_parent,
        'depth' => 1,
        'echo' => 0,
        'title_li' => '',
    ));

    $top_page_title = get_the_title($post->post_parent);
    $top_page_permalink = get_permalink($post->post_parent);
} else {
    // else it's a "Top level" so display children & grand children?
    $children = wp_list_pages(array(
        'child_of' => $post->ID,
        'depth' => 1,
        'echo' => 0,
        'title_li' => '',
    ));

    $top_page_title = get_the_title($post->ID);
    $top_page_permalink = get_permalink($post->ID);
}

?>

<aside class="col-md-4" role="complementary">
    <div class="sidebar">

        <?php if (is_page()) : ?>
            <div class="box-shadow--sm hidden-print">
                <h2 class="partial-rule partial-rule--bottom partial-rule--left">
                    <a href="<?php echo $top_page_permalink; ?>"><?php echo $top_page_title; ?></a>
                </h2>
                <nav class="nav-secondary nav-children">
                    <ul class="nav-secondary__list">
                        <?php echo $children; ?>
                    </ul>
                </nav>
            </div>
        <?php endif; ?>

        <div class="latest-news">
            <h2 class="partial-rule partial-rule--bottom partial-rule--left">New &amp; Resources</h2>
                <?php
                 $postslist = get_posts('numberposts=1&order=DESC&orderby=date');
                 foreach ($postslist as $post) :
                    setup_postdata($post);
                 ?>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php echo substr(get_the_excerpt(), 0,150); ?>
                    <p class="call-to-action"><a href="<?php the_permalink(); ?>">Read More</a></p>
                    <p class="tags"><?php echo get_the_tag_list('<span>',', ','</span>'); ?></p>
                <?php endforeach; ?>
        </div>

        <div class="we-can-help">
            <img src="<?php bloginfo('template_directory'); ?>/images/we-can-help-sidebar.jpg">
            <h2 class="partial-rule partial-rule--bottom partial-rule--left">We Can Help</h2>
            <p>Duis sagittis ipsum. Praesent sit mauris. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam etiam.</p>
            <a class="btn btn-pill" href="<?php echo get_permalink(PAGE_CONTACT_US); ?>">Contact Us</a>
        </div>

    </div>
</aside>
