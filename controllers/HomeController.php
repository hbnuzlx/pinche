<?php
namespace app\controllers;
use yii\base\Controller;

class HomeController extends Controller{

    public function actionIndex(){
//        $arr = ['a'=>"AAA",'b'=>"BBB",'c'=>"CCC"];
//        echo "<pre>";
//        p($arr);
//        echo "Hello World!!!";exit;
        $data = \Yii::$app->request;
        $order = $data->get("order_id",'999999999');
//        dd($order);//exit;
        return $this->renderPartial("index");
    }
}