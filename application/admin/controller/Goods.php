<?php
namespace app\admin\controller;
use think\Controller;

class Goods extends Controller
{
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

        $this->assign([
            'cat' => $cat,
            'brand' => $brand,
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
            ];
            $ret = model('goods')->edit($data);
            if($ret == 1)
            {
                $this->success('修改成功','admin/goods/goodsList');
            }else{
                $this->error($ret);
            }
        }
        $id = input('id');
        $info = db('goods')->where(['id'=>$id])->find();
        $cat = model('category')->getTree('category');
        $brand = model('brand')->field('id,brand_name')->select();
        $this->assign([
            'info' => $info,
            'brand' => $brand,
            'cat' => $cat,
        ]);
        return $this->fetch();
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






















