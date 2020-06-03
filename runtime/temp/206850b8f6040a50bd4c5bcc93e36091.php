<?php /*a:1:{s:79:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\goods\add_goods.html";i:1591151583;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/admin/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/add_goods.css">
    <script src="/static/admin/js/jquery-3.3.1.min.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
    <script src="/static/admin/layui/layui.js"></script>
    <title>Document</title>
    <style>
        #attr_list > li{
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="on">商品信息</div>
        <div>商品描述</div>
        <div>商品属性</div>
    </div>
    <form>
        <div class="content info">
            <div class="dropdown">
                商品分类：
                <select name="cate_id" id="cate_id">
                    <option value="">请选择</option>
                    <?php if(is_array($cat) || $cat instanceof \think\Collection || $cat instanceof \think\Paginator): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo htmlentities($v['id']); ?>"><?php echo str_repeat('-',$v['level']*4); ?><?php echo htmlentities($v['cate_name']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="dropdown">
                商品品牌：
                <select name="brand_id" id="brand_id">
                    <option value="">请选择</option>
                    <?php if(is_array($brand) || $brand instanceof \think\Collection || $brand instanceof \think\Paginator): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['brand_name']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
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
        <div class="content desc" style="display: none;">
            <textarea name="goods_desc" id="goods_desc"></textarea>
        </div>
        <div class="content attr" style="display: none;">
            <div>
                商品种类：
                <select name="type_id" id="">
                    <option value="">请选择</option>
                    <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['type_name']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div>
                <ul id="attr_list" style="padding: 10px;">
                    <!-- <li>
                        <a href="javascript:;" onclick="newLi(this)">[+]</a>颜色：
                        <select name="attr_value" id="">
                            <option value="">请选择</option>
                            <option value="1">黄色</option>
                            <option value="2">蓝色</option>
                        </select>
                    </li> -->
                    <!-- <li>
                        出产日期：
                        <input type="text" name="attr_value">
                    </li> -->
                </ul>
            </div>
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


//点击[+]复制
function newLi(a)
{
    var li = $(a).parent();
    if($(a).text() == '[+]'){
        var newli = li.clone();
        newli.find('a').text('[-]');
        li.after(newli);
    }else{
        li.remove();
    }
}


//切换商品种类弹出对应的属性
$('select[name=type_id]').change(function(){
    var type_id = $(this).val();
    $.ajax({
        type:"get",
        url:"<?php echo url('admin/goods/ajaxGetAttr','',false); ?>/type_id/"+type_id,
        dataType:"json",
        success:function(data)
        {
            var li = "";
            $(data).each(function(k,v)
            {
                li += "<li>";
                if(v.attr_type == 2)
                {
                    li += '<a href="javascript:;" onclick="newLi(this)">[+]</a>';
                    li += v.attr_name+'：';
                }
                if(v.attr_type == 2)
                {
                    //把属性字符串用，来切割成数组
                    var _attr = v.attr_option_value.split(',');
                    li += '<select name="attr_value['+v.id+'][]">';
                    li += '<option value="">请选择</option>';
                    for(var i=0; i<_attr.length; i++)
                    {
                        li += '<option value="'+_attr[i]+'">'+_attr[i];
                        li += '</option>';
                    }
                    li += '</select>'
                }else
                {
                    li += v.attr_name+'：<input name="attr_value['+v.id+'][]">';
                }
                li += "</li>";
            });
            $('#attr_list').html(li);
        }
    });
});





</script>



