<?php /*a:1:{s:80:"E:\phpStudy\PHPTutorial\WWW\my_shop\application\admin\view\goods\goods_list.html";i:1565968005;}*/ ?>
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
    <script src="/static/admin/layui/layui.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header class="header">
        <span>管理中心-商品列表</span>
    </header>
    <div class="search">
        <form>
            <div class="dropdown">
                主分类：
               <select name="type" id="type">
                   <option value="">请选择</option>
                   <option value="">手机</option>
                   <option value="">电脑</option>
                   <option value="">冰箱</option>
               </select>
            </div>
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
                商品名称： <input type="text" name="goods_name">
            </div>
            <div>
                商品价格： 从<input type="text" name="min_price" size="8">到<input type="text" name="max_price" size="8">
            </div>
            <div>
                是否上架：
                <input type="radio" name="onsale" id="onsale" value="option1" checked>
                是
                <input type="radio" name="onsale" id="onsale" value="option1">
                否
            </div>
        </form>
    </div>
    <div class="content">
        <button type="button" class="btn btn-info add_goods">添加商品</button>
        <table class="table table-bordered">
            <tr>
                <td>编号</td>
                <td>商品名称</td>
                <td>商品分类</td>
                <td>商品品牌</td>
                <td>图片</td>
                <td>价格</td>
                <td>上架</td>
                <td>添加时间</td>
                <td>推荐顺序</td>
                <td>操作</td>
            </tr>
            <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($v['id']); ?></td>
                <td><?php echo htmlentities($v['name']); ?></td>
                <td>手机</td>
                <td>华为</td>
                <td>
                    <img src="<?php echo htmlentities($v['img_url']); ?>" alt="">
                </td>
                <td><?php echo htmlentities($v['goods_price']); ?></td>
                <td>是</td>
                <td><?php echo date('Y-m-d H:i:s',$v['create_time']); ?></td>
                <td><?php echo htmlentities($v['sort']); ?></td>
                <td>
                    <a href="javascript:;" link="<?php echo url('admin/goods/editGoods','',false); ?>/id/<?php echo htmlentities($v['id']); ?>" class="edit">修改</a>
                    <a href="javascript:;">删除</a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <div id="page">
            
        </div>
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
            title: '添加商品',
            shadeClose: true,
            shade: 0.3,
            area: ['500px', '500px'],
            offset: '10px',
            content: '/admin/goods/addGoods' //iframe的url
        }); 
    }); 
});

//修改商品
$('.edit').click(function(){
    var url = $(this).attr('link');
    layui.use(['layer'],function(){
        layer = layui.layer;
        layer.open({
            type: 2,
            title: '修改商品',
            shadeClose: true,
            shade: 0.3,
            area: ['500px', '500px'],
            offset: '10px',
            content: url //iframe的url
        }); 
    }); 
});
 

//分页
layui.use(['layer','laydate','laypage'],function(){
    layer = layui.layer;
    laydate = layui.laydate;
    laypage = layui.laypage;
  
    //执行一个laydate实例
    laydate.render({
        elem: '#fa' //指定元素
        ,type: 'datetime'
    });
    laydate.render({
        elem: '#ta' //指定元素
        ,type: 'datetime'
    });

    //分页
    laypage.render({
    elem: 'page' //注意，这里的 test1 是 ID，不用加 # 号
    ,count:<?php echo htmlentities($count); ?>//数据总数，从服务端得到
    ,limit:<?php echo htmlentities($page_limit); ?>//每页多少条和记录
    ,curr:<?php echo htmlentities($page); ?>//初始页,一般为第一页
    ,groups:3
    ,first:'首页'
    ,last:'尾页'
    ,layout:['first','prev', 'page', 'next','last']
    ,theme:'#4E4EE4'
    ,jump: function(obj, first){
        //首次不执行
        if(!first){
            search(obj.curr);
        }
      }
    });
});
//网址加上分页参数
function search(curr)
{
    var url = '/admin/goods/goodsList?page='+curr;
    var goods_name = $('input[name=goods_name]').val();
    var cate_id = $('select[name=cate_id] option:selected').val();
    var brand_id = $('select[name=brand_id] option:selected').val();
    var fp = $('input[name=fp]').val();
    var tp = $('input[name=tp]').val();
    var fa = $('input[name=fa]').val();
    var ta = $('input[name=ta]').val();
    var odby = $('input[name=odby]:checked').val();
    var is_onsale = $('input[name=is_onsale]:checked').val();
    if(goods_name)
    {
        url += '&goods_name='+goods_name;
    }
    if(cate_id)
    {
        url += '&cate_id='+cate_id;
    }
    if(brand_id)
    {
        url += '&brand_id='+brand_id;
    }
    if(fp)
    {
        url += '&fp='+fp;
    }
    if(tp)
    {
        url += '&tp='+tp;
    }
    if(fa)
    {
        url += '&fa='+fa;
    }
    if(ta)
    {
        url += '&ta='+ta;
    }
    if(odby)
    {
        url += '&odby='+odby;
    }
    if(is_onsale)
    {
        url += '&is_onsale='+is_onsale;
    }
    location.href = url;
}

</script>