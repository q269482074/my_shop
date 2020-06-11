<?php /*a:1:{s:77:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\index\view\member\regist.html";i:1591850428;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/index/layui/css/layui.css">
    <link rel="stylesheet" href="/static/index/css/regist.css">
    <script src="/static/index/js/jquery-3.3.1.min.js"></script>
    <script src="/static/index/layui/layui.js"></script>
    <script src="/static/index/js/bootstrap.min.js"></script>
    <title>注册</title>
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
            <div class="regist">
                <header>
                    <h3>用户注册</h3>
                </header>
                <div class="reg-item">
                    <div class="reg-left">
                        <form>
                            <ul>
                                <li>
                                    <label for="">用户名：</label>
                                    <input type="text" name="username" id="username" placeholder="请输入帐号">
                                    <p>3-20位字符，可由中文、字母、数字和下划线组成</p>
                                </li>
                                <li>
                                    <label for="">密码：</label>
                                    <input type="password" name="password" id="password" placeholder="请输入密码">
                                    <p>6-20位字符，可使用字母、数字和符号的组合，不建议使用纯数字、纯字母、纯符号</p>
                                </li>
                                <li>
                                    <label for="">确认密码：</label>
                                    <input type="password" name="cpassword" id="cpassword" placeholder="请输入确认密码">
                                    <p>再次密码</p>
                                </li>
                                <li>
                                    <label for="">昵称：</label>
                                    <input type="text" name="nick_name" id="nick_name" placeholder="请输入昵称">
                                </li>
                                <li>
                                    <label for="">邮箱：</label>
                                    <input type="text" name="email" id="email" placeholder="请输入邮箱">
                                </li>
                                <li>
                                    <label for="">验证码：</label>
                                    <input type="text"  name="capt" />
                                    <img src="<?php echo captcha_src(); ?>" class="capt" />
                                    <span>看不清？<a href="javascript::void(0)" onclick="captChange();">换一张</a></span>
                                </li>
                                <li>
                                    <label for="">&nbsp;</label>
                                    <input type="checkbox" class="chb" name="chb" value="1" checked="checked">我已阅读并同意《用户注册协议》
                                </li>
                                <li>
                                    <label for="">&nbsp;</label>
                                    <button type="submit" class="layui-btn layui-btn-danger login_btn">立即注册</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="reg-right">
                        <div class="reg-right-item">
                            <div class="reg-right-icon">
                                <i class="layui-icon layui-icon-cellphone-fine"></i>
                            </div>
                            <div class="reg-right-ip">手机快速注册</div>
                            <div class="reg-right-fp">
                                中国大陆手机用户，编辑短信 “<span style="color: red; font-weight: bold; font-size: 20px;">XX</span>”发送到：
                            </div>
                            <p style="text-align:center;margin-top: 5px;color: red;font-weight: bold; font-size: 20px;">10690999XX</p>
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
function captChange()
{
    $('.capt').attr('src','<?php echo captcha_src(); ?>+rand'+Math.random());
}


$('.login_btn').click(function(){
	$.ajax({
		type:"post",
		url:"<?php echo url('index/member/regist'); ?>",
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
				captChange(),
				layer.open({
					title:'系统信息',
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




