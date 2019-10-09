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
})