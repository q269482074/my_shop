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
        $id = input('id');

        
        //取出商品的属性
        $attrs = [];
        $attr = [];
        $attrData = db('goodsattr')->alias('a')->field('a.attr_value,a.id,a.attr_id,b.attr_name,b.attr_type')->join('attribute b','b.id=a.attr_id','left')->where(['goods_id'=>$id])->select();
        foreach($attrData as $k => $v)
        {
            if($v['attr_type'] == 2)
                $attrs[$v['attr_name']][] = $v;
            else
                $attr[$v['attr_name']] = $v;
        }
        $goods = db('goods')->where(['id'=>$id])->find();
        $this->assign([
            'attrs' => $attrs,
            'attr' => $attr,
            'goods' => $goods,
        ]);
        return $this->fetch();
    }
}
