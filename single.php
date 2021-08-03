<?php get_header(); ?>

    <!-- header -->
    <header class="d-flex justify-content-end align-items-center">
      <div class="outsideDiv">
        <div class="insideDiv">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </header>



    <!-- blog -->
    <section class="container blog py-5 singlePost">

      <div class="blogPostovi post ">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article>
          <div class="featured-image">
            <?php the_post_thumbnail(); ?>
            <div class="datum"><span><?php echo get_the_date('d.m.Y.'); ?></span></div>
          </div>
          <div class="content">
            
            <?php the_content(); ?>
            
          </div>
        </article>

        <?php endwhile; else : ?>
	        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


       

      </div>
    </section>

   
	

   <?php get_footer(); ?>