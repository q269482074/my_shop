<?php
namespace app\common\validate;
use think\Validate;


class Admin extends Validate
{
    protected $rule = [
        'username|帐号' => 'require',
        'password|密码' => 'require',
        'captcha|验证码' => 'require|captcha',
    ];

    public function sceneLogin()
    {
        return $this->only(['username','password','captcha']);
    }
}











