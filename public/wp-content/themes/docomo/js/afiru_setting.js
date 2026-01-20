//■メニュー表示アクション
$(function(){	
	$('#botton').on('click', function () {
	  $("#spmenubox").slideToggle();
	});
});
//■menu画像の変更アクション
$(function(){
    $('#open').on('click', function () {
        if($('#open').hasClass('off')) {
                $(this).removeClass('off').addClass('on');
        }else {
                $(this).removeClass('on').addClass('off');;
        }
    });
});
//■スクロールトップ用
$(function(){
    $('a[href^=#]').click(function(){
            var speed = 500;
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
            $("html, body").animate({scrollTop:position}, speed, "swing");
            return false;
    });
});
//■スクロールで移動するファンクション
$(document).ready(function() {
  var pagetop = $('.pagetop');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
   });
});


//■マウスホバーアクション
//スマホかPCかを判定する
var _ua = (function(u){
  return {
    Tablet:(u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1) 
      || u.indexOf("ipad") != -1
      || (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
      || u.indexOf("kindle") != -1
      || u.indexOf("silk") != -1
      || u.indexOf("playbook") != -1,
    Mobile:(u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
      || u.indexOf("iphone") != -1
      || u.indexOf("ipod") != -1
      || (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
      || u.indexOf("blackberry") != -1
  }
})(window.navigator.userAgent.toLowerCase());
if(_ua.Mobile){//スマホ時    
    $(function(){
        $('a img').bind('touchstart', function() {
            $(this).attr('src', $(this).attr('src').replace('_off', '_on')).stop().fadeTo("slow", 1);
        });
        $('a img').bind('touchend', function() {
            $(this).attr('src', $(this).attr('src').replace('_on', '_off')).stop().fadeTo("slow", 1);
        });    
    });
}else {//■PC画像のホバーチェンジ
    $(function(){
        $('a img').hover(function(){
            $(this).stop().fadeTo("slow",0.1 ,function(){
                $(this).attr('src', $(this).attr('src').replace('_off', '_on')).stop().fadeTo("slow", 0.9);
            });
        }, function(){            
            if (!$(this).hasClass('currentPage')) {
            $(this).attr('src', $(this).attr('src').replace('_on', '_off')).stop().fadeTo("slow", 1);
        }
        });
    });
}