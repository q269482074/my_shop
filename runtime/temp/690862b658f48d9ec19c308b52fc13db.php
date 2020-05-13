<?php /*a:1:{s:75:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\index\view\index\goods.html";i:1589379624;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/index/layui/css/layui.css">
    <link rel="stylesheet" href="/static/index/css/goods.css">
    <script src="/static/index/js/jquery-3.3.1.min.js"></script>
    <script src="/static/index/layui/layui.js"></script>
    <script src="/static/index/js/bootstrap.min.js"></script>
    <script src="/static/index/js/goods.js"></script>
    <title>商品详情页</title>
</head>
<body>
    <!-- 头部start -->
    <div class="header">
        <div class="header-contriner">
            <a href="<?php echo url('index/Cart/lst','',false); ?>" target="_blank">
                <div class="cart">
                    购物车
                </div>
            </a>
            <div class="login">
                <div class="login-item">
                    <a href="javascript:;">
                        登录
                    </a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                </div>
                <div class="login-item">
                    <a href="javascript:;">
                        注册
                    </a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                </div>
                <div class="login-item">
                    <a href="javascript:;">消息通知</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 头部end -->

    <!-- 搜索栏start -->
    <div class="search">
        <div class="search-item">
            <input type="text" class="search-ipt" placeholder='请输入要搜索的商品'>
            <div class="search-icon">
                <a href="<?php echo url('index/index/search_type','',false); ?>" target="_blank"><i class="layui-icon layui-icon-search"></i></a>
            </div>
        </div>
    </div>
    <!-- 搜索栏end -->

    <div class="pos">
        当前位置：
        <a href="javascript:;">首页</a>
        >
        <a href="javascript:;">家庭电器</a>
        >
        电视机
    </div>

    <!-- 内容start -->
    <div class="content">
        <div class="goods">
            <div class="goods-attr">
                <div class="goods-img-info">
                    <div class="goods-img">
                        <img src="/static/index/images/22.jpg" alt="">
                    </div>
                    <div class="img-other">
                        <div class="img-item">
                            <img src="/static/index/images/11.png" alt="">
                        </div>
                        <div class="img-item item">
                            <img src="/static/index/images/33.png" alt="">
                        </div>
                        <div class="img-item item">
                            <img src="/static/index/images/55.png" alt="">
                        </div>
                        <div class="img-item item">
                            <img src="/static/index/images/77.png" alt="">
                        </div>
                        <div class="img-item item">
                            <img src="/static/index/images/112.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="goods-info">
                    <h3>【Hpoi现货】花椰菜 七海 微笑 1/7 手办</h3>
                    <div class="price">
                        <div class="goods-info-title">价格</div>
                        <div class="goods-info-content" style="font-size: 30px; color: #ff4400;">
                            ¥ 780
                        </div>
                    </div>
                    <div class="addr goods-info-item">
                        <div class="goods-info-title">配送</div>
                        <div class="goods-info-content">
                            广东广州 至 广东深圳
                        </div>
                    </div>
                    <div class="attr goods-info-item">
                        <div class="goods-info-title">码数</div>
                        <div class="goods-info-content radio">
                            <div>38</div><div>39</div><div>40</div><div>41</div><div>42</div><div>43</div><div>44</div>
                        </div>
                    </div>
                    <div class="attr goods-info-item">
                        <div class="goods-info-title">颜色</div>
                        <div class="goods-info-content radio">
                            <div>红色</div><div>白色</div><div>蓝色</div><div>黑色</div>
                        </div>
                    </div>
                    <div class="attr goods-info-item">
                        <div class="goods-info-title">数量</div>
                        <div class="goods-info-content">
                            <a href="javascript:;" class="reduce-num">-</a>
                            <input type="text" class="amount" name="amount" value="1" size="1">
                            <a href="javascript:;" class="add-num">+</a>
                        </div>
                    </div>
                    <div class="attr goods-info-item">
                        <div class="layui-btn layui-btn-warm">直接购买</div>
                        <div class="layui-btn layui-btn-danger">加入购物车</div>
                    </div>
                </div>
            </div>
            <div class="goods-shop">
                <h3>看了又看</h3>
                <div class="tuijian">
                    <ul>
                        <li>
                            <img src="/static/index/images/11.png" alt="">
                            <div>¥1.00</div>
                        </li>
                        <li>
                            <img src="/static/index/images/11.png" alt="">
                            <div>¥1.00</div>
                        </li>
                        <li>
                            <img src="/static/index/images/11.png" alt="">
                            <div>¥1.00</div>
                        </li>
                        <li>
                            <img src="/static/index/images/11.png" alt="">
                            <div>¥1.00</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 内容end -->
</body>
</html>