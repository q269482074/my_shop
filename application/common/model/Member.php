<?php
namespace app\common\model;
use think\Model;


class Member extends Model
{
    //添加
	public function add($data)
	{
		$validate = new \app\common\validate\Member();
		if(!$validate->scene('add')->check($data))
		{
			return $validate->getError();
		}

		$ret = $this->allowField(true)->save($data);
		if($ret)
		{
			return 1;
		}else
		{
			return '添加失败!';
		}
    }
    
    //注册
	public function regist($data)
	{
		$validate = new \app\common\validate\Member();
		if(!$validate->scene('regist')->check($data))
		{
			return $validate->getError();
		}
		$data['password'] = md5($data['password']);
		$ret = $this->allowField(true)->save($data);
		if($ret)
		{
			return 1;
		}else
		{
			return '注册失败！';
		}
    }
    

    //登陆
	public function login($data)
	{
		$validate = new \app\common\validate\Member();
		if(!$validate->scene('login')->check($data))
		{
			return $validate->getError();
		}

		$info = $this->where(['username'=>$data['username']])->find();
		if($info)
		{
			if($info['password'] == md5($data['password']))
			{
				session('memberId',$info['id']);
				session('memberName',$info['nick_name']);
				// model('cart')->toDB();
				return 1;
			}else
			{
				return '帐号或者密码错误!';
			}
		}else
		{
			return '帐号或者密码错误!';
		}
	}


}





















