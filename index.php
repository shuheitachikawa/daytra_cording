<?php get_header(); ?>

  <section class="intro container">
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


  <section class="story">
    <div class="story__container container">
      <h2 class="story__title title">STORY</h2>
      <div class="story__text-area">
        <p class="story__text txtxs">
          マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
          世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。<br>
          インドだけでなくアジア全般で広く知られた作品であり、TVドラマや映画の原案として使われることも多い。全編舞台化の難しさ日本では、イギリスの演出家ピーター・ブルックがワールドツアーの一環として1988年6月に銀座セゾン劇場で上演。三部作であったが、上演時間は9時間にも及んだ。<br>
          日本人の作品としては演出家・宮城聰が『マハーバーラタ～ナラ王の冒険』や歌舞伎作品『極付印度伝マハーバーラタ戦記』として、「マハーバーラタ」の長大なストーリーの一部分を舞台化した。全編上映はブルック以外にめぼしい作品は世界的にも存在しない。
        </p>
        <a href="" class="story__detail-btn">もっと詳しく</a>
      </div>
    </div>
  </section>

  <section class="comments container">
    <h2 class="comments__title title">COMMENTS</h2>
    <h3 class="comments__sub-title">舞台関係者のみならず各界著名人からコメントが届いています！</h3>
    <div class="comments__exp">
      <div class="comments__text-area">
        <h4 class="comments__person">京都佛立ミュージアム館長<span class="comments__person--strong"> 長松清潤</span></h4>
        <p class="comments__text txts">
          「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
          まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
        </p>
      </div>
      <a href="" class="comments__detail-btn">もっと見る</a>
    </div>
  </section>


  <section class="cast">
    <h2 class="cast__title title">CAST</h2>
    <div class="cast__white">
      <div class="cast__container container">
       <!---ここからパーソン-->
        <div class="person">
          <div class="person__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/person1.jpg" alt="">
          </div>
          <div class="person__info">
            <p class="person__work">作・演出・振付・構成</p>
            <p class="person__name txtm">小池博史</p>
            <p class="person__sub-work txtxs">(バレエ、コンテンポラリーダンス)</p>
            <p class="person__text txtxs">
              茨城県日立市出身。一橋大学卒業。<br>
              演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。<br>
              1982年「パパ・タラフマラ」設立。<br>
              演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。<br>
              3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。<br>
              著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。
            </p>
          </div>
        </div>
        <div class="person">
          <div class="person__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/person1.jpg" alt="">
          </div>
          <div class="person__info">
            <p class="person__work">作・演出・振付・構成</p>
            <p class="person__name txtm">小池博史</p>
            <p class="person__sub-work txtxs">(バレエ、コンテンポラリーダンス)</p>
            <p class="person__text txtxs">
              茨城県日立市出身。一橋大学卒業。<br>
              演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。<br>
              1982年「パパ・タラフマラ」設立。<br>
              演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。<br>
              3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。<br>
              著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。
            </p>
          </div>
        </div>
        <div class="person">
          <div class="person__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/person1.jpg" alt="">
          </div>
          <div class="person__info">
            <p class="person__work">作・演出・振付・構成</p>
            <p class="person__name txtm">小池博史</p>
            <p class="person__sub-work txtxs">(バレエ、コンテンポラリーダンス)</p>
            <p class="person__text txtxs">
              茨城県日立市出身。一橋大学卒業。<br>
              演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。<br>
              1982年「パパ・タラフマラ」設立。<br>
              演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。<br>
              3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。<br>
              著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。
            </p>
          </div>
        </div>
        <!---ここまでパーソン-->
      </div>
      <a href="" class="cast__detail-btn">もっと見る</a>
    </div>
  </section>

  <?php get_footer(); ?>