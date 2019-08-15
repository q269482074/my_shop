<?php /*a:1:{s:79:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\goods\add_goods.html";i:1565883248;}*/ ?>
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
        <div class="content">
            <div class="dropdown">
                商品分类：
                <select name="type_id" id="type_id">
                    <option value="">请选择</option>
                    <option value="">手机</option>
                    <option value="">电脑</option>
                    <option value="">冰箱</option>
                </select>
            </div>
            <div class="dropdown">
                商品品牌：
                <select name="brand_id" id="brand_id">
                    <option value="">请选择</option>
                    <option value="">手机</option>
                    <option value="">电脑</option>
                    <option value="">冰箱</option>
                </select>
            </div>
            <div>
                商品名称：<input type="text" name="name" id="name">
            </div>
        <div style="margin: 20px 0;">
            图片上传：
            <button type="button" class="layui-btn" id="test1">
                    <i class="layui-icon">&#xe67c;</i>上传图片
            </button>
            <img src="" class="img_show" id="img_show"alt="" style="width: 60px; display: none;">
            <input type="hidden" name="goods_log" />
        </div>
        <div style="margin-top: 10px;">
            原&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;价：<input type="text" name="price" id="price">
        </div>
        <div style="margin: 10px 0;">
            本店售价：<input type="text" name="goods_price" id="goods_price">
        </div>
        <div>
            是否上架：
            <input type="radio" name="is_sale" id="is_sale" value="0" checked>是
            <input type="radio" name="is_sale" id="is_sale" value="1">否
        </div>
        <div>
            排&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;序：<input type="text" name="sort" id="sort" value="100" size="3">
        </div>
        </div>
        <div class="btn-sub">
            <button type="button" class="btn btn-info submit">确定</button>
            <button type="reset" class="btn btn-success reset">重置</button>
        </div>
    </form>
</body>
</html>

<script>
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
        $('input[name=goods_log]').val(res.msg);
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
        url:"<?php echo url('admin/goods/addGoods'); ?>",
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



