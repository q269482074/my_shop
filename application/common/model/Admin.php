<?php
namespace app\common\model;
use think\Model;

class Admin extends Model
{
    public function login($data)
    {
        $validate = new \app\common\validate\Admin();
        if(!$validate->scene('login')->check($data))
        {
            return $validate->getError();
        }

        $info = model('admin')->where(['username'=>$data['username']])->find();
        if($info)
        {
            if($info['password'] == $data['password'])
            {
                session('username',$info['username']);
                session('userId',$info['id']);
                return 1;
            }
        }else
        {
            return '帐号或密码不正确';
        }
    }
}
















