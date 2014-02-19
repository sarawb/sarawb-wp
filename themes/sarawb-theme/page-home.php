<?php get_header(); ?>

  <section class="content__section no-margin">
    <header class="site__headline">
      <h1><?php the_field('home_headline', 'options'); ?></h1>
    </header>
    <div class="grid7 columns">
      <?php the_field('home_content', 'options'); ?>
    </div>
    <div class="grid5 columns">
      <figure class="fullsize">
        <img src="<?php the_field('home_image', 'options'); ?>" alt="Sara Wachter-Boettcher">
      </figure>
    </div>
  </section>

  <section class="content__section services">
    <div class="grid4 columns">
      <h3>Workshops</h3>
      <?php the_field('home_workshops_content', 'options'); ?>
    </div>
    <div class="grid4 columns">
      <h3>Consulting</h3>
      <?php the_field('home_consulting_content', 'options'); ?>
    </div>
    <div class="grid4 columns">
      <h3>Project partnerships</h3>
      <?php the_field('home_project_partnerships_content', 'options'); ?>
    </div>
  </section>

  <section class="content__section the-book">
    <div class="grid12 centered panel">

      <section class="content__section">
        <div class="grid2 columns">
          <figure class="fullsize">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/swb_cover.png" alt="Content Everywhere">
          </figure>
        </div>

        <div class="grid5 columns">
          <h3>The Book: Content Everywhere</h3>
          <p>From smartphones to read-later services to whatever’s next: your content needs to go more places, more easily. I wrote a book to show you how.</p>
          <a class="button" href="http://rosenfeldmedia.com/books/content-everywhere">Buy it now</a>
        </div>

        <div class="grid4 columns">
          <blockquote class="pullquote">
            <p>It cuts through all the noise surrounding structured content and offers immediately useful ways to turn your content from a bunch of scattered pages into a strong, flexible mesh.</p>
            <small>—<a href="http://incisive.nu/">Erin Kissane</a>, author, <cite>The Elements of Content Strategy</cite></small>
          </blockquote>
        </div>

      </section>
    </div>
  </section>

  <section class="content__section secondary__projects">
    <div class="grid6 columns">
      <div class="grid2 columns">
        <figure class="fullsize">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/mic_icon.svg" alt="Megaphone">
        </figure>
      </div>

      <div class="grid10 columns">
        <h4 class="no-margin">Speaking</h4>
        <p>I’ve shared my ideas at conferences like Confab, Web Directions, Mobilism, Content Strategy Forum, Beyond the Desktop, and UX Week. See <a href="http://lanyrd.com/profile/sara_ann_marie">where I’m speaking next</a>.</p>
      </div>
    </div>

    <div class="grid6 columns">
      <div class="grid2 columns">
        <figure class="fullsize">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/edit_icon.svg" alt="Megaphone">
        </figure>
      </div>

      <div class="grid10 columns">
        <h4 class="no-margin">A List Apart</h4>
        <p>The web wouldn’t be the same without <cite>A List Apart</cite>, a magazine about content, culture, and code. I’ve been the editor in chief since 2012. <a href="http://alistapart.com/about/contribute">Write for us</a>.</p>
      </div>
    </div>
  </section>



<?php get_footer(); ?>
