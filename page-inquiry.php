<?php get_header(); ?>

<section class="inquiry">
  <div class="inquiry__container container">
    <h2 class="inquiry__title title">INQUIRY</h2>
    <div class="inquiry__area">

      <?php
        if(have_posts()):
          while(have_posts()):
            the_post();
            the_content();
          endwhile;
        endif;
      ?>


    </div>
  </div>
</section>





<?php get_footer(); ?>