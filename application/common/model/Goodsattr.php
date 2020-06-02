<?php
namespace app\common\model;
use think\Model;

class Goodsattr extends Model
{
	//关联属性表
	public function Attribute()
	{
		return $this->belongsTo('Attribute','attr_id','id');
	}
	public function add($data)
	{
		$this->allowField(true)->saveAll($data);
	}

	//获取商品的属性
	public function getGoodsAttr($goodsId)
	{
		$attr = db('goodsattr')->field('DISTINCT a.attr_id,a.attr_value,b.attr_name')->alias('a')
		->join('attribute b','b.id=a.attr_id')
		->where([
			['a.goods_id','in',$goodsId],
		])->select();
		$ret = [];
		//按照attr_name 区分出属性
		foreach($attr as $k => $v)
		{
			$ret[$v['attr_name']][] = $v;
		}
		return $ret;
	}
}