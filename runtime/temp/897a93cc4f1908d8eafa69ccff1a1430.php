<?php /*a:1:{s:78:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\type\edit_type.html";i:1591022553;}*/ ?>
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
    <title>Document</title>
</head>
<body>
    <form>
        <input type="hidden" name="id" value="<?php echo htmlentities($info['id']); ?>">
        <div class="content info">
        <div>
            类型名称：<input type="text" name="type_name" id="type_name" value="<?php echo htmlentities($info['type_name']); ?>">
        </div>
        <div class="btn-sub">
            <button type="button" class="btn btn-info submit">确定</button>
            <button type="reset" class="btn btn-success reset">重置</button>
        </div>
    </form>
</body>
</html>

<script>

//修改
$('.submit').click(function(){
    $.ajax({
        type:"post",
        url:"<?php echo url('admin/type/editType'); ?>",
        data:$('form').serialize(),
        dattaType:"json",
        success:function(data){
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



