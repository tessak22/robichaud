<?php

if (PAGE_OUR_ATTORNEYS == $post->ID) {
    get_template_part('inc', 'attorneys-lander');
}

if (PAGE_CONTACT_US == $post->ID) {
    get_template_part('inc', 'our-locations');
}

if (PAGE_CONTACT_MN == $post->ID) {
    get_template_part('inc', 'location-detail');
}

if (PAGE_CONTACT_KY == $post->ID) {
    get_template_part('inc', 'location-detail');
}

if (PAGE_CONTACT_VIETNAM == $post->ID) {
    get_template_part('inc', 'location-detail');
}
