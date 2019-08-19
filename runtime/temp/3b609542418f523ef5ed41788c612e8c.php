<?php /*a:1:{s:79:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\brand\add_brand.html";i:1566201176;}*/ ?>
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
        <div class="content info">
        <div>
            品牌名称：<input type="text" name="brand_name" id="brand_name">
        </div>
        <div style="margin: 20px 0;">
            图片上传：
            <button type="button" class="layui-btn" id="test1">
                    <i class="layui-icon">&#xe67c;</i>上传图片
            </button>
            <img src="" class="img_show" id="img_show"alt="" style="width: 60px; display: none;">
            <input type="hidden" name="brand_log" />
        </div>
        <div class="btn-sub">
            <button type="button" class="btn btn-info submit">确定</button>
            <button type="reset" class="btn btn-success reset">重置</button>
        </div>
    </form>
</body>
</html>

<script>
//上传图片
layui.use(['layer','upload'],function(){
    upload = layui.upload;
    layer = layui.layer;
    //执行实例
    var uploadInst = upload.render({
    elem: '#test1' //绑定元素
    ,url: '/admin/goods/upload_img' //上传接口
    ,size:'2048'
    ,done: function(res){
        //上传完毕回调
        $('#img_show').attr('src',res.msg);
        $('#img_show').css('display','');
        $('input[name=brand_log]').val(res.msg);
    }
    ,error: function(){
        //请求异常回调
    }
    });
});


//添加商品
$('.submit').click(function(){
    $.ajax({
        type:"post",
        url:"<?php echo url('admin/brand/addBrand'); ?>",
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



