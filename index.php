<?php get_header(); ?>

  <section class="intro container animated">
    <h2 class="intro__title title">INTRODUCTION</h2>
    <h3 class="intro__sub-title">なぜ今「マハーバーラタ」なのか？</h3>
    <p class="intro__text txtxs">
      「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
      それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>
      平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。<br>
      現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
      神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
      非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。
    </p>
  </section>

  
  <section class="news container animated">
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


  <section class="story animated">
  <?php
    $cf_group = SCF::get('story',117);
    $field_value = $cf_group[0];
  ?>
    <div class="story__container container">
      <h2 class="story__title title">STORY</h2>
      <div class="story__text-area">
        <p class="story__text txtxs"><?php echo nl2br($field_value['text-st']); ?></p>
        <a href="<?php echo home_url('/story'); ?>" class="story__detail-btn">もっと詳しく</a>
      </div>
    </div>
  </section>

  <section class="comments container animated">

    <?php
      get_template_part('comment-top'); 
      //館長のコメント
    ?>

  </section>


  <section class="cast animated">
    <?php
      get_template_part('cast-top'); 
      //館長のコメント
    ?>
  </section>

  <?php get_footer(); ?>