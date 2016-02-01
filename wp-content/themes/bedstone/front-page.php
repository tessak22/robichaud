<?php
/**
 * front page
 *
 * @package Bedstone
 */

get_header(); ?>

<header class="document-header document-header--home-page">
    <div class="container--main">

        <ul class="document-header__home-nav">
            <?php
            wp_list_pages(array(
                'child_of' => PAGE_PRACTICE_AREAS,
                'depth' => 1,
                'title_li' => '',
                'link_before'  => '<span>',
                'link_after'   => '</span>',
            ));
            ?>
        </ul>

    </div>
</header>


<div class="container--main">

    <div class="container--animate-headline">
        <?php
        echo do_shortcode(
                '[animated-headline title="" animated_text="We can help.,Nosotros podemos ayudar.,Peb yuav pab tau.,Chúng tôi có thể giúp.,我们可以帮助,Waxaan kaa caawin karaa." animation="type"]',
                true
            );
        ?>
    </div>

</div>


<div class="container--col horizontal-inset-shadows" role="main">
    <div class="container--main">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <?php if( have_rows('home_cta_card') ):
                    $i = 0;
                ?>
                        <div class="row">
                            <?php while( have_rows('home_cta_card') ): the_row();
                                $i++;
                                if( $i > 3 ){
                                    break;
                                }
                            ?>
                                <div class="col-sm-4">
                                    <div class="cta-card cta-card--home box-shadow--sm">
                                        <?php
                                            $image = get_sub_field('home_cta_card_image');
                                        ?>
                                        <div class="cta-card__img-container">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                        </div>
                                        <div class="cta-card__copy">
                                            <h3 class="partial-rule partial-rule--bottom partial-rule--center"><?php the_sub_field('home_cta_card_title'); ?></h3>
                                            <p><?php the_sub_field('home_cta_card_body'); ?></p>
                                            <a class="btn btn--pill" href="<?php the_sub_field('home_cta_card_link'); ?>"><?php the_sub_field('home_cta_card_link_text'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                <?php endif; ?>


            <?php endwhile; wp_reset_postdata(); ?>

        <?php endif; ?>

    </div>
</div>


<?php get_footer(); ?>
