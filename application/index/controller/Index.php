<?php
namespace app\index\controller;
use think\Controller;


class Index extends Controller
{
    //前台首页
    public function index()
    {
        //轮播图导航栏
        $cate = model('category')->getTowLevel();
        //家用电器楼层
        $jydq = model('goods')->field('id,name,img_url,goods_price,price')->where(['cate_id'=>'1'])->limit(0,15)->select();
        $sj = model('goods')->field('id,name,img_url,goods_price,price')->where(['cate_id'=>'2'])->limit(0,15)->select();
        $jj = model('goods')->field('id,name,img_url,goods_price,price')->where(['cate_id'=>'7'])->limit(0,15)->select();
        $yf = model('goods')->field('id,name,img_url,goods_price,price')->where(['cate_id'=>'8'])->limit(0,15)->select();
        $this->assign([
            'yf' => $yf,
            'jj' => $jj,
            'sj' => $sj,
            'jydq' => $jydq,
            'cate' => $cate,
        ]);
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

    //前台商品页面
    public function goods()
    {
        return $this->fetch();
    }
}
