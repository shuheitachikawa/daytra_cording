  <section class="schedule animated">
    <div class="schedule__area container">
      <h2 class="schedule__title title">SCHEDULE</h2>
      <ul class="schedule__list">
        <?php
          $cf_group = SCF::get('schedule',149);
          foreach ($cf_group as $field_name => $field_value){
        ?>
        <li class="schedule__item">
          <time class="schedule__date"><?php echo $field_value['date-sc']; ?></time>
          <p class="schedule__time"><?php echo $field_value['time-sc']; ?>開演</p>
          <p class="schedule__place"><?php echo $field_value['place-sc']; ?></p>
          <a href="<?php echo home_url('/reserve'); ?>" class="schedule__ticket">チケット予約受付中</a>
        </li>
        <?php
          }
        ?>
      </ul>
    </div>

    <div class="schedule__link">
      <a href="<?php echo home_url('/inquiry'); ?>" class="schedule__inquiry-btn">お問い合わせはこちら</a>
      <a href="<?php echo home_url('/reserve'); ?>" class="schedule__detail-btn">チケット予約サイトへ</a>
    </div>
  </section>

  <footer>
    <p class="footer__text txtxs">Copyright © 2019 完全版マハーバーラタ All Rights Reserved.</p>
  </footer>


  <?php wp_footer(); ?>
</body>
</html>