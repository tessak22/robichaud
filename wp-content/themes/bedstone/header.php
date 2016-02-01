<?php
/**
 * header
 *
 * @package Bedstone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<?php
/**
 * meta
 * these next couple meta are recommended by Bootstrap to come before other document data
 */
?>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<?php
/**
 * title element
 * if front page, display the blog name (usually the company name)
 * otherwise render the wp_title() and append the blog name
 */
?>
<title><?php is_front_page() ? bloginfo('name') : wp_title(' - ' . get_bloginfo('name'), true, 'right'); ?></title>

<?php
 /**
  * legacy IE responsive support
  * recommended by Bootstrap, legacy IE8 support for HTML5 elements and media queries
  */
?>
<!--[if lte IE 8]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php
/**
 * google fonts
 * accepts a string of font sets
 * see functions-bedstone.php for more info
 * e.g. bedstone_google_fonts('Roboto:400,400italic,700,700italic|Open+Sans|Roboto+Condensed:300');
 */
bedstone_google_fonts('Raleway:300,400,500,600,700,900|Roboto+Slab:400,300,700|Roboto+Condensed|Noto+Sans:400,700&subset=latin,vietnamese,latin-ext');
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<?php
/**
 * favicons
 * the Design team will generate favicons
 * see functions-bedstone.php for more info
 * https://sites.google.com/a/windmilldesign.com/development/blade-sites/dev-specs/favicons
 * e.g. bedstone_favicons('#ffffff', '#0066cc');
 */
bedstone_favicons();
?>

<?php wp_head(); ?>

<?php
/**
 * analytics
 * Google recommends that the asynchronous js is loaded in the head
 * requires the UA value passed to the function
 * e.g. bedstone_google_analytics('UA-434233232-1');
 * https://support.google.com/analytics/answer/1008080?hl=en#GA
 */
if (defined('ENV_SHOW_ANALYTICS') && ENV_SHOW_ANALYTICS) {
    bedstone_google_analytics(); // put UA as string, e.g. 'UA-434233232-1'
}
?>
</head>
<body <?php body_class(); ?>>
<!--[if lte IE 9]> <div class="ie9-"> <![endif]-->
<!--[if IE 9]> <div class="ie9"> <![endif]-->
<!--[if IE 8]> <div class="ie8"> <![endif]-->

<!-- <div class="container-non-site-footer-elements"> -->

<header class="site-header" role="banner">
    <div class="container--main">

        <div class="clearfix">
            <div class="logo">
                <a class="hidden-print" href="/"><img src="<?php bloginfo('template_directory'); ?>/images/assets/logo-main.svg" alt="<?php bloginfo('name'); ?>"></a>
                <h1 class="visible-print-block"><?php bloginfo('name'); ?></h1>
            </div>

            <div class="header-utility">
                <a class="icon-link icon-link__googleplus" rel="external" href="#"></a>
                <a class="icon-link" rel="external" href="#">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="icon-link" rel="external" href="#">
                    <i class="fa fa-facebook"></i>
                </a>

                <div class="searchform hidden-print">
                    <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                        <label for="s">Search</label>
                        <div class="container--input">
                            <input class="form-control" type="text" name="s" title="Search" value="<?php echo get_search_query() ?>">
                        </div>
                    </form>
                </div>

                <ul class="list--phone">
                    <li>
                        <a href="tel:612-333-3343">(612) 333-3343</a>
                    </li>
                    <li>
                        <a href="tel:855-541-3016">(855) 541-3016</a>
                    </li>
                </ul>

                <a class="btn btn--pill btn--large" href="<?php echo get_permalink(PAGE_CONTACT_US); ?>">Free initial consulation</a>
            </div>

            <div class="nav-toggle">
                <i class="fa fa-bars"></i>
            </div>
        </div>

    </div>

    <nav class="nav nav-main hidden-print" id="nav_main" role="navigation">
        <div class="container--main">
            <ul class="nav-main__list">
                <li class="nav-main-item-<?php echo PAGE_PRACTICE_AREAS; ?>">
                    <a href="<?php echo get_permalink(PAGE_PRACTICE_AREAS); ?>">
                        <?php echo get_the_title(PAGE_PRACTICE_AREAS); ?> <i class="fa fa-chevron-right"></i>
                    </a>
                    <ul>
                        <?php
                        wp_list_pages(array(
                            'child_of' => PAGE_PRACTICE_AREAS,
                            'depth' => 1,
                            'title_li' => '',
                        ));
                        ?>
                    </ul>
                </li>

                <li class="nav-main-item-<?php echo PAGE_OUR_FIRM; ?>">
                    <a href="<?php echo get_permalink(PAGE_OUR_FIRM); ?>">
                        <?php echo get_the_title(PAGE_OUR_FIRM); ?> <i class="fa fa-chevron-right"></i>
                    </a>
                    <ul>
                        <?php
                        wp_list_pages(array(
                            'child_of' => PAGE_OUR_FIRM,
                            'depth' => 1,
                            'title_li' => '',
                        ));
                        ?>
                    </ul>
                </li>

                <li class="nav-main-item-<?php echo PAGE_OUR_ATTORNEYS; ?>">
                    <a href="<?php echo get_permalink(PAGE_OUR_ATTORNEYS); ?>">
                        <?php echo get_the_title(PAGE_OUR_ATTORNEYS); ?> <i class="fa fa-chevron-right"></i>
                    </a>
                    <ul>
                        <?php
                        wp_list_pages(array(
                            'child_of' => PAGE_OUR_ATTORNEYS,
                            'depth' => 1,
                            'title_li' => '',
                        ));
                        ?>
                    </ul>
                </li>

                <li class="nav-main-item-<?php echo PAGE_BLOG; ?>">
                    <a href="<?php echo get_permalink(PAGE_BLOG); ?>">
                        <?php echo get_the_title(PAGE_BLOG); ?>
                    </a>
                </li>

                <li class="nav-main-item-<?php echo PAGE_CONTACT_US; ?>">
                    <a href="<?php echo get_permalink(PAGE_CONTACT_US); ?>">
                        <?php echo get_the_title(PAGE_CONTACT_US); ?> <i class="fa fa-chevron-right"></i>
                    </a>
                    <ul>
                        <?php
                        wp_list_pages(array(
                            'child_of' => PAGE_CONTACT_US,
                            'depth' => 1,
                            'title_li' => '',
                        ));
                        ?>
                    </ul>
                </li>
            </ul>

            <!-- Moblie Searchform -->
            <div class="searchform searchform--mobile hidden-print">
                <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                    <div class="container--input">
                        <input class="form-control" type="text" name="s" title="Search" placeholder="search" value="<?php echo get_search_query() ?>">
                    </div>
                </form>
            </div>
            <div class="mobile-social">
                <a class="icon-link google-plus" rel="external" href="#"><img src="<?php bloginfo('template_directory'); ?>/images/google-plus.png"></a>
                <a rel="external" href="#">
                    <i class="fa fa-twitter"></i>
                </a>
                <a rel="external" href="#">
                    <i class="fa fa-facebook"></i>
                </a>
            </div>
        </div>
    </nav>

</header><!-- .site-header -->

<main class="site-main">
