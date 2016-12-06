<?php get_header(); ?>

<div class="main-container">

  <div class="section group">

    <div class="col span_9_of_12">

        <div class="page-container">

            <ul class="grid-wrap">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <li class="grid-item">

                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
                        <?php endif; ?>

                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                        <p class="archives-byline">
                        Posted on <?php echo the_time('l, F jS, Y');?>
                        in <?php the_category( ', ' ); ?>.
                        <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                        </p> 

                        <?php the_excerpt(); ?>          

                        <?php endwhile; ?>
                        <?php endif; ?>

                    </li>

                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div>

            </ul>

            <p>&nbsp;</p>

            <div class="pagination">

                <?php the_posts_pagination( array( 
                'mid_size' => 2,
                'type' => 'list',
                )); ?>

            </div>

            <p>&nbsp;</p>

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