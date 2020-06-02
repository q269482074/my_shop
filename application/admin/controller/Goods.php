<?php
namespace app\admin\controller;
use think\Controller;

class Goods extends Controller
{
    //获取商品的属性，商品添加和修改用
	public function ajaxGetAttr()
	{
		$type_id = input('type_id');
		$attribute = model('attribute')->where(['type_id'=>$type_id])->select();
		echo json_encode($attribute);
    }
    


    public function goodsList()
    {
        $data = [
			'cate_id'	=> input('get.cate_id'),
			'brand_id'	=> input('get.brand_id'),
			'goods_name'	=> input('get.goods_name'),
			'fp'	=> input('get.min_price'),
			'tp'	=> input('get.max_price'),
			'is_onsale'	=> input('get.is_onsale'),
            'odby'	=> input('get.odby'),
            'is_sale' => input('get.is_sale') ? input('get.is_sale') : '0',
        ];
        $page_limit = 5;
        $goods = model('goods')->search($data,$page_limit);
		$page = $goods->currentPage(); //初始页
        $count = $goods->total();//总记录数
        $cat = model('category')->getTree('category');
        $brand = model('brand')->field('id,brand_name')->select();

        $this->assign([
            'goods' => $goods,
            'page_limit' => $page_limit,
            'page' => $page,
            'count' => $count,
            'cat' => $cat,
            'data' => $data,
            'brand' => $brand
        ]);
        return $this->fetch();
    }

    public function addGoods()
    {
        if(request()->isAjax())
        {
            $data = [
                'name' => input('post.name'),
                'cate_id' => input('post.cate_id'),
                'brand_id' => input('post.brand_id'),
                'img_url' => input('post.goods_log'),
                'price' => input('post.price'),
                'goods_price' => input('post.goods_price'),
                'sort' => input('post.sort'),
                'desc' => input('post.goods_desc'),
                'is_sale' => input('post.is_sale') ? input('post.is_sale') : '0',
                'type_id' 		=> input('post.type_id'),
				'attr_name' 	=> input('post.attr_value'),
            ];
            $ret = model('goods')->add($data);
            if($ret == 1)
            {
                $this->success('添加成功!','admin/goods/goodsList');
            }else{
                $this->error($ret);
            }
        }
        $cat = model('category')->getTree('category');
        $brand = model('brand')->field('id,brand_name')->select();
        $type = model('type')->select();

        $this->assign([
            'cat' => $cat,
            'brand' => $brand,
            'type' => $type,
        ]);
        return $this->fetch();
    }

    public function editGoods()
    {
        if(request()->isAjax())
        {
            $data = [
                'id' => input('post.id'),
                'name' => input('post.name'),
                'cate_id' => input('post.cate_id'),
                'brand_id' => input('post.brand_id'),
                'img_url' => input('post.goods_log'),
                'price' => input('post.price'),
                'goods_price' => input('post.goods_price'),
                'sort' => input('post.sort'),
                'desc' => input('post.goods_desc'),
                'is_sale' => input('post.is_sale') ? input('post.is_sale') : '0',
                'type_id' 		=> input('post.type_id'),
				'attr_value' 	=> input('post.attr_value'),
            ];
            // dump($data);die;
            $ret = model('goods')->edit($data);
            if($ret == 1)
            {
                $this->success('修改成功','admin/goods/goodsList');
            }else{
                $this->error($ret);
            }
        }
        $id = input('id');
        //品牌数据
		$brand = model('brand')->field('id,brand_name')->select();
		//分类数据
		$cate = model('category')->getTree('category');
		//商品信息
		$info = model('goods')->where(['id'=>$id])->find();
		//商品类型
		$type = model('type')->select();
		//商品属性
		// $attr = model('goodsattr')->where(['goods_id'=>$id])->select();
		$attr = db('attribute')->alias('a')->join('goodsattr b','b.attr_id=a.id AND b.goods_id='.$id.'','LEFT')->where(['a.type_id'=>$info['type_id']])->select();
        
        $this->assign([
            'attr'			=> $attr,
			'type'			=> $type,
			'brand'			=> $brand,
			'cate'			=> $cate,
			'info'			=> $info,
        ]);
        return $this->fetch();
    }

    public function del()
    {
        $id = input('post.id');
        $info = model('goods')->with('goodsattr')->where(['id'=>$id])->find();
		$ret = $info->together('goodsattr')->delete();
		if($ret)
		{
			$this->success('删除成功!','admin/goods/goodsList');
		}else
		{
			return '删除失败!';
		}
    }


    //上传的图片
	public function upload_img()
	{
		$file = request()->file('file');
		$info = $file->move('../public/uploads');
		if($info)
		{
			//获取图片名称
			$img_name = $info->getSaveName();
			//拼出图片的路径
			$img = '/uploads/'.$img_name;
			exit(json_encode(['code'=>1,'msg'=>$img]));
		}else
		{
			echo $file->error();
		}
	}
}






















