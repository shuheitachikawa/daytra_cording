<?php get_header(); ?>

  <section class="inquiry">
    <div class="inquiry__container container">
      <h2 class="inquiry__title title">INQUIRY</h2>
      <div class="inquiry__area">
        <p class="confilm__comment txtm">
        お問い合わせありがとうございました。<br>
        メッセージは正常に送信されました。
        </p>
      </div>
    </div>
  </section>


  <section class="news container">
    <?php
      $news_obj = get_term_by('slug','news','category'); 
    ?>
    <h2 class="news__title title">NEWS</h2>
    <a href="<?php echo esc_url(get_term_link($news_obj)); ?>" class="news__detail-btn">ニュース一覧へ</a>
    <div class="news__contents">
      <!---ここから記事-->
      <?php
        $news_posts = get_specific_posts('post', 'news', 5);
        if($news_posts->have_posts()):
          while($news_posts->have_posts()):
            $news_posts->the_post();
      ?>
          <article class="card">
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
  </section>



  <?php get_footer(); ?>