<?php
namespace app\common\model;
use think\Model;

class Goods extends Model
{
    //关联商品分类表
    public function Category()
    {
        return $this->belongsTo('Category','cate_id','id');
    }
    //关联品牌表
    public function Brand()
    {
        return $this->belongsTo('Brand','brand_id','id');
    }
    


    //添加商品
    public function add($data)
    {
        $validate = new \app\common\validate\Goods();
        if(!$validate->scene('add')->check($data))
        {
            return $validate->getError();
        }

        $ret = $this->allowField(true)->save($data);

        if($ret)
        {
            return 1;
        }else{
            return '添加失败';
        }
    }

    //修改商品
    public function edit($data)
    {   
        $info = $this->where(['id'=>$data['id']])->find();
        $ret = $info->save([
            'name' => $data['name'],
            'desc' => $data['desc'],
            'img_url' => $data['img_url'],
            'price' => $data['price'],
            'goods_price' => $data['goods_price'],
            'sort' => $data['sort'],
            'is_sale' => $data['is_sale'],
            'brand_id' => $data['brand_id'],
            'cate_id' => $data['cate_id'],
        ]);
        if($ret)
        {
            return 1;
        }else
        {
            return '修改失败';
        }
    }


    //搜索方法
    public function search($data,$page_limit)
    {
        $where = array();
        //类型搜索
        if($data['cate_id'])
        { 
            $where[] = array('cate_id','eq',$data['cate_id']);
        }
        //品牌搜索
        if($data['brand_id'])
        {
            $where[] = array('brand_id','eq',$data['brand_id']);
        }
        //名称搜索
        if($data['goods_name'])
        {
            $where[] = array('goods_name','like','%'.$data['goods_name'].'%');
        }
        //价格搜索
        $fp = $data['fp'];
        $tp = $data['tp'];
        if($fp && $tp)
        {
            $where[] = array('goods_price','between',array($fp,$tp));
        }else if($fp)
        {
            $where[] = array('goods_price','egt',$fp);
        }else if($tp)
        {
            $where[] = array('goods_price','elt',$tp);
        }
        //是否上架
        $is_sale = $data['is_sale'];
        if($is_sale == 0)
        {
            $where[] = array('is_sale','eq',0);
        }
        if($is_sale == 1)
        {
            $where[] = array('is_sale','eq',1);
        }
        //时间搜索
        // $fa = $data['fa'] ? strtotime($data['fa']) : '';
        // $ta = $data['ta'] ? strtotime($data['ta']) : '';
        // if($fa && $ta)
        // {
        //     $where[] = array('create_time','between',array($fa,$ta));
        // }elseif($fa)
        // {
        //     $where[] = array('create_time','egt',$fa);
        // }elseif($ta)
        // {
        //     $where[] = array('create_time','elt',$ta);
        // }
        //排序
        $order = $data['odby'];
        $k = 'id';
        $v = 'desc';
        if($order == 'id_asc')
        {
            $v = 'asc';
        }elseif($order == 'price_asc')
        {
            $k = 'goods_price';
            $v = 'asc';
        }elseif($order == 'price_desc')
        {
            $k = 'goods_price';
        }
        $ret = $this->with(['Category','Brand'])->where($where)->order($k,$v)->paginate($page_limit);
        return $ret;
    }

}


















