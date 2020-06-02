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
    //关联商品属性表
    public function Goodsattr()
    {
        return $this->hasMany('goodsattr','goods_id','id');
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
        //商品属性修改
        $attr = array();
        if($data['attr_value'])
        {
            foreach($data['attr_value'] as $k => $v)
            {
                if(empty($v))
                {
                    continue;
                }
                $v = array_unique($v);
                foreach($v as $k1 => $v1)
                {
                    $attr[] = [
                        'goods_id' => $data['id'],
                        'attr_id' => $k,
                        'attr_value' => $v1,
                    ];
                }
            } 
        }
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
            'type_id' => $data['type_id'],
            'cate_id' => $data['cate_id'],
        ]);
        // 添加新的商品属性
        model('goodsattr')->saveAll($attr);
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



    //钩子函数
	public static function init()
    {
    	//添加前
        self::event('before_insert', function ($user) {
		         
        });
        //添加后
        self::event('after_insert', function ($user) {
            $attr = [];
            if($user['attr_name'])
            {
                foreach($user['attr_name'] as $k => $v)
                {
                    $v = array_unique($v);
                    foreach($v as $k1 => $v1)
                    {
                        if(empty($v1))
                        {   
                            continue;
                        }
                        $attr[] = [
                            'goods_id'  => $user['id'],
                            'type_id'  => $user['type_id'],
                            'attr_id'   => $k,
                            'attr_value' => $v1,
                        ];
                    }
                }
                model('goodsattr')->add($attr);
            }
        });
        //修改前
        self::event('before_update', function ($user) {
                //删除图片
                $info = model('goods')->where(['id'=>$user['id']])->find();
                if(!empty($info['img_url']))
                {
                    if($info['img_url'] != $user['img_url'])
                    {
                        unlink('../public'.$info['img_url']);
                    }
                }
                //商品的属性
                $attr = model('goodsattr')->where(['goods_id'=>$info['id']])->delete();
        });
        //修改后
        self::event('after_update', function ($user) {
            // if (1 != $user->status) {
                
            // }
        });
        //删除前
        self::event('before_delete', function ($user) {
            // if (1 != $user->status) {
                
            // }
        });
    }

}


















