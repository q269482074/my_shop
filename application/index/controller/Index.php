<?php
namespace app\index\controller;
use think\Controller;


class Index extends Controller
{
    //前台首页
    public function index()
    {
        return $this->fetch();
    }

    //前台类型搜索页面
    public function search_type()
    {
        return $this->fetch();
    }

    //前台关键字搜索页面
    public function searchKeyword()
    {
        return $this->fetch();
    }
}
