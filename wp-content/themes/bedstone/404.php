<?php
/**
 * 404
 *
 * @package Bedstone
 */

get_header(); ?>

<header class="document-header document-header--page">
    <div class="container--main">
        <h1>Page Not Found (404)</h1>
        <div class="document-header--page__bg-img rand-<?php echo rand(1,6); ?>"></div>
    </div>
</header>

<div class="container--main">

<div class="container-columns row">
    <div class="content col-md-8" role="main">
        <p class="callout">We're sorry &ndash; we could not find the page you requested.</p>
        <p class="call-to-action"><a href="/">Visit Our Homepage</a></p>
        <?php get_search_form(); ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
