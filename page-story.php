<?php get_header(); ?>

  <?php
    $cf_group = SCF::get('story',117);
    $field_value = $cf_group[0];
  ?>

  <section class="story-page">
    <div class="story-page__img">
      <?php echo wp_get_attachment_image($field_value['image-st'],'large'); ?>
    </div>
    <div class="story__container-page container">
      <h2 class="story__title title">STORY</h2>
      <div class="story__text-area">
        <p class="story__text txtxs"><?php echo nl2br($field_value['text-st']); ?></p>
      </div>
    </div>
  </section>

  <?php
    $cf_group = SCF::get('story');
    $length = count($cf_group) - 1;
    for($i=1 ; $i<=$length ; $i++){
      $field_value = $cf_group[$i];
  ?>

  <section class="story-others animated">
    <div class="story-others__image">
      <?php echo wp_get_attachment_image($field_value['image-st'],'large'); ?>
    </div>
    <div class="story-others__container container">
      <p class="story-others__text txtxs"><?php echo nl2br($field_value['text-st']); ?></p>
    </div>
  </section>

    <?php } ?>

  <div class="story-page__space"></div>
  <?php get_footer(); ?>