<?php get_header(); ?>

<div class="grid7 centered">
  <h1 class="page__title">Style Guide</h1>

  <p>This guide exists to help explain the styles for this site. If you have questions, feel free to <a href="mailto:smith@ttimsmith.com?subject=[sarawb.com] Style Guide Question">email me</a>.</p>

  <h2 id="headings">Headings</h2>

  <p>Heading levels one through six have been designed for you. Please begin with an h2 and work your way down. If at all possible, refrain from using links within headings.</p>
  <h1 id="heading-one">Heading One</h1>
  <h2 id="heading-two">Heading Two</h2>
  <h3 id="heading-three">Heading Three</h3>
  <h4 id="heading-four">Heading Four</h4>
  <h5 id="heading-five">Heading Five</h5>
  <h6 id="heading-six">Heading Six</h6>
  <hr />
  <h2 id="blockquotes">Blockquotes</h2>
  <p>There are two styles for blockquotes. You have the regular blockquote and the pullquote. The following code gives an example of how to use them.</p>
  <blockquote>
    <p>This is a normal blockquote. It can be used to quote what people have said.</p>
  </blockquote>

  <pre><code class="language-markup">&lt;blockquote&gt;This is a normal blockquote. It can be used to quote what people have said.&lt;/blockquote&gt;

&lt;blockquote class=&quot;pullquote&quot;&gt;
  &lt;p&gt;Putting our least polished selves out there for our peers to see—admitting, without shame, that we struggled through rough patches and that not everything turned.&lt;/p&gt;
&lt;/blockquote&gt;</code></pre>

  <h3 id="pullquote-demo">Pullquote Demo</h3>
  <blockquote class="pullquote">
    <p>Putting our least polished selves out there for our peers to see—admitting, without shame, that we struggled through rough patches and that not everything turned.</p>
  </blockquote>

  <p>These sorts of headaches and setbacks are more than common. They’re simply what the world, with all of its imperfect people and situations, is like. And by pretending it’s not—carrying on as if we can, in fact, make the web perfect—we’re actually doing everyone a disservice.</p>

  <p>If we want to do right by our peers, our clients and colleagues, and even ourselves, it’s time we shake off some of those Type-A tendencies and start sharing our inner imperfectionists with the world.</p>
  <hr />

  <h2 id="images">Images</h2>
  <figure class="fullsize">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/swb_photo.jpg" alt="Full size of Sara" />
    <figcaption>This is a fullsize image with a caption.</figcaption>
  </figure>

  <p>There are four basic image styles: <code>.fullsize</code>, <code>.aligncenter</code>, <code>.alignleft</code>, and <code>.alignright</code>. Both <code>.fullsize</code> and <code>.aligncenter</code> take up the full width of the container, and don't allow for text wrapping. When aligning images either to the left or right, you can use the <code>.offset</code> class to have the image come out of the column.</p>
  <pre><code class="language-markup">&lt;figure class=&quot;alignleft offset&quot;&gt;
  &lt;img src=&quot;path/to/photo.jpg&quot; alt=&quot;My photo&quot; /&gt;
  &lt;figcaption&gt;You can give these images captions too!&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>

  <h3 id="offset-image">Image Offset Demo</h3>
  <figure class="alignleft offset">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/swb_photo.jpg" alt="Full size of Sara" />
    <figcaption>This is a left offset image with a caption.</figcaption>
  </figure>

  <p>The above code will allow you to do something like this, and the great part is that it all works on a simple class system that you can apply to a <code>figure</code> element.</p>

</div>


<?php get_footer(); ?>
