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
            'cat_name' => $data['cat_name'],
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
}





















