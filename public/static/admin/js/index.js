$(function(){
    //左边菜单栏上下收缩
    $('.meun-title').click(function(){
        if($(this).find('i').attr('class') == 'glyphicon glyphicon-chevron-up'){
            $(this).find('i').attr('class','glyphicon glyphicon-chevron-down')
            $(this).next().slideToggle();
        }else{
            $(this).find('i').attr('class','glyphicon glyphicon-chevron-up');
            $(this).next().slideToggle();
        }
    });

    //点击隐藏菜单隐藏左边菜单栏
    $('.hide-meun').click(function(){
        if($(this).text() == '显示菜单'){
            $(this).text('隐藏菜单');
            $('.meun').fadeToggle();
        }else{
            $(this).text('显示菜单');
            $('.meun').fadeToggle();
        }
    });
})