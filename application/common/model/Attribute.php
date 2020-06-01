<?php
namespace app\common\model;
use think\Model;

class Attribute extends Model
{
	//关联商品类型表
	public function Type()
	{
		return $this->belongsTo('Type','type_id','id');
	}
	

	//添加
	public function add($data)
	{
		$validate = new \app\common\validate\Attribute();
		if(!$validate->scene('add')->check($data))
		{
			return $validate->getError();
		}

		$ret = $this->allowField(true)->save($data);
		if($ret == 1)
		{
			return 1;
		}else
		{
			return '添加失败!';
		}
	}

	//修改
	public function edit($data)
	{
		$validate = new \app\common\validate\Attribute();
		if(!$validate->scene('edit')->check($data))
		{
			return $validate->getError();
		}
		$info = $this->where(['id'=>$data['id']])->find();
		$info->attr_name = $data['attr_name'];
		$info->attr_type = $data['attr_type'];
		$info->attr_option_value = $data['attr_option_value'];
		$info->type_id = $data['type_id'];
		$ret = $info->force()->save();
		if($ret == 1)
		{
			return 1;
		}else
		{
			return '添加失败!';
		}
	}

	//搜索
	public function search($data)
	{
		$where = [];
		if($data['type'])
		{
			$where[] = ['type_id','eq',$data['type']];
		}
		if($data['attr_name'])
		{
			$where[] = ['attr_name','like','%'.$data['attr_name']."%"];
		}
		if($data['attr_type'])
		{
			$where[] = ['attr_type','eq',$data['attr_type']];
		}

		$ret = $this->with('type')->where($where)->select();

		return $ret;
	}
}