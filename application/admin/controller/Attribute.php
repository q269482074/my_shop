<?php
namespace app\admin\controller;
use think\Controller;


class Attribute extends Controller
{
    public function attrList()
    {
        $type_id = input('type_id');
        $data = [
			'attr_name'		=> input('attr_name'),
			'attr_type'		=> input('attr_type'),
			'type'		=> input('type'),
		];
		$info = model('attribute')->search($data);

		//取出商品类型
        $type = db('type')->select();
		$this->assign([
			'type'			=> $type,
			'info'			=> $info,
		]);
        $this->assign([
            'type_id' => $type_id,
        ]);
        return $this->fetch();
    }

    public function addAttr()
    {
        $type_id = input('type_id');
		if(request()->isAjax())
		{
			$data = [
				'attr_name'		=> input('post.attr_name'),
				'attr_type'		=> input('post.attr_type'),
				'attr_option_value'		=> trim(str_replace('，',',',input('post.attr_option_value'))),
				'type_id'		=> input('post.type_id'),
			];
			$ret = model('attribute')->add($data);
			if($ret == 1)
			{
				$this->success('添加成功!','admin/attribute/attrList?type_id='.$type_id);
			}else
			{
				return $this->error($ret);
			}
        }
        // dump($type_id);
		//获取类型
		$type = db('type')->select();
		$this->assign([
			'type_id'		=> $type_id,
			'type'			=> $type,
		]);
		return $this->fetch();
    }

    public function editAttr()
    {
        $type_id = input('type_id');
		$id = input('id');
		if(request()->isAjax())
		{
			$data = [
				'id'			=> input('post.id'),
				'attr_name'		=> input('post.attr_name'),
				'attr_type'		=> input('post.attr_type'),
				'attr_option_value'		=> trim(str_replace('，',',',input('post.attr_option_value')),','),
				'type_id'		=> input('post.type_id'),
            ];
			$ret = model('attribute')->edit($data);
			if($ret == 1)
			{
				$this->success('修改成功!','admin/attribute/attrList?type_id='.$type_id);
			}else
			{
				return $this->error($ret);
			}
        }
		//获取类型
		$type = db('type')->select();
		//获取属性
		$info = model('attribute')->with('type')->where(['id'=>$id])->find();
		$this->assign([
			'info'			=> $info,
			'type_id'		=> $type_id,
			'type'			=> $type,
		]);
		return $this->fetch();
    }
}













