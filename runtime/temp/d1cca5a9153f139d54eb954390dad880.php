<?php /*a:1:{s:80:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\goods\edit_goods.html";i:1565969178;}*/ ?>
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
    <div class="header">
        <div class="on">商品信息</div>
        <div>商品描述</div>
        <div>商品属性</div>
    </div>
    <form>
        <input type="hidden" name="id" value="<?php echo htmlentities($info['id']); ?>">
        <div class="content info">
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
                商品名称：<input type="text" name="name" id="name" value="<?php echo htmlentities($info['name']); ?>">
            </div>
        <div style="margin: 20px 0;">
            图片上传：
            <button type="button" class="layui-btn" id="test1">
                    <i class="layui-icon">&#xe67c;</i>上传图片
            </button>
            <img src="<?php echo htmlentities($info['img_url']); ?>" class="img_show" id="img_show"alt="" style="width: 60px;">
            <input type="hidden" name="goods_log" value="<?php echo htmlentities($info['img_url']); ?>" />
        </div>
        <div style="margin-top: 10px;">
            原&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;价：<input type="text" name="price" id="price" value="<?php echo htmlentities($info['price']); ?>">
        </div>
        <div style="margin: 10px 0;">
            本店售价：<input type="text" name="goods_price" id="goods_price" value="<?php echo htmlentities($info['goods_price']); ?>">
        </div>
        <div>
            是否上架：
            <input type="radio" name="is_sale" id="is_sale" value="0" <?php echo $info['is_sale']==0 ? 'checked'  :  ''; ?>>是
            <input type="radio" name="is_sale" id="is_sale" value="1" <?php echo $info['is_sale']==1 ? 'checked'  :  ''; ?>>否
        </div>
        <div>
            排&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;序：<input type="text" name="sort" id="sort" value="<?php echo htmlentities($info['sort']); ?>" size="3">
        </div>
        </div>
        <div class="content desc" style="display: none;">
            <textarea name="goods_desc" id="goods_desc"><?php echo htmlentities($info['desc']); ?></textarea>
        </div>
        <div class="btn-sub">
            <button type="button" class="btn btn-info submit">确定</button>
            <button type="reset" class="btn btn-success reset">重置</button>
        </div>
    </form>
</body>
</html>
<script src="/static/utf8-php/ueditor.config.js"></script>
<script src="/static/utf8-php/ueditor.all.min.js"></script>
<script src="/static/utf8-php/lang/zh-cn/zh-cn.js"></script>
<script>
//百度编辑器
var ue = UE.getEditor('goods_desc');

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
        $('input[name=goods_log]').val(res.msg);
    }
    ,error: function(){
        //请求异常回调
    }
    });
});


//切换选项卡
$('.header div').click(function(){
    var i = $(this).index();
    $('.header div').removeClass('on');
    $('.content').hide();
    $(this).addClass('on');
    $('.content').eq(i).show();
});


//修改商品
$('.submit').click(function(){
    if($('input[name=name]').val().length === 0){
        layer.open({
            title: '系统消息'
            ,content: '商品名称不能为空',
            icon:5,
            anime:6
        });     
        return false;
    }
    if($('input[name=goods_log]').val().length === 0){
        layer.open({
            title: '系统消息'
            ,content: '商品图片不能为空',
            icon:5,
            anime:6
        });     
        return false;
    }
    if($('input[name=price]').val().length === 0){
        layer.open({
            title: '系统消息'
            ,content: '商品价格不能为空',
            icon:5,
            anime:6
        });     
        return false;
    }
    if($('input[name=goods_price]').val().length === 0){
        layer.open({
            title: '系统消息'
            ,content: '本店价格不能为空',
            icon:5,
            anime:6
        });     
        return false;
    }
    if($('input[name=sort]').val().length === 0){
        layer.open({
            title: '系统消息'
            ,content: '排序不能为空',
            icon:5,
            anime:6
        });     
        return false;
    }
    $.ajax({
        type:"post",
        url:"<?php echo url('admin/goods/editGoods'); ?>",
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


