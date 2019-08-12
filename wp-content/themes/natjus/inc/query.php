<?php
function query($query, $component) {

    $query = new WP_Query($query);
    while ( $query->have_posts() ) : $query->the_post();

        $component();
    
    endwhile;
    wp_reset_postdata(); 

}