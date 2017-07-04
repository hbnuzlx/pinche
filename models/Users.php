<?php
/**
 * Created by PhpStorm.
 * User: zhenglianxin
 * Date: 2017/6/16 16:58
 */
namespace app\models;
use yii\db\ActiveRecord;

class Users extends ActiveRecord{

//    function __construct(array $config)
//    {
//        parent::__construct($config);
//    }

    public function getCate(){
        $cate = $this->hasOne(Category::className(),['id'=>'cate_id'])->asArray();
        return $cate;
    }
}