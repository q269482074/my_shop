<?php
namespace app\common\validate;
use think\Validate;


class Goods extends Validate
{
    protected $rule = [
        'name|商品名称' => 'require',
        'img_url|商品图片' => 'require',
        'price|原价' => 'require',
        'goods_price|本店售价' => 'require',
        'sort|排序' => 'require',
        'is_sale|是否上架' => 'require',
    ];


    public function sceneAdd()
    {
        return $this->only(['name','goods_log','price','goods_price','sort','is_sale']);
    }
}


















