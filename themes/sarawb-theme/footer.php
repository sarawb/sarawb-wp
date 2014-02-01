  </div><!-- contain -->
</main>

<footer class="site__footer" role="contentinfo">
  <div class="contain">
  <?php if(is_single()) : ?>
    <div class="grid4 columns">
      <h4>About Me</h4>
      <p>I’m a content strategy consultant, writer, and editor currently living in lovely Philadelphia. <a href="<?php bloginfo('url'); ?>/about">Read more&hellip;</a></p>
    </div>
  <?php else : ?>
    <div class="grid8 columns">
      <h4>Let’s talk</h4>
      <p>Tell me about your project, your conference, or just what's keeping you up at night.</p>
      <?php gravity_form('Contact Form', false, false, false, '', true); ?>
    </div>
  <?php endif; ?>
    <div class="grid4 columns">
      <p>Brought to you from beautiful South Philadelphia.</p>
      <p>541.517.2870</p>
      <ul class="inline-list social-icons">
        <li><a class="icon__twitter" href="https://twitter.com/sara_ann_marie">
          <span class="screen-reader-hide">Twitter Icon</span>
          <span class="icon" data-icon="t"></span>
        </a></li>
        <li><a class="icon__linkedin" href="http://linkedin.com/in/saraboettcher">
          <span class="screen-reader-hide">LinkedIn Icon</span>
          <span class="icon" data-icon="i"></span>
        </a></li>
        <li><a class="icon__ss" href="http://slideshare.net/saraboettcher">
          <span class="screen-reader-hide">Slideshare Icon</span>
          <span class="icon" data-icon="s"></span>
        </a></li>
        <li><a class="icon__lanyrd" href="http://lanyrd.com/profile/sara_ann_marie/">
          <span class="screen-reader-hide">Lanyrd Icon</span>
          <span class="icon" data-icon="l"></span>
        </a></li>
      </ul>
    </div>
  </div>
</footer>

<!--WP Generated Footer -->
<?php wp_footer(); ?>
<!--End WP Generated Footer -->

</body>

</html>
