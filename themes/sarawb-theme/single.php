<?php get_header(); ?>

  <?php the_post(); ?>

    <div class="grid8 centered">
      <article class="entry">
        <header class="post__meta">
          <h2 class="post__title"><?php the_title(); ?></h2>
          <small class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time> by <?php the_author(); ?></small>
        </header>

        <?php the_content(); ?>
      </article>
    </div><!-- grid8 centered -->

<?php get_footer(); ?>
