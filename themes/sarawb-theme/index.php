<?php get_header(); ?>


    <div class="grid7 centered">
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article class="entry">
            <header class="post__meta">
              <h1 class="post__title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
              <small class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time> by <?php the_author(); ?></small>
            </header>

            <?php the_excerpt(); ?>
            <hr>
          </article>

    	<?php endwhile; endif; ?>

    <div class="page__navigation">
      <?php wp_pagenavi(); ?>
    </div>

    </div>


<?php get_footer(); ?>
