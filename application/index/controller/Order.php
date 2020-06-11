<?php
namespace app\index\controller;
use think\Controller;

class Order extends Controller
{
    public function order_info()
    {

        $goods = model('cart')->cartLst();
		$this->assign([
			'goods' => $goods,
		]);
        return $this->fetch();
    }
}
















