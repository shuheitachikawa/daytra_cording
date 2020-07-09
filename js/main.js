
//news記事の4番目以降の表示変更(トップページ,予約ページ,問い合わせ確認ページのみで実施)
$(function(){
  var $windowWidth = $(window).width();
  if($windowWidth >= 780){
    if($('body').hasClass('home') || 
      $('body').hasClass('page-id-149') || 
      $('body').hasClass('page-id-138')){
      $(window).on('load', function(){
        $('.card').eq(3).addClass('card-45');
        $('.card').eq(4).addClass('card-45');
      });
    }
  }
})


//クラスにanimateを含む(sectionタグ)が表示エリアに入ったらanimate処理(waypoint.js + animate.css)
function animate(){
  $('.animated').each(function(){
    var $this = $(this);
    if($(this).hasClass('topview-area')){
    }else{
      $this.waypoint({
        handler() {
          $this.addClass('fadeInUp');
          $this.css('opacity','100%');
        },
        offset: '100%',
      });
    };
  });
}

$(function(){
  $(window).on('load', function(){
    $('.animated').css('opacity','0');
  })
  animate();
})

