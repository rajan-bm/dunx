<?php /**
 * 
 * Single page for post type news
 * 
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<main>
</main>
<?php endwhile; // End of the loop. ?>     
<?php get_footer();