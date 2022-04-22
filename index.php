<?php
/**
 * Muista asentaa ACF (Advanced Custom Fields).
 * Muuten tulee parse/syntax erroria.
 */
get_header();

    if ( have_posts() ):

        while ( have_posts() ):
            the_post();
            ?>

            <?php 
            // get section header
            get_template_part('template-parts/header');
            ?>

            <?php
            // get sections
            get_template_part('template-parts/sections');
            ?>
            
            <?php
        endwhile;
    endif;
get_footer();
?>