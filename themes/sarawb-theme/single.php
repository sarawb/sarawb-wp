<?php get_header(); ?>

  <?php the_post(); ?>

    <div class="grid8 centered">
      <article class="entry">
        <header class="post__meta">
          <h1 class="post__title"><?php the_title(); ?></h1>
          <small class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time> by <?php the_author(); ?></small>
        </header>

        <?php the_content(); ?>

        <footer class="post__footer">
          <hr>
          <h5>Recently</h5>
          <div class="post__recent-post">
            <?php
              $this_post = $post->ID;
              $query = new WP_Query( array(
                  'post__not_in'  => array( $this_post ),
                  'showposts' => 1
                ) ); ?>

              <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                  <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                  <?php the_excerpt(); ?>
              <?php endwhile; ?>

            <?php wp_reset_postdata(); endif; ?>
          </div><!-- .post__recent-post -->

          <div class="post__newsletter">
            <?php dynamic_sidebar( 'email-subscription' ); ?>
          </div>
          <hr>
        </footer>
      </article>

      <section class="comments">
        <h5>Comments</h5>
        <?php wp_list_comments(); ?>

        <?php comment_form(); ?>
      </section>
    </div><!-- grid8 centered -->

<?php get_footer(); ?>
