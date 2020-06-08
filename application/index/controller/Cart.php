<?php
namespace app\index\controller;
use think\Controller;

class Cart extends Controller
{
    //购物车列表
    public function lst()
    {
        return $this->fetch();
    }

    public function add()
    {
        if(request()->isAjax())
		{
			$data = [
				'attr_value_id'		=> input('post.attr_valuie_id'),
				'goods_number'		=> input('post.amount'),
				'goods_id'			=> input('post.goods_id'),
				'member_id'			=> '1',//session('memberId')
			];
			// session('shang_url',url('index/index/goods?id='.$data['goods_id']));
			$ret = model('cart')->add($data);
			if($ret == 1)
			{
				$this->success('加入购物车成功!','index/cart/lst');
			}else
			{
				return $this->error($ret);
			}
		}
    }
}





