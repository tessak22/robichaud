<?php
/**
 * footer
 *
 * @package Bedstone
 */


// get one random testimonial
$args = array(
    'post_type' => 'testimonial',
    'orderby' => 'rand',
    'posts_per_page' => '1'
);
$testimonial = new WP_Query($args);
?>

</main>
<!-- </div> --> <!-- .container-non-site-footer-elements -->

<footer class="site-footer">
    <div class="site-footer__form-sec">
        <div class="container--main">

            <div class="site-footer__form__copy">
                <h3 class="partial-rule partial-rule--bottom partial-rule--center">Contact us today for a free consultation</h3>
                <p>Free consultations are available for personal injury and workers' compensation cases. For the convenience of our clients, we speak Spanish, Hmong, Vietnamese, Chinese and Somali.</p>
            </div>

            <?php echo do_shortcode('[contact-form-7 id="64" title="Contact form 1"]', true); ?>

        </div>
    </div>

    <div class="site-footer__info">
        <div class="container--main">
            <div class="row">
                <div class="site-footer__col col-md-3">
                    <h4 class="site-footer__info__head">Practice Areas</h4>

                    <div class="site-footer__info__content">
                        <nav class="nav-secondary">
                            <ul class="nav-secondary__list">
                                <?php
                                wp_list_pages(array(
                                    'child_of' => PAGE_PRACTICE_AREAS,
                                    'depth' => 1,
                                    'title_li' => '',
                                ));
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="site-footer__col col-md-3">
                    <h4 class="site-footer__info__head">Contact Us</h4>

                    <div class="site-footer__info__content">
                        <ul class="site-footer__info__contact-list">
                            <li class="list-item list-item--find">
                                <a href="<?php echo get_permalink(PAGE_CONTACT_US); ?>">
                                    Find an attorney
                                </a>
                            </li>

                             <li class="list-item list-item--phone">
                                <ul class="list--pipe-separated">
                                    <li>
                                        <a href="tel:6123333343">(612) 333-3343</a> |
                                    </li>
                                    <li>
                                        <a href="tel:8555413016">(855) 541-3016</a>
                                    </li>
                                </ul>
                            </li>

                             <li class="list-item list-item--location">
                                Robichaud &amp; Alantara, p.a.
                                <ul class="list--pipe-separated">
                                    <li>
                                        <a href="<?php echo get_permalink(PAGE_CONTACT_MN); ?>">Minnesota</a> |
                                    </li>
                                    <li>
                                        <a href="<?php echo get_permalink(PAGE_CONTACT_KY); ?>">Kentucky</a> |
                                    </li>
                                    <li>
                                        <a href="<?php echo get_permalink(PAGE_CONTACT_VIETNAM); ?>">Vietnam</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="site-footer__col col-md-6">
                    <h4 class="site-footer__info__head">What Our Clients Say:</h4>

                    <?php if ($testimonial->have_posts()) : ?>
                        <div class="site-footer__testimonial">
                            <?php while ($testimonial->have_posts()) : $testimonial->the_post(); ?>
                                <div class="site-footer__testimonial__content">
                                    <?php the_excerpt(); ?>
                                </div>

                                <span class="site-footer__testimonial__title">&ndash; <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="site-footer__sub-footer">
        <div class="container--main clearfix">

            <div class="copyright">
                <p><span>&copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?> All rights reserved.</span> <a href="<?php echo get_permalink(PAGE_LEGAL_DISCLAIMER); ?>">Legal Disclaimer</a> <a href="<?php echo get_permalink(PAGE_PRIVACY_POLICY); ?>">Privacy Policy</a> <a rel="external" href="http://www.windmilldesign.com/">Site Credits</a></p>
            </div>

            <div class="site-footer__social">
                <h4>Connect with us:</h4>
                <ul>
                    <li>
                        <a rel="external" href="#" class="site-footer__social__googleplus"></a>
                    </li>
                    <li>
                        <a rel="external" href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a rel="external" href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<!-- This is a call-out link to the contact page
     which is fixed in the viewport -->

<div class="fixed-help">
    <div class="fixed-help-bubble">
        <i class="fa fa-comments-o"></i>
    </div>
    <div class="fixed-help-text">
        <p><a href="<?php echo get_permalink(PAGE_CONTACT_US); ?>">Get Help Now</a></p>
    </div>
</div>

<?php wp_footer(); ?>

<?php /* placeholder support for legacy IE */ ?>
<!--[if lte IE 9]>
<script src="https://cdn.jsdelivr.net/jquery.placeholder/2.1.1/jquery.placeholder.min.js" type="text/javascript"></script>
<script type="text/javascript"> jQuery(document).ready(function($){ $('input, textarea').placeholder(); }); </script>
<![endif]-->

<!--[if lte IE 9]> </div> <![endif]-->
<!--[if IE 9]> </div> <![endif]-->
<!--[if IE 8]> </div> <![endif]-->
</body>
</html>
