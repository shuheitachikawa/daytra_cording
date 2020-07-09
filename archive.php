<?php get_header(); ?>

 
  <section class="news container">
    <h2 class="news__title title">NEWS</h2>
    <div class="news__contents">
      <!---ここから記事-->
      <?php
        if(have_posts()):
          while(have_posts()):
            the_post();
      ?>
          <article class="card animated">
            <a href="<?php the_permalink(); ?>" class="card__link">
              <div class="card__img">
                <?php the_post_thumbnail(array(300,300), array('class' => "card__thumbnail-img")); ?>
              </div>
              <div class="card__text txtxs">
                <time class="card__date"><?php the_time('Y.m.d'); ?></time>
                <h3 class="card__title"><?php the_title(); ?></h3>
              </div>
            </a>
          </article>
      <?php
          endwhile;
          wp_reset_postdata();
        endif;
      ?>
      <!---ここまで記事-->
    </div>


    <div class="pager">
        <?php
        if(function_exists('page_navi')):
          page_navi();
        endif;
        ?>
    </div>



  </section>



  <?php get_footer(); ?>