<?php /*a:1:{s:78:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\type\type_list.html";i:1591105698;}*/ ?>
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
        <span>管理中心-品牌列表</span>
    </header>
    <div class="search">
        <form>
            <div class="dropdown">
                类&nbsp;&nbsp;&nbsp;型：
               <select name="type" id="type">
                   <option value="">请选择</option>
               </select>
            </div>
            <div>
                类型名称： <input type="text" name="goods_name">
            </div>
        </form>
    </div>
    <div class="content">
        <button type="button" class="btn btn-info add_goods">添加品牌</button>
        <table class="table table-bordered">
            <tr>
                <td>编号</td>
                <td>品牌名称</td>
                <td>操作</td>
            </tr>
            <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($v['id']); ?></td>
                <td><?php echo htmlentities($v['type_name']); ?></td>
                <td>
                    <a href="<?php echo url('admin/attribute/attrList','',false); ?>/type_id/<?php echo htmlentities($v['id']); ?>">属性列表</a>
                    <a href="javascript:;" link="<?php echo url('admin/type/editType','',false); ?>/type_id/<?php echo htmlentities($v['id']); ?>" class="edit">修改</a>
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
            title: '添加类型',
            shadeClose: true,
            shade: 0.3,
            area: ['500px', '500px'],
            offset: '10px',
            content: '/admin/type/addType' //iframe的url
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
            title: '修改品牌',
            shadeClose: true,
            shade: 0.3,
            area: ['500px', '500px'],
            offset: '10px',
            content: url //iframe的url
        }); 
    }); 
});
 

</script>