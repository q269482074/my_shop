<?php /*a:1:{s:82:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\attribute\add_attr.html";i:1591069929;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/admin/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/add_goods.css">
    <script src="/static/admin/js/jquery-3.3.1.min.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
    <script src="/static/admin/layui/layui.js"></script>
    <style>
        input[type="radio"]{
            vertical-align: middle;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <form>
        <div class="content info">
        <div>
            属性名称：<input type="text" name="attr_name" id="attr_name">
        </div>
        <div>
            属性类型：<input type="radio" name="attr_type" id="1"  checked="checked">唯一
            <input type="radio" name="attr_type" id="1">可选
        </div>
        <div>
            <div>属性可选值：</div>
            <textarea name="attr_option_value" id="attr_option_value" cols="30" rows="3" style="margin-left: 90px; margin-top: -20px;">

            </textarea>
            <span style="color: red;">*用,号来分隔多个值</span>
        </div>
        <div>
            所属类型:
            <select name="type_id" id="">
                <option value="">请选择</option>
                <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <option <?php if($v['id']==$type_id) echo 'selected="selected"' ?> value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['type_name']); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <div class="btn-sub">
            <button type="button" class="btn btn-info submit">确定</button>
            <button type="reset" class="btn btn-success reset">重置</button>
        </div>
    </form>
</body>
</html>

<script>


//添加商品
$('.submit').click(function(){
    if($('#attr_name').val().length == 0){
        alert('名称不能为空');
        return false;
    }
    
    $.ajax({
        type:"post",
        url:"<?php echo url('admin/attribute/addAttr'); ?>",
        data:$('form').serialize(),
        dattaType:"json",
        success:function(data){
            console.log(data);
            if(data.code == 1){
                layui.use('layer',function(){
                    layer = layui.layer;
                    layer.msg(data.msg,{
                        icon:6,
                        time:2000,
                    },function(){
                        parent.window.location.href = data.url;
                    });
                });
            }else{
                layui.use('layer',function(){
                    layer = layui.layer;
                    layer.open({
                        titme:'系统信息',
                        content:data.msg,
                        icon:5,
                        anime:6
                    });
                });
            }
        }
    });
    return false;
});
</script>



