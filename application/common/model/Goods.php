<?php
namespace app\common\model;
use think\Model;

class Goods extends Model
{
    //添加商品
    public function add($data)
    {
        $validate = new \app\common\validate\Goods();
        if(!$validate->scene('add')->check($data))
        {
            return $validate->getError();
        }

        $ret = $this->allowField(true)->save($data);

        if($ret)
        {
            return 1;
        }else{
            return '添加失败';
        }
    }
}


















