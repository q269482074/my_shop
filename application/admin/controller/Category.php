<?php
namespace app\admin\controller;
use think\Controller;

class Category extends Controller
{
    public function catList()
    {
        $data = db('category')->select();

        $this->assign([
            'data' => $data
        ]);
        return $this->fetch();
    }

    public function addCat()
    {
        if(request()->isAjax())
        {
            $data = [
                'cat_name' => input('post.cat_name'),
            ];
            $ret = model('category')->add($data);
            if($ret == 1)
            {
                $this->success('添加成功','admin/category/catList');
            }else{
                $this->error($ret);
            }
        }

        $cat = db('category')->select();
        $this->assign([
            'cat' => $cat,
        ]);
        return $this->fetch();
    }

    public function editCat()
    {
        if(request()->isAjax())
        {
            $data = [
                'id' => input('post.id'),
                'cat_name' => input('post.cat_name'),
                'parent_id' => input('post.parent_id')
            ];
            $ret = model('category')->edit($data);
            if($ret == 1)
            {
                $this->success('修改成功','admin/category/catList');
            }else{
                $this->error($ret);
            }
        }

        $id = input('id');
        $info = db('category')->where(['id'=>$id])->find();
        $cat = db('category')->select();
        $this->assign([
            'info' => $info,
            'cat' => $cat,
        ]);
        return $this->fetch();
    }
}




















