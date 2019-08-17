<?php
namespace app\admin\controller;
use think\Controller;

class Goods extends Controller
{
    public function goodsList()
    {
        $page_limit = 5;
        $goods = model('goods')->search($page_limit);
		$page = $goods->currentPage(); //初始页
		$count = $goods->total();//总记录数

        $this->assign([
            'goods' => $goods,
            'page_limit' => $page_limit,
            'page' => $page,
            'count' => $count,
        ]);
        return $this->fetch();
    }

    public function addGoods()
    {
        if(request()->isAjax())
        {
            $data = [
                'name' => input('post.name'),
                'type_id' => input('post.type_id'),
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
        return $this->fetch();
    }

    public function editGoods()
    {
        if(request()->isAjax())
        {
            $data = [
                'id' => input('post.id'),
                'name' => input('post.name'),
                'type_id' => input('post.type_id'),
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

        $this->assign([
            'info' => $info,
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






















