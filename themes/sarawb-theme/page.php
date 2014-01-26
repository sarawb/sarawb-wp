<?php get_header(); ?>

<?php the_post(); ?>

<div class="grid7 centered">
  <h1 class="page__title"><?php the_title(); ?></h1>
  <?php the_content(); ?>
</div>


<?php get_footer(); ?>
