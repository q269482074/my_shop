<?php
namespace app\common\model;
use think\Model;

class Brand extends Model
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
            'brand_name' => $data['brand_name'],
            'brand_log' => $data['brand_log'],
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





















