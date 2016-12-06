<?php
/* Template Name: Full Width
*/
?>

<?php get_header(); ?>

<div class="main-container">

  <div class="full-width-container">

    <div class="page-header">
        <h1><?php the_title(); ?></h1>
    </div>

      <!-- WP LOOP -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'super-minimal' ); ?></p>
      <?php endif; ?> 

  </div>

</div>

<?php get_footer(); ?>
