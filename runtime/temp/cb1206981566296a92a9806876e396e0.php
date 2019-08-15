<?php /*a:1:{s:80:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\goods\goods_list.html";i:1565870781;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/admin/css/goods_list.css">
    <script src="/static/admin/js/jquery-3.3.1.min.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
    <script src="/static/admin/layui/layui.js"></script>
    <title>Document</title>
</head>
<body>
    <header class="header">
        <span>管理中心-商品列表</span>
    </header>
    <div class="search">
        <form>
            <div class="dropdown">
                主分类：
               <select name="type" id="type">
                   <option value="">请选择</option>
                   <option value="">手机</option>
                   <option value="">电脑</option>
                   <option value="">冰箱</option>
               </select>
            </div>
            <div class="dropdown">
                品&nbsp;&nbsp;&nbsp;牌：
               <select name="type" id="type">
                   <option value="">请选择</option>
                   <option value="">华为</option>
                   <option value="">苹果</option>
                   <option value="">小米</option>
               </select>
            </div>
            <div>
                商品名称： <input type="text" name="goods_name">
            </div>
            <div>
                商品价格： 从<input type="text" name="min_price" size="8">到<input type="text" name="max_price" size="8">
            </div>
            <div>
                是否上架：
                <input type="radio" name="onsale" id="onsale" value="option1" checked>
                是
                <input type="radio" name="onsale" id="onsale" value="option1">
                否
            </div>
        </form>
    </div>
    <div class="content">
        <button type="button" class="btn btn-info add_goods">添加商品</button>
        <table class="table table-bordered">
            <tr>
                <td>编号</td>
                <td>商品名称</td>
                <td>商品分类</td>
                <td>商品品牌</td>
                <td>图片</td>
                <td>价格</td>
                <td>上架</td>
                <td>添加时间</td>
                <td>推荐顺序</td>
                <td>操作</td>
            </tr>
            <tr>
                <td>1</td>
                <td>华为手机</td>
                <td>手机</td>
                <td>华为</td>
                <td>
                    <img src="/static/admin/images/55.png" alt="">
                </td>
                <td>4444</td>
                <td>是</td>
                <td>2019-08-15 13:17:20</td>
                <td>100</td>
                <td>
                    <a href="javascript:;">修改</a>
                    <a href="javascript:;">删除</a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>华为手机</td>
                <td>手机</td>
                <td>华为</td>
                <td>
                    <img src="/static/admin/images/55.png" alt="">
                </td>
                <td>4444</td>
                <td>是</td>
                <td>2019-08-15 13:17:20</td>
                <td>100</td>
                <td>
                    <a href="javascript:;">修改</a>
                    <a href="javascript:;">删除</a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>华为手机</td>
                <td>手机</td>
                <td>华为</td>
                <td>
                    <img src="/static/admin/images/55.png" alt="">
                </td>
                <td>4444</td>
                <td>是</td>
                <td>2019-08-15 13:17:20</td>
                <td>100</td>
                <td>
                    <a href="javascript:;">修改</a>
                    <a href="javascript:;">删除</a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>华为手机</td>
                <td>手机</td>
                <td>华为</td>
                <td>
                    <img src="/static/admin/images/55.png" alt="">
                </td>
                <td>4444</td>
                <td>是</td>
                <td>2019-08-15 13:17:20</td>
                <td>100</td>
                <td>
                    <a href="javascript:;">修改</a>
                    <a href="javascript:;">删除</a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>华为手机</td>
                <td>手机</td>
                <td>华为</td>
                <td>
                    <img src="/static/admin/images/55.png" alt="">
                </td>
                <td>4444</td>
                <td>是</td>
                <td>2019-08-15 13:17:20</td>
                <td>100</td>
                <td>
                    <a href="javascript:;">修改</a>
                    <a href="javascript:;">删除</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>


<script>
//添加商品
$('.add_goods').click(function(){
    layui.use(['layer'],function(){
        layer = layui.layer;
        layer.open({
            type: 2,
            title: 'layer mobile页',
            shadeClose: true,
            shade: 0.3,
            area: ['380px', '90%'],
            content: '/admin/goods/add_goods' //iframe的url
        }); 
    }); 
});
 

</script>