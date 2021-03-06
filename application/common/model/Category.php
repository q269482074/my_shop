<?php
namespace app\common\model;
use think\Model;

class Category extends Model
{
    //添加
    public function add($data)
    {
        $ret = $this->allowField(true)->save($data);
        if($ret)
        {
            return 1;
        }else
        {
            return '添加失败';
        }
    }

    //修改
    public function edit($data)
    {   
        $info = $this->where(['id'=>$data['id']])->find();
        $ret = $info->save([
            'cate_name' => $data['cate_name'],
            'parent_id' => $data['parent_id'],
        ]);
        if($ret)
        {
            return 1;
        }else
        {
            return '修改失败';
        }
    }

    //递归得出分好上下级关系的分类
	public function getTree($Model)
	{
		$data = model($Model)->select();
		return $this->_getTree($data);
	}

	private function _getTree($data,$parent_id=0,$level=0)
	{
		static $ret = array();
		foreach($data as $k => $v)
		{
			if($v['parent_id'] == $parent_id)
			{
				$v['level'] = $level;
				$ret[] = $v;
				$this->_getTree($data,$v['id'],$level+1);
			}
		}
		return $ret;
	}
	
	//找出指定分类的下级分类
	public function getChildren($Model,$cate_id)
	{
		$data = model($Model)->select();
		return $this->_getChildren($data,$cate_id,true);
	}

	private function _getChildren($data,$cate_id,$isclear=false)
	{
		static $ret = array();
		if($isclear)
		{
			$ret = array();
		}
		foreach($data as $k => $v)
		{
			if($v['parent_id'] == $cate_id)
			{
				$ret[] = $v['id'];
				$this->_getChildren($data,$v['id']);
			}
		}
		return $ret;
	}


	/*****************************前台*************************************/
	//轮播图导航条
	public function getTowLevel()
    {
        $cate = db('category')->select();
        $arr = [];
        foreach($cate as $k => $v)
        {
        	if($v['parent_id'] == 0)
        	{
        		foreach($cate as $k1 => $v1)
        		{
        			if($v['id'] == $v1['parent_id'])
        			{
        				foreach($cate as $k2 => $v2)
        				{
        					if($v1['id'] == $v2['parent_id'])
        					{
        						$v1['children'][] = $v2;
        					}
        				}
        				$v['children'][] = $v1;
        			}
        		}
        		$arr[] = $v;
        	}
        }
        return $arr;
    }
}





















