<?php
namespace app\common\model;
use think\Model;


class Type extends Model
{
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

    public function edit($data)
    {
        $info = $this->where(['id'=>$data['id']])->find();
        $ret = $info->save([
            'type_name' => $data['type_name'],
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















