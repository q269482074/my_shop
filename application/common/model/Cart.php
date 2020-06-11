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
	
	public function cartLst()
	{
		//取出会员已加入购物车的商品
		if(session('memberId'))
		{
			$info=db('cart')
			->where(['member_id'=>session('memberId')])
			->select();
			foreach($info as $k => $v)
			{
				$attr[] = [
					'goods_number'	=> $v['goods_number'],
					'goods_id'		=> $v['goods_id'],
					'id'			=> $v['id']
				];
				//取出属性类型名称和属性值的名称
				$attr[$k]['attr_value_id'] = db('goodsattr')->alias('a')->field('a.attr_value,b.attr_name')
				->join('attribute b','b.id=a.attr_id','left')
				->where([
					['a.id','IN',$v['attr_value_id']],
				])->select();
				//取出商品的名称
				$attr[$k]['name'] = db('goods')->field('name')->where(['id'=>$v['goods_id']])->find();
				//取出商品的价格
				$attr[$k]['goods_price'] = db('goods')->field('goods_price')->where(['id'=>$v['goods_id']])->find();
				//取出商品的图片
				$attr[$k]['img_url'] = db('goods')->field('img_url')->where(['id'=>$v['goods_id']])->find();
			}
		}
		return isset($attr) ? $attr : false;
	}
}


















