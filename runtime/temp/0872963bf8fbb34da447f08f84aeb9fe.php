<?php /*a:1:{s:80:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\index\view\order\order_info.html";i:1588419653;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/index/layui/css/layui.css">
    <link rel="stylesheet" href="/static/index/css/order_info.css">
    <script src="/static/index/js/jquery-3.3.1.min.js"></script>
    <script src="/static/index/layui/layui.js"></script>
    <script src="/static/index/js/bootstrap.min.js"></script>
    <script src="/static/index/js/index.js"></script>
    <title>订单页</title>
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

    <!-- log层start -->
    <div class="log">
        <div class="log-left">
            商城LOG
        </div>
        <div class="log-right">
            <ul>
                <li class="cart1">1.我的购物车</li>
                <li class="cart2">2.填写核对订单信息</li>
                <li class="cart3">3.成功提交订单</li>
            </ul>
        </div>
    </div>
    <!-- log层end -->

    <!-- 订单详情start -->
    <div class="ord-info">
        <div class="ord-info-heder">
            填写并核对订单信息
        </div>
        <div class="ord-info-content">
            <div class="address">
                <h3>收货人信息  <a href="javascript:;" style="color: rgba(0, 0, 255, 0.5);">[修改]</a></h3>
                <div class="addr-info">
                    <p>XXX  13557747194</p>
                    <P>广西壮族自治区 梧州市 市辖区 广西省梧州市南堤路XX号XX楼XX房</P>
                </div>
            </div>
            <div class="goods-list">
                <h3>
                    商品清单
                </h3>
                <table class="table table-bordered">
                    <tr class="shop-info">
                        <td style="width: 50%;">商品名称</td>
                        <td style="width: 20%;">规格</td>
                        <td style="width: 10%;">价格</td>
                        <td style="width: 10%;">数量</td>
                        <td style="width: 10%;">小计</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr class="shop-info">
                        <td colspan="6" style="text-align: right;">
                            应付总额： 
                            <strong> <span style="color:red;">￥87664</span></strong>
                            <a href="#"><button type="button" class="layui-btn layui-btn-danger">提交订单</button></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- 订单详情end -->

    <!-- 版权区域start -->
    <footer>
        <div class="footer">
            底部版权栏
        </div>
    </footer>
    <!-- 版权区域end -->
</body>
</html>