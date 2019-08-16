<?php /*a:1:{s:80:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\brand\brand_list.html";i:1565953035;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/admin/css/goods_list.css">
    <link rel="stylesheet" href="/static/admin/layui/css/layui.css">
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
                品&nbsp;&nbsp;&nbsp;牌：
               <select name="type" id="type">
                   <option value="">请选择</option>
                   <option value="">华为</option>
                   <option value="">苹果</option>
                   <option value="">小米</option>
               </select>
            </div>
            <div>
                品牌名称： <input type="text" name="goods_name">
            </div>
        </form>
    </div>
    <div class="content">
        <button type="button" class="btn btn-info add_goods">添加品牌</button>
        <table class="table table-bordered">
            <tr>
                <td>编号</td>
                <td>品牌名称</td>
                <td>品牌图片</td>
                <td>操作</td>
            </tr>
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($v['id']); ?></td>
                <td><?php echo htmlentities($v['brand_name']); ?></td>
                <td>
                    <img src="<?php echo htmlentities($v['brand_log']); ?>" alt="">
                </td>
                <td>
                    <a href="javascript:;">修改</a>
                    <a href="javascript:;">删除</a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
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
            title: '添加品牌',
            shadeClose: true,
            shade: 0.3,
            area: ['500px', '500px'],
            offset: '10px',
            content: '/admin/brand/addBrand' //iframe的url
        }); 
    }); 
});
 

</script>