
//news記事の4番目以降の表示変更(トップページ,予約ページ,問い合わせ確認ページのみで実施)
$(function(){
  if($('body').hasClass('home') || 
     $('body').hasClass('page-id-146') || 
     $('body').hasClass('page-id-138')){
    $(window).on('load', function(){
      $('.card').eq(3).addClass('card-45');
      $('.card').eq(4).addClass('card-45');
    });
  }
})


//トップページ以外の"トップビュー" レイアウト変更
$(function(){
  if($('body').hasClass('home')){
  }else{
    $(window).on('load', function(){
      $('.topview').addClass('container');
      $('.topview-area').css({
        'height':'180px',
        'padding':'0',
      });     
      $('.topview').css({
        //'position':'static',
        'max-width':'810px',
        'display':'flex',
        'justify-content':'space-between',
        'align-items':'center'
      });
      $('.topview__title').css({
        'width':'460px',
      });
      $('.topview__info').css({
        'position':'static',
        'width':'250px',
      });
      $('.topview__detail-btn').css({
        'height':'40px',
        'line-height':'40px',
        'width':'150px',
        'font-size':'12px',
        'bottom':'-20px',
      });
    });
  }
})





//クラスにanimateを含む(sectionタグ)が表示エリアに入ったらanimate処理(waypoint.js + animate.css)
function animate(){
  $('.animated').each(function(){
    var $this = $(this);
    $this.waypoint({
      handler() {
        $this.addClass('anitmated, fadeInUp');
        $this.css('opacity','100%');
      },
      offset: '100%',
    });
  });
}

$(function(){
  $(window).on('load', function(){
    $('.animated').css('opacity','0');
  })
  animate();
})

