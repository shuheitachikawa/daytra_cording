<?php get_header(); ?>

  <section class="cast animated">
    <?php
      get_template_part('cast-top'); 
      //館長のコメント
    ?>
  </section>

  <section class="cast-others container">
    <!---ここからパーソン-->

    <?php
    $cf_group = SCF::get('cast');
    $length = count($cf_group) - 1;
    for($i=3 ; $i<=$length ; $i++){
      $field_value = $cf_group[$i];
    ?>

    <div class="cast-other animated">
      <div class="cast-other__image">
      <?php echo wp_get_attachment_image($field_value['image']); ?>
      </div>
      <div class="cast-other__text-area">
        <p class="cast-other__nation"><?php echo $field_value['nation']; ?></p>
        <p class="cast-other__name"><?php echo $field_value['name']; ?></p>
        <p class="cast-other__work txtxs"><?php echo $field_value['work']; ?></p>
        <p class="cast-other__text txtxs"><?php echo nl2br($field_value['text']); ?></p>
      </div>  
    </div>

    <?php }; ?>
    <!---ここまでパーソン-->

  </section>


  <section class="musicians">
    <h2 class="musicians__title title">MUSICIAN</h2>
    <div class="musicians__container container cast-others">
    <!---ここからパーソン-->

    <?php
    $cf_group = SCF::get('musician');
    $length = count($cf_group) - 1;
    for($i=0 ; $i<=$length ; $i++){
      $field_value = $cf_group[$i];
    ?>

    <div class="cast-other animated">
      <div class="cast-other__image">
      <?php echo wp_get_attachment_image($field_value['image-m']); ?>
      </div>
      <div class="cast-other__text-area">
        <p class="cast-other__nation"><?php echo $field_value['nation-m']; ?></p>
        <p class="cast-other__name"><?php echo $field_value['name-m']; ?></p>
        <p class="cast-other__work txtxs"><?php echo $field_value['work-m']; ?></p>
        <p class="cast-other__text txtxs"><?php echo nl2br($field_value['text-m']); ?></p>
      </div>  
    </div>

    <?php }; ?>
    <!---ここまでパーソン-->
    </div>
  </section>



  <section class="staffs">
    <h2 class="staffs__title title">STAFF</h2>
    <div class="staffs__container container cast-others">
    <!---ここからパーソン-->

    <?php
    $cf_group = SCF::get('staff');
    $length = count($cf_group) - 1;
    for($i=0 ; $i<=$length ; $i++){
      $field_value = $cf_group[$i];
    ?>

    <div class="cast-other animated">
      <div class="cast-other__image">
      <?php echo wp_get_attachment_image($field_value['image-s']); ?>
      </div>
      <div class="cast-other__text-area">
        <p class="cast-other__nation"><?php echo $field_value['nation-s']; ?></p>
        <p class="cast-other__name"><?php echo $field_value['name-s']; ?></p>
        <p class="cast-other__work txtxs"><?php echo $field_value['work-s']; ?></p>
        <p class="cast-other__text txtxs"><?php echo nl2br($field_value['text-s']); ?></p>
      </div>  
    </div>

    <?php }; ?>
    <!---ここまでパーソン-->
    </div>
  </section>


  <?php get_footer(); ?>