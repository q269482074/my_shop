<?php /*a:1:{s:81:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\category\cat_list.html";i:1591105853;}*/ ?>
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
        <span>管理中心-分类列表</span>
    </header>
    <div class="content">
        <button type="button" class="btn btn-info add_goods">添加分类</button>
        <table class="table table-bordered">
            <tr>
                <td>分类名称</td>
                <td>操作</td>
            </tr>
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <tr>
                <td style="text-align: left;"><?php echo str_repeat('-',$v['level']*4); ?><?php echo htmlentities($v['cat_name']); ?></td>
                <td>
                    <a href="javascript:;" class="edit" link="<?php echo url('admin/category/editCat','',false); ?>/id/<?php echo htmlentities($v['id']); ?>">修改</a>
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
            title: '添加分类',
            shadeClose: true,
            shade: 0.3,
            area: ['500px', '500px'],
            offset: '10px',
            content: '/admin/category/addCat' //iframe的url
        }); 
    }); 
});

//修改
$('.edit').click(function(){
    var url = $(this).attr('link');
    layui.use(['layer'],function(){
        layer = layui.layer;
        layer.open({
            type: 2,
            title: '修改分类',
            shadeClose: true,
            shade: 0.3,
            area: ['500px', '500px'],
            offset: '10px',
            content: url //iframe的url
        }); 
    }); 
});
 

</script>