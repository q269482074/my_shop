<?php /*a:1:{s:83:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\attribute\attr_list.html";i:1591021438;}*/ ?>
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
                属&nbsp;&nbsp;&nbsp;性：
               <select name="type" id="type">
                   <option value="">请选择</option>
                   <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                   <option <?php if($v['id']==input('type'))  echo 'selected="selected"'; ?> value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['type_name']); ?></option>
                   <?php endforeach; endif; else: echo "" ;endif; ?>
               </select>
            </div>
            <div>
                属性名称： <input type="text" name="goods_name">
            </div>
            <input type="submit" value=" 搜索 " class="btn btn-primary" />
        </form>
    </div>
    <div class="content">
        <button type="button" class="btn btn-info add_goods" link="<?php echo url('admin/attribute/addAttr','',false); ?>/type_id/<?php echo htmlentities($type_id); ?>">添加属性</button>
        <table class="table table-bordered">
            <tr>
                <td>编号</td>
                <td>类型</td>
                <td>属性类型</td>
                <td>属性名称</td>
                <td>属性值</td>
                <td>操作</td>
            </tr>
            <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <tr class="tron">
                <td align="center"><?php echo htmlentities($v['id']); ?></td>
                <td align="center"><?php echo htmlentities($v['type']['type_name']); ?></td>
                <td align="center"><?php echo $v['attr_type']==1 ? '唯一' : '可选'; ?></td>
                <td align="center"><?php echo htmlentities($v['attr_name']); ?></td>
                <td align="center"><?php echo htmlentities($v['attr_option_value']); ?></td>
                <td align="center">
                    <a href="javascript:;" class="edit" link="<?php echo url('admin/attribute/editAttr','',false); ?>/type_id/<?php echo htmlentities($type_id); ?>/id/<?php echo htmlentities($v['id']); ?>" style="color: blue;">编辑</a>
                    <a href="#" delId="" class="delete" style="color: blue;">删除</a>
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
    var url = $(this).attr('link');
    layui.use(['layer'],function(){
        layer = layui.layer;
        layer.open({
            type: 2,
            title: '添加类型',
            shadeClose: true,
            shade: 0.3,
            area: ['500px', '500px'],
            offset: '10px',
            content: url //iframe的url
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