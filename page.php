<?php get_header(); ?>

<div class="main-container">

  <div class="section group">

    <div class="col span_9_of_12">

      <div class="page-container">

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

    <div class="col span_3_of_12">

      <div class="sidebar-container">
        <?php get_sidebar( 'blog' ); ?>
      </div>

    </div>

  </div>

</div>

<?php get_footer(); ?>
