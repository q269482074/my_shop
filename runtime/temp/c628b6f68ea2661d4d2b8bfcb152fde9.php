<?php /*a:1:{s:75:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\index\view\index\index.html";i:1591857405;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/index/layui/css/layui.css">
    <link rel="stylesheet" href="/static/index/css/index.css">
    <link rel="stylesheet" href="/static/index/css/slider.css">
    <link rel="stylesheet" href="/static/index/css/swiper.min.css">
    <script src="/static/index/js/jquery-3.3.1.min.js"></script>
    <script src="/static/index/layui/layui.js"></script>
    <script src="/static/index/js/bootstrap.min.js"></script>
    <script src="/static/index/js/index.js"></script>
    <script src="/static/index/js/slider.js"></script>
    <script src="/static/index/js/animate.js"></script>
    <script src="/static/index/js/swiper.min.js"></script>
    <title>首页</title>
</head>
<body>
    <div class="main">
        <!-- 头部start -->
        <div class="header">
            <div class="header-contriner">
                <a href="<?php echo url('index/Cart/lst','',false); ?>" target="_blank">
                    <div class="cart">
                        购物车
                    </div>
                </a>
                <div class="login">
                    <?php if((session('memberId'))): ?>
                    <div class="login-item">
                            您好，尊敬的用户： <span style="color: red; font-weight:bold;">admin1</span>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                    </div>
                    <div class="login-item">
                        <a href="javascript:;" target="_blank" class="logout">
                            退出
                        </a>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                    </div>
                    <?php else: ?>
                    <div class="login-item">
                        <a href="<?php echo url('index/member/login'); ?>" target="_blank">
                            登录
                        </a>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                    </div>
                    <div class="login-item">
                        <a href="<?php echo url('index/member/regist'); ?>" target="_blank">
                            注册
                        </a>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                    </div>
                    <?php endif; ?>
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
            <div class="search-best">
                <ul class="search-best-ul">
                    <li class="search-best-item">
                        <a href="javascript:;">手机</a>
                        <div class="search-best-content">
                            <ul>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="search-best-item">
                        <a href="javascript:;">电视</a>
                        <div class="search-best-content">
                            <ul>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="search-best-item">
                        <a href="javascript:;">笔记本</a>
                        <div class="search-best-content">
                            <ul>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="search-best-item">
                        <a href="javascript:;">耳机</a>
                        <div class="search-best-content">
                            <ul>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="search-best-item">
                        <a href="javascript:;">手机外壳</a>
                        <div class="search-best-content">
                            <ul>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="search-best-item">
                        <a href="javascript:;">时尚连衣裙</a>
                        <div class="search-best-content">
                            <ul>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="search-best-item">
                        <a href="javascript:;">沙发</a>
                        <div class="search-best-content">
                            <ul>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="search-best-item">
                        <a href="javascript:;">球鞋</a>
                        <div class="search-best-content">
                            <ul>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="search-best-item">
                        <a href="javascript:;">数码相机</a>
                        <div class="search-best-content">
                            <ul>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                                <li class="search-best-info">
                                    <a href="javascript:;">
                                        <img src="/static/index/images/xiaomi1.png" alt="">
                                        <p class="search-best-info-name">
                                            小米C99
                                        </p>
                                        <p class="search-best-info-price">1799元</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="search-best-item">
                        <a href="javascript:;">服务</a>
                    </li>
                    <li class="search-best-item">
                        <a href="javascript:;">社区</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 搜索栏end -->

        <!-- 轮播图start -->
        <div class="slider">
            <ul class="list">
                <li class="item"><img src="/static/index/images/slider1.jpg" alt=""></li>
                <li class="item"><img src="/static/index/images/slider2.png" alt=""></li>
                <li class="item"><img src="/static/index/images/slider3.png" alt=""></li>
                <li class="item"><img src="/static/index/images/slider4.png" alt=""></li>
                <li class="item"><img src="/static/index/images/slider5.png" alt=""></li>
            </ul>
            <button class="prev" style="display: none;">prev</button>
            <button class="next" style="display: none;">next</button>
            <div class="category-list">
                <ul>
                    <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <li class="category-item">
                        <a href="javascript:;">
                            <?php echo htmlentities($v['cate_name']); ?><span>></span>
                        </a>
                        
                        <div class="category-content">
                            <?php if((!empty($v['children']))): if(is_array($v['children']) || $v['children'] instanceof \think\Collection || $v['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                            <div class="category-content-item">
                                <a class="category2" href="javascript:;"><?php echo htmlentities($v1['cate_name']); ?></a>
                                <ul>
                                    <?php if((!empty($v1['children']))): if(is_array($v1['children']) || $v1['children'] instanceof \think\Collection || $v1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                                    <li class="category3"><a href="javascript:;"><?php echo htmlentities($v2['cate_name']); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
									<?php endif; ?>
                                </ul>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <!-- <li class="category-item" >
                        <a href="#">
                            电视 盒子<span>></span>
                        </a>
                        <div class="category-content">
                            <div class="category-content-item">
                                <a class="category2" href="javascript:;">手机</a>
                                <ul>
                                    <li class="category3"><a href="javascript:;">IPHONE</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">华为</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">小米</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">OPPO</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">魅族</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">三星</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">荣耀</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                </ul>
                            </div>

                            <div class="category-content-item">
                                <a class="category2" href="javascript:;">手机配件</a>
                                <ul>
                                    <li class="category3"><a href="javascript:;">手机套</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">贴膜</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">数据线</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">充电器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">耳机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">手机饰品</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">移动电源</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">手机支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                </ul>
                            </div>

                            <div class="category-content-item">
                                <a class="category2" href="javascript:;">数码配件</a>
                                <ul>
                                    <li class="category3"><a href="javascript:;">数码相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">单反相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">三脚架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">读卡器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">手柄</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li class="category3"><a href="javascript:;">电池</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="category-item">
                        <a href="#">
                            笔记本 平板<span>></span>
                            <div class="category-content">
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">IPHONE</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">华为</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">小米</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">OPPO</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">魅族</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三星</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">荣耀</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">手机套</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">贴膜</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">数据线</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">充电器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">耳机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机饰品</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">移动电源</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">数码配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">数码相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">单反相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三脚架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">读卡器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手柄</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">电池</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="category-item">
                        <a href="#">
                            家电 插线板<span>></span>
                            <div class="category-content">
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">IPHONE</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">华为</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">小米</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">OPPO</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">魅族</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三星</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">荣耀</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">手机套</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">贴膜</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">数据线</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">充电器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">耳机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机饰品</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">移动电源</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">数码配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">数码相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">单反相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三脚架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">读卡器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手柄</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">电池</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="category-item">
                        <a href="#">
                            出行 穿戴<span>></span>
                            <div class="category-content">
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">IPHONE</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">华为</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">小米</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">OPPO</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">魅族</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三星</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">荣耀</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">手机套</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">贴膜</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">数据线</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">充电器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">耳机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机饰品</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">移动电源</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">数码配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">数码相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">单反相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三脚架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">读卡器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手柄</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">电池</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="category-item">
                        <a href="#">
                            智能 路由器<span>></span>
                            <div class="category-content">
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">IPHONE</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">华为</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">小米</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">OPPO</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">魅族</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三星</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">荣耀</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">手机套</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">贴膜</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">数据线</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">充电器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">耳机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机饰品</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">移动电源</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">数码配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">数码相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">单反相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三脚架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">读卡器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手柄</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">电池</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="category-item">
                        <a href="#">
                            电源 配件<span>></span>
                            <div class="category-content">
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">IPHONE</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">华为</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">小米</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">OPPO</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">魅族</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三星</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">荣耀</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">手机套</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">贴膜</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">数据线</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">充电器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">耳机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机饰品</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">移动电源</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">数码配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">数码相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">单反相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三脚架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">读卡器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手柄</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">电池</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="category-item">
                        <a href="#">
                            健康 儿童<span>></span>
                            <div class="category-content">
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">IPHONE</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">华为</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">小米</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">OPPO</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">魅族</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三星</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">荣耀</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">手机套</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">贴膜</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">数据线</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">充电器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">耳机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机饰品</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">移动电源</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">数码配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">数码相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">单反相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三脚架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">读卡器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手柄</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">电池</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="category-item">
                        <a href="#">
                            耳机 音箱<span>></span>
                            <div class="category-content">
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">IPHONE</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">华为</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">小米</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">OPPO</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">魅族</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三星</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">荣耀</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">手机套</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">贴膜</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">数据线</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">充电器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">耳机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机饰品</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">移动电源</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">数码配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">数码相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">单反相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三脚架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">读卡器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手柄</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">电池</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="category-item">
                        <a href="#">
                            生活 箱包<span>></span>
                            <div class="category-content">
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">IPHONE</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">华为</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">小米</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">OPPO</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">魅族</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三星</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">荣耀</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">联想</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">vivo</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">努比亚</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">手机配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">手机套</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">贴膜</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">数据线</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">充电器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">耳机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机饰品</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">移动电源</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手机支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
    
                                <div class="category-content-item">
                                    <a class="category2" href="javascript:;">数码配件</a>
                                    <ul>
                                        <li class="category3"><a href="javascript:;">数码相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">单反相机</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">三脚架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">读卡器</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">支架</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">手柄</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                        <li class="category3"><a href="javascript:;">电池</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </li> -->
                </ul>
            </div>
            
            <ul class="nav-bottom" style="display: none;">
                <li class="slider-content cl">第一个图片</li>
                <li class="slider-content">第二个图片</li>
                <li class="slider-content">第三个图片</li>
                <li class="slider-content">第四个图片</li>
                <li class="slider-content">第五个图片</li>
            </ul>
            <ul class="pagination">
                <li class="bullet df"></li>
                <li class="bullet"></li>
                <li class="bullet"></li>
                <li class="bullet"></li>
                <li class="bullet"></li>
            </ul>
        </div>
        <!-- 轮播图end -->

        <!-- 侧边栏start -->
        <div class="sidebar">
            <div class="sidebar-type">闪购秒杀</div>
            <div class="sidebar-type">家用电器</div>
            <div class="sidebar-type">手机数码</div>
            <div class="sidebar-type">家居必备</div>
            <div class="sidebar-type">衣服鞋袜</div>
            <div class="sidebar-type">返回顶部</div>
        </div>
        <!-- 侧边栏end -->


        <!-- 商品区域start -->
        <div class="main-content">
            <!-- 闪购start -->
            <div class="flashsale">
                <div class="flashsale-title">
                    闪购
                </div>
                <div class="flashsale-content">
                    <div class="flashsale-item">
                        <div class="round">
                            10:00 场
                        </div>
                        <img src="/static/index/images/flashsale.png" alt="">
                        <div class="desc">距离结束还有</div>
                        <div class="countdown" id="countdown">
                            <span>01</span>
                            <i>:</i>
                            <span>01</span>
                            <i>:</i>
                            <span>01</span>
                        </div>
                    </div>
                    <div class="flashsale-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="content">
                                        <img src="/static/index/images/flashsale1.jpg" alt="">
                                        <div class="swiper-slide-title">小米水质TDS测笔 白色</div>
                                        <div class="swiper-slide-attr">准确检测家中水质纯度</div>
                                        <div class="swiper-slide-price">
                                            <span class="now">29元</span>
                                            <span class="past">39元</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content">
                                        <img src="/static/index/images/flashsale3.jpg" alt="">
                                        <div class="swiper-slide-title">小米蓝牙耳机(K歌版)白色</div>
                                        <div class="swiper-slide-attr">我的死人KTV</div>
                                        <div class="swiper-slide-price">
                                            <span class="now">228元</span>
                                            <span class="past">249元</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content">
                                        <img src="/static/index/images/flashsale7.png" alt="">
                                        <div class="swiper-slide-title">小米笔记本电脑</div>
                                        <div class="swiper-slide-attr">全面均衡的国民轻薄本</div>
                                        <div class="swiper-slide-price">
                                            <span class="now">2999元</span>
                                            <span class="past">3399元</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content">
                                        <img src="/static/index/images/flashsale2.png" alt="">
                                        <div class="swiper-slide-title">小米米家热水壶</div>
                                        <div class="swiper-slide-attr">高效过滤 享安心好水</div>
                                        <div class="swiper-slide-price">
                                            <span class="now">99元</span>
                                            <span class="past">129元</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content">
                                        <img src="/static/index/images/flashsale3.jpg" alt="">
                                        <div class="swiper-slide-title">小米蓝牙耳机(K歌版)白色</div>
                                        <div class="swiper-slide-attr">我的死人KTV</div>
                                        <div class="swiper-slide-price">
                                            <span class="now">228元</span>
                                            <span class="past">249元</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content">
                                        <img src="/static/index/images/flashsale7.png" alt="">
                                        <div class="swiper-slide-title">小米笔记本电脑</div>
                                        <div class="swiper-slide-attr">全面均衡的国民轻薄本</div>
                                        <div class="swiper-slide-price">
                                            <span class="now">2999元</span>
                                            <span class="past">3399元</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content">
                                        <img src="/static/index/images/flashsale2.png" alt="">
                                        <div class="swiper-slide-title">小米米家热水壶</div>
                                        <div class="swiper-slide-attr">高效过滤 享安心好水</div>
                                        <div class="swiper-slide-price">
                                            <span class="now">99元</span>
                                            <span class="past">129元</span>
                                        </div>
                                    </div>
                                </div> <div class="swiper-slide">
                                    <div class="content">
                                        <img src="/static/index/images/flashsale3.jpg" alt="">
                                        <div class="swiper-slide-title">小米蓝牙耳机(K歌版)白色</div>
                                        <div class="swiper-slide-attr">我的死人KTV</div>
                                        <div class="swiper-slide-price">
                                            <span class="now">228元</span>
                                            <span class="past">249元</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content">
                                        <img src="/static/index/images/flashsale7.png" alt="">
                                        <div class="swiper-slide-title">小米笔记本电脑</div>
                                        <div class="swiper-slide-attr">全面均衡的国民轻薄本</div>
                                        <div class="swiper-slide-price">
                                            <span class="now">2999元</span>
                                            <span class="past">3399元</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content">
                                        <img src="/static/index/images/flashsale2.png" alt="">
                                        <div class="swiper-slide-title">小米米家热水壶</div>
                                        <div class="swiper-slide-attr">高效过滤 享安心好水</div>
                                        <div class="swiper-slide-price">
                                            <span class="now">99元</span>
                                            <span class="past">129元</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 闪购end -->

            <!-- 商品种类楼层start -->
            <div class="floor">
                <div class="floor-title">
                    <div class="title-line title-line1"></div><div class="title-line title-line2"></div>
                    <div class="title-line title-name">&nbsp;&nbsp;家用电器&nbsp;&nbsp;</div>
                    <div class="title-line title-line2"></div><div class="title-line title-line1"></div>
                </div>
                <div class="floor-goods">
                    <?php if(is_array($jydq) || $jydq instanceof \think\Collection || $jydq instanceof \think\Paginator): $i = 0; $__LIST__ = $jydq;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <div class="floor-goods-item">
                        <a href="<?php echo url('index/index/goods','',false); ?>/id/<?php echo htmlentities($v['id']); ?>" target="_blank">
                            <div class="floor-goods-info" title="<?php echo htmlentities($v['name']); ?>">
                                <img src="<?php echo htmlentities($v['img_url']); ?>" alt="">
                                <p class="goods-name"><?php echo htmlentities($v['name']); ?></p>
                                <p class="goods-pj">
                                    <span>评价：56</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span>收藏：1520</span>
                                </p>
                                <p class="price-xl">
                                    <span class="price" style="font-size: 20px; color: orange">￥<?php echo htmlentities($v['goods_price']); ?>&nbsp;</span>
                                    <!-- <span style="text-decoration:line-through; font-size: 15px;">￥<?php echo htmlentities($v['price']); ?></span> -->
                                    <span class="xl" style="margin-top: 5px;">月销量1100笔</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="floor">
                    <div class="floor-title">
                        <div class="title-line title-line1"></div><div class="title-line title-line2"></div>
                        <div class="title-line title-name">&nbsp;&nbsp;手机数码&nbsp;&nbsp;</div>
                        <div class="title-line title-line2"></div><div class="title-line title-line1"></div>
                    </div>
                    <div class="floor-goods">
                        <?php if(is_array($sj) || $sj instanceof \think\Collection || $sj instanceof \think\Paginator): $i = 0; $__LIST__ = $sj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <div class="floor-goods-item">
                            <a href="<?php echo url('index/index/goods','',false); ?>/id/<?php echo htmlentities($v['id']); ?>" target="_blank">
                                <div class="floor-goods-info" title="<?php echo htmlentities($v['name']); ?>">
                                    <img src="<?php echo htmlentities($v['img_url']); ?>" alt="">
                                    <p class="goods-name"><?php echo htmlentities($v['name']); ?></p>
                                    <p class="goods-pj">
                                        <span>评价：56</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span>收藏：1520</span>
                                    </p>
                                    <p class="price-xl">
                                        <span class="price" style="font-size: 20px; color: orange">￥<?php echo htmlentities($v['goods_price']); ?>&nbsp;</span>
                                        <!-- <span style="text-decoration:line-through; font-size: 15px;">￥<?php echo htmlentities($v['price']); ?></span> -->
                                        <span class="xl" style="margin-top: 5px;">月销量1100笔</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
            </div>
            <div class="floor">
                    <div class="floor-title">
                        <div class="title-line title-line1"></div><div class="title-line title-line2"></div>
                        <div class="title-line title-name">&nbsp;&nbsp;家居必备&nbsp;&nbsp;</div>
                        <div class="title-line title-line2"></div><div class="title-line title-line1"></div>
                    </div>
                    <div class="floor-goods">
                        <?php if(is_array($jj) || $jj instanceof \think\Collection || $jj instanceof \think\Paginator): $i = 0; $__LIST__ = $jj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <div class="floor-goods-item">
                            <a href="<?php echo url('index/index/goods','',false); ?>/id/<?php echo htmlentities($v['id']); ?>" target="_blank">
                                <div class="floor-goods-info" title="<?php echo htmlentities($v['name']); ?>">
                                    <img src="<?php echo htmlentities($v['img_url']); ?>" alt="">
                                    <p class="goods-name"><?php echo htmlentities($v['name']); ?></p>
                                    <p class="goods-pj">
                                        <span>评价：56</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span>收藏：1520</span>
                                    </p>
                                    <p class="price-xl">
                                        <span class="price" style="font-size: 20px; color: orange">￥<?php echo htmlentities($v['goods_price']); ?>&nbsp;</span>
                                        <!-- <span style="text-decoration:line-through; font-size: 15px;">￥<?php echo htmlentities($v['price']); ?></span> -->
                                        <span class="xl" style="margin-top: 5px;">月销量1100笔</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
            </div>
            <div class="floor">
                <div class="floor-title">
                    <div class="title-line title-line1"></div><div class="title-line title-line2"></div>
                    <div class="title-line title-name">&nbsp;&nbsp;衣服鞋袜&nbsp;&nbsp;</div>
                    <div class="title-line title-line2"></div><div class="title-line title-line1"></div>
                </div>
                <div class="floor-goods">
                    <?php if(is_array($yf) || $yf instanceof \think\Collection || $yf instanceof \think\Paginator): $i = 0; $__LIST__ = $yf;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <div class="floor-goods-item">
                        <a href="<?php echo url('index/index/goods','',false); ?>/id/<?php echo htmlentities($v['id']); ?>" target="_blank">
                            <div class="floor-goods-info" title="<?php echo htmlentities($v['name']); ?>">
                                <img src="<?php echo htmlentities($v['img_url']); ?>" alt="">
                                <p class="goods-name"><?php echo htmlentities($v['name']); ?></p>
                                <p class="goods-pj">
                                    <span>评价：56</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span>收藏：1520</span>
                                </p>
                                <p class="price-xl">
                                    <span class="price" style="font-size: 20px; color: orange">￥<?php echo htmlentities($v['goods_price']); ?>&nbsp;</span>
                                    <!-- <span style="text-decoration:line-through; font-size: 15px;">￥<?php echo htmlentities($v['price']); ?></span> -->
                                    <span class="xl" style="margin-top: 5px;">月销量1100笔</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <!-- 商品种类楼层end -->
            <hr>
            <!-- 版权区域start -->
            <footer>
                <div class="footer">
                    底部版权栏
                </div>
            </footer>
            <!-- 版权区域end -->
        </div>
        <!-- 商品区域end -->

        
    </div>
</body>
</html>


<script type='text/javascript'>
layui.use(['layer'],function(){
	layer = layui.layer;
});

// 倒计时
var o=document.getElementById('countdown');
gettime();
function gettime(){
    var endtime=new Date('2019/09/13 19:40:00').getTime();//截止时间
    var nowtime=new Date();//当前时间
    //时间差  单位是秒
    var difftime=parseInt((endtime-nowtime)/1000);
    //转换为时分秒
    var h,m,s;
    h=parseInt(difftime/3600);
    m=parseInt(difftime/60)%60;
    s=difftime%60;
    //将时分秒转化为双位数
    h=setNum(h);
    m=setNum(m);
    s=setNum(s);
    if( s >= 0){
        setTimeout(gettime,1000);
        o.innerHTML = '<span>'+h+'</span>'+'<i>:</i>'+'<span>'+m+'</span>'+"<i>:</i>"+'<span>'+s+'</span>';
    }else{
        o.innerHTML = '<span>'+'00'+'</span>'+'<i>:</i>'+'<span>'+'00'+'</span>'+"<i>:</i>"+'<span>'+'00'+'</span>';
    }
};
function setNum(num){
    if(num<10){
        num='0'+num;
    }
    return num;
}


// 闪购滑动
var mySwiper = new Swiper('.swiper-container',{
    slidesPerView : 4,
    slidesPerGroup : 4,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
})
$('.swiper-slide').css('width','235px');


//用户退出
$('.logout').click(function(){
	$.ajax({
		type:"post",
		url:"<?php echo url('index/member/logout'); ?>",
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









