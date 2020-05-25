
/*Print title and content of every post inside the post loop.*/

<?php get_header(); ?>

<?php 

if( have_posts() ):

while( have_posts() ): the_post(); ?>

<p><?php the_content(); ?></p>

<h3><?php the_title(); ?></h3>

<hr>

<?php endwhile;

endif;

?>

<?php get_footer(); ?>