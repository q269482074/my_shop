<?php
namespace app\common\validate;
use think\Validate;

class Attribute extends Validate
{
	protected $rule = [
		'attr_name|属性名称'			=> 'require',
		'attr_type|属性类型'			=> 'require',
		'attr_option_value|属性的值' 	=> 'require',
		'type_id|类型'					=> 'require',
	];

	//应用场景
	// 添加、
	public function sceneAdd()
	{
		return $this->only(['attr_name','attr_type','attr_option_value','type_id']);
	}
	// 修改
	public function sceneEdit()
	{
		return $this->only(['attr_name','attr_type','attr_option_value','type_id']);
	}
}