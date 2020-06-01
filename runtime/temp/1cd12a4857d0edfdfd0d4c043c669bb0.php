<?php /*a:1:{s:75:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\login\index.html";i:1590983497;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/admin/css/login.css">
    <link rel="stylesheet" href="/static/index/layui/css/layui.css">
    <script src="/static/admin/js/jquery-3.3.1.min.js"></script>
    <script src="/static/index/layui/layui.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
    <title>后台登陆页面</title>
</head>
<body>
    <div class="loginContriner img-responsive">
        <div class="title">后台登陆管理系统</div>
        <form class="form-horizontal">
            <input class="form-control input-lg" type="text" name="username" placeholder="请输入用户名">
            <input class="form-control input-lg" type="password" name="password" placeholder="请输入密码">
            <div style="position: relative;">
                <input class="form-control input-lg captcha" name="captcha" type="text" placeholder="请输入验证码">
                <img src="<?php echo captcha_src(); ?>" id="img" alt="captcha" onclick="reloadImg()"  style="width: 150px;height: 40px; position: absolute; right: 50px; top: 0;"/>
            </div>
           
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 记住帐号密码
                </label>
            </div>
            <button type="submit" class="btn btn-info">登录</button>
        </form>
    </div>
</body>
</html>

<script>
layui.use(['layer'],function(){
    layer = layui.layer;
});
//验证码点击更换
function reloadImg()
{
    $('#img').attr('src','<?php echo captcha_src(); ?>?rand='+Math.random());
}

//提交表单
$('.btn').click(function(){
    $.ajax({
        type:"post",
        url:"<?php echo url('admin/login/login'); ?>",
        data:$('form').serialize(),
        dataType:"json",
        success:function(data)
        {
            if(data.code == 1)
            {
                layer.msg(data.msg,{
                    icon:6,
                    time:2000,
                },function(){
                    location.href = data.url;
                });
            }else
            {
                reloadImg();
                layer.open({
                    title:'系统信息',
                    content:data.msg,
                    icon:5,
                    anime:6,
                });
            }
        }
    });
    return false;
});
</script>







