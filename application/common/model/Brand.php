<?php
namespace app\common\model;
use think\Model;

class Brand extends Model
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
}





















