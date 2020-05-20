$(function(){
    //商品属性框
    $('.goods-info-content.radio > div').click(function(){
        $(this).addClass("g-selected").siblings().removeClass("g-selected");
		//去除虚边框
		$(this).blur();
    });
    //商品数量框
    //减少
    $('.reduce-num').click(function(){
        if(parseInt($('.amount').val()) <= 1){
            alert('商品数量不能少于1!');
        }else{
            $('.amount').val(parseInt($('.amount').val()) - 1);
        }
    });
    //增加
    $('.add-num').click(function(){
        $('.amount').val(parseInt($('.amount').val()) + 1);
    });
    //直接输入
    $('.amount').blur(function(){
        if(isNaN($('.amount').val())){
            alert('只能输入数字');
            $(this).val(1);
        }
        if(parseInt($('.amount').val()) < 1){
            alert('数量最少为1!');
            $(this).val(1);
        }
    });



    //商品详情，评论选项卡
    $('.tabbar ul li').click(function(){
        //点击的第几个标签
        var li = $(this).index();

        $('.tabbar ul li').removeClass('dl');
        $('.tabbar ul li').eq(li).addClass('dl');
        $('.goods-tabbar').hide();
        $('.goods-tabbar').eq(li).show();

    });
})