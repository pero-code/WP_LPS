<?php get_header(); ?>

<!-- header -->
<header class="d-flex justify-content-end align-items-center">
    <div class="outsideDiv">
        <div class="insideDiv">
            <h1>Pokret malih ljudi Srbije</h1>
            <h4>Lorem ipsum dolor sit amet.</h4>
        </div>
    </div>
</header>

<!-- oRazlicitosti -->
<section class="container oRazlicitosti py-5">
    <h2 class="text-center pb-5">Par reči o različitosti...</h2>
    <div class="row">
        <div class="col-md-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/np1.jpg" alt="">
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed commodi laudantium cumque doloribus qui at odit magni quibusdam pariatur assumenda, officiis voluptate, vero aperiam deserunt fugiat, totam aliquid consequuntur excepturi ipsam! Maxime quam fugit neque. Vel veniam tempore et fugit, alias animi. Nesciunt et illo est dicta porro architecto facere hic libero temporibus blanditiis eligendi, quam eius iure voluptates quae natus fugit nam quibusdam placeat atque earum dolorum quis doloremque?</p>
        </div>

        <div class="col-md-6 d-flex align-items-center">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed commodi laudantium cumque doloribus qui at odit magni quibusdam pariatur assumenda, officiis voluptate, vero aperiam deserunt fugiat, totam aliquid consequuntur excepturi ipsam! Maxime quam fugit neque. Vel veniam tempore et fugit, alias animi. Nesciunt et illo est dicta porro architecto facere hic libero temporibus blanditiis eligendi, quam eius iure voluptates quae natus fugit nam quibusdam placeat atque earum dolorum quis doloremque?</p>
        </div>
        <div class="col-md-6 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/np2.jpg" alt="">
        </div>
    </div>
</section>

<!-- blog -->
<section class="container blog pb-5">
    <h2 class="text-center pb-5">...i po koja naša priča</h2>

    <div class="blogPostovi d-flex justify-content-between">

        <?php
        // the query
        $the_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => '3'
        )); ?>

        <?php if ($the_query->have_posts()) : ?>


            <!-- the loop -->
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


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

                <!-- <article>
                    <div class="featured-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/blog1.jpg" alt="">
                        <div class="datum"><span>26.7.2021.</span></div>
                    </div>
                    <div class="content">
                        <h4>Blog post 1</h4>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ad aut sed necessitatibus earum doloremque soluta reiciendis temporibus dolorem excepturi!</p>
                        <a href="" class="button">Pročitaj više</a>
                    </div>
                </article> -->

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>


    </div>
</section>

<?php get_template_part('brojevi'); ?>


<?php get_footer(); ?>