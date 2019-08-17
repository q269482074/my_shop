<?php
namespace app\admin\controller;
use think\Controller;

class Brand extends Controller
{
    public function brandList()
    {
        $data = db('brand')->select();

        $this->assign([
            'data' => $data
        ]);
        return $this->fetch();
    }

    public function addBrand()
    {
        if(request()->isAjax())
        {
            $data = [
                'brand_name' => input('post.brand_name'),
                'brand_log' => input('post.brand_log')
            ];
            $ret = model('brand')->add($data);
            if($ret == 1)
            {
                $this->success('添加成功','admin/brand/brandList');
            }else{
                $this->error($ret);
            }
        }
        return $this->fetch();
    }

    public function editBrand()
    {
        if(request()->isAjax())
        {
            $data = [
                'id' => input('post.id'),
                'brand_name' => input('post.brand_name'),
                'brand_log' => input('post.brand_log')
            ];
            $ret = model('brand')->edit($data);
            if($ret == 1)
            {
                $this->success('修改成功','admin/brand/brandList');
            }else{
                $this->error($ret);
            }
        }

        $id = input('id');
        $info = db('brand')->where(['id'=>$id])->find();


        $this->assign([
            'info' => $info,
        ]);
        return $this->fetch();
    }
}




















