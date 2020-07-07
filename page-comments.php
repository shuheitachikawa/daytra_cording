<?php get_header(); ?>

  <section class="comments container">

    <?php
      get_template_part('comment-top'); 
      //館長のコメント
    ?>


  <div class="comments-all">

    <?php
      $cf_group = SCF::get('comments');
      foreach ($cf_group as $field_name => $field_value){
    ?>

    <div class="comment">
      <h3 class="comment__name txtl"><?php echo $field_value['name']; ?></h3>
      <p class="comment__work txtxs"><?php echo $field_value['work']; ?></p>
      <p class="comment__text "><?php echo $field_value['text']; ?></p>
    </div>

    <?php }; ?>

  </div>

  </section>

  <?php get_footer(); ?>