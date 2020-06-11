<?php
namespace app\index\controller;
use think\Controller;

class Member extends Controller
{
    public function login()
    {
        if(session('memberId'))
		{
			header('Location:/index/index/index');
			exit;
		}
		if(request()->isAjax())
		{
			$data = [
				'username'	=> input('post.username'),
				'password'	=> input('post.password'),
				// 'capt'	=> input('post.capt'),
			];
			$ret = model('member')->login($data);
			if($ret == 1)
			{
				$url = '/';
				if(session('shang_url'))
				{
					$url = session('shang_url');
				}
				$this->success('登陆成功!',$url);
			}else
			{
				return $this->error($ret);
			}
		}
		
		return $this->fetch();
    }

    public function regist()
    {
        if(session('memberId'))
		{
			header('Location:/index/index/index');
			exit;
		}
		if(request()->isAjax())
		{
			$data = [
				'username'	=> input('post.username'),
				'password'	=> input('post.password'),
				'cpassword'	=> input('post.cpassword'),
				'nick_name'	=> input('post.nick_name'),
				'email'		=> input('post.email'),
				'capt'		=> input('post.capt'),
				'chb'		=> input('post.chb'),
			];
			$ret = model('member')->regist($data);
			if($ret == 1)
			{
				$this->success('注册成功!','index/member/login');
			}else
			{
				return $this->error($ret);
			}
		}
        return $this->fetch();
    }

    //退出
	public function logout()
	{
		session(null);
		if(!session('memberId'))
		{
			$this->success('退出成功');
			exit;
		}
	}
}




















