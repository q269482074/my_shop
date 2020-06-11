<?php /*a:1:{s:76:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\index\view\member\login.html";i:1591851280;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/index/layui/css/layui.css">
    <link rel="stylesheet" href="/static/index/css/login.css">
    <script src="/static/index/js/jquery-3.3.1.min.js"></script>
    <script src="/static/index/layui/layui.js"></script>
    <script src="/static/index/js/bootstrap.min.js"></script>
    <title>登录</title>
</head>
<body>
    <div class="main">
        <div class="header">
            <div class="logo">
                <a href="/">
                    <img src="/static/index/images/loginlogo.png" alt="">
                </a>
            </div>
        </div>
        <div class="content">
            <div class="con-item">
                <div class="mclogo">
                    <a href="javascript:;">
                        <img src="/static/index/images/login.jpg" alt="">
                    </a>
                </div>
                <div class="login">
                    <div class="login-item">
                        <h2>用户登录</h2>
                        <form>
                            <div class="user-field field">
                                <i class="layui-icon layui-icon-username"></i>
                                <input type="text" name="username" id="username" placeholder="请输入帐号">
                            </div>
                            <div class="paw-field field">
                                <i class="layui-icon layui-icon-password"></i>
                                <input type="password" name="password" id="password" placeholder="请输入密码">
                            </div>
                            <button type="submit" class="layui-btn layui-btn-danger login_btn" style="width:100%;">登录</button>
                        </form>
                        <div class="reg-feild">
                            <a href="javascript:;">忘记密码</a>
                            <a href="<?php echo url('index/member/regist'); ?>" target="_blank">免费注册</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 版权区域start -->
        <footer>
            <div class="footer">
                底部版权栏
            </div>
        </footer>
        <!-- 版权区域end -->
    </div>
</body>
</html>

<script>
layui.use(['layer'],function(){
	layer = layui.layer;
});


$('.login_btn').click(function(){
	$.ajax({
		type:"post",
		url:"<?php echo url('index/member/login'); ?>",
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
				layer.open({
					title:'系统消息',
					content:data.msg,
					icon:5,
					anim:6,
				});
			}
		}
	});
	return false;
});
</script>









