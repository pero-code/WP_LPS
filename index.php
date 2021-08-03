<?php get_header(); ?>

    <!-- header -->
    <header class="d-flex justify-content-end align-items-center">
      <div class="outsideDiv">
        <div class="insideDiv">
          <h1>Blog</h1>
        </div>
      </div>
    </header>



    <!-- blog -->
    <section class="container blog py-5">

      <div class="blogPostovi d-flex justify-content-between">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article>
          <div class="featured-image">
            <?php the_post_thumbnail(); ?>
            <div class="datum"><span><?php echo get_the_date('d.m.Y.'); ?></span></div>
          </div>
          <div class="content">
            <h4><?php the_title(); ?></h4>
            <hr>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="button">Pročitaj više</a>
          </div>
        </article>

        <?php endwhile; else : ?>
	        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


       

      </div>
    </section>

    <?php get_template_part('brojevi'); ?>
	

   <?php get_footer(); ?>