<?php get_header(); ?>

  <section class="comic">
    <div class="comic__container container">
      <h2 class="comic__title title">COMIC</h2>
      <h3 class="comic__sub-title">マンガでわかるマハーバーラタ</h3>
      <p class="comic__exp-text">
      日本ではあまり馴染みのないマハーバーラタ。<br>
      ここではまだマハーバーラタについて詳しく知らない方向けに、マンガでわかりやすく解説していきます。
      </p>
      <div class="comic__area">
        <?php echo do_shortcode('[instagram-feed]'); ?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>