<?php /*a:1:{s:75:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\login\login.html";i:1565781990;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/admin/css/login.css">
    <script src="/static/admin/js/jquery-3.3.1.min.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
    <title>后台登陆页面</title>
</head>
<body>
    <div class="loginContriner img-responsive">
        <div class="title">后台登陆管理系统</div>
        <form class="form-horizontal">
            <input class="form-control input-lg" type="text" placeholder="请输入用户名">
            <input class="form-control input-lg" type="password" placeholder="请输入密码">
            <input class="form-control input-lg captcha" type="text" placeholder="请输入验证码">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 记住帐号密码
                </label>
            </div>
            <button type="button" class="btn btn-info">登录</button>
        </form>
    </div>
</body>
</html>