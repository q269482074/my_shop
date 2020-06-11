<?php
namespace app\index\controller;
use think\Controller;

class Cart extends Controller
{
    //购物车列表
    public function lst()
    {
		if(!session('memberId'))
		{
			header('Location:/index/member/login');
			exit;
		}

		$goods = model('cart')->cartLst();
		$this->assign([
			'goods' => $goods,
		]);
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
	
	public function del()
	{
		$id = input('id');
		$info = model('cart')->where(['id'=>$id])->delete();
		if($info)
		{
			$this->success('','index/cart/lst');
		}
	}
}





