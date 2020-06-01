<?php /*a:1:{s:75:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\index\view\index\goods.html";i:1589985554;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/index/layui/css/layui.css">
    <link rel="stylesheet" href="/static/index/css/goods.css">
    <link rel="stylesheet"  href="/static/index/css/magnifier.css">
    <script src="/static/index/js/jquery-3.3.1.min.js"></script>
    <script src="/static/index/layui/layui.js"></script>
    <script src="/static/index/js/bootstrap.min.js"></script>
    <script src="/static/index/js/goods.js"></script>
    <script src="/static/index/js/magnifier.js"></script>
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
        <!-- 商品属性start -->
        <div class="goods">
            <div class="goods-attr">
                <div class="magnifier" id="magnifier1">
                    <div class="magnifier-container">
                        <div class="images-cover"></div>
                        <!--当前图片显示容器-->
                        <div class="move-view"></div>
                        <!--跟随鼠标移动的盒子-->
                    </div>
                    <div class="magnifier-assembly">
                        <div class="magnifier-btn">
                            <span class="magnifier-btn-left">&lt;</span>
                            <span class="magnifier-btn-right">&gt;</span>
                        </div>
                        <!--按钮组-->
                        <div class="magnifier-line">
                            <ul class="clearfix animation03">
                                <li>
                                    <div class="small-img">
                                        <img src="/static/index/images/22.jpg" />
                                    </div>
                                </li>
                                <li>
                                    <div class="small-img">
                                        <img src="/static/index/images/11.png" />
                                    </div>
                                </li>
                                <li>
                                    <div class="small-img">
                                        <img src="/static/index/images/33.png" />
                                    </div>
                                </li>
                                <li>
                                    <div class="small-img">
                                        <img src="/static/index/images/55.png" />
                                    </div>
                                </li>
                                <li>
                                    <div class="small-img">
                                        <img src="/static/index/images/77.png" />
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--缩略图-->
                    </div>
                    <div class="magnifier-view"></div>
                    <!--经过放大的图片显示容器-->
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
        <!-- 商品属性end -->

        <!-- 评论区start -->
        <div class="floor">
            <div class="floor-left">
                <div class="floor1 ctg">
                    <h3>相关分类</h3>
                    <ul>
                        <li><a href="javascript:;">笔记本</a></li>
                        <li><a href="javascript:;">超极本</a></li>
                        <li><a href="javascript:;">平板电脑</a></li>
                        <li><a href="javascript:;">一体电脑</a></li>
                        <li><a href="javascript:;">主机</a></li>
                    </ul>
                </div>
                <div class="floor1 br">
                    <h3>同类品牌</h3>
                    <ul>
                        <li><a href="javascript:;">华为</a></li>
                        <li><a href="javascript:;">联想</a></li>
                        <li><a href="javascript:;">戴尔</a></li>
                        <li><a href="javascript:;">华硕</a></li>
                        <li><a href="javascript:;">苹果</a></li>
                    </ul>
                </div>
                <div class="floor2 similar">
                    <h3>浏览了该商品的用户还浏览了</h3>
                    <ul>
                        <li>
                            <a href="javascript:;">
                                <img src="/static/index/images/22.jpg" alt="">
                                <div class="floor2-tit">ThinkPad E431(62771A7) 14英寸笔记本电脑 (i5-3230 4G 1TB 2G独显 蓝牙 win8)</div>
                                <div class="floor2-price">￥5199.00</div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="/static/index/images/22.jpg" alt="">
                                <div class="floor2-tit">ThinkPad E431(62771A7) 14英寸笔记本电脑 (i5-3230 4G 1TB 2G独显 蓝牙 win8)</div>
                                <div class="floor2-price">￥5199.00</div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="/static/index/images/22.jpg" alt="">
                                <div class="floor2-tit">ThinkPad E431(62771A7) 14英寸笔记本电脑 (i5-3230 4G 1TB 2G独显 蓝牙 win8)</div>
                                <div class="floor2-price">￥5199.00</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>



            <div class="floor-right">
                <div class="tabbar">
                    <ul>
                        <li class="tabbar-first dl">商品详情</li>
                        <li>商品评论</li>
                        <li>售后服务</li>
                    </ul>
                </div>
                <div class="goods-tabbar goods-detail">
                    <div class="brd-nm">品牌名称：华为/HUAWEI</div>
                    <div class="parameter">产品参数</div>
                    <ul>
                        <li>产品名称：【Hpoi现货】花椰菜 七海 微笑 1/7 手办</li>
                        <li>品牌：华为/HUAWEI</li>
                        <li>型号：1比50</li>
                        <li>功能：摆设</li>
                        <li>产地：中国大陆</li>
                        <li>颜色：蓝色，白色，橙色</li>
                        <li>生产企业：深圳市XXXXXX</li>
                        <li>保修期：12个月</li>
                    </ul>
                    <div class="goods-data">
                        <img src="/static/index/images/22.jpg" alt="">
                        <img src="/static/index/images/11.png" alt="">
                    </div>
                </div>
                <div class="goods-tabbar goods-comment"  style="display: none;">
                    <div class="pf">
                        <div class="pf-left">
                            <div class="pf-tit">与描述相符</div>
                            <div class="pf-num">5.0</div>
                            <div id="test1"></div>
                        </div>
                        <div class="pf-right">
                            <div class="pf-tit">
                                买家印象：
                            </div>
                            <div class="pf-yx">
                                <ul>
                                    <li>屏幕大<span style="color: #cccccc;">(10)</span></li>
                                    <li>质量好<span style="color: #cccccc;">(10)</span></li>
                                    <li>功能大<span style="color: #cccccc;">(10)</span></li>
                                    <li>价格便宜<span style="color: #cccccc;">(10)</span></li>
                                    <li>手感好<span style="color: #cccccc;">(10)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <div class="comment-item">
                            <div class="comment-item-l">
                                <img src="/static/index/images/11.png" alt="">
                                <div><a href="javascript:;">用户1</a></div>
                            </div>
                            <div class="comment-item-r">
                                <div class="comment-header">
                                    <div id="test2"></div>
                                    <div class="comment-header-time">2020-05-20 20:14:12</div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-content-top">
                                        啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大
                                    </div>
                                    <div class="comment-content-bottom">
                                          <a href="javascript:;">回复(0)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <div class="comment-item">
                            <div class="comment-item-l">
                                <img src="/static/index/images/11.png" alt="">
                                <div><a href="javascript:;">用户1</a></div>
                            </div>
                            <div class="comment-item-r">
                                <div class="comment-header">
                                    <div id="test2" class="layui-inline">
                                        <ul class="layui-rate" readonly=""><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li></ul>
                                    </div>
                                    <div class="comment-header-time">2020-05-20 20:14:12</div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-content-top">
                                        阿萨克鹿鼎记撒卢克劲到啦坑死的就
                                    </div>
                                    <div class="comment-content-bottom">
                                          <a href="javascript:;">回复(0)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <div class="comment-item">
                            <div class="comment-item-l">
                                <img src="/static/index/images/11.png" alt="">
                                <div><a href="javascript:;">用户1</a></div>
                            </div>
                            <div class="comment-item-r">
                                <div class="comment-header">
                                    <div id="test2" class="layui-inline">
                                        <ul class="layui-rate" readonly=""><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li></ul>
                                    </div>
                                    <div class="comment-header-time">2020-05-20 20:14:12</div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-content-top">
                                        啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大
                                    </div>
                                    <div class="comment-content-bottom">
                                          <a href="javascript:;">回复(0)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <div class="comment-item">
                            <div class="comment-item-l">
                                <img src="/static/index/images/11.png" alt="">
                                <div><a href="javascript:;">用户1</a></div>
                            </div>
                            <div class="comment-item-r">
                                <div class="comment-header">
                                    <div id="test2" class="layui-inline">
                                        <ul class="layui-rate" readonly=""><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li><li class="layui-inline"><i class="layui-icon layui-icon-rate-solid"></i></li></ul>
                                    </div>
                                    <div class="comment-header-time">2020-05-20 20:14:12</div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-content-top">
                                        啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大啊是大苏打撒大
                                    </div>
                                    <div class="comment-content-bottom">
                                          <a href="javascript:;">回复(0)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="goods-tabbar goods-aftser" style="display: none;">
                    售后服务
                </div>
            </div>
        </div>
        <!-- 评论区end -->

        <!-- 版权区域start -->
        <footer>
            <div class="footer">
                底部版权栏
            </div>
        </footer>
        <!-- 版权区域end -->
    </div>
    <!-- 内容end -->
</body>
</html>



<script>
    layui.use('rate', function(){
      var rate = layui.rate;
     
      //渲染
      var ins1 = rate.render({
        elem: '#test1',  //绑定元素
        value: 5,
        readonly: true,
      });
      var ins2 = rate.render({
        elem: '#test2',  //绑定元素
        value: 5,
        readonly: true,
      });
    });
</script>

<script type="text/javascript">
$(function() {
    
    var magnifierConfig = {
        magnifier : "#magnifier1",//最外层的大容器
        width : 500,//承载容器宽
        height : 500,//承载容器高
        moveWidth : null,//如果设置了移动盒子的宽度，则不计算缩放比例
        zoom : 5//缩放比例
    };

    var _magnifier = magnifier(magnifierConfig);

    /*magnifier的内置函数调用*/
    /*
        //设置magnifier函数的index属性
        _magnifier.setIndex(1);

        //重新载入主图,根据magnifier函数的index属性
        _magnifier.eqImg();
    */
});
</script>