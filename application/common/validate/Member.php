<?php
namespace app\common\validate;
use think\Validate;

class Member extends Validate
{
	protected $rule = [
		'username|用户名'	=> 'require',
		'password|密码'		=> 'require',
		'cpassword|确认密码'=> 'require|confirm:password',
		'nick_name|昵称'	=> 'require',
		'email|邮箱'		=> 'require',
		'chb'				=> 'require',
		'capt|验证码'		=> 'require|captcha',
	];

	protected $message = [
		'cpassword.confirm' => '两次输入的密码不一致',
		'chb.require'		=> '请阅读并同意协议',
	];

	public function sceneAdd()
	{
		return $this->only(['username','password','cpassword','nick_name','email'])
					->append('username','unique:member')
					->append('nick_name','unique:member')
					->append('email','unique:member');
	}

	public function sceneEdit()
	{
		return $this->only(['cpassword','nick_name'])
					->remove('cpassword','require')
					->remove('nick_name','require')
					->append('nick_name','unique:member');
	}

	public function sceneRegist()
	{
		return $this->only(['username','password','cpassword','nick_name','email','chb','capt'])
					->append('username','unique:member')
					->append('nick_name','unique:member')
					->append('email','unique:member');
	}

	public function sceneLogin()
	{
		return $this->only(['username','password']);
	}
}