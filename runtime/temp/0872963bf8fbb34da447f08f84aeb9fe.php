<?php /*a:1:{s:80:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\index\view\order\order_info.html";i:1591865937;}*/ ?>
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

    <!-- log层start -->
    <div class="log">
        <div class="log-left">
            <a href="/"><img src="/static/index/images/loginlogo.png" alt=""></a>
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
                <td style="width: 45%;">商品名称</td>
                <td style="width: 15%;">商品信息</td>
                <td style="width: 10%;">单价</td>
                <td style="width: 10%;">数量</td> 
                <td style="width: 10%;">小计</td>
                <td style="width: 10%;">操作</td>
            </tr>
            <?php $price = 0; if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <tr>
                <td>
                    <div style="float: left;">
                        <a href="<?php echo url('index/index/goods','',false); ?>/id/<?php echo htmlentities($v['goods_id']); ?>" target="_blank">
                            <img src="<?php echo htmlentities($v['img_url']['img_url']); ?>" alt="" style="width:80px;height:80px;">
                        </a>
                    </div>
                    <div style="word-wrap: break-word; word-break: break-all; overflow: hidden; margin-top: 15px; margin-left: 100px;">
                        <a href="<?php echo url('index/index/goods','',false); ?>/id/<?php echo htmlentities($v['goods_id']); ?>" target="_blank">
                            <?php echo htmlentities($v['name']['name']); ?>
                        </a>
                    </div>
                </td>
                <td style="vertical-align: middle;">
                    <?php if(is_array($v['attr_value_id']) || $v['attr_value_id'] instanceof \think\Collection || $v['attr_value_id'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['attr_value_id'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                    <p><?php echo htmlentities($v1['attr_name']); ?>：<?php echo htmlentities($v1['attr_value']); ?></p>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </td>
                <td style="vertical-align: middle;">
                    ￥<span><?php echo htmlentities($v['goods_price']['goods_price']); ?></span>
                </td>
                <td style="vertical-align: middle;">
                    <?php echo htmlentities($v['goods_number']); ?>
                </td>
                <td style="vertical-align: middle;">
                    ￥<span><?php $xj = $v['goods_price']['goods_price']*$v['goods_number']; $price+=$xj; echo $xj; ?></span>
                </td>
                <td style="vertical-align: middle;">
                    <a <?php if(isset($v['id'])) echo 'delId='.$v['id']; ?> class="del" href="javascript:void(0)">删除</a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <tr class="shop-info">
                <td colspan="6" style="text-align: right;">
                    应付总额： 
                    <strong> <span style="color:red;">￥87664</span></strong>
                    <a href="javascript:;"><button type="button" class="layui-btn layui-btn-danger">提交订单</button></a>
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