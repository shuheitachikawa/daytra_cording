<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>制作演習 | TOP</title>
  <meta name="description" content="小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/nav_logo.png">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <?php wp_head(); ?>

  <!-- <meta http-equiv="refresh" content="2"> ブラウザ自動リロード。必ず消すこと。 -->

</head>
<body <?php body_class(); ?>>
  <header class="header">
    <nav class="global-nav">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'place_global',
          'container' => 'false',
        )
      );
      ?>
    </nav>
  </header>

  <section class="topview-area">
    <div class="topview">
      <div class="topview__title">
        <img src="<?php echo get_template_directory_uri(); ?>/img/topview_title.png" alt="完全版マハーバーラダ">
      </div>
      <div class="topview__info">
        <img src="<?php echo get_template_directory_uri(); ?>/img/topview_info.png" alt="">
      </div>
      <?php if(is_home()): ?>
        <div class="topview__text-area">
          <p class="topview__text1 txts">
            小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である<strong>完全版マハーバーラタ<h1></strong></h1>の公演が決定！！
          </p>
          <p class="topview__text2 txts">
            アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
          </p>
        </div>
      <?php endif; ?>
      <a href="" class="topview__detail-btn">チケット予約サイトへ</a>
    </div>
  </section>
