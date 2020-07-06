<?php get_header(); ?>

  <section class="news container">
    <h2 class="news__title title"><?php echo get_main_title(); ?></h2>
    <div class="news__contents">
      <!---ここから記事-->
      <article class="card-article">

      <?php
      if(have_posts()):
        while(have_posts()):
          the_post();
      ?>

        <div class="card-article__img">
          <?php the_post_thumbnail(array(810,810), array('class' => "card-article__thumbnail-img")); ?>
        </div>
        <div class="card-article__title-area">
          <time class="card-article__date txtxs"><?php the_time('Y.m.d'); ?></time>
          <h1 class="card-article__title"><?php the_title(); ?></h1>
        </div>
        <div class="card-article__text-area">
          <?php the_content(); ?>
        </div>

      <?php
        endwhile;
      endif;
      ?>

      </article>
      <!---ここまで記事-->

    </div>

    <div class="pager">
      <?php
        $prev_post = get_previous_post(true); 
        $next_post = get_next_post(true);
        if($next_post):
      ?>
      <div class="prev">
        <a class="prev__link" href="<?php echo get_permalink($next_post->ID); ?>">
          <div class="prev__area">
            <div class="prev__btn pager__btn"><</div>
            <div class="prev__text-area">
              <p class="prev__date txtxs"><?php echo $next_post->post_date; ?></p>
              <p class="prev__text txts"><?php echo $next_post->post_title; ?></p>
            </div>
          </div>
        </a>
      </div>
      <?php
      endif;
      if($prev_post):
      ?>
      <div class="next">
        <a class="next__link" href="<?php echo get_permalink($prev_post->ID); ?>">
          <div class="next__area">
            <div class="next__btn pager__btn">></div>
            <div class="next__text-area">
              <p class="next__date txtxs"><?php echo $prev_post->post_date; ?></p>
              <p class="next__text txts"><?php echo $prev_post->post_title; ?></p>
            </div>
          </div>
        </a>
      </div>
      <?php
      endif;
      ?>
    </div>


  </section>

  <?php get_footer(); ?>