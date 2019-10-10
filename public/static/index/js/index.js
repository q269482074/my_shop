$(function(){
    //搜索导航栏
    $('.search-best-item').mouseover(function(){
        $(this).find('.search-best-content').css('height','230px');
        $('.search-best-content').css('transition','0.3s');
    }).mouseout(function(){
        $(this).find('.search-best-content').css('height','0');
        $('.search-best-content').css('transition','0.3s');
    });

    //选中商品样式变化
    $('.floor-goods-item').mouseover(function(){
        $(this).css('border','1px solid orange');
    }).mouseout(function(){
        $(this).css('border','none');
    });


    //侧边导航栏
    $(document).scroll(function(){
        if($(this).scrollTop() > 730){
            $('.sidebar').css('position','fixed');
            $('.sidebar').css('top','30px');
        }else{
            $('.sidebar').css('position','absolute');
            $('.sidebar').css('top','730px');
        }
    });
    //点击侧边栏
    $('.sidebar-type').click(function(){
        console.log($(this).text());
        if($(this).text() === '返回顶部'){
            $(window).scrollTop(0);
        }else if($(this).text() === '闪购秒杀'){
            $(window).scrollTop(685);
        }else if($(this).text() === '家用电器'){
            $(window).scrollTop(1085);
        }else if($(this).text() === '手机数码'){
            $(window).scrollTop(2056);
        }else if($(this).text() === '家居必备'){
            $(window).scrollTop(3034);
        }else if($(this).text() === '衣服鞋袜'){
            $(window).scrollTop(4011);
        }
    });
    //右边侧边栏所到相对的区域
    $(document).scroll(function(){
        if($(this).scrollTop() > 685 && $(this).scrollTop() < 1085){
            $('.sidebar-type').removeClass('on');
            $('.sidebar-type').eq(0).addClass('on');
        }else if($(this).scrollTop() > 1085 && $(this).scrollTop() < 2056){
            $('.sidebar-type').removeClass('on');
            $('.sidebar-type').eq(1).addClass('on');
        }else if($(this).scrollTop() > 2056 && $(this).scrollTop() < 3034){
            $('.sidebar-type').removeClass('on');
            $('.sidebar-type').eq(2).addClass('on');
        }else if($(this).scrollTop() > 3034 && $(this).scrollTop() < 4011){
            $('.sidebar-type').removeClass('on');
            $('.sidebar-type').eq(3).addClass('on');
        }else if($(this).scrollTop() > 4011){
            $('.sidebar-type').removeClass('on');
            $('.sidebar-type').eq(4).addClass('on');
        }else{
            $('.sidebar-type').removeClass('on');
        }
    });
    console.log($(window).scrollTop());
})