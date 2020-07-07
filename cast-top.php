<h2 class="cast__title title">CAST</h2>
<div class="cast__white">
  <div class="cast__container container">
    <!---ここからパーソン-->

    <?php
    $cf_group = SCF::get('cast',66); //カテゴリー名, 固定ページID -> 他ページで表示可能
    for($i=0 ; $i<=2 ; $i++){
      $field_value = $cf_group[$i];
    ?>

    <div class="person">
      <div class="person__image">
      <?php echo wp_get_attachment_image($field_value['image']); ?>
      </div>
      <div class="person__info">
        <p class="person__nation"><?php echo $field_value['nation']; ?></p>
        <p class="person__name txtm"><?php echo $field_value['name']; ?></p>
        <p class="person__sub-work txtxs"><?php echo $field_value['work']; ?></p>
        <p class="person__text txtxs"><?php echo nl2br($field_value['text']); ?></p>
      </div>  
    </div>

    <?php }; ?>
    <!---ここまでパーソン-->
  </div>
  <?php if(is_home()): ?>
  <a href="<?php echo home_url('/cast'); ?>" class="cast__detail-btn">もっと見る</a>
  <?php endif; ?>
</div>