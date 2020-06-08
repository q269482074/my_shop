<?php
namespace app\common\model;
use think\Model;

class Cart extends Model
{
    public function add($data)
    {
        $data['attr_value_id'] = implode(',',$data['attr_value_id']);
		if($data['member_id'])
		{	
			$has = db('cart')->field('id')->where([
				['attr_value_id','=',$data['attr_value_id']],
				['member_id','=',$data['member_id']],
				['goods_id','=',$data['goods_id']]
			])->find();
			if($has)
			{
				$ret = db('cart')->where([
					['id','=',$has['id']],
				])->setInc('goods_number',$data['goods_number']);
			}else
			{
				$ret = $this->allowfield(true)->save($data);
			}
		}else
		{
			$ret = cookie('cart') ? cookie('cart') : [];
			$k = $data['goods_id'].'-'.$data['attr_value_id'];
			if(isset($ret[$k]))
			{
				$ret[$k] += $data['goods_number'];
			}else
			{
				$ret[$k] = $data['goods_number'];
			}
			cookie('cart',$ret,3600*24*30);
		}

		if($ret)
		{
			return 1;
		}else
		{
			return '添加购物车失败!';
		}
    }
}


















