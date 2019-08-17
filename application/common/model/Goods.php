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

    //修改商品
    public function edit($data)
    {   
        $info = $this->where(['id'=>$data['id']])->find();
        $ret = $info->save([
            'name' => $data['name'],
            'desc' => $data['desc'],
            'img_url' => $data['img_url'],
            'price' => $data['price'],
            'goods_price' => $data['goods_price'],
            'sort' => $data['sort'],
            'is_sale' => $data['is_sale'],
        ]);
        if($ret)
        {
            return 1;
        }else
        {
            return '修改失败';
        }
    }


    //搜索商品
    public function search($page_limit)
    {
        $ret = db('goods')->order('id desc')->paginate($page_limit);
        return $ret;
    }
}


















