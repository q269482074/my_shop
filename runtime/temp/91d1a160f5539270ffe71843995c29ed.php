<?php /*a:1:{s:72:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\index\view\cart\lst.html";i:1588419535;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/index/layui/css/layui.css">
    <link rel="stylesheet" href="/static/index/css/cart.css">
    <script src="/static/index/js/jquery-3.3.1.min.js"></script>
    <script src="/static/index/layui/layui.js"></script>
    <script src="/static/index/js/bootstrap.min.js"></script>
    <script src="/static/index/js/index.js"></script>
    <title>购物车</title>
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

    <!-- 购物车列表 -->
    <div class="cart-lst">
        <div class="cart-log">
            <i class="layui-icon layui-icon-cart-simple" style="font-size: 50px;">&nbsp;&nbsp;<span style="font-size: 30px;">我的购物车</span></i>
        </div>
        <table class="table table-bordered">
            <tr class="shop-info">
                <td style="width: 45%;">商品名称</td>
                <td style="width: 15%;">商品信息</td>
                <td style="width: 10%;">单价</td>
                <td style="width: 10%;">数量</td> 
                <td style="width: 10%;">小计</td>
                <td style="width: 10%;">操作</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr class="shop-info">
                <td colspan="6" style="text-align: right;">
                    购物金额总计： 
                    <strong> <span style="color:red;">￥87664</span></strong>
                </td>
            </tr>
        </table>
        <a href="<?php echo url('index/order/order_info','',false); ?>"><button type="button" class="layui-btn layui-btn-danger">结算</button></a>
    </div>


    <!-- 版权区域start -->
    <footer>
        <div class="footer">
            底部版权栏
        </div>
    </footer>
    <!-- 版权区域end -->

</body>
</html>