<?php /*a:1:{s:81:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\index\view\index\search_type.html";i:1575898627;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/index/layui/css/layui.css">
    <link rel="stylesheet" href="/static/index/css/search_type.css">
    <link rel="stylesheet" href="/static/index/css/searchSlider.css">
    <script src="/static/index/js/jquery-3.3.1.min.js"></script>
    <script src="/static/index/js/bootstrap.min.js"></script>
    <script src="/static/index/js/slider.js"></script>
    <script src="/static/index/js/animate.js"></script>
    <title>搜索页面</title>
</head>
<body>
    <div class="main">
        <!-- 头部start -->
        <div class="header">
            <div class="header-contriner">
                <div class="cart">
                    购物车
                </div>
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
                    <i class="layui-icon layui-icon-search"></i>  
                </div>
            </div>
        </div>
        <!-- 搜索栏end -->

        <div class="pos">
            当前位置：<a href="javascript:;">首页</a> > <a href="javascript:;">家用电器</a>  
        </div>

        <!-- 主题内容start -->
        <div class="content">
            <!-- 头部内容start -->
            <div class="header_content">
                <!-- 左边栏start -->
                <div class="header_content_left">
                    <div class="header_content_left_title">
                        家用电器
                    </div>
                    <ul>
                        <li>
                            <div>
                                电视
                            </div>
                            <span><a href="javascript:;">平板电视</a></span> &nbsp;&nbsp;
                            <span><a href="javascript:;">家庭影院</a></span>
                        </li>
                        <li>
                            <div>
                                冰箱洗衣机
                            </div>
                            <span><a href="javascript:;">对开门冰箱</a></span> &nbsp;&nbsp;
                            <span><a href="javascript:;">全自动洗衣机</a></span>
                        </li>
                        <li>
                            <div>
                                厨卫电器
                            </div>
                            <span><a href="javascript:;">烟灶</a></span> &nbsp;&nbsp;
                            <span><a href="javascript:;">热水器</a></span>
                        </li>
                        <li>
                            <div>
                                生活电器
                            </div>
                            <span><a href="javascript:;">吸尘器</a></span> &nbsp;&nbsp;
                            <span><a href="javascript:;">空气净化器</a></span>
                        </li>
                    </ul>
                </div>
                <!-- 左边栏end -->

                <!-- 右边栏start -->
                <div class="hreader_content_right">
                    <!-- 轮播图start -->
                    <div class="slider">
                        <ul class="list">
                            <li class="item"><img src="/static/index/images/55.png" alt=""></li>
                            <li class="item"><img src="/static/index/images/112.png" alt=""></li>
                        </ul>
                        <button class="prev" style="display: none;">prev</button>
                        <button class="next" style="display: none;">next</button>
                        <ul class="nav-bottom" style="display: none;">
                            <li class="slider-content cl" style="display: none;">第一个图片</li>
                            <li class="slider-content" style="display: none;">第二个图片</li>
                        </ul>
                        <ul class="pagination">
                            <li class="bullet df"></li>
                            <li class="bullet"></li>
                        </ul>
                    </div>
                    <!-- 轮播图end -->
                </div>
                <!-- 右边栏end -->
            </div>
            <!-- 头部内容end -->
        </div>
        <!-- 主题内容end -->
    </div>
</body>
</html>