<?php
namespace app\controllers;
use yii\base\Controller;

class HomeController extends Controller{

    public $layout="nimei";//设置默认父类模板文件
    public function actionIndex(){
        $data = \Yii::$app->request;
        $order = $data->get("order_id",'999999999');
//        dd($order);//exit;
        $user = array("name"=>"郑连新","age"=>"26","Country"=>"China");
        $info = array("Company"=>"北京微指数科技有限公司","Location"=>"北京市朝阳区浦项中心","floor"=>"5");
//        return $this->renderPartial("index",compact("user",'info'));
        return $this->render("index",compact("user",'info'));
    }
}