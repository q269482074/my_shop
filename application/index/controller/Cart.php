<?php
namespace app\index\controller;
use think\Controller;

class Cart extends Controller
{
    //购物车列表
    public function lst()
    {
        return $this->fetch();
    }
}





