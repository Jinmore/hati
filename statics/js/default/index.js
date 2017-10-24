/**
 * Created by Administrator on 2017-08-03.
 */
$(function () {
    var swiper = new Swiper('.banner .swiper-container', {
        loop: true,
        autoplay:5000,
        speed:500,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.banner .swiper-button-next',
        prevButton: '.banner .swiper-button-prev',
        autoplayDisableOnInteraction : false
    });
    $('.swiper-container').hover(function(){
        swiper.stopAutoplay();
    },function(){
        swiper.startAutoplay();
    });
});
$(function(){
    var swiper = new Swiper('.it .swiper-container', {
        loop: false,
        autoplay:5000,
        autoplayDisableOnInteraction : false,
        paginationClickable: true,
        slidesPerView: 6,
        spaceBetween: 34,
        nextButton: '.it .swiper-button-next',
        prevButton: '.it .swiper-button-prev'
    });
    $('.swiper-container').hover(function(){
        swiper.stopAutoplay();
    },function(){
    	swiper.startAutoplay();
    });
});
$(function () {
    $(".header .bot ul>li").hover(function () {
        $(this).find("dl").stop(false,true).slideDown();
    },function () {
        $(this).find("dl").stop(false,true).slideUp();
    });
    $(window).load(function(){
        var box1=($(".header .mid ul li .box1").outerWidth())/2;
        var wei=($(".header .mid ul li .wei").outerWidth())/2;
        var box2=($(".header .mid ul li .box2").outerWidth())/2;
        var box3=($(".header .mid ul li .box3").outerWidth())/2;
        $(".header .mid ul li .box1").css({"margin-left":-box1});
        $(".header .mid ul li .wei").css({"margin-left":-wei});
        $(".header .mid ul li .box2").css({"margin-left":-box2});
        $(".header .mid ul li .box3").css({"margin-left":-box3});
    });
    $(window).scroll(function(){
        if($(window).scrollTop()>300){
            $(".scroll-top").fadeIn();
        }else {
            $(".scroll-top").fadeOut();
        }
    });
    $(".scroll-top").click(function () {
        $("html,body").animate({scrollTop:0},500);
    });
    $(".registerform").Validform({
        tiptype: 1,
        callback:function(curform){
          var url = $(".registerform").attr('action');
            $.ajax({
            url: url,
            type: 'POST',
            dataType:'json',
            data:$(curform[0]).serialize(),
            success:function(data){
                  console.log(data);
                  if(data.status==1)
                  {
                    // 将jquery对象转为js对象 重置表单
                    $(curform[0])[0].reset();
                    $.Showmsg("订阅成功，谢谢！");
            setTimeout(function(){
               $('#Validform_msg').fadeOut();
            },1500)
                  }
              }
            });
                return false;

        }
    });
    $('.registerform2').Validform({
      tiptype:1,
    })
});
