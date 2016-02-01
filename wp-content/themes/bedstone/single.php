<?php
/**
 * attachment
 * custom post type
 * blog post
 *
 * @package Bedstone
 */

// get the section title in case this is a blog post
$posts_section_title = bedstone_get_posts_section_title();

get_header(); ?>

<header class="document-header document-header--page">
    <div class="container--main">
        <h1><?php echo ($posts_section_title) ? $posts_section_title : get_the_title(); ?></h1>
        <div class="document-header--page__bg-img rand-<?php echo rand(1,2,3,4,5,6); ?>"></div>
    </div>
</header>

<div class="container--main">

    <div class="container-columns row">
        <div class="content col-md-8" role="main">

            <?php
                while (have_posts()) {
                    the_post();
                    get_template_part('content');
                }
            ?>

            <?php if ('post' == get_post_type()) : ?>
                <footer class="article-footer">
                    <?php get_template_part('nav', 'posts'); ?>
                </footer>
            <?php endif; ?>

        </div>
        <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>
