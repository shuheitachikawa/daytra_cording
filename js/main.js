
//ハンバーガーメニュー・ポップアップメニュー
$(function(){
  $('.header__menu, .nav_sub').on('click', function(){
    if($('.menu-trigger').hasClass('active')){
      $('.menu-trigger').removeClass('active');
      $('.menu-trigger-txt').text('MENU');
      $('.nav_popup').removeClass('active');
    }else{
      $('.menu-trigger').addClass('active');
      $('.menu-trigger-txt').text('CLOSE');
      $('.nav_popup').addClass('active');
    }
  })
});


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


//GoogleMap表示(API keyはHTMLのheadタグで定義)
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.690, lng: 139.700 },
    zoom: 15
  });
}