var swiper = new Swiper('.swiper', {
  loop: true,
  speed: 1500,
  autoplay: {
    delay: 3000,
  },


  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper2 = new Swiper ('.swiper2', {
  spaceBetween: 10,
  speed: 5000,
  loop: true,
  slidesPerView: 2,
  freeModo: true,
  autoplay: {
    delay: 0,
    },


  breakpoints: {
    // 画面幅が 0px 以上の場合（window width >= 980px）
    800: {
      slidesPerView: 4,
      spaceBetween: 20
    },
    // 画面幅が 0px 以上の場合（window width >= 980px）
    550: {
      slidesPerView: 3.5,
      spaceBetween: 10
    },
  },
});




  //drawer-js
jQuery(".drawer-icon").on('click' , function(e) {
    e.preventDefault();

    jQuery('.drawer-icon').toggleClass('is-open');
    jQuery('.drawer-content').toggleClass('is-open');
    jQuery('.drawer-background').toggleClass('is-open');

    return false;
  });

  let navLink = document.getElementsByClassName('header-nav-item-link');
  for (let i = 0; i < navLink.length; i++) {
    if(navLink[i].href === location.href) {
        navLink[i].classList.add('current');
      }
  }


  jQuery(function(){
    jQuery(window).scroll(function(){
      //最上部から現在位置までの距離を取得して、変数[now]に格納
      var now = jQuery(window).scrollTop();
      //最上部から現在位置までの距離(now)が600以上
      if(now > 600){
        //[#page-top]をゆっくりフェードインする
        jQuery('.scroll-top').fadeIn('slow');
        //それ以外だったらフェードアウトする
      }else{
        jQuery('.scroll-top').fadeOut('slow');
      }
    });
    //ボタン(id:move-page-top)のクリックイベント
    jQuery('.scroll-top').click(function(){
    //ページトップへ移動する
    jQuery('body,html').animate({
            scrollTop: 0
        }, 800);
    });
  });

  jQuery(function(){
    jQuery('a[href^=#]').click(function() {
    var href= jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - 80;
    jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});

