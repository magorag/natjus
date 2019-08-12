<?php

add_action('after_setup_theme', function() {

    add_image_size( 'banner-lg', 1920, 521 );
    add_image_size( 'banner-md', 1280, 347 );
    add_image_size( 'banner-sm',  800, 434 );
    add_image_size( 'banner-xs',  600, 500 );
    add_image_size( 'article',    600, 319, true);

});