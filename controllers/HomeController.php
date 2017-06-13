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
        $user = array("name"=>"郑连新","age"=>"26");
        $info = array("company"=>"北京微指数科技有限公司","location"=>"北京市朝阳区宏泰东街浦项中心B座5A");
//        return $this->renderPartial("index",array("user"=>array("name"=>"郑连新","age"=>"26"),"info"=>array("company"=>"北京微指数科技有限公司","location"=>"北京市朝阳区宏泰东街浦项中心B座5A")));
//        return $this->renderPartial("index",compact("user","info"));
        return $this->render("index",compact("user","info"));
    }

}