<?php

/**
 * Created by PhpStorm.
 * User: zhenglianxin
 * Date: 2017/7/02 19:18
 */
namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord{

//    function __construct(array $config)
//    {
//        parent::__construct($config);
//    }

    public function getUsers(){
        $users = $this->hasMany(Users::className(),['cate_id'=>"id"])->asArray()->all();
        return $users;
    }

    public function getCate(){
        $users = $this->hasMany(Users::className(),['cate_id'=>'id'])->asArray();
        return $users;
    }
}