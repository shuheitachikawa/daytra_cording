
//news記事の4番目以降の表示変更(トップページのみで実施)
$(function(){
  if($('body').hasClass('home')){
    $(window).on('load', function(){
      $('.card').eq(3).addClass('card-45');
      $('.card').eq(4).addClass('card-45');
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

