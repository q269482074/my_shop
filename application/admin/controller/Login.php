<?php
namespace app\admin\controller;
use think\Controller;

class Login extends Controller
{
    public function index()
    {
        if(session('userId'))
        {
            header('Location:/admin/index/index');
            exit;
        }
        return $this->fetch();
    }

    public function login()
    {
        if(request()->isAjax())
        {
            $data = [
                'username' => input('username'),
                'password' => input('password'),
                'captcha' => input('captcha'),
            ];
            // dump($data);die;
            $ret = model('admin')->login($data);

            if($ret === 1)
            {
                $this->success('登陆成功','admin/index/index');
            }else
            {
                return $this->error($ret);
            }
        }
    }
}
















