<?php 

//「メニュー」追加
register_nav_menus(
  array(
    'place_global' => 'グローバル',
  )
);


//アイキャッチ画像項目追加
add_theme_support('post-thumbnails');


//トップページで投稿ページの一覧を呼び出す関数
function get_specific_posts($post_type, $category_name = null, $post_per_page = -1){
  $args = array(
    'post_type' => $post_type,
    'category_name' => $category_name,
    'posts_per_page' => $post_per_page,
  );
$specific_posts = new WP_Query($args);
return $specific_posts;
};


//contact form 7で送信完了時にconfilm.phpへ移動
add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'http://daytracopycording.local/confilm/';
}, false );
</script>
EOD;
}


//記事ページならカテゴリー名、固定ページなら固定ページタイトル、カテゴリー一覧なら親カテゴリー名取得
function get_main_title(){
  if(is_singular('post')):
    $category_obj = get_the_category();
    return $category_obj[0]->name;
  elseif(is_page()):
    return get_the_title();
  elseif(is_category()):
    return single_cat_title();
  endif;
}