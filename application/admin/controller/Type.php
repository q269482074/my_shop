<?php
namespace app\admin\controller;
use think\Controller;

class Type extends Controller
{
    public function typeList()
    {
        $type = model('type')->select();

        $this->assign([
            'type' => $type,
        ]);
        return $this->fetch();
    }

    public function addType()
    {
        if(request()->isAjax())
        {
            $data = [
                'type_name' =>input('type_name'),
            ];

            $ret = model('type')->add($data);

            if($ret == 1)
            {
                $this->success('添加成功','admin/type/typeList');
            }else
            {
                $this->error($ret);
            }
        }



        return $this->fetch();
    }

    public function editType()
    {
        if(request()->isAjax())
        {
            $data = [
                'id' => input('id'),
                'type_name' => input('type_name'),
            ];
            $ret = model('type')->edit($data);
            if($ret == 1)
            {
                $this->success('修改成功','admin/type/typeList');
            }else
            {
                $this->error($ret);
            }
        }



        $type_id = input('type_id');
        $info = db('type')->where(['id'=>$type_id])->find();
        $this->assign([
            'info' => $info,
        ]);
        return $this->fetch();
    }
}












